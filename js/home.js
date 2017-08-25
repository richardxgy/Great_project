/**
 * Created by Administrator on 2017/8/15.
 */
function fn(){
    //console.log(666)
}



//全部分类列表
$(".nav-ul").delegate("li","mouseenter",function (){
    //console.log($(this).context.id)
    var con = $(this).context.id;
    //console.log(con)
    $("#"+con).animate({"top":'-10'},200)
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
        $("#"+divid).animate({"width":'356'},500);
        $("#"+divid).css('background-color','#FC5E35')
        $("#"+conimg).animate({"width":'200',"left":'125',"height":'280',"top":'10'},500);
        $("#"+anniu).animate({"opacity":'1',"top":'140'},500);
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
        $("#"+divid).animate({"width":'178'},500);
        $("#"+divid).css('background-color','#F0E7C9')
        $("#"+conimg).animate({"width":'130',"left":'0',"height":'180',"top":'100'},500);
        $("#"+anniu).animate({"opacity":'0',"top":'0'},500);
});


//品质生活
$(".rowdiv").delegate("div","mouseenter",function (){
    //console.log($(this).context.id)
    var con = $(this).context.children
    //图片的id
    var imgconid = con[0].id
    if(imgconid=="pzimg8"||imgconid=="pzimg7"){
        $("#"+imgconid).animate({"top":'-10'},200)
    }else {
        $("#"+imgconid).animate({"right":'-10'},200)
    }

    //console.log(666)

});

$(".rowdiv").delegate("div","mouseleave",function (){
    var con = $(this).context.children
    //图片的id
    var imgconid = con[0].id
    if(imgconid=="pzimg8"||imgconid=="pzimg7"){
        $("#"+imgconid).animate({"top":'0'},200)
    }else {
        $("#"+imgconid).animate({"right":'0'},200)
    }

    //console.log(777)
});

