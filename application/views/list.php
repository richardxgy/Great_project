<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>分类列表页面</title>
</head>
<body>
	<div class='main'>
				<?php 
						echo '<div class="biaoname" style="display:none">'.$biaoname.'</div>';
						echo '<div class="fenleiname" style="display:none">'.$fenleiname.'</div>';
				?>
		<div class="nav">
			<ul class="list">
				<li class="active" id='fenlei'>分类</li>
				<?php
					foreach($leibies as $leibie){
							echo '<li id="'.$leibie['id'].'">'.$leibie['fenleiname'].'</li>';
					}
				?>
			</ul>
		</div>
		
		<div class="paixu">
			<ul class="list">
				<li class="active" id='id'>综合排序</li>
				<li id='xiaoliang'>销量</li>
				<li id='price'>价格</li>
				<li>信用</li>
				<li>人气</li>
			</ul>
		</div>
		
		<div class="content">
			<!--
				注意，这里的div请别改class名，如果要改的话，那么在$.ajax()中也需要把86行的html()里面的class名字改了.
				-->
			<?php
				foreach($lists as $list){
					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 idname" id='.$list['id'].'>
							<div class="name">'.$list['name'].'</div>
							<div class="fenlei1">'.$list['fenlei1'].'</div>
							<div class="price">'.$list['price'].'</div>
							<div class="xiaoliang">'.$list['xiaoliang'].'</div>
						</div>';
				}
			?>
		</div>
	</div>
	<link href="<?php echo base_url() ?>/css/list.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
    	/*分类检索*/
    	var isbit=false;
   		$('.nav').on('click','li',function(){
   			if($(this).context.id=='fenlei'){
   				window.location.href="<?php echo site_url('list_Controllers') ?>"
   			}else{
	   			/*获得表名，获得分类表名，以及css样式*/
	   			var $biaoname=$('.biaoname').html();
	   			var $fenleiname=$('.fenleiname').html();
				$('li').attr('class','')
				$(this).attr('class','active')
	   			isbit=true;
	   			var url="<?php echo site_url('list_Controllers/choose')?>"
	   			$.ajax({
	   				type:"get",
	   				url:url,
	   				data:{
	   					fenleiname:$fenleiname,
	   					biaoname:$biaoname,
	   					id:$(this).context.id
	   				},
	   				success:function(data){
	   					if(data){
	   						/*使后端传过来的json字符串转换为json对象*/
							let mydata =$.parseJSON(data);
							/*重新渲染页面*/
							$('.content').html('');
							for(let i = 0;i<mydata.chooselist.length;i++){
								var div=$('<div></div>').attr('id','list'+mydata.chooselist[i].id).attr('class',"col-lg-3 col-md-3 col-sm-6 col-xs-6 idname");
								$('.content').append(div);
								$('#list'+mydata.chooselist[i].id).html('<div class="name">'+mydata.chooselist[i].name+'</div><div class="fenlei1">'+mydata.chooselist[i].fenlei1+'</div><div class="price">'+mydata.chooselist[i].price+'</div><div class="xiaoliang">'+mydata.chooselist[i].xiaoliang+'</div>')
							}
						}
	   				}
	   			});
   			}
   		})
   		
   		/*排序*/
    	var $sortboolen=false;
    	$('.paixu').on('click','li',function(){
    		var $biaoname=$('.biaoname').html();
    		$sortboolen=!$sortboolen;
	    	$sortby=$(this).context.id;
			$('li').attr('class','')
			$(this).attr('class','active')
			/*
			 点了分类再进行排序：对满足分类属性的商品进行排序，所以每次都是重新请求发送数据，再渲染到页面上
			 * */
			if(!isbit){	
				var url="<?php echo site_url('list_Controllers/sort')?>"
				$.ajax({
					type:"get",
					url:url,
					data:{
						biaoname:$biaoname,
						sortby:$sortby,
						sortboolen:$sortboolen
					},
					success:function(data){
						if(data){
							let mydata =$.parseJSON(data);
							$('.content').html('');
							for(let i = 0;i<mydata.lists.length;i++){
								var div=$('<div></div>').attr('id','list'+mydata.lists[i].id).attr('class',"col-lg-3 col-md-3 col-sm-6 col-xs-6 idname");
								$('.content').append(div);
								$('#list'+mydata.lists[i].id).html('<div class="name">'+mydata.lists[i].name+'</div><div class="fenlei1">'+mydata.lists[i].fenlei1+'</div><div class="price">'+mydata.lists[i].price+'</div><div class="xiaoliang">'+mydata.lists[i].xiaoliang+'</div>')
							}
						}
					}
				});
				/*直接点排序，没点分类，不需要重新请求数据，只需要对商品进行排序*/
			}else{
				/*定义一个空数组，把.content属性里面的子节点都放进去，然后进行正序倒序操作，再渲染到页面上*/
				var arr = [];
				for(let i = 0 ;i<$('.content').children().length;i++){
						arr.push($('.content').children()[i]);
				}
				if($sortboolen){
					var arr2= arr.reverse()
					$('.content').append(arr2);
				}else{
					$('.content').append(arr);
				}
			}
		})

    </script>
</body>
</html>