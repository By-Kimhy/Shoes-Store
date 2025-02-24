<?php 
	session_start();
	date_default_timezone_set("Asia/Phnom_Penh");
	include_once ('../frontend/database/config_db.php');
	
	if(!isset($_SESSION['user_login'])){
		header("location:login.php");
	}
	
	
	if(isset($_COOKIE['user_login']) && isset($_COOKIE['user_role'])){
		$_SESSION['user_login'] = $_COOKIE['user_login'];
		$_SESSION['user_role'] = $_COOKIE['user_role'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Karma Shop</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
		.validation_msg{color:#f62d51; font-size:14px;}
	</style>
</head>

<body>
    <div class="main-wrapper">
        <!--start header-->
		<?php require_once("pages/layout/header.php"); ?>
		<!--end header--->
		
		<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <!--start menu-->
				
					<?php 
						if(isset($_GET['setting'])){
							include("pages/layout/left_side_bar_setting.php");
						}else{
							require_once("pages/layout/left_side_bar.php"); 
						}
						
					?>
					
				<!--end menu-->
			</div>
        </div>
        <div class="page-wrapper">
            <div class="content">
				<!--start dynamic page-->
                <?php
					
					if(isset($_GET['product'])){
						include("pages/product/".$_GET['product'].'.php');
					}elseif(isset($_GET['patient'])){
						include("pages/patient/".$_GET['patient'].'.php');
					}elseif(isset($_GET['appointment'])){
						include("pages/appointment/".$_GET['appointment'].'.php');
					}elseif(isset($_GET['setting'])){
						include("pages/setting/".$_GET['setting'].'.php');
					}else{
						require_once("pages/dashboard/dashboard.php");
					}
					
				?>
				<!--end dynamic page-->
			</div>
			
            <div class="notification-box">
				<!--start messages-->
                <?php require_once("pages/alert_information/message.php"); ?>
				<!--end messages-->
            </div>
        </div>
		
		<div id="delete_action" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this info?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button data-id="" class="btn btn-danger confirm-delete">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="delete_appointment" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Appointment?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
	
	<script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	
	<script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
	
    <script src="assets/js/app.js"></script>
	
	<script>
        $('.delete-button').on('click', function (e) {
		var id = $(this).attr('data-id');
		 $('.confirm-delete').attr('data-id',id);
		});
		
		$(".confirm-delete").on('click', function (e) {
			var id = $(this).attr('data-id');
			console.log(id);
			location.href="pages/patient/del_patient.php?id="+id;
		}); 

			
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'
			});
			$('#datetimepicker4').datetimepicker({
				format: 'LT'
			});
		});	
    </script>
	
</body>



</html>