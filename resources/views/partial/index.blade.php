<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
@section('css_body')
	<link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />	
	<link href="theme/css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
	<link href="theme/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
@show

@section('script_head')
	<script src="theme/js/jquery.min.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="text/javascript" src="theme/js/move-top.js"></script>
	<script type="text/javascript" src="theme/js/megamenu.js"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<script src="theme/js/simpleCart.min.js"> </script>
	<script type="text/javascript" src="theme/js/easing.js"></script>
	<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
	</script>
@show


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="@yield('meta_head')" />


</head>
<body> 
<!--header-->	
<div class="header" >
		@include('partial.top_header')
		<!---->
	
		@include('partial.header_top')
</div>
<!--banner-->

@include('partial.banner')
<div class="content">
	<div class="container">
		@include('partial.content_top')
		@include('partial.content_middle')
		@include('partial.content_botton')
		@include('partial.botton_content')
		@include('partial.footer')
	</div>
</div>

</body>
</html>