/**
 * Created by Administrator on 2017/8/15.
 */
//打开面板
function fm() {
    document.getElementById("add_address").style.display = "block";
}
//关闭，面板
function fn() {
    document.getElementById("add_address").style.display = "none";
}
//保存
function save_address() {
    var user_name = $("#user_name").val();
    var user_phone = $("#user_phone").val();
    var provinces = $("#provinces").val();
    var city = $("#city").val();
    var county = $("#county").val();
    var user_intro = $("#detailed_address").val();

     $.ajax({
     data: {
     user_name: user_name,
     user_phone:user_phone,
     provinces:provinces,
     city:city,
     county:county,
     user_intro:user_intro
     },       //要发送的数据
     type: "POST",           //发送的方式
     url: url1, //url地址
     error: function () { //处理出错的信息
     console.log("出错了")
     },
     success: function (data) {  //处理正确时的信息
     console.log("成功了");
     ///重新加载页面
         location.reload(true);
     }
     });
    fn();
}
//取消
function del_address() {
    fn();
}
