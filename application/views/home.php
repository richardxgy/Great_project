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
    <script src="https://unpkg.com/vue"></script>
    <link href="<?php echo base_url() ?>/css/home_css.css" rel="stylesheet" type="text/css"/>


    <title>首页</title>
</head>
<body>

<!--头部-->
<header>
    <div class="container hidden-xs">
        <div class="row " id="div"  >
            <div class="col-lg-1 "></div>
            <div class="col-lg-2 "><a href="#" class="ass">请登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" class="ass">免费注册</a></div>
            <div class="col-lg-5 "></div>
            <div class="col-lg-4 ">
                <a href="#" class="ass headeraa"><span class="glyphicon glyphicon-home"></span>首页</a>
                &nbsp;<a href="#" class="ass headeraa"><span class="glyphicon glyphicon-user"></span>个人中心</a>
                &nbsp;&nbsp;<a href="#" class="ass headeraa"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a>
                &nbsp;&nbsp;<a href="#" class="ass headeraa"><span class="glyphicon glyphicon glyphicon-star"></span>收藏夹</a></div>
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
            <span class="input-group-addon headsp" id="basic-addon2" onclick="fn()">&nbsp;&nbsp;搜索&nbsp;&nbsp;</span>
        </div><strong></strong>
    </div>



</header>


<!--中间-->
<br>
<br>
<br>



<section>
    <div class="container secdiv">
        <div style="float: left" class="col-lg-1  col-md-1 col-sm-1 col-xs-1 secdivquan"><span ><strong>全部分类</strong></span></div>
        <div class="nav-cont col-lg-10 col-md-10 col-sm-10 col-xs-10" style="float: left">
            <ul class="nav-ul">
                <li class="index"><a href="#"><strong>首页</strong> </a></li>
                <li class="qc"><a href="#"><strong>闪购</strong> </a></li>
                <li class="qc"><a href="#"><strong>限时抢</strong> </a></li>
                <li class="qc"><a href="#"><strong>团购</strong> </a></li>
                <li class="qc"><a href="#"><strong>大包装</strong> </a></li>
                <li class="qc last" style="float: right"><a href="#"><button class="btn btn-default"><img src="<?php echo base_url() ?>/images/fl1.png">&nbsp;福利</button></a></li>
            </ul>
        </div>

    </div>

<!--    二级菜单-->
    <div class="erjidiv container">
        <ul class="erjiul">
            <li><a href="#"><strong>点心/蛋糕</strong></a></li>


            <li><a href="#"><strong>饼干/膨化</strong></a></li>


            <li><a href="#"><strong>熟食/肉类</strong></a></li>


            <li><a href="#" ><strong>素食/卤味</strong></a></li>

            <li><a href="#"><strong>坚果/炒货</strong></a></li>

            <li><a href="#"><strong>糖果/蜜饯</strong></a></li>

            <li><a href="#"><strong>巧克力</strong></a></li>

            <li><a href="#"><strong>海味/河鲜</strong></a></li>

            <li><a href="#"><strong>花茶/果茶</strong></a></li>

            <li><a href="#"><strong>品牌/礼包</strong></a></li>
        </ul>
    </div>


</section>



<!--底部-->
<footer>

</footer>

</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/home.js"></script>
</body>
</html>
