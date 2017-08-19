/**
 * Created by Administrator on 2017/8/15.
 */
var total = parseInt($("#total").html());
//            改变商品数量及金额
function change_number(event) {
    var goods_id = event.target.id;
    var btn_value = event.target.value;
    //商品数量
    var input_id = "#ipt" + goods_id;
    var goods_number = $(input_id).val();
    //商品单价
    var price_id = "#price" + goods_id;
    var goods_price = $(price_id).html();
    //商品金额
    var amount_id = "#amt" + goods_id;
    var goods_amount = $(amount_id).text();
    //选择框的ID
    var check_id = "#check_" + goods_id;
    var bol = $(check_id).val();
    //改变商品数量
    if (goods_number >= 0) {
        if (btn_value == "+") {
            goods_number++;

        } else {
            if (goods_number > 0) {
                goods_number--;
            }else{
                return false;
            }

        }
        //改变商品金额
        goods_amount = goods_number * goods_price;

        //将改变后的数据发送到数据库
        if (btn_value == "-" || btn_value == "+") {
            $.ajax({
                data: {
                    goods_number: goods_number,
                    goods_id: goods_id,
                    goods_amount: goods_amount
                },       //要发送的数据
                type: "POST",           //发送的方式
                url: url2, //url地址
                error: function () { //处理出错的信息
                    console.log("出错了")
                },
                success: function (data1) {  //处理正确时的信息
                    console.log("成功了");
                    $(input_id).val(goods_number);
                    $(amount_id).html(goods_amount);
                    if (bol == 1) {
                        //改变数量并改变合计
                        goods_price = parseInt(goods_price);
                        if (btn_value == "+" && goods_number >= 0) {
                            fm(goods_price);
                        }
                        if (btn_value == "-" && goods_number >= 0) {
                            goods_price = 0 - goods_price;
                            fm(goods_price);
                        }

                    }
                }
            });
        }
    }
}

//删除商品
function delete_goods(event) {
    var goods_id = event.target.id;
    $.ajax({
        data: {
            goods_id: goods_id,
        },       //要发送的数据
        type: "POST",           //发送的方式
        url: url3, //url地址
        error: function () { //处理出错的信息
            console.log("出错了")
        },
        success: function (data1) {  //处理正确时的信息
            console.log("成功了");
            //重新加载页面
            location.reload(true);
        }
    });
}

//选择
function check(event) {
    var id = event.target.id;
    var goods_id = id.split('_')[1];
    var bol = event.target.value;
    var amount_id = "#amt" + goods_id;
    var goods_amount = parseInt($(amount_id).text());
    if (bol == 0) {
        fm(goods_amount);
        event.target.value = 1;
    } else {
        goods_amount = 0 - goods_amount;
        fm(goods_amount);
        event.target.value = 0;
    }
}
//计算总金额
function fm(goods_amount, goods_price) {
    if (goods_amount) {
        total += goods_amount;
    }
    if (goods_price) {
        total += goods_price;
    }
    if (total < 0) {
        total = 0;
    }
    $("#total").html(total)

}

//全选

function check_all(event) {
    console.log(event.target.checked);
    var ckd = event.target.checked;
    var arr = $("thead");
    if (ckd) {
        for (var i = 1; i < arr.length; i++) {
            var check_box = arr[i].childNodes[1].childNodes["0"].firstElementChild.firstElementChild;
            check_box.value = 1;
            check_box.checked = true;
            var id = check_box.id;
            var goods_id = id.split('_')[1];
            var bol = check_box.value;
            var amount_id = "#amt" + goods_id;
            var goods_amount = parseInt($(amount_id).text());
            fm(goods_amount);

        }
    } else {
        for (var i = 1; i < arr.length; i++) {
            var check_box = arr[i].childNodes[1].childNodes["0"].firstElementChild.firstElementChild;
            check_box.value = 0;
            check_box.checked = false;
            var id = check_box.id;
            var goods_id = id.split('_')[1];
            var bol = check_box.value;
            var amount_id = "#amt" + goods_id;
            var goods_amount = 0-parseInt($(amount_id).text());

            fm(goods_amount);}
    }

}
/*
 var vn=new Vue({
 el: "#app",
 data: {
 total: 0,
 cb: false,
 list: [{bol: false, information: "《山海经》图文版", price: 152.00, number: 1, amount: 152.00},
 {bol: false, information: "《偷影子的人》", price: 27.00, number: 1, amount: 27.00},
 {bol: false, information: "瑞士军刀", price: 536.00, number: 1, amount: 536.00},
 {bol: false, information: "《解忧杂货铺》", price: 52.00, number: 1, amount: 52.00},
 {bol: false, information: "复古圆领毛衣", price: 298.00, number: 2, amount: 596.00}]
 },
 methods: {
 //            增加商品
 add: function (x, index) {

 var now_num = x.number;
 var price = x.price;
 now_num++;

 var amount = this.fn(now_num, price);

 this.list[index].number = now_num;
 this.list[index].amount = amount;
 if (x.bol) {
 this.fm(price)
 }
 },
 //            减少商品
 reduction: function (x, index) {
 var now_num = x.number;
 var price = x.price;

 if (now_num > 0) {
 now_num--;
 var amount = this.fn(now_num, price);
 this.list[index].number = now_num;
 this.list[index].amount = amount;
 if (x.bol) {
 this.fm(0 - price)
 }

 }

 },
 //            计算金额
 fn: function (now_num, price) {
 var amount = now_num * price;
 return amount;
 },
 //            选择
 check: function (x) {
 var amount = x.amount;
 if (!x.bol) {
 amount = 0 - amount;
 }
 this.fm(amount)
 },
 //            计算总金额
 fm: function (amount) {

 var all = this.total;
 all = all + amount;


 if (all >= 0) {
 this.total = all;
 } else {
 this.total = 0;
 }


 }
 ,
 //            删除
 del: function (x,index) {
 this.list.splice(index, 1)
 },
 //            全选
 chall: function () {
 var bool=this.cb;
 for (var i = 0; i < this.list.length; i++) {
 if(this.list[i].bol){
 this.list[i].bol=false;
 this.check(this.list[i]);
 }
 this.list[i].bol = this.cb;
 this.check(this.list[i]);
 }
 this.cb = bool;

 }

 }

 })*/
