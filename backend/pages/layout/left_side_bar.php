<?php
function active($currect_page)
{
	$url_array = explode('/', $_SERVER['REQUEST_URI']);//Uniform Resource Identifier
	$url = end($url_array);
	if ($currect_page == $url) {
		echo 'active'; //class name in css 
	}
}
?>

<div id="sidebar-menu" class="sidebar-menu">
	<ul>
		<li class="menu-title">Main</li>
		<?php
			if ($_SESSION['user_role'] == '1') {
		?>

			<li class="<?php active('index.php'); ?>">
				<a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
			</li>
			<li class="<?php active('index.php?product=product'); ?>">
				<a href="index.php?product=product"><i class="fa fa-user-md"></i> <span>Products</span></a>
			</li>
			<li class="submenu">
				<a href="#"><i class="fa fa-user"></i> <span> User </span> <span class="menu-arrow"></span></a>
				<ul style="display: none;">
					<li><a href="employees.html">User List</a></li>
				</ul>
			</li>
			<li class="submenu">
				<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
				<ul style="display: none;">
					<li><a href="invoices.html">Invoices</a></li>
					<li><a href="payments.html">Payments</a></li>
					<li><a href="expenses.html">Expenses</a></li>
				</ul>
			</li>

			<li>
				<a href="assets.html"><i class="fa fa-cube"></i> <span>Assets</span></a>
			</li>
			<li class="submenu">
				<a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
				<ul style="display: none;">
					<li><a href="expense-reports.html"> Expense Report </a></li>
					<li><a href="invoice-reports.html"> Invoice Report </a></li>
				</ul>
			</li>
			<li>
				<a href="index.php?setting=settings"><i class="fa fa-cog"></i> <span>Settings</span></a>
			</li>
			<li class="menu-title">Extras</li>
			<li class="submenu">
				<a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
				<ul style="display: none;">
					<li><a href="login.html"> Login </a></li>
					<li><a href="register.html"> Register </a></li>
					<li><a href="forgot-password.html"> Forgot Password </a></li>
					<li><a href="change-password2.html"> Change Password </a></li>
					<li><a href="lock-screen.html"> Lock Screen </a></li>
					<li><a href="profile.html"> Profile </a></li>
					<li><a href="gallery.html"> Gallery </a></li>
					<li><a href="error-404.html">404 Error </a></li>
					<li><a href="error-500.html">500 Error </a></li>
					<li><a href="blank-page.html"> Blank Page </a></li>
				</ul>
			</li>
		<?php
			}
		?>
		<?php
		if ($_SESSION['user_role'] == '2') {
			?>
			<li class="<?php active('index.php?product=product'); ?>">
				<a href="index.php?product=product"><i class="fa fa-user-md"></i> <span>Products</span></a>
			</li>


		<?php
			}
		?>
	</ul>
</div>