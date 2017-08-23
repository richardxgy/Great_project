<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="<?php echo base_url() ?>/css/payment.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url() ?>/js/payment.js"></script>
    <title>购物车</title>
</head>
<body>
<nav class="navbar navbar-default  nav1 hidden-xs">
    <div class="container">
        <ul class="row">
            <li class="col-md-2 "><span class="glyphicon glyphicon-home" aria-hidden="true"></span>首页</li>
            <li class="col-md-2 "><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>地区</li>
            <li class="col-md-2 "><span class="glyphicon glyphicon-file" aria-hidden="true"></span>账号</li>
            <li class="col-md-2 "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>我的订单</li>
            <li class="col-md-2 "><span class="glyphicon glyphicon-user" aria-hidden="true"></span>个人中心</li>
            <li class="col-md-2 "><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>购物车</li>
        </ul>
    </div>
</nav>

<!--搜索框-->
<div class="container searchdiv">
    <img src="<?php echo base_url() ?>/images/logo.png" alt="" class="col-md-2 col-xs-4">
    <input type="text" placeholder="搜索" class="col-md-8 col-xs-5 searchinput">
    <button class="col-md-1 col-xs-3 searchbutton">搜索</button>
</div>
<hr>
<!--地址-->
<div>
    <div class="container">
        <p class="col-md-2 col-xs-4">确认收货地址</p>
        <button class="col-md-2 col-xs-4">添加新地址</button>
    </div>
    <div class="container">
        <div class="col-md-3 address">
            <p class="col-md-5">提姆队长</p>
            <p class="col-md-7">1234455t67889</p>
            <p class="col-md-5">收货地址：</p>
            <p class="col-md-7">四川省成都市青羊区666666666</p>
            <p class="col-md-5">设为默认</p>
            <p class="col-md-4">编辑</p>
            <p class="col-md-3">删除</p>
        </div>
    </div>
</div>
<hr>
<!--物流方式-->
<div>
    <div class="container">
        <p class="col-md-3 col-xs-4">选择物流方式</p>
    </div>
    <div class="container">
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
        <div class="col-md-2"><img src="<?php echo base_url() ?>/images/yuantong.png" alt="">圆通</div>
    </div>
</div>
<hr>
<!--支付方式-->
<div>
    <div class="container">
        <p class="col-md-3 col-xs-4">选择支付方式</p>
    </div>
    <div class="container">
        <div class="col-md-3"><img src="<?php echo base_url() ?>/images/zhifubao.png" alt=""></div>
        <div class="col-md-3"><img src="<?php echo base_url() ?>/images/weixin.png" alt=""></div>
        <div class="col-md-3"><img src="<?php echo base_url() ?>/images/yinlian.png" alt=""></div>
    </div>
</div>
<hr>
<!--订单信息-->
<div>
    <div class="container">
        <p class="col-md-3 col-xs-4">确认订单信息</p>
    </div>
    <div>
        <table class="container">
            <thead class="row">
            <td class="col-md-6">商品信息</td>
            <td class="col-md-1">单价</td>
            <td class="col-md-1">数量</td>
            <td class="col-md-2">金额</td>
            <td class="col-md-2">运费</td>
            </thead>
            <tbody>
            <?php
            $url = base_url() . "/images/";
            foreach ($shop as $value) {
                echo '
            <thead class="row">
            <td class="col-md-6">
<img src="' . $url . $value['image'] . '" alt="" class="col-md-3">
<p class="col-md-4">' . $value['name'] . '</p>
<p class="col-md-5">' . $value['information'] . '</p>
            </td>
            <td class="col-md-1">￥' . $value['price'] . '</td>
            <td class="col-md-1">' . $value['number'] . '</td>
            <td class="col-md-2">￥' . $value['amount'] . '</td>
            <td class="col-md-2">￥0</td>
            ';
            } ?>
            </tbody>
        </table>
        <hr>
        <div class="container">
            <p class="col-md-2">买家留言：</p>
            <input type="text" placeholder="亲！留言写这里哦！" class="col-md-9">
        </div>
    </div>
</div>
<hr>
<!--确认订单-->
<div class="container">
   <p class="col-md-12">合计(含运费)：￥600</p>
    <div class="order col-md-12">
        <p>实际付款：￥600</p>
        <p>寄送至：四川省成都市青羊区</p>
        <p>收货人：提姆队长</p>
        <p>电话：1234566576878</p>
    </div>
    <button class="col-md-12">提交订单</button>
</div>
<hr>
</body>
</html>