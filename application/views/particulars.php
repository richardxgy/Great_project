
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url()?>/css/particulars.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?php echo base_url()?>css/amazeui.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?php echo base_url()?>/css/xiangqingstyle.css" rel="stylesheet" type="text/css"/>
   	<link href="<?php echo base_url()?>/css/home_css.css" rel="stylesheet" type="text/css"/>		

    <title>详情</title>
</head>
<body>
<!-- 顶部-->
<div class="container" id="dingbu">
    <div class='row hidden-xs'>
        <div class='col-lg-7 col-md-6  col-sm-6  '><a href="#" class="cjh">请登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" class="cjh">免费注册</a></div>
        <div class='col-lg-5  col-md-6  col-sm-6 '>
            <div class='col-lg-3 col-md-3  col-sm-3  '><a href="#" class="cjh"><span class="glyphicon glyphicon-home"></span>首页</a></div>
            <div class='col-lg-3 col-md-3  col-sm-3  '>&nbsp;<a href="#" class="cjh"><span class="glyphicon glyphicon-user"></span>个人中心</a></div>
            <div class='col-lg-3  col-md-3  col-sm-3 '>&nbsp;&nbsp;<a href="#" class="cjh"><span class="glyphicon glyphicon-shopping-cart"></span>购物车</a></div>
            <div class='col-lg-3 col-md-3  col-sm-3  ' id="kefu">&nbsp;&nbsp;<a href="#" class="cjh">客户服务<span class="glyphicon glyphicon-chevron-down"></span></a>
                <div id="kefu_list">
                  <strong>客户</strong>
                    <div class="row">
                    <div class='col-lg-6  col-md-6  col-sm-6 center-block '><small>帮助中心</small></div><div class='col-lg-6  col-md-6  col-sm-6 center-block'><small>售后服务</small></div>
                    </div>
                    <div class="row">
                        <div class='col-lg-12  col-md-12  col-sm-12 center-block'><small>在线客服</small></div>

                    </div>
                    <div class="row">
                        <div class='col-lg-12  col-md-12  col-sm-12 center-block'><small>电话客服</small></div>

                    </div>
                </div>
            </div>
      </div>
</div>
</div>

<!-- 搜索↑-->
<div class="nav white page-header">
    <div class="logo"></div>
    <div class="logoBig">
        <img src="<? echo base_url()?>./images/logo.png" />
        <!--        <li><img src="../images/logobig.png" /></li>-->
    </div>
    <div class="search-bar pr">
        <form>
            <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
            <input id="sousuo" class="submit am-btn" value="搜索" index="1" type="submit">
        </form>
    </div>
</div>
<ol class="breadcrumb">
  <li><a href="#">首页</a></li>
  <li><a href="#">美食</a></li>
  <li class="active">松子</li>
</ol>
<!--顶部导航条 -->

<!--<script type="text/javascript">-->
<!--    $(function() {});-->
<!--    $(window).load(function() {-->
<!--        $('.flexslider').flexslider({-->
<!--            animation: "slide",-->
<!--            start: function(slider) {-->
<!--                $('body').removeClass('loading');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<div class="scoll">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img id="imgid" src="<? echo base_url()?>./images/01.jpg" title="pic"/>
                </li>
                <li>
                    <img src="<? echo base_url()?>./images/02.jpg" />
                </li>
                <li>
                    <img src="<? echo base_url()?>./images/03.jpg" />
                </li>
            </ul>
        </div>
    </section>
</div>

<!--放大镜-->

<div class="item-inform">
    <div class="clearfixLeft" id="clearcontent">

        <div class="box">
            <script type="text/javascript">
                $(document).ready(function() {
                    $(".jqzoom").imagezoom();
                    $("#thumblist li a").click(function() {
                        $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
                        $(".jqzoom").attr('src', $(this).find("img").attr("mid"));
                        $(".jqzoom").attr('rel', $(this).find("img").attr("big"));
                    });
                });
            </script>

            <div class="tb-booth tb-pic tb-s310">
                <a src="<? echo base_url()?>./images/01.jpg"><img src="<? echo base_url()?>./images/01_mid.jpg" alt="细节展示放大镜特效" rel="<? echo base_url()?>./images/01.jpg" class="jqzoom" /></a>
            </div>
            <ul class="tb-thumb" id="thumblist">
                <li class="tb-selected">
                    <div class="tb-pic tb-s40">
                        <a href="#"><img src="<? echo base_url()?>./images/01_small.jpg" mid="<? echo base_url()?>./images/01_mid.jpg" big="<? echo base_url()?>./images/01.jpg"></a>
                    </div>
                </li>
                <li>
                    <div class="tb-pic tb-s40">
                        <a href="#"><img src="<? echo base_url()?>./images/02_small.jpg" mid="<? echo base_url()?>./images/02_mid.jpg" big="<? echo base_url()?>./images/02.jpg"></a>
                    </div>
                </li>
                <li>
                    <div class="tb-pic tb-s40">
                        <a href="#"><img src="<? echo base_url()?>./images/03_small.jpg" mid="<? echo base_url()?>./images/03_mid.jpg" big="<? echo base_url()?>./images/03.jpg"></a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>

    <div class="clearfixRight" ng-app="myApp" ng-controller="siteCtrl">

        <!--规格属性-->
        <!--名称-->
        <div class="tb-detail-hd">
            <h1>
                {{food.name}}
            </h1>

            <p>{{food.scount}}</p>
        </div>
        <div class="tb-detail-list">
            <!--价格-->
            <div class="tb-detail-price">
                <li class="price iteminfo_price">
                    <dt>促销价</dt>
                    <dd><em>¥</em><b class="sys_item_price" id="price">{{food.price}}&nbsp;&nbsp;</b>
           
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&hearts;商品倒计时：<strong style="font-size: large;" id="daojishi"></strong>
                 
                     </dd>
                </li>
                <li class="price iteminfo_mktprice">
                    <dt>原价</dt>
                    <dd><em>¥</em><b class="sys_item_mktprice">{{food.yuanjia}}</b></dd>
                </li>
                <div class="clear"></div>
            </div>

            <!--地址-->
            <dl class="iteminfo_parameter freight">
                <dt>配送至</dt>
                <div class="iteminfo_freprice">
                    <div class="am-form-content address">
                        <select data-am-selected>
                            <option value="a">浙江省</option>
                            <option value="b">湖北省</option>
                        </select>
                        <select data-am-selected>
                            <option value="a">温州市</option>
                            <option value="b">武汉市</option>
                        </select>
                        <select data-am-selected>
                            <option value="a">瑞安区</option>
                            <option value="b">洪山区</option>
                        </select>
                    </div>
                    <div class="pay-logis">
                        快递<b class="sys_item_freprice">{{food.kuaidi}}</b>元
                    </div>
                </div>
            </dl>
            <div class="clear"></div>

            <!--销量-->
            <ul class="tm-ind-panel">
                <li class="tm-ind-item tm-ind-sellCount canClick">
                    <div class="tm-indcon"><span class="tm-label">月销量</span><span class="tm-count">{{food.yxiao}}</span></div>
                </li>
                <li class="tm-ind-item tm-ind-sumCount canClick">
                    <div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">{{food.zxiao}}</span></div>
                </li>
                <li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
                    <div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">{{food.pingjia}}</span></div>
                </li>
            </ul>
            <div class="clear"></div>

            <!--各种规格-->
            <dl class="iteminfo_parameter sys_item_specpara">
                <dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>

                    <!--操作页面-->

                    <div class="theme-popover-mask"></div>

                    <div class="theme-popover">
                        <div class="theme-span"></div>
                        <div class="theme-poptit">
                            <a href="javascript:;" title="关闭" class="close">×</a>
                        </div>
                        <div class="theme-popbod dform">
                            <form class="theme-signin" name="loginform" action="" method="post">

                                <div class="theme-signin-left">

                                    <div class="theme-options">
                                        <div class="cart-title">口味</div>
                                        <ul id="kwlist">
                                        	<li class="sku-line  selected">{{kowi[0]}}<i></i></li>
                                            <li class="sku-line" >{{kowi[1]}}<i></i></li>
                                            <li class="sku-line" >{{kowi[2]}}<i></i></li>
                                          <!--<script type="text/javascript">
                                        	var kwlist = document.getElementById('kwlist');
                                          	var lilist = document.createElement('li');
                                          	lilist.setAttribute('class','sku-line');
                                          	lilist.innerHTML = '香味'
                                          	var idiv = document.createElement('i');
                                          	lilist.appendChild(idiv);
                                          	kwlist.appendChild(lilist);
                                          	
                                          </script>  -->
                                         </ul>
                                    </div>
                                    <div class="theme-options">
                                        <div class="cart-title">包装</div>
                                        <ul id="ulibao">
                                            <li class="sku-line selected">{{libao[0].libao}}<i></i></li>
                                            <li class="sku-line">{{libao[1].libao}}<i></i></li>
                                            <li class="sku-line">{{libao[2].libao}}<i></i></li>
                                        </ul>

                                        
                                    </div>
                                    <div class="theme-options">
                                        <div class="cart-title number">数量</div>
                <dd>
                    <input id="min" class="am-btn am-btn-default" name="" type="button" value="-" style="font-size: 12px"/>
                    <input id="text_box" name="" type="text" value="1" style="width:30px;" />
                    <input id="add" class="am-btn am-btn-default" name="" type="button" value="+" style="font-size: 12px"/>
                    <span id="Stock" class="tb-hidden">库存<span class="stock">{{food.num}}</span>件</span>
                </dd>

        </div>
        <div class="clear"></div>

        <div class="btn-op">
            <div class="btn am-btn am-btn-warning">确认</div>
            <div class="btn close am-btn am-btn-warning">取消</div>
        </div>
    </div>


    </form>
</div>
</div>

</dd>
</dl>
<div class="clear"></div>
<!--活动是	-->
<div class="shopPromotion gold">
    <div class="hot">
        <dt class="tb-metatit">商品优惠</dt>

        <div class="gold-list">
            <p>{{food.youhui}}</p>
        </div>
    </div>
    <div class="clear"></div>

</div>
</div>

<div class="pay">
    <div class="pay-opt">
        <a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
        <a><span class="am-icon-heart am-icon-fw">收藏</span></a>

    </div>
    <li>
        <div class="clearfix tb-btn tb-btn-buy theme-login">
            <a id="shoping" title="点此按钮到下一步确认购买信息">立即购买</a>
        </div>
    </li>
    <script type="text/javascript">
    	var str;
       
        $("#shoping").click(function fn() {
            var name = $("h1").html();
          
//          var imgid = $("#imgid")[0].src;
            
            var imgid= "01.jpg"
            console.log(imgid)
            var price = parseInt($("#price").html());
//            console.log(price)
            var num = parseInt($("#text_box").val());
              
            var str1 = str
            var tallprice = num*price;
//          console.log(tallprice)
            $.ajax({
                type:"post",
                url: "<?php echo site_url('shoppingCar_Controllers/updata')?>",
                async:true,
                data:{
                    name:name,
                    price:price,
                    str:str1,
                    num:num,
                    tallprice:tallprice,
                   imgid:imgid,

                                      },
                success:function () {
                 var url = "<?php echo site_url('shoppingCar_Controllers/index')?>";
                  window.location.href = url;
                }
            })

        })

        $("#kwlist").delegate("li","click",function () {
             str = $(this).text();
//            console.log(str)

        })
    </script>
    
    
    
    <li>
        <div class="clearfix tb-btn tb-btn-basket theme-login">
            <a id="shopcar" title="加入购物车"><i></i>加入购物车</a>
        </div>
    </li>
     <script type="text/javascript">
    	var str;
       
        $("#shopcar").click(function fn() {
            var name = $("h1").html();
          var imgid = $("#imgid")[0].src;
//          var imgid = $("#imgid").html();
            var price = parseInt($("#price").html());
//            console.log(price)
            var num = parseInt($("#text_box").val());
              var imgid = $("#imgid").html();
            var str1 = str
            var tallprice = num*price;
//          console.log(tallprice)
            $.ajax({
                type:"post",
                url: "<?php echo site_url('shoppingCar_Controllers/updata')?>",
                async:true,
                data:{
                    name:name,
                    price:price,
                    str:str1,
                    num:num,
                    tallprice:tallprice,
                     imgid:imgid,

                                      },
                success:function () {
//                  var url = "<?php echo site_url('shoppingCar')?>";
//                  window.location.href = url;
                }
            })

        })

        $("#kwlist").delegate("li","click",function () {
             str = $(this).text();
//            console.log(str)

        })
    </script>
</div>

</div>

<div class="clear"></div>

</div>
<br />
<ul class=" am-tabs-nav am-nav am-nav-tabs" id="ullist">
    <li class="am-active">
        <a href="#xiqi"  aria-controls="xiqi" role="tab" data-toggle="tab">

            <span class="index-needs-dt-txt">宝贝详情</span></a>

    </li>

    <li>
        <a href="#piji" aria-controls="piji" role="tab" data-toggle="tab">

            <span class="index-needs-dt-txt">全部评价</span></a>

    </li>

    <li>
        <a href="#xihuan" aria-controls="xihuan" role="tab" data-toggle="tab">

            <span class="index-needs-dt-txt">猜你喜欢</span></a>
    </li>
</ul>
<!--<h1><?php foreach ($payforshop as $key){echo $key;} ?></h1>-->
 <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="xiqi">
   <div class="tw">
	<li class="tw1" ><img  src="<? echo base_url()?>./images/tw1.jpg"  height="500" /></li>
	<li class="tw2 sm" ><img src="<? echo base_url()?>./images/tw2.jpg"  height="500"/></li>
	<li class="tw3 sm"><img src="<? echo base_url()?>./images/tw3.jpg"   height="500"/></li>
	<li class="tw4 sm" ><img src="<? echo base_url()?>./images/tw4.jpg"  height="500"/></li>
	<li class="tw5 sm" ><img src="<? echo base_url()?>./images/tw5.jpg"   height="500"/></li>
	<li class="tw6 sm"><img src="<? echo base_url()?>./images/tw6.jpg"  height="500"/></li>
</div>
    	
    </div>
    <div role="tabpanel" class="tab-pane" id="piji">
 	  <div id="shopid" style="display: none;"><?php  echo $id; ?></div>
 	  <div id="shopbiao" style="display: none;"><?php  echo $bm; ?></div>
 	    <div id="shopkouwei" style="display: none;"></div>
         <p style="height: 300px;">这里暂时用来存放隐藏的盒子，数据存储	</p>  
    </div>
    <div role="tabpanel" class="tab-pane" id="xihuan">
 <div class="zzsc">
	<li class="zzsc01"><img src="<? echo base_url()?>./images/zzsc01.jpg" width="667" height="332" /></li>
	<li class="zzsc02"><img src="<? echo base_url()?>./images/zzsc02.jpg" width="333" height="165" /></li>
	<li class="zzsc03"><img src="<? echo base_url()?>./images/zzsc03.jpg" width="165" height="165" /></li>
	<li class="zzsc04"><img src="<? echo base_url()?>./images/zzsc04.jpg" width="165" height="165" /></li>
	<li class="zzsc05"><img src="<? echo base_url()?>./images/zzsc05.jpg" width="332" height="165" /></li>
	<li class="zzsc06"><img src="<? echo base_url()?>./images/zzsc06.jpg" width="332" height="332" /></li>
</div>
</div>
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
<button id="totop">TOP</button>
<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/particulars.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/jquery.imagezoom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/mubanjs/jquery.smoove.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/mubanjs/jquery.smoove.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/js/zuhe.js"></script>

<script>
	

	 $('.sm').children().smoove({offset:'20%',

	  
	 
	 rotateX:"10deg",moveZ:"-100px",moveY:"100px"
	 });//在20%触发</script>
<script>
	var kw;
	var id  = $('#shopid').html();
	var biao  = $('#shopbiao').html();

    var app = angular.module('myApp', []);
    app.controller('siteCtrl', function($scope, $http) {
    	
    	
    	
	$http({
		method: 'GET',
			params: {  
                    "id":id,
                    "bm":biao
                  
                } ,   
		
		url: '<?php echo site_url('particulars_Controllers/getshopdata')?>'
	}).then(function successCallback(response) {
	      $scope.food = response.data.xiqi[0];
         
          $scope.libao = response.data.libao;
          var a = [];
	     for(var i = 0;i<response.data.kouwei.length;i++){
	     	
            a.push(response.data.kouwei[i].taste) ;                   	     	
	      
	     }
	       $scope.kowi=a;

		    console.log( $scope.libao)
		}, function errorCallback(response) {
			// 请求失败执行代码
	});
   
    });
    


//new Vue({
//el: '#app',
//data: {
//  sites: 
//}
//})
</script>


</body>
</html>