/**
 * Created by Administrator on 2017/8/15.
 */
$('.tel').on('click', function() {
					$('#name').attr('placeholder','请输入手机号')
				})
				$('.emall').on('click', function() {
					$('#name').attr('placeholder','请输入邮箱账号')
				})
				$("#butn1").click(function() {
					var name = $("#name").val();
					var passwd = $("#passwd").val();
					var passwordRepeat = $("#passwordRepeat").val();
					if(name == '') {
						alert('必填');
					};
					if(passwd !== passwordRepeat) {
						alert('两次输入密码不一样')
					};
					$.ajax({
						type: "post",
						url: url1,
						data: {
							name: name,
							passwd: passwd
						},
						error: function(data) { //处理出错的信息
						},
						success: function(data) { //处理正确时的信息
							if(data == 'success') {
								var url = url2;
								window.location.href = url;
							}
						}
					});

				})