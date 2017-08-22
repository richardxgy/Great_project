<?php
	header("Content-Type:text/html;charset=utf-8");
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/houtaiindex.css"/>
		<title>后台管理页面</title>
	</head>
	<body>
		<!--左边列表选择需要操作的数据表-->
		<div id='left'>
			<ul>
				<li class="home">
					管理home导航<span class="caret"></span>
					<!--遍历home导航表-->
					<ul class="li1">
						<?php
							foreach($navigations as $nav){
								echo '<li id="'.$nav['id'].'">'.$nav['name'].'</li>';
							};
						?>
						<li id='+'>●添加●</li>
					</ul>
				</li>
				<li>
					管理商品<span class="caret"></span>
					<ul class="li2">
						<li id="show">显示商品</li>
						<li id="updata">添加商品</li>
					</ul>
				</li>
			</ul>
		</div>
		<!--右边显示表的内容-->
		<div id='right'>
			<!--导航table-->
			<table border="" cellspacing="" cellpadding="">
				<thead>
					<th>导航名称</th>
					<th>操作</th>
				</thead>
				<tbody>
					<tr>
						<td class='retd'>请先在左导航栏选择要操作的内容</td>
						<td class='redo'></td>
					</tr>
				</tbody>
			</table>
			<!--商品table-->
			<table border="" cellspacing="" cellpadding="">
				<thead>
					<th>商品名称</th>
					<th>商品分类1</th>
					<th>商品分类2(用数字代替)</th>
					<th>商品价格</th>
					<th>商品销量</th>
					<th>图片地址</th>
					<th>操作</th>
				</thead>
				<tbody id='tbody'>
				</tbody>
			</table>
		</div>
		<script type="text/javascript" charset="UTF-8">
			$('.li1').on('click','li',function(){
				var $id=$(this).context.id;
				/*修改*/
				if($id!='+'){
					$('.retd').html('<input class="inp" type="text" placeholder="'+($(this).context.innerHTML)+'"/> ');
					$('.redo').html('<button id="rewrite">修改</button><button>删除</button>');
					
					var url = "<?php echo site_url('houtaiindex_Controllers/updata') ?>";
					$('#rewrite').on('click',function(){
						$.ajax({
							type:"get",
							url:url,
							data:{
								name:$('.inp').val(),
								id:$id
							},
							success:function(){
								$('#'+$id).html($('.inp').val());
								window.location.href="<?php echo site_url('houtaiindex_Controllers') ?>";
							}
						});
			})
				}else{
					/*添加*/
					$('.retd').html('<input class="inp" type="text" placeholder="请输入名字"/> ');
					$('.redo').html('<button id="insert">保存</button>');
					var url = "<?php echo site_url('houtaiindex_Controllers/insert') ?>";
					$('#insert').on('click',function(){
						$.ajax({
							type:"get",
							url:url,
							data:{
								name:$('.inp').val()
							},
							success:function(data){
								window.location.href="<?php echo site_url('houtaiindex_Controllers') ?>";
							}
						});
					})
				}
			})
			$('.li2').on('click','li',function(){
				var url = "<?php echo site_url('houtaiindex_Controllers/show') ?>"
				if($(this).context.id=='show'){
					$.ajax({
						type:"get",
						url:url,
						success:function(data){
							console.log(data);
							if(data){
								let mydata =$.parseJSON(data);
								for(let i = 0;i<mydata.shows.length;i++){
									var tr=$('<tr></tr>').attr('id','con'+mydata.shows[i].id);
									$('#tbody').append(tr);
									$('#con'+mydata.shows[i].id).html('<th class="thname">'+mydata.shows[i].name+'</th><th class="fenlei1">'+mydata.shows[i].fenlei1+'</th><th class="fenlei2">'+mydata.shows[i].fenlei2+'</th><th class="price">'+mydata.shows[i].price+'</th><th class="xiaoliang">'+mydata.shows[i].xiaoliang+'</th><th>图'+i+'</th><th>操作</th>')
								}
							}
						}
					});
				}
			})
		</script>
	</body>

</html>