<?php 
	session_start();
	date_default_timezone_set("Asia/Phnom_Penh");
	include_once ('database/config_db.php');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">


<!-- Mirrored from themewagon.github.io/karma/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2024 14:43:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!-- block style_shop -->
	<?php
		include('page/Layer/style_shop.php');
	?>
	<!-- End block style_shop -->
</head>

<body>

	<!-- Start block Header Area -->
	<?php
		include('page/Layer/header.php');
	?>
	<!-- End block Header Area -->

	<!-- start block main-container -->
	<?php
	
		if(isset($_GET['page'])){
			include("page/".$_GET['page'].'.php');
		}else{
			include('page/Layer/master.php');
		}		
	?>
	<!-- End block main-container -->
	
	<!-- start footer Area -->
	<?php
		include('page/Layer/footer.php');
	?>
	<!-- End footer Area -->

	<!-- start block javascrip shop -->
	<?php
		include('page/Layer/javascript_shop.php');
	?>
	<!-- End block javascrip shop -->
	

</body>

</html>