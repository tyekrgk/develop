﻿<!DOCTYPE html>
<!--

Theme Name: Solana
Description: HTML/CSS Template
Author: Abcgomel 
Version: 1.0
Designed & Coded by Abcgomel

-->
<html>
<head>
<title>Solana - Responsive Multipurpose HTML Template</title>
<meta charset=utf-8 >
<base href="{{URL::asset('Home').'/'}}">
<meta name="robots" content="index, follow" > 
<meta name="keywords" content="" > 
<meta name="description" content="" > 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="favicon.ico">

<!-- CSS begin -->


<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="css/skeleton.css" >

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
<link rel="stylesheet" href="css/switcher/style.css">
<link rel="stylesheet" href="css/layout/wide.css" id="layout">
<link rel="stylesheet" href="css/colors/yellow.css" id="colors">

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/style-ie.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ei8fix.css" ><![endif]-->



<!-- CSS end -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>

<div id="wrap" class="boxed">
<div class="grey-bg"> <!-- Grey bg  -->	


<!--[if lte IE 7]>
<div id="ie-container">
<div id="ie-cont-close">
<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
</div>
<div id="ie-cont-content" >
<div id="ie-cont-warning">
<img src='images/ie-warning.jpg' alt='Warning!'>
</div>
<div id="ie-cont-text" >
<div id="ie-text-bold">
You are using an outdated browser
</div>
<div id="ie-text">
For a better experience using this site, please upgrade to a modern web browser.
</div>
</div>
<div id="ie-cont-brows" >
<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warning-firefox.jpg' alt='Download Firefox'></a>
<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warning-opera.jpg' alt='Download Opera'></a>
<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warning-safari.jpg' alt='Download Safari'></a>
<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
</div>
</div>
</div>
<![endif]-->

<!-- HEADER -->
<header id="header" >
<div class="container clearfix">
<div class="sixteen columns">
	<div class="header-container m-top-30 clearfix">

		<div class="header-logo-container ">
			<div class="logo-container">	
				<a href="index.html" class="logo" rel="home" title="Home">
					<img src="images/logo-retina.png" alt="solana" >
				</a>
			</div>
		</div>

		<div class="header-menu-container right">
			<!-- TOP MENU -->
			<nav id="main-nav">
				<ul class="sf-menu clearfix">
					<li><a href="{{url('project/index')}}"><font color="red">首页</font></a></li>
					<li class="current"><a href="{{url('project/elements')}}"><font color="red">股票详情</font></a></li>
					<li><a href="{{url('project/portfolio')}}"><font color="red">股票列表</font></a></li>
					<li><a href="{{url('project/blog')}}"><font color="red">持股大师</font></a></li>
					<li ><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
					<li>
						@if($name != null)
							<a style="cursor:pointer;">欢迎<font color="red">{{ $name }}</font>登录</a>
						@else
							<a href="{{url('project/login')}}"><font color="red">企业登录</font></a>
						@endif
					</li>
			  </ul>
			</nav>
			
			<div class="search-container ">
				<form action="#" class="search-form">
					<input type="text" name="search-form-txt" class="search-text" >
					<input type="submit" value="" class="search-submit" name="submit">
				</form>
			</div>
			
		</div>
		
	</div>
</div>
</div>

</header>

<!-- PAGE TITLE -->
<div class="container m-bot-35 clearfix">
<div class="sixteen columns">
<div class="page-title-container clearfix">
<h1 class="page-title">ELEMENTS</h1>
</div>	
</div>
</div>	

</div>	<!-- Grey bg end -->	

<!-- CONTENT -->
<div class="container m-bot-35 clearfix">






<div class="row">
<!-- Alert box -->
<div class="one-third column">
	<h3 class="title-block">Alert box</h3>
	<div class="styled-box iconed-box success"><strong>Success</strong> - Your message!</div>
	<div class="styled-box iconed-box error"><strong>Error</strong> - Your message!</div>
	<div class="styled-box iconed-box info"><strong>Info</strong> - Your message!</div>
	<div class="styled-box iconed-box notice"><strong>Notice</strong> - Your message!</div>
</div>
<!-- Dropcaps -->
<div class="one-third column">
	<h3 class="title-block">Dropcaps</h3>
	<p><span class="dropcap1">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap2">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus. Nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap3">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap4">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
</div>
<!-- List styles -->
<div class="one-third column demo-list-styles">
	<h3 class="title-block">List styles</h3>
	<ul class="styled-list style-1">
		<li>Graphic Design</li>
	</ul>
	<ul class="styled-list style-2">
		<li>Web Design</li>
	</ul>
	<ul class="styled-list style-3">
		<li>Search Engine Optimization</li>
	</ul>
	<ul class="styled-list style-4">
		<li>Responsive Website</li>
	</ul>
	<ul class="styled-list style-5">
		<li>E-Commerce</li>
	</ul>
	<ul class="styled-list style-6">
		<li>Sales Promotions</li>
	</ul>	
</div>
</div>
<div class="row">
<!-- Accordion -->
<div class="one-third column">
	<h3 class="title-block">Accordion</h3>
	
	<div id="accordion">

	  <h3><a href="#">Lorem ipsum</a></h3>
	  <div>
		<p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
	  </div>
	  
	  <h3><a href="#">Vestilum pulvinar</a></h3>
	  <div>
		<p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
	  </div>
	  
	  <h3><a href="#">Donec sedin</a></h3>
	  <div>
	  <p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
	  </div> 
 
	</div><!-- End accordion -->
	
</div>
<!-- Toggle -->
<div class="one-third column">
	<h3 class="title-block">Toggle</h3>
	<ul id="toggle-view">
		<li>
			<h3 class="ui-accordion-header"><span class="link"></span>Lorem ipsum</h3>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus 
				neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
			</div>
		</li>
		<li>
			<h3 class="ui-accordion-header"><span class="link"></span>Vestilum pulvinar</h3>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus 
				neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
			</div>
		</li>
		<li>
			<h3 class="ui-accordion-header"><span class="link"></span>Donec sedin</h3>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus 
				neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
			</div>
		</li>
	</ul>
</div>
<!-- Tabs -->
<div class="one-third column">

	<h3 class="title-block">Tabs</h3>
<!-- TABS -->


	<ul class="tabs-nav">
		<li class="active">
			<a href="#tab1">First</a>
		</li>
		<li class="">
			<a href="#tab2">Second</a>
		</li>
		<li class="">
			<a href="#tab3">Third</a>
		</li>
	</ul>
	<div class="content-container-white tab-main-container">
		<div id="tab1" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula. Aenean nisl orci.<br><br>
					Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet.</p>
				</li>
				
			</ul>
		</div>
		<div id="tab2" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci.<br><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
				</li>
			</ul>
		</div>
		<div id="tab3" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Ut adipiscing, leo nec. Aenean nisl orci.<br><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
				</li>
			</ul>
		</div>
	</div>
	
	
	
</div>







</div>

<div class="row">
<!-- Buttons with icons small-border-->
<div class="sixteen columns demo-buttons">
	<h3 class="title-block">Buttons With Icons</h3>
	<a class="button small" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-briefcase"></i>BUTTON</a>
	<a class="button small yellow" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-folder-open"></i>BUTTON</a>
	<a class="button small blue" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-gift"></i>BUTTON</a>
	<a class="button medium aqua" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-edit"></i>BUTTON</a>
	<a class="button medium gray" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-unlock"></i>BUTTON</a>
	<a class="button large orange" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-shopping-cart"></i>BUTTON</a>
	<a class="button large green" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"><i class="icon-star-empty"></i>BUTTON</a>
	
</div>
</div>


<div class="row">
<!-- Buttons small-->
<div class="sixteen columns demo-buttons">
	<h3 class="title-block">Buttons Small</h3>
	<a class="button small" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small yellow" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small blue" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small aqua" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small gray" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small orange" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button small green" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
</div>
</div>
<div class="row">
<!-- Buttons medium-->
<div class="sixteen columns demo-buttons">
	<h3 class="title-block">Buttons Medium</h3>
	<a class="button medium" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium yellow" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium blue" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium aqua" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium gray" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium orange" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button medium green" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
</div>
</div>
<div class="row">
<!-- Buttons large-->
<div class="sixteen columns demo-buttons">
	<h3 class="title-block">Buttons Large</h3>
	<a class="button large" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button large yellow" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button large blue" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button large gray" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button large orange" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
	<a class="button large green" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">BUTTON</a>
</div>
</div>




<div class="row">
<!-- Typography -->
<div class="sixteen columns">
	<h3 class="title-block">Typography</h3>
		<h1>This is H1 Tag</h1>
		<p>
		Nunc <b>volutpat odio</b> sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
		
		<h2>This is H2 Tag</h2>
		<p>
		Nunc <b>volutpat odio</b> sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
		
		<h3>This is H3 Tag</h3>
		<p>
		Nunc <b>volutpat odio</b> sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
	   
		<h4>This is H4 Tag</h4>
		<p>
		Nunc <b>volutpat odio</b> sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
		
		<h5>This is H5 Tag</h5>
		<p>
		Nunc <b>volutpat odio</b> sit amet, <a href="">consectetur</a> adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
	   
		<h6>This is H6 Tag</h6>
		<p>
		Nunc <b>volutpat odio</b> sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</p>
</div>
</div>
<div class="row">
<div class="sixteen columns">
	<h3 class="title-block">1/1 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="row">
<div class="eight columns">
	<h3 class="title-block">1/2 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="eight columns">
	<h3 class="title-block">1/2 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="row">
<div class="one-third column">
	<h3 class="title-block">1/3 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="one-third column">
	<h3 class="title-block">1/3 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="one-third column">
	<h3 class="title-block">1/3 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="row">
<div class="one-third column">
	<h3 class="title-block">1/3 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="two-thirds column">
	<h3 class="title-block">2/3 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="row">
<div class="four columns">
	<h3 class="title-block">1/4 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="four columns">
	<h3 class="title-block">1/4 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="four columns">
	<h3 class="title-block">1/4 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="four columns">
	<h3 class="title-block">1/4 Column</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
<div class="row">
<div class="four columns">
	<h3 class="title-block">1/4 Column</h3>	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. </p>
</div>
<div class="twelve columns">
	<h3 class="title-block">3/4 Column</h3>	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac mauris. Ut adipiscing, leo nec. </p>
</div>
</div>








</div>

<!-- OUR PROJECTS End -->


<!-- NEWS LETTER -->
<div class="dark-grey-bg">
<div class="container m-bot-20 clearfix">
<div class="sixteen columns">
<div class="newsletter-container clearfix">
<div class="nl-img-container">
<img src="images/icon-mail.png" alt="mail">
</div>
<div class="nl-text-container clearfix">
<div class="caption">
	<span class="bold">NEWS</span> LETTER
</div>
<div class="nl-text">Stay up-to date with the latest news and other stuffs, Sign Up today!</div>
<div class="nl-form-container">
	<form class="newsletterform" method="post" action="#">
		<input type="text" onblur="if(this.value=='')this.value='Your email here...';" onfocus="if(this.value=='Your email here...')this.value='';" value="Your email here..." name="email"><button class="nl-button">SIGN UP</button>
	</form>
</div>	
</div>
</div>
</div>
</div>
</div>

<!-- OUR CLIENTS -->
<div class="container clearfix">
<div class="sixteen columns m-bot-20">
<ul class="our-clients-container clearfix ">
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo1.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo2.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo3.png" alt="client">
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo4.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo5.png" alt="client" >
	</div>
</a>
</li>
</ul>
</div>	
</div>
<!-- FOOTER -->

<p id="back-top">
<a href="#top" title="Back to Top"><span></span></a>
</p>
</div><!-- End wrap -->
<!-- JS begin -->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/jQuery.BlackAndWhite.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-cookie.js"></script>  
<script src="js/styleswitcher.js"></script>
<div class="switcher"></div>

<!-- JS end -->

</body>
</html>		
