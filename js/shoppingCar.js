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
        bol=1;
    } else {
        goods_amount = 0 - goods_amount;
        fm(goods_amount);
        event.target.value = 0;
        bol=0;
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
        updata_bol(goods_id,bol)
    }

}
//    更改表中的选中状态值
function updata_bol(goods_id,bol){
    $.ajax({
        data: {
            goods_id: goods_id,
            goods_bol:bol
        },       //要发送的数据
        type: "POST",           //发送的方式
        url: url5, //url地址
        error: function () { //处理出错的信息
            console.log("出错了")
        },
        success: function (data1) {  //处理正确时的信息
            console.log("更改成功了");

        }
    });
}
//跳转到结算界面
function settlement(){
    var id_arr=[];

    var arr = $("thead");
    for (var i = 1; i < arr.length; i++) {
        var check_box = arr[i].childNodes[1].childNodes["0"].firstElementChild.firstElementChild;
        var id = check_box.id;
        var goods_id = parseInt(id.split("_")[1]);
        if (check_box.checked) {
            id_arr.push(goods_id);

        }
    }
        //向下一个页面传数
        $.ajax({
            data: {
                goods_ids: "666"
            },       //要发送的数据
            type: "get",           //发送的方式
            traditional: true,
            url: url6, //url地址
            error: function () { //处理出错的信息
                console.log("出错了")
            },
            success: function (data1) {  //处理正确时的信息
                console.log("发送数据成功了");
                console.log(data1)
               //window.location.href = url4;
            }
        });


    console.log(id_arr)
}