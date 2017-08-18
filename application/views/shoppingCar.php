<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/vue"></script>
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href="<?php echo base_url() ?>/css/shoppingCar.css" rel="stylesheet" type="text/css"/>


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

<!--表格-->
<div class="list">
    <table class="container">
        <thead class="row">
        <th class="col-md-4 col-xs-6">商品信息</th>
        <th class="col-md-1 col-xs-1">单价</th>
        <th class="col-md-1 col-xs-3">数量</th>
        <th class="col-md-1 col-xs-1">金额</th>
        <th class="col-md-1 hidden-xs">操作</th>
        </thead>
        <tbody>
<?php
$url = base_url() . "/images/";
foreach ($shop as $value) {
    echo '
        <thead class="row" id="'.$value['id'].'">
        <td class="col-md-4 col-xs-3">
            <div class="row">
                <input type="checkbox" class="col-md-1 col-xs-2" >
                <img src="'.$url.$value['image'].'" alt="" class="col-md-3 col-xs-12">
                <p class="col-md-4 col-xs-12">'.$value['name'].'</p>
                <p class="col-md-4 col-xs-12">'.$value['information'].'</p>

            </div>
        </td>
        <td class="col-md-1 col-xs-1" >￥<span id="price'.$value['id'].'">'.$value['price'].'</span></td>
        <td class="col-md-1 col-xs-1 row" id="td'.$value['id'].'" onclick="change_number(event)">
            <button class="col-md-1 col-xs-1 hidden-xs" value="-"  id="'.$value['id'].'">-</button>
            <input type="text" value="'.$value['number'].'" class="col-md-4 col-xs-12" style="padding: 1px" id="ipt'.$value['id'].'">
            <button class="col-md-1 col-xs-1 hidden-xs" value="+"  id="'.$value['id'].'">+</button>
        </td>
        <td class="col-md-1 col-xs-1" >￥<span id="amt'.$value['id'].'">'.$value['amount'].'</span></td>
        <td class="col-md-1 col-xs-1 hidden-xs"><p>移入收藏夹</p>
            <p id="'.$value['id'].'" onclick="delete_goods(event)">删除</p></td>
        </thead>
        ';}?>
        </tbody>
    </table>

</div>
<div class="chekall container">

    <p class="col-md-1 col-xs-3"><input type="checkbox">全选</p>
    <p class="col-md-1 col-xs-3">删除</p>
    <p class="col-md-5  hidden-xs">移入收藏夹</p>
    <p class="col-md-2 col-xs-6">已选商品：2件</p>
    <p class="col-md-2 col-xs-5">合计：￥{{total}}</p>
    <button class="col-md-1 col-xs-3" id="btn1" onclick="fn()">结算</button>

</div>

<hr>

<script type="text/javascript" src="<?php echo base_url() ?>js/shoppingCar.js"></script>
<script type="text/javascript">
    var url2 = "<?php echo site_url('shoppingCar_Controllers/getAjaxData')?>";
</script>
<script type="text/javascript">
    var url3 = "<?php echo site_url('shoppingCar_Controllers/deleteData')?>";
</script>
</body>
</html>