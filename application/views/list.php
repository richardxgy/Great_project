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
    <title>列表</title>
</head>
<body>
	<div class='main' id="app">
		<!--分类-->
		<div class="nav">
			<ul class="list">
				<li>分类</li>
				<li>零食</li>
				<li>$</li>
				<li>$</li>
				<li>$</li>
				<li>$</li>
			</ul>
		</div>
		<!--排序-->
		<div class="paixu">
			<ul class="list">
				<li class="active">综合排序</li>
				<li>销量</li>
				<li>人气</li>
				<li>信用</li>
				<li>总价</li>
			</ul>
		</div>
		<!--商品-->
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
    	$('ul').on('click','li',function(){
			$('li').attr('class','')
			$(this).attr('class','active')
		})
    </script>
</body>
</html>