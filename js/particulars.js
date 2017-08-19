/**
 * Created by Administrator on 2017/8/15.
 */
$(document).ready(function () {
    $('#kefu').hover(function(){
     // $('#kefu_list').fadeIn(500);
     // $('#kefu_list').slideDown(500);
        $('#kefu_list').css('display','block');
    },function () {
        // $('#kefu_list').fadeOut(500);
        // $('#kefu_list').slideUp(500);
        $('#kefu_list').css('display','none');
    })

//  $('#daojishi').text("1天20小时58分20秒");
    
    
    
    
})

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


