/**
 * Created by Administrator on 2017/8/17.
 */
/**
 * Created by Administrator on 2017/8/15.
 */
// JavaScript Document





//切换选项
 

$("#ullist a").eq(0).addClass('cur')
  $('#ullist li').on('click','a',function(){
  	console.log($(this));
  	$(this).addClass('cur')
  	
//		$(this).siblings('a').removeClass('cur');
  $(this).parent().siblings().children().removeClass("cur");
  	
  	
  })

//倒计时
	var daojishi = document.getElementById("daojishi");
		daojishi.innerHTML="1天20小时58分20秒";
		var d=0,h=0,m=0,s=0;
		var time = 1*24*60*60+20*60*60+58*60+20
		setInterval(function(){
			time-=1
			//天
			var day = parseInt(time/(60*60*24))
			d=day;
			//小时
			var hour = parseInt(time/(60*60)-day*24)
			h=hour
			//分钟
			var mun = parseInt(time/60-day*24*60-hour*60)
			m=mun
			//秒
			var sc = (time-day*24*60*60-hour*60*60-mun*60)
			
		if(sc==0&&d==0&&m==0){
			daojishi.innerHTML="商品优惠结束";
		}else{
			s=sc;
			daojishi.innerHTML=d+"天"+h+"小时"+m+"分"+s+"秒";
			
		}
			
			
			
		},1000)
$('#totop').click(function(){
        	var speed = 500;
        	$('html,body').animate({scrollTop:130},speed);
        })
//商品规格选择
$(function() {
    $(".theme-options").each(function() {
        var i = $(this);
        var p = i.find("ul>li");
        p.click(function() {
            if (!!$(this).hasClass("selected")) {
                $(this).removeClass("selected");

            } else {
                $(this).addClass("selected").siblings("li").removeClass("selected");

            }

        })
    })

})


//弹出规格选择
//$(document).ready(function() {
//	var $ww = $(window).width();
//	if ($ww <1025) {
//		$('.theme-login').click(function() {
//			$(document.body).css("position", "fixed");
//			$('.theme-popover-mask').show();
//			$('.theme-popover').slideDown(200);
//
//		})
//
//		$('.theme-poptit .close,.btn-op .close').click(function() {
//			$(document.body).css("position", "static");
//			//					滚动条复位
//			$('.theme-signin-left').scrollTop(0);
//
//			$('.theme-popover-mask').hide();
//			$('.theme-popover').slideUp(200);
//		})
//
//	}
//})

//导航固定
$(document).ready(function() {
    var $ww = $(window).width();
    var dv = $('ul.am-tabs-nav.am-nav.am-nav-tabs'),
        st;

    if ($ww < 623) {

        var tp =$ww+363;
        $(window).scroll(function() {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st >= tp) {
                if (dv.css('position') != 'fixed') dv.css({
                    'position': 'fixed',
                    top: 53,
                    'z-index': 1000009
                });

            } else if (dv.css('position') != 'static') dv.css({
                'position': 'static'
            });
        });
        //滚动条复位（需要减去固定导航的高度）

        $('.introduceMain ul li').click(function() {
            sts = tp;
            $(document).scrollTop(sts);
        });
    } else {

        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        var tp = parseInt(dv.attr('otop'))+36;
        $(window).scroll(function() {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st >= tp) {

                if (dv.css('position') != 'fixed') dv.css({
                    'position': 'fixed',
                    top: 0,
                    'z-index': 998
                });

                //滚动条复位
                $('.introduceMain ul li').click(function() {
                    sts = tp-35;
                    $(document).scrollTop(sts);
                });

            } else if (dv.css('position') != 'static') dv.css({
                'position': 'static'
            });
        });



    }
});



$(document).ready(function() {
    //优惠券
    $(".hot span").click(function() {
        $(".shopPromotion.gold .coupon").toggle();
    })




    //获得文本框对象
    var t = $("#text_box");
    //初始化数量为1,并失效减
    $('#min').attr('disabled', true);
    //数量增加操作
    $("#add").click(function() {
       
        t.val(parseInt(t.val()) + 1)
        if (parseInt(t.val()) != 1) {
            $('#min').attr('disabled', false);
        }

    })
    //数量减少操作
    $("#min").click(function() {
        t.val(parseInt(t.val()) - 1);
        if (parseInt(t.val()) == 1) {
            $('#min').attr('disabled', true);
        }

    })

})