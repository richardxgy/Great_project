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
	<div class='main'>
		<div class="nav">
			<ul class="list">
				<li class="active">分类</li>
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
    <!--<script type="text/javascript" src="<?php echo base_url() ?>/js/list.js"></script>-->	
    <script type="text/javascript">
    	/*二级检索*/
    	var isbit=false;
   		$('.nav').on('click','li',function(){
			$('li').attr('class','')
			$(this).attr('class','active')
		
   			isbit=!isbit;
   			var url="<?php echo site_url('list_Controllers/choose')?>"
   			$.ajax({
   				type:"get",
   				url:url,
   				data:{
   					id:$(this).context.id
   				},
   				success:function(data){
   					if(data){
						let mydata =$.parseJSON(data);
						$('.content').html('');
						for(let i = 0;i<mydata.chooselist.length;i++){
							var div=$('<div></div>').attr('id','list'+mydata.chooselist[i].id).attr('class',"col-lg-3 col-md-3 col-sm-6 col-xs-6 idname");
							$('.content').append(div);
							$('#list'+mydata.chooselist[i].id).html('<div class="name">'+mydata.chooselist[i].name+'</div><div class="fenlei1">'+mydata.chooselist[i].fenlei1+'</div><div class="price">'+mydata.chooselist[i].price+'</div><div class="xiaoliang">'+mydata.chooselist[i].xiaoliang+'</div>')
						}
					}
   					
   				}
   			});
   		})
   		/*排序*/
    	$sortboolen=false;
    	$('.paixu').on('click','li',function(){
    		$sortboolen=!$sortboolen;
	    	$sortby=$(this).context.id;
			$('li').attr('class','')
			$(this).attr('class','active')
			if(!isbit){	
				var url="<?php echo site_url('list_Controllers/sort')?>"
				$.ajax({
					type:"get",
					url:url,
					data:{
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
			}else{
				var arr = [];
				console.log($('.content').children());
				for(let i = 0 ;i<$('.content').children().length;i++){
						arr.push($('.content').children()[i]);
				}
				if($sortboolen){
					var arr2= arr.reverse()
					$('.content').append(arr2);
				}else{
					console.log(arr);
					$('.content').append(arr);
				}
				
			}
		})
    </script>
</body>
</html>