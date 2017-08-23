<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>注册</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/css/mubancss/amazeui.min.css" />
		<link href="<?php echo base_url() ?>/css/mubancss/dlstyle.css" rel="stylesheet" type="text/css">
		<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="<?php echo base_url() ?>/js/mubanjs/amazeui.min.js"></script>
	</head>

	<body>
		<div class="login-boxtitle">
			<a href="home/demo.html"><img alt="" src="<?php echo base_url() ?>/images/logobig.png" /></a>
		</div>

		<div class="res-banner">
			<div class="res-main">
				<div class="login-banner-bg"><span></span><img src="<?php echo base_url() ?>/images/big.jpg" /></div>
				<div class="login-box">

					<div class="am-tabs" id="doc-my-tabs">
						<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
							<li class="am-active">
								<a class="emall">邮箱注册</a>
							</li>
							<li class="am-active">
								<a class="tel">手机号注册</a>
							</li>
						</ul>
						<div class="am-tabs-bd">
							<div class="am-tab-panel am-active">
								<form method="post">
									<div class="user-email">
										<label for="email"><i class="am-icon-envelope-o"></i></label>
										<input type="text" name="name" id="name" placeholder="请输入邮箱账号">
										<span class="sp"></span><br>
									</div>
									<div class="user-pass">
										<label for="password"><i class="am-icon-lock"></i></label>
										<input type="password" name="passwd" id="passwd" placeholder="设置密码">
										<span class="sp"></span><br>
									</div>
									<div class="user-pass">
										<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
										<input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="确认密码">
										<span class="sp"></span><br>
									</div>
								</form>
								<div class="login-links">
									<label for="reader-me">
											<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
										</label>
								</div>
								<div class="am-cf">
									<input type="button" name="" value="注册" id="butn1" class="am-btn am-btn-primary am-btn-sm am-fl">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="footer ">
				<div class="footer-hd ">
					<p>
						<a href="# ">恒望科技</a>
						<b>|</b>
						<a href="# ">商城首页</a>
						<b>|</b>
						<a href="# ">支付宝</a>
						<b>|</b>
						<a href="# ">物流</a>
					</p>
				</div>
				<div class="footer-bd ">
					<p>
						<a href="# ">关于商城</a>
						<a href="# ">合作伙伴</a>
						<a href="# ">联系我们</a>
						<a href="# ">网站地图</a>
						<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
					</p>
				</div>
			</div>
			<script type="text/javascript">
				var url1= "<?php echo site_url('registration_Controllers/register')?>";
				var url2 = "<?php echo site_url('login_Controllers')?>";
			</script>
			<script src="<?php echo base_url() ?>/js/registration.js" type="text/javascript" charset="utf-8"></script>

	</body>

</html>