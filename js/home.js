/**
 * Created by Administrator on 2017/8/15.
 */
function fn(){
    console.log(666)
}



//全部分类列表
$(".nav-ul").delegate("li","mouseenter",function (){
    //console.log($(this).context.id)
    var con = $(this).context.id;
    console.log(con)
    $("#"+con).animate({"top":'-15'},200)
    //console.log(666)

});
$(".nav-ul").delegate("li","mouseleave",function (){
    var con = $(this).context.id;
    $("#"+con).animate({"top":'0'},400)
    //console.log(777)
});

//侧边导航
$(".erjiul").delegate("a","mouseenter",function (){
    console.log()
    var con = $(this).context.id;
    //子节点的ID  lastElementChild
    var conchild = $(this).context.lastElementChild.id;
    console.log(conchild)
    $("#"+con).animate({"backgroundColor":"#FFFFFF","color":"#202020"},10)
//    二级联动
    $("#"+conchild).css({"display":"block"},10)


});

$(".erjiul").delegate("a","mouseleave",function (){
    var con = $(this).context.id;
    //子节点的ID  lastElementChild
    var conchild = $(this).context.lastElementChild.id;
    //console.log(con)
    $("#"+con).animate({"backgroundColor":"#1E1E1E","color":"#FFFFFF"},10)
    $("#"+conchild).css({"display":"none"},10)
});

//动态小效果
$(".prod").delegate("div","mouseenter",function (){
    var con = $(this);
    var conchild = $(this).children()
    //第一级子集div的ID
    var divid = conchild.context.id
    //图片的id
    var conimg = $(this).context.lastElementChild.id;
    //按钮的id
    var anniu = conchild[2].firstChild.id
    //console.log(anniu)
        $("#"+divid).animate({"width":'356'},700);
        $("#"+divid).css('background-color','#FC5E35')
        $("#"+conimg).animate({"width":'200',"left":'125',"height":'280',"top":'10'},700);
        $("#"+anniu).animate({"opacity":'1',"top":'140'},700);
});

$(".prod").delegate("div","mouseleave",function (){
    var con = $(this);
    var conchild = $(this).children()
    //第一级子集div的ID
    var divid = conchild.context.id
    //图片的id
    var conimg = $(this).context.lastElementChild.id;
    //按钮的id
    var anniu = conchild[2].firstChild.id
    //console.log(anniu)
        $("#"+divid).stop();
        $("#"+divid).animate({"width":'178'},700);
        $("#"+divid).css('background-color','#F0E7C9')
        $("#"+conimg).animate({"width":'130',"left":'0',"height":'180',"top":'100'},700);
        $("#"+anniu).animate({"opacity":'0',"top":'0'},700);
});




