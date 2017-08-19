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
						<li>添加商品</li>
					</ul>
				</li>
				
			</ul>
		</div>
		<!--右边显示表的内容-->
		<div id='right'>
			<table border="" cellspacing="" cellpadding="">
				<thead>
					<th>导航名称</th>
					<th>操作</th>
				</thead>
				<tbody>
					<tr>
						<td class='retd'>请先在左导航栏进行操作</td>
						<td class='redo'></td>
					</tr>
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

		</script>
	</body>

</html>