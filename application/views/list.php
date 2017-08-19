
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
		var url1="<?php echo site_url('list_Controllers') ?>";
		var url2="<?php echo site_url('list_Controllers/choose')?>";
		var url3 ="<?php echo site_url('list_Controllers/sort')?>";
	</script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>/js/list.js"></script>
</body>
</html>