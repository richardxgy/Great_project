/**
 * Created by Administrator on 2017/8/15.
 */
		/*获得表名，获得分类表名*/
	   	var $biaoname=$('.biaoname').html();
	   	var $fenleiname=$('.fenleiname').html();
/*选择商品*/
		$('.content').on('click','.idname',function(){
			console.log($(this));
			$.ajax({
				type:"get",
				url:url4,
				data:{
					id:$(this).context.id,
					biaoname:$biaoname
				},
				success:function(data){
					window.location.href=url4;
				}
			});
		})
/*分类检索*/
    	var isbit=false;
   		$('.nav').on('click','li',function(){
   			if($(this).context.id=='fenlei'){
   				window.location.href=url1;
   			}else{
   				/*css样式*/
				$('li').attr('class','')
				$(this).attr('class','active');
				
	   			isbit=true;
	   			var url=url2;
	   			$.ajax({
	   				type:"get",
	   				url:url,
	   				data:{
	   					fenleiname:$fenleiname,
	   					biaoname:$biaoname,
	   					id:$(this).context.id
	   				},
	   				success:function(data){
	   					if(data){
	   						/*使后端传过来的json字符串转换为json对象*/
							let mydata =$.parseJSON(data);
							/*重新渲染页面*/
							$('.content').html('');
							for(let i = 0;i<mydata.chooselist.length;i++){
								var div=$('<div></div>').attr('id','list'+mydata.chooselist[i].id).attr('class',"col-lg-3 col-md-3 col-sm-6 col-xs-6 idname");
								$('.content').append(div);
								$('#list'+mydata.chooselist[i].id).html('<div class="name">'+mydata.chooselist[i].name+'</div><div class="fenlei1">'+mydata.chooselist[i].fenlei1+'</div><div class="price">价格：￥'+mydata.chooselist[i].price+'</div><div class="xiaoliang">销量：'+mydata.chooselist[i].xiaoliang+'</div>')
							}
						}
	   				}
	   			});
   			}
   		})
   		
   		/*排序*/
    	var $sortboolen=false;
    	$('.paixu').on('click','li',function(){
    		$sortboolen=!$sortboolen;
	    	$sortby=$(this).context.id;
	    	/*css样式*/
			$('li').attr('class','')
			$(this).attr('class','active')
			/*
			 点了分类再进行排序：对满足分类属性的商品进行排序，所以每次都是重新请求发送数据，再渲染到页面上
			 * */
			if(!isbit){	
				var url=url3;
				$.ajax({
					type:"get",
					url:url,
					data:{
						biaoname:$biaoname,
						sortby:$sortby,
						sortboolen:$sortboolen
					},
					success:function(data){
						if(data){
							let mydata =$.parseJSON(data);
							$('.content').html('');
							for(let i = 0;i<mydata.lists.length;i++){
								var div=$('<div></div>').attr('id','list'+mydata.lists[i].id).attr('class',"col-lg-3 col-md-3 col-sm-6 col-xs-6 idname");
								$('.content').append(div);
								$('#list'+mydata.lists[i].id).html('<div class="name">'+mydata.lists[i].name+'</div><div class="fenlei1">'+mydata.lists[i].fenlei1+'</div><div class="price">价格:￥'+mydata.lists[i].price+'</div><div class="xiaoliang">销量:'+mydata.lists[i].xiaoliang+'</div>')
							}
						}
					}
				});
				/*直接点排序，没点分类，不需要重新请求数据，只需要对商品进行排序*/
			}else{
				/*定义一个空数组，把.content属性里面的子节点都放进去，然后进行正序倒序操作，再渲染到页面上*/
				var arr = [];
				for(let i = 0 ;i<$('.content').children().length;i++){
						arr.push($('.content').children()[i]);
				}
				if($sortboolen){
					var arr2= arr.reverse()
					$('.content').append(arr2);
				}else{
					$('.content').append(arr);
				}
			}
		})