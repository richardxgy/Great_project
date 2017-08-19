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
                <li class="index" id="navli1"><a href="#"><strong>首页</strong> </a></li>
                <li class="qc" id="navli2"><a href="#"><strong>闪购</strong> </a></li>
                <li class="qc" id="navli3"><a href="#"><strong>限时抢</strong> </a></li>
                <li class="qc" id="navli4"><a href="#"><strong>团购</strong> </a></li>
                <li class="qc" id="navli5"><a href="#"><strong>大包装</strong> </a></li>
                <li class="qc" id="navli6"><a href="#"><strong>服装</strong> </a></li>
                <li class="qc" id="navli7"><a href="#"><strong>百货</strong> </a></li>
                <li class="qc" id="navli8"><a href="#"><strong>生鲜</strong> </a></li>
                <li class="qc" id="navli9"><a href="#"><strong>超市</strong> </a></li>
                <li class="qc last" style="float: right"><a href="#"><button class="btn btn-default"><img src="<?php echo base_url() ?>/images/fl1.png">&nbsp;福利</button></a></li>
            </ul>
        </div>

    </div>





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
                    <strong>点心/蛋糕</strong>
                    <div id="erjidiv1">111111</div>
                </a>

            </li>


            <li >
                <a href="#" id="erjili2">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>饼干/膨化</strong>
                    <div id="erjidiv2" style="top: -80px;">2222222</div>
                </a>
            </li>


            <li  >
                <a href="#" id="erjili3">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>熟食/肉类</strong>
                    <div id="erjidiv3"  style="top: -120px;">33333333</div>
                </a>
            </li>


            <li >
                <a href="#" id="erjili4">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>素食/卤味</strong>
                    <div id="erjidiv4"  style="top: -160px;">44444444</div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili5">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>坚果/炒货</strong>
                    <div id="erjidiv5"   style="top: -200px;">5555555</div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili6">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>糖果/蜜饯</strong>
                    <div id="erjidiv6"   style="top: -240px;">6666666666</div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili7">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>巧克力</strong>
                    <div id="erjidiv7"   style="top: -280px;">77777777777</div>
                </a>
            </li>

            <li >
                <a href="#" id="erjili8">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>海味/河鲜</strong>
                    <div id="erjidiv8"   style="top: -320px;">888888888888</div>
                </a>
            </li>

            <li >
                <a href="#" id="erjili9">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>花茶/果茶</strong>
                    <div id="erjidiv9"  style="top: -360px;">9999999999999</div>
                </a>
            </li>

            <li  >
                <a href="#" id="erjili10">
                    <img src="<?php echo base_url() ?>/images/sp1.png" alt="...">
                    <strong>品牌/礼包</strong>
                    <div id="erjidiv10"  style="top: -400px;">拾拾拾拾拾</div>
                </a>
            </li>
        </ul>
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
                    <a href="#">登录&nbsp;</a>|
                    <a href="#">注册</a>
                </div>
                <br>
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
                    <div class="pzdi04 asspzdiv" >
                        <h2>
                            <p>智能生活</p>
                        </h2>
                        <h5>智能潮流发烧不停</h5>
                    </div>
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








</section>



<!--底部-->
<footer>

</footer>

</div>

<script type="text/javascript" src="<?php echo base_url() ?>js/home.js"></script>
</body>
</html>
