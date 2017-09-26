<!DOCTYPE html>
<html>
<head>
<base href="{{URL::asset('Login').'/'}}">
	<title>注册表单</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<h1>注 册</h1>
<div class="container w3layouts agileits">
	<!-- 成功提示框 -->
	@if(Session::has('hasSuccess'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<font color="red">{{Session::get('hasSuccess')}}</font>
	</div>
	@endif
	<!-- 失败提示框 -->
	@if(Session::has('hasExists'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		<font color="red"><strong>Error</strong> - {{Session::get('hasExists')}}</font>
	</div>
	@endif
	<form action="{{url('project/registers')}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<input type="text" Name="Name" placeholder="请输入2-6位的英文字符" required="">
		<input type="text" Name="Email" placeholder="请输入你的个人邮箱" required="">
		<input type="password" Name="Password" placeholder="密码" required="">
		<input type="password" Name="Password1" placeholder="确认密码" required="">
		<div class="send-button w3layouts agileits">
			<input type="submit" value="免费注册">
		</div>
	</form>
	<div class="clear"></div>
</div>
<div class="footer w3layouts agileits">
<p>Copyright &copy; More Templates</p>
</div>
</body>
</html>