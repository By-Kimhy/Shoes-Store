<div class="header">
	<div class="header-left">
		<a href="index.php" class="logo">
			<img src="assets/img/logo.png"  alt=""> <span>KARMA</span>
		</a>
	</div>
	<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
	<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
	<ul class="nav user-menu float-right">
		<li class="nav-item dropdown d-none d-sm-block">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
			<div class="dropdown-menu notifications">
				<!--start messages-->
                <?php require_once("pages/alert_information/notification.php"); ?>
				<!--end messages-->
			</div>
		</li>
		<li class="nav-item dropdown d-none d-sm-block">
			<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
		</li>
		<li class="nav-item dropdown has-arrow">
			<a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
				<span class="user-img">
					<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
					<span class="status online"></span>
				</span>
				<span><?php if(isset($_SESSION['user_login'])){ echo ucfirst($_SESSION['user_login']); } ?></span>
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="../front_end/index.php">Visited Site</a>
				<a class="dropdown-item" href="profile.html">My Profile</a>
				<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
				<a class="dropdown-item" href="settings.html">Settings</a>
				<a class="dropdown-item" href="logout.php">Logout</a>
			</div>
		</li>
	</ul>
	<div class="dropdown mobile-user-menu float-right">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="profile.html">My Profile</a>
			<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
			<a class="dropdown-item" href="settings.html">Settings</a>
			<a class="dropdown-item" href="login.html">Logout</a>
		</div>
	</div>
</div>
