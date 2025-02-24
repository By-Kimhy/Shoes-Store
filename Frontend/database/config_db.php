<?php
	
	#error_reporting(0);
	
	$dbhost = 'localhost:3306'; #localhost:3306, 127.0.0.1
	$dbuser = 'root';
	$dbpwd = '';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpwd);
	
	if(!$conn){
		die("Connection Failed.!".mysqli_connect_error());
		exit(); 
	}
	
	mysqli_select_db($conn, "db_shorestore") or die("Error selecting from database");
	#printf("Your connection successfully!");
	// Change character set to utf8
	mysqli_set_charset($conn,"utf8");
	
	

	function msgstyle($msg, $type){
		switch($type){
			case 'success':
				echo '
					<div class="col-lg-8 offset-lg-2">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Success!</strong> '.$msg.'.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
					';
				break;
			case 'warning':
				echo '
					<div class="col-lg-8 offset-lg-2">
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  <strong>Warning!</strong> '.$msg.'.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
					';
				break;	
			case 'info':
				echo '
					<div class="col-lg-8 offset-lg-2">
						<div class="alert alert-info alert-dismissible fade show" role="alert">
						  <strong>Info!</strong> '.$msg.'.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
					';
				break;	
			case 'danger':
				echo '
					<div class="col-lg-8 offset-lg-2">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Danger!</strong> '.$msg.'.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
					';
				break;	
		}
	}


?>