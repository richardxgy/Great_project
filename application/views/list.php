<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url() ?>/css/home_css.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/sc.png">
    <title>分类列表页面</title>
</head>
<body>
	<!--头部-->
	<header style="margin-bottom:50px ;">
		<div class="container hidden-xs">
			<div class="row " id="div">
				<div class="col-lg-1 "></div>
				<div class="col-lg-2 ">
					<a href="#" class="ass">请登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="#" class="ass">免费注册</a>
				</div>
				<div class="col-lg-5 "></div>
				<div class="col-lg-4 ">
					<a href="#" class="ass headeraa"><span class="glyphicon glyphicon-home"></span>首页</a>
					&nbsp;
					<a href="#" class="ass headeraa"><span class="glyphicon glyphicon-user"></span>个人中心</a>
					&nbsp;&nbsp;
					<a href="#" class="ass headeraa"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a>
					&nbsp;&nbsp;
					<a href="#" class="ass headeraa"><span class="glyphicon glyphicon glyphicon-star"></span>收藏夹</a>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
	
		<!--搜索框-->
		<div class="container">
			<div class="col-lg-1 hidden-xs"></div>
			<div class="col-lg-1 hidden-xs">
				<img src="<?php echo base_url() ?>/images/logo.png">
			</div>
			<div class="col-lg-1 hidden-xs"></div>
			<div class="col-lg-7 input-group">
				<input type="text" class="form-control headint" placeholder="搜索" aria-describedby="basic-addon2">
				<span class="input-group-addon headsp" id="basic-addon2" onclick="fn()"><a href="#" id="tbss" name="listproduce">&nbsp;&nbsp;搜索&nbsp;&nbsp;</a></span>
			</div>
		</div>
		<script>
			$("#tbss").click(function() {
				var name = $("#tbss").attr('name');
				//console.log(name)
				var url = "<?php echo site_url('list_Controllers/index')?>/name/" + name;
				console.log(url)
				window.location.href = url;
			})
		</script>
	
	</header>

	
	<!--内容-->
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
				<li class="active" id='id'>综合排序 </li>
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
				<!--<div class="fenlei1">分类：'.$list['fenlei1'].'</div>-->
			<?php
				foreach($lists as $list){
					echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 idname" id='.$list['id'].'>
							<div class="name">'.$list['name'].'</div>
							<div class="price">价格:￥'.$list['price'].'</div>
							<div class="xiaoliang">销量:'.$list['xiaoliang'].'</div>
						</div>';
				}
			?>
		</div>
	</div>
	<!--内容结束-->
	<!--底部-->
<footer style="position: relative; top: 780px;">
    <div id="dbdiv">
        <div>
            <br>
        </div>
        <div class="container">
            <div class="row dbrodiv">
                <div class="col-lg-2" style="margin-left: 70px;">
                    <p>品类齐全&nbsp;&nbsp;轻松购物</p>
                </div>
                <div class="col-lg-2">
                    <p>多仓直发&nbsp;&nbsp;极速配送</p>
                </div>
                <div class="col-lg-2">
                    <p>正品行货&nbsp;&nbsp;精致服务</p>
                </div>
                <div class="col-lg-2">
                    <p>天天低价&nbsp;&nbsp;畅选无忧</p>
                </div>
            </div>
        </div>

<!--        中间-->
        <div id="dbzjdiv">
            <ul style="margin-left: 150px;">
                <a href="#"><h4>购物指南</h4></a>
                <a href="#"><li>购物流程</li></a>
                <a href="#"><li>会员介绍</li></a>
                <a href="#"><li>常见问题</li></a>
                <a href="#"><li>货到付款</li></a>
                <a href="#"><li>在线支付</li></a>
                <a href="#"><li>联系客服</li></a>
            </ul>

            <ul>
                <a href="#"> <h4>配送方式</h4></a>
                <a href="#"><li>上门自提</li></a>
                <a href="#"> <li>限时到达</li></a>
                <a href="#"><li>海外配送</li></a>
                <a href="#"><li>在线支付</li></a>
                <a href="#"> <li>分期支付</li></a>
                <a href="#"> <li>收费标准</li></a>
            </ul>

            <ul>
                <a href="#"> <h4>支付方式</h4></a>
                <a href="#"><li>货到付款</li></a>
                <a href="#"><li>在线支付</li></a>
                <a href="#"> <li>分期支付</li></a>
                <a href="#"><li>海外配送</li></a>
                <a href="#"> <li>收费标准</li></a>
                <a href="#"> <li>公司转账</li></a>
            </ul>

            <ul>
                <a href="#"> <h4>售后服务</h4></a>
                <a href="#"> <li>售后政策</li></a>
                <a href="#">  <li>价格保护</li></a>
                <a href="#">  <li>退款说明</li></a>
                <a href="#"><li>在线支付</li></a>
                <a href="#"> <li>分期支付</li></a>
                <a href="#"> <li>取消订单</li></a>
            </ul>

            <ul>
                <a href="#"> <h4>特色服务</h4></a>
                <a href="#"> <li>DIY装机</li></a>
                <a href="#">  <li>延保服务</li></a>
                <a href="#">  <li>生活旅行</li></a>
                <a href="#"><li>货到付款</li></a>
                <a href="#"><li>在线支付</li></a>
                <a href="#"> <li>海外服务</li></a>
            </ul>

        </div>

        <div id="dbzhdiv">
            <div id="dydiv">
                <ul>
                    <li style="margin-left: 20px;">关于我们&nbsp;</li>
                    <li>&nbsp;联系我们&nbsp;</li>
                    <li>&nbsp;联系客服&nbsp;</li>
                    <li>&nbsp;合作招商&nbsp;</li>
                    <li>&nbsp;商家帮助&nbsp;</li>
                    <li>&nbsp;营销中心&nbsp;</li>
                    <li>&nbsp;手机服务&nbsp;</li>
                    <li>&nbsp;友情链接&nbsp;</li>
                    <li>&nbsp;销售联盟&nbsp;</li>
                    <li>&nbsp;商城社区&nbsp;</li>
                    <li>&nbsp;风险监测&nbsp;</li>
                    <li>&nbsp;隐私政策&nbsp;</li>
                    <li>&nbsp;京东公益&nbsp;</li>
                    <li>&nbsp;English Site&nbsp;</li>
                    <li>&nbsp;Media & IR&nbsp;</li>
                </ul>
            </div>

<!--            中间-->
            <div id="zjdiv">
                <ul>
                    <li style="margin-left: 120px;">京公网安备 11000002000088号&nbsp;</li>
                    <li>&nbsp;互联网药品信息服务资格证编号(京)-经营性-2014-0008&nbsp;</li>
                    <li>&nbsp;新出发京零 字第大120007号&nbsp;</li>

                </ul>
            </div>

            <div id="zjdiv2">
                <ul>
                    <li style="margin-left: 80px;">互联网出版许可证编号新出网证(京)字150号&nbsp;</li>
                    <li>&nbsp;出版物经营许可证&nbsp;</li>
                    <li>&nbsp;网络文化经营许可证京网文[2014]2148-348号&nbsp;</li>
                    <li>&nbsp;违法和不良信息举报电话：4006561155&nbsp;</li>
                </ul>
            </div>

            <div id="zjdiv3">
                <ul>
                    <li style="margin-left: 80px;">Copyright © 2004 - 2017  京东JD.com 版权所有&nbsp;</li>
                    <li>&nbsp;消费者维权热线：4006067733经营证照&nbsp;</li>
                </ul>
            </div>

        </div>
    </div>
	
	<link href="<?php echo base_url() ?>/css/list.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript">
		
		var url1="<?php echo site_url('list_Controllers') ?>";
		var url2="<?php echo site_url('list_Controllers/choose') ?>";
		var url3 ="<?php echo site_url('list_Controllers/sort') ?>";
		/*选择商品*/
		$('.content').on('click','.idname',function(){
			$id= $(this).context.id;
			$biaoname = $('.biaoname').html();
			var url4 = "<?php echo site_url('particulars_Controllers/index')?>/id/"+$id+'/bm/'+$biaoname;
			window.location.href=url4;
		})
	</script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>/js/list.js"></script>
</body>
</html>
