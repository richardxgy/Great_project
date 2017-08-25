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
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/sc.png">

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
            <span class="input-group-addon headsp" id="basic-addon2" onclick="fn()"><a href="#" id="tbss" name="listproduce" name1="food">&nbsp;&nbsp;搜索&nbsp;&nbsp;</a></span>
        </div>
    </div>
    <script>
        $("#tbss").click(function(){
            var name = $("#navli9").attr('name');
            var name1 = $("#navli9").attr('name1');
            console.log(name1)
            var url = "<?php echo site_url('list_Controllers/index')?>/name/"+name+"/name1/"+name1;
            //console.log(url)
            window.location.href = url;
        })
    </script>


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
                <li class="index" id="navli1"><a href="#"><strong>首页</strong> </a></li>
                <li class="qc" id="navli2"><a href="#"><strong>闪购</strong> </a></li>
                <li class="qc" id="navli3"><a href="#"><strong>限时抢</strong> </a></li>
                <li class="qc" id="navli4"><a href="#"><strong>团购</strong> </a></li>
                <li class="qc" id="navli5"><a href="#"><strong>大包装</strong> </a></li>
                <li class="qc" id="navli6"><a href="#"><strong>服装</strong> </a></li>
                <li class="qc" id="navli7"><a href="#"><strong>百货</strong> </a></li>
                <li class="qc" id="navli8"><a href="#"><strong>生鲜</strong> </a></li>
                <li class="qc" id="navli9" name="listproduce" name1="food"><a href="#"><strong>超市</strong> </a></li>
                <li class="qc last" style="float: right"><a href="#"><button class="btn btn-default"><img src="<?php echo base_url() ?>/images/fl1.png">&nbsp;福利</button></a></li>
            </ul>
        </div>

    </div>
<script>
    $("#navli9").click(function(){
        var name = $("#navli9").attr('name');
        var name1 = $("#navli9").attr('name1');
        console.log(name1)
        var url = "<?php echo site_url('list_Controllers/index')?>/name/"+name+"/name1/"+name1;
        //console.log(url)
        window.location.href = url;
    })
</script>




<!--    二级菜单和轮播-->
    <div>
        <!--        轮播-->
        <div id="carousel-example-generic" class="carousel slide lunbodiv" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url() ?>/images/ad1.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url() ?>/images/ad2.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url() ?>/images/ad3.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

                <div class="item">
                    <img src="<?php echo base_url() ?>/images/ad4.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    <div class="erjidiv container">
        <ul class="erjiul">
            <li>
                <a href="#"  id="erjili1">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong >点心/蛋糕</strong>
                    <div id="erjidiv1" >
                        <div class="container" >
                            <div class="row" id="r11">
                                <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                    <h4 style="margin: 0; margin-top: 5px;">点心</h4>
                                    <?php
                                    foreach ($erji01 as $value){
                                       echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>
                                </div>
                            </div>

                            <div class="row r12"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                                <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                    <h4 style="margin: 0">蛋糕</h4>
                                    <?php
                                    foreach ($erji02 as $value){
                                        echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>
                                </div>
                            </div>

                        </div>


                    </div>
                </a>

            </li>


            <li >
                <a href="#"  id="erjili2">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>饼干/膨化</strong>
                    <div id="erjidiv2" style="top: -80px;">
                        <div class="container" >
                            <div class="row" id="r13">
                                <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                    <h4 style="margin: 0; margin-top: 5px;">饼干</h4>
                                    <?php
                                    foreach ($erji03 as $value){
                                        echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>
                                </div>
                            </div>

                            <div class="row r14"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                                <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                    <h4 style="margin: 0">膨化</h4>

                                    <?php
                                    foreach ($erji04 as $value){
                                        echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>

                                </div>
                            </div>

                        </div>

                    </div>
                </a>
            </li>


            <li  >
                <a href="#" id="erjili3">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>熟食/肉类</strong>
                    <div id="erjidiv3"  style="top: -120px;">
                        <div class="container" >
                            <div class="row" id="r15">
                                <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                    <h4 style="margin: 0; margin-top: 5px;">熟食</h4>

                                    <?php
                                    foreach ($erji05 as $value){
                                        echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>

                                </div>
                            </div>

                            <div class="row r16"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                                <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                    <h4 style="margin: 0">肉类</h4>

                                    <?php
                                    foreach ($erji06 as $value){
                                        echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>


            <li >
                <a href="#" id="erjili4">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>素食/卤味</strong>
                    <div id="erjidiv4"  style="top: -160px;">
                        <div class="container" >
                        <div class="row" id="r17">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">素食</h4>
                                <?php
                                foreach ($erji03 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>

                        <div class="row r18"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">卤味</h4>
                                <?php
                                foreach ($erji05 as $value){
                                    echo '
                                        <span>'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>
                    </div>
                    </div>

                </a>
            </li>

            <li  >
                <a href="#" id="erjili5">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>坚果/炒货</strong>
                    <div id="erjidiv5"   style="top: -200px;">
                        <div class="container" >
                        <div class="row" id="r19">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">坚果</h4>
                                <?php
                                foreach ($erji07 as $value){
                                    echo '
                                        <span style="margin: 3px;">'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>

                        <div class="row r20"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">炒货</h4>
                                <?php
                                foreach ($erji08 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                </a>
            </li>

            <li  >
                <a href="#" id="erjili6">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>糖果/蜜饯</strong>
                    <div id="erjidiv6"   style="top: -240px;">
                        <div class="container" >
                        <div class="row" id="r21">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">糖果</h4>

                                <?php
                                foreach ($erji03 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>

                        <div class="row r22"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">蜜饯</h4>

                                <?php
                                foreach ($erji04 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>
                    </div>

                    </div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili7">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>巧克力/芝士</strong>
                    <div id="erjidiv7"   style="top: -280px;">
                        <div class="container" >
                        <div class="row" id="r23">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">巧克力</h4>

                                <?php
                                foreach ($erji01 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>

                        <div class="row r24"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">芝士</h4>

                                <?php
                                foreach ($erji02 as $value){
                                    echo '
                                        <span style="margin: 12px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>
                    </div>
                    </div>
                </a>
            </li>

            <li >
                <a href="#" id="erjili8">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>海味/河鲜</strong>
                    <div id="erjidiv8"   style="top: -320px;">
                        <div class="container" >
                        <div class="row" id="r25">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">海味</h4>

                                <?php
                                foreach ($erji06 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>

                        <div class="row r26"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">河鲜</h4>

                                <?php
                                foreach ($erji05 as $value){
                                    echo '
                                        <span style="margin: 8px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>
                    </div>
                    </div>
                </a>
            </li>

            <li >
                <a href="#" id="erjili9">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>花茶/果茶</strong>
                    <div id="erjidiv9"  style="top: -360px;">
                        <div class="container" >
                        <div class="row" id="r27">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">花茶</h4>

                                <?php
                                foreach ($erji08 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>

                        <div class="row r28"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">果茶</h4>

                                <?php
                                foreach ($erji07 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>

                            </div>
                        </div>
                    </div>

                    </div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili10">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>品牌/礼包</strong>
                    <div id="erjidiv10"  style="top: -400px;">
                        <div class="container" >
                        <div class="row" id="r29">
                            <div class="col-lg-10"  style="width: 690px; height: 200px;">
                                <h4 style="margin: 0; margin-top: 5px;">品牌</h4>
                                <?php
                                foreach ($erji01 as $value){
                                    echo '
                                        <span style="margin: 5px;">'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>

                        <div class="row r30"  style="width: 690px; height: 200px; position: absolute; left: 0; top: 200px; ">
                            <div class="col-lg-10"   style="width: 680px; height: 200px;">
                                <h4 style="margin: 0">礼包</h4>
                                <?php
                                foreach ($erji02 as $value){
                                    echo '
                                        <span style="margin:12px;">'.$value['name'].'</span>
                                       ';}
                                ?>
                            </div>
                        </div>
                    </div>

                    </div>
                </a>
            </li>
        </ul>
        <script>
            $(".erjiul").delegate("a","click",function (){
                //console.log(666) name="listproduce" name1="fenleiname"
                var name = "listproduce"
                var name1 = "food"
                var url = "<?php echo site_url('list_Controllers/index')?>/name/"+name+"/name1/"+name1;
                //console.log(url)
                window.location.href = url;
            })
        </script>

    </div>

<!--右侧悬浮框-->
        <div id="youcediv">
            <h4>今日速递</h4>
            <p>- - - - - - - - - - - - - - - - - - - - - - - - -  </p>
            <div id="ycd">
                <div id="ycimgdiv">
                    <img  src="<?php echo base_url() ?>/images/k4.png">
                </div>
                <p>Hi~欢迎来到商城</p>
                <div class="ycd1">
                    <a href="#" id="denglu">登录&nbsp;</a>|
                    <a href="#" id="zhuce">注册</a>
                </div>
                <br>
                <script>
                    $("#denglu").click(function(){
                        var url = "<?php echo site_url('login_Controllers/index')?>";
                        //console.log(url)
                        window.location.href = url;
                    })
                    $("#zhuce").click(function(){
                        var url = "<?php echo site_url('registration_Controllers/index')?>";
                        //console.log(url)
                        window.location.href = url;
                    })
                </script>
<!--             标签页           -->
                <div id="ycbqdiv">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">公告</a></li>
                        <li role="presentation"><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab">优惠</a></li>
                        <li role="presentation"><a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab">资讯</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content ycache">
                        <div role="tabpanel" class="tab-pane active" id="home1">
                           <a style="margin-top: 5px;" href="#"><strong>[公告]</strong>商城年末活动一览</a><br>
                            <a href="#"><strong>[公告]</strong>商城到家服务品牌上线</a><br>
                            <a href="#"><strong>[公告]</strong>商城宝租上线 减法生活有惊喜</a><br>
                            <a href="#"><strong>[公告]</strong>关于商城支付新方式</a><br>
                            <a href="#"><strong>[公告]</strong>商城会员大礼包</a>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="profile1">
                            <a style="margin-top: 5px;" href="#"><strong>[优惠]</strong>商城年中大促</a><br>
                            <a href="#"><strong>[优惠]</strong>天天都是品牌日</a><br>
                            <a href="#"><strong>[优惠]</strong>神卷不断~天天有</a><br>
                            <a href="#"><strong>[优惠]</strong>在线支付领取现金红包</a><br>
                            <a href="#"><strong>[优惠]</strong>同城速递免运费</a>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="messages1">
                            <a style="margin-top: 5px;" href="#"><strong>[资讯]</strong>商城扶贫计划今日实行</a><br>
                            <a href="#"><strong>[资讯]</strong>关于暴雨天的配送调整</a><br>
                            <a href="#"><strong>[资讯]</strong>13家国际品牌入驻商城</a><br>
                            <a href="#"><strong>[资讯]</strong>商城电器,爆款直降,迎狂欢</a><br>
                            <a href="#"><strong>[资讯]</strong>关于购物券的叠加使用说明</a>
                        </div>

                    </div>

                </div>

            </div>
        </div>


    </div>
<div><br></div>
<!--    动态小效果-->
    <div id="dtdiv">
        <div class="products01">
            <h2 class="hh01">品牌特卖
        </div>
        <div class="hr01"></div>
        <div class="hr02"></div>

        <div  class="container prod">
            <div id="prod_div1" >
                <h3 id="prod_h1">炫彩小音箱</h3>
                <p class="prod_p">炫彩新声,音乐脉动</p>
                <a href="#"><div id="prod_d1" >GO</div></a>
                <img id="prod_img1" class="dtimg" src="https://img14.360buyimg.com/cms/jfs/t6220/322/1703365894/47868/4839d84f/59566fdaN39d650ef.png!q80.webp">

            </div>


            <div id="prod_div2" >
                <h3 id="prod_h2">蓝牙音箱</h3>
                <p class="prod_p">宠爱你的耳朵</p>
                <a href="#"><div id="prod_d2">GO</div></a>
                <img id="prod_img2" class="dtimg" src="https://img11.360buyimg.com/cms/jfs/t6559/21/1700897908/63776/8543f7a4/59566f78N5a1f2aa7.png!q80.webp">

            </div>


            <div id="prod_div3" >
                <h3 id="prod_h2">SurfacePro</h3>
                <p class="prod_p">随心所欲 百变精灵</p>
                <a href="#"><div id="prod_d3">GO</div></a>
                <img id="prod_img3" class="dtimg" src="https://img13.360buyimg.com/cms/jfs/t6019/33/993721677/61835/f77da35/592ede30N08092f99.png!q80.webp">

            </div>


            <div id="prod_div4" >
                <h3 id="prod_h2">华为荣耀手环</h3>
                <p class="prod_p">北欧气质 运动无限</p>
                <a href="#"><div id="prod_d4">GO</div></a>
                <img id="prod_img4" class="dtimg" src="https://img13.360buyimg.com/cms/jfs/t6010/59/507089333/44727/18650b9f/59297b0dNcf9444bc.png!q80.webp">

            </div>


            <div id="prod_div5" >
                <h3 id="prod_h2">米兔儿童电话</h3>
                <p class="prod_p">让孩子的世界更多精彩</p>
                <a href="#"><div id="prod_d5">GO</div></a>
                <img id="prod_img5" class="dtimg" src="https://img12.360buyimg.com/cms/jfs/t5686/365/4795985444/61004/b19385ce/59530f60N4d61b481.png!q80.webp">

            </div>

        </div>



    </div>


<!--    活动秒杀-->
    <div id="msdiv">
        <div id="mserdiv">
            <h3>秒杀<small>&nbsp;&nbsp;&nbsp;每期活动 优惠享不停</small></h3>
            <div id="msimgdivs"></div>
            <div id="msimgdiv">
                <a href="#"><img  src="<?php echo base_url() ?>/images/activity.jpg"></a>
                <button class="btn btn-default" id="msbut1">节日礼品最佳问候</button>
                <a href="#"><img  src="<?php echo base_url() ?>/images/activity1.jpg"></a>
                <button class="btn btn-default" id="msbut2">冰爽降价满99减30</button>
                <a href="#"><img  src="<?php echo base_url() ?>/images/activity2.jpg"></a>
                <button class="btn btn-default" id="msbut3">独特味道挑战味蕾</button>
                <a href="#"> <img  src="<?php echo base_url() ?>/images/activity3.jpg"></a>
                <button class="btn btn-default" id="msbut4">部分爆款直降</button>
            </div>
        </div>
    </div>

<!--    品质生活-->
    <div id="pzdiv">
        <h2>- - - - - - - - - - - - - - - - - - - - - 品质生活- - - - - - - - - - - - - - - - - - - - - </h2>

        <div id="pzdiv1" class="container">
            <div class="row rowdiv">
                <div class="col-lg-3 pzdiro" >
                    <img  src="<?php echo base_url() ?>/images/pz01.jpg" id="pzimg1"  >
                    <a href="#">
                    <div class="pzdi01 asspzdiv">
                        <h2>
                           <p>新品首发</p>
                        </h2>
                        <h5>OPPO特别版开箱上手</h5>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 pzdiro">
                    <img  src="<?php echo base_url() ?>/images/pz02.jpg" id="pzimg2">
                    <a href="#">
                    <div class="pzdi02 asspzdiv">
                        <h2>
                            <p>潮流逛</p>
                        </h2>
                        <h5>时尚弄潮儿的狂想</h5>
                    </div>
                    </a>
                </div>
            </div>

            <div class="row rowdiv">
                <div class="col-lg-3 pzdiro">
                    <img  src="<?php echo base_url() ?>/images/pz03.jpg" id="pzimg3">
                    <a href="#">
                    <div class="pzdi03 asspzdiv" >
                        <h2>
                            <p>奢侈大牌</p>
                        </h2>
                        <h5>尽享品质生活</h5>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 pzdiro">
                    <img  src="<?php echo base_url() ?>/images/pz04.jpg" id="pzimg4">
                    <a href="#">
                    <div class="pzdi04 asspzdiv" >
                        <h2>
                            <p>智能生活</p>
                        </h2>
                        <h5>智能潮流发烧不停</h5>
                    </div>
                    </a>
                </div>
            </div>

            <div class="row rowdiv">
                <div class="col-lg-3 pzdiro">
                    <img  src="<?php echo base_url() ?>/images/pz05.jpg" id="pzimg5">
                    <a href="#">
                    <div class="pzdi05 asspzdiv" >
                        <h2>
                            <p>生鲜超市</p>
                        </h2>
                        <h5>精选特价天天好货</h5>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 pzdiro">
                    <img  src="<?php echo base_url() ?>/images/pz06.jpg"  id="pzimg6">
                    <a href="#">
                    <div class="pzdi06 asspzdiv" >
                        <h2>
                            <p>白条商城</p>
                        </h2>
                        <h5>最高12期免息</h5>
                    </div>
                    </a>
                </div>


                <div class="col-lg-1 pzdiro" >

                    <img  src="<?php echo base_url() ?>/images/pz07.jpg"  id="pzimg7" >
                     <a href="#">
                    <div class="pzdi07 " id="pzssdiv1">
                            <h2>
                                <p>设计师推荐</p>
                            </h2>
                            <h5>家居超级品牌日</h5>
                    </div>
                    </a>
                </div>
                <div class="col-lg-1 pzimgs"  >
                    <img  src="<?php echo base_url() ?>/images/pz08.jpg"  id="pzimg8">
                    <a href="#">
                    <div class="pzdi08 " id="pzssdiv2">
                        <h2>
                            <p>全球Go</p>
                        </h2>
                        <h5>全球顶尖好货</h5>
                    </div>
                    </a>
                </div>

            </div>

        </div>

<!--        品质轮播模块-->
        <div id="pzlunbo">
            <div id="pzbt">
               <p>达人直播</p>
                <span>精彩看不停&nbsp;&nbsp;★</span>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner pzlbdiv" role="listbox">
                    <!--                    01-->
                    <div class="item active">
                        <img   src="<?php echo base_url() ?>/images/pzlb001.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--                    02-->
                    <div class="item">
                        <img  src="<?php echo base_url() ?>/images/pzlb002.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--                    03-->
                    <div class="item">
                        <img  src="<?php echo base_url() ?>/images/pzlb003.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--                    04-->
                    <div class="item">
                        <img  src="<?php echo base_url() ?>/images/pzlb004.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--                    05-->
                    <div class="item">
                        <img  src="<?php echo base_url() ?>/images/pzlb005.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <!--                    06-->
                    <div class="item">
                        <img  src="<?php echo base_url() ?>/images/pzlb006.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

<!--    分类列表-->
    <div id="fldiv">
        <h3>逛了又逛<small>&nbsp;&nbsp;&nbsp;家居生活 &nbsp; 一站购齐</small></h3>
        <div id="fldivs"></div>

        <div class="row flrowdiv">
            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp01.jpg">
                    <p>leapower 跑步手机臂带 男女运动装备健身臂袋腕包苹果6plus臂带手臂包臂套 黑色 适用5.3-5.9寸手机</p>
                    <h4>¥38</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp02.jpg">
                    <p>【乐购超市】亨氏 (Heinz) 胡萝卜鳕鱼泥113g</p>
                    <h4>¥72.5</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp03.jpg">
                    <p>【九洲鹿】 磨毛/亚麻风格卡通印花款办公室抱枕靠垫两用 多功能午睡枕 磨毛-长颈鹿 45x45cm (套子+芯)</p>
                    <h4>¥28.9</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp04.jpg">
                    <p>【来自台湾】 优鲜沛Ocean Spray 果农精选 百分之九十九 蔓越莓蓝莓复合果汁 1升/瓶</p>
                    <h4>¥33.7</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp05.jpg">
                    <p>【乐享超市】完美芦荟胶40g 3支装</p>
                    <h4>¥66.8</h4>
                </a>
            </div>
        </div>

        <div>
            <br>
        </div>


        <div class="row flrowdiv">
            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp06.jpg">
                    <p>【贝汉美】 装饰品摆件创意客厅电视柜玄关酒柜摆设现代简约家居饰品景德镇陶瓷工艺品结婚礼物</p>
                    <h4>¥38.5</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp07.jpg">
                    <p>【倍轻松】（breo）颈椎按摩披肩 颈椎按摩器 颈部 肩部 腰部 保健器械 颈肩按摩仪</p>
                    <h4>¥159.6</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp08.jpg">
                    <p>【时诺刻(SYNOKE)】儿童手表男孩多功能中小学生夜光运动户外电子表时装表腕表男表夜光女表</p>
                    <h4>¥25.9</h4>
                </a>
            </div>

            <div class="col-lg-2">
               <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp09.jpg">
                    <p>【南极人】 男士内裤男平角裤中腰男式四角裤u凸短裤头宽腰弹力95%棉平角内裤4条混色装</p>
                    <h4>¥49.5</h4>
                </a>
            </div>

            <div class="col-lg-2">
                <a href="">
                    <img  src="<?php echo base_url() ?>/images/sp10.jpg">
                    <p>【碧然德（BRITA】 家用滤水壶 净水壶滤芯 Maxtra 多效滤芯 6枚装</p>
                    <h4>¥239</h4>
                </a>
            </div>
        </div>
    </div>


</section>



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
</footer>



<script type="text/javascript" src="<?php echo base_url() ?>js/home.js"></script>
</body>
</html>
