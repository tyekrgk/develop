<!DOCTYPE html>
<html>
<head>
<title>绑定表单</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo e(URL::asset('Login').'/'); ?>">
	<base href="<?php echo e(URL::asset('Home').'/'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
	<h1>绑 定 账 户 </h1>

<form action="<?php echo e(url('/project/yan')); ?>" method="post">
<?php echo e(csrf_field()); ?>

	<div class="container w3layouts agileits">
		<div class="login w3layouts agileits">
			<form action="<?php echo e(url('project/logins')); ?>" method="post">
                
                <input value="<?php echo $_GET['nickname'];?>" type="text" name="name" placeholder="用户名">
                
                <input type="text" name="password" placeholder="密码">
				
				<input type="text" name="email" placeholder="邮箱">
				<ul class="tick w3layouts agileits">
					<li>
						<label for="brand1"><span></span>记住密码</label>
					</li>
				</ul>
				<div class="send-button w3layouts agileits">
						<input type="submit" value="绑 定">
				</div>
			</form>
			<div class="social-icons w3layouts agileits">
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</form>	
	<div class="footer w3layouts agileits">
		<p>Copyright &copy; More Templates</p>
	</div>
</body>
</html>