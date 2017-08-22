$('#login').click(function() {
				var $name = $('#name').val();
				var $passwd = $('#passwd').val();
				var url =url1;
				$.ajax({
					data: {
						name: $name,
						passwd: $passwd
					}, 
					type: "POST", //发送的方式
					url: url, //url地址
					error: function(data) { //处理出错的信息
						document.write(data);
					},
					success: function(data) { //处理正确时的信息
						if(data == '1') {
							alert('登录成功！');
							var url = url2;
							$.ajax({
								type:"get",
								url:url,
								data:{
									name: $name
								},
								success:function(data){
									window.location.href = url;
								}
							});
						}else if(data == '2'){
							alert('账号或密码错误请重新输入！');
						}
					}
				});
			});