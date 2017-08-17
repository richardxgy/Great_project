<?php
//	var_dump ($lists);
?>
<!--再添加一个二级分类表，然后表的联立：美食表和二级分类表联立，页面分类遍历分类表-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" ></script>
    <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <title>分类列表页面</title>
</head>
<body>
	<div class='main' ng-app='myapp' ng-controller='mycontrol'>
		<div class="nav">
			<ul class="list">
				<li>分类</li>
				<?php
//					foreach($leibies as $leibie){
//						echo '<li id='.$leibie['id'].'>'.$leibie['name'].'</li>';
//					}
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
			<?php
				foreach($lists as $list){
					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id='.$list['id'].'>
							<div>'.$list['name'].'</div>
							<div>'.$list['fenlei1'].'</div>
							<div>'.$list['price'].'</div>
							<div>'.$list['xiaoliang'].'</div>
						</div>';
				}
			?>
		</div>
	</div>
	<link href="<?php echo base_url() ?>/css/list.css" rel="stylesheet" type="text/css"/>
    <!--<script type="text/javascript" src="<?php echo base_url() ?>/js/list.js"></script>-->	
    <script type="text/javascript">
    	$sortboolen=false;
    	$('.paixu').on('click','li',function(){
    		$sortboolen=!$sortboolen;
    		$sortby=$(this).context.id;
    		var url="<?php echo site_url('list_Controllers/sort')?>"
    		
			$('li').attr('class','')
			$(this).attr('class','active')
			
			$.ajax({
				type:"get",
				url:url,
				data:{
					sortby:$sortby,
					sortboolen:$sortboolen
				},
				success:function(data){
					console.log(data)
				}
			});
		})
    </script>
</body>
</html>