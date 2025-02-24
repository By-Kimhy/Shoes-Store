<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="index.php"><img src="assets/img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">ទំព័រដើម</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
								aria-haspopup="true" aria-expanded="false">ហាង</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=shop/category">ប្រភេទផលិតផល</a>
								</li>
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=shop/single-product">ព័ត៌មានលម្អិតអំពីផលិតផល</a></li>
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=shop/cart">កន្ត្រកទំនិញ</a>
								</li>
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=shop/checkout">ផ្ទៀងផ្ទាត់ផលិតផល</a>
								</li>
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=shop/confirmation">ការបញ្ជាក់</a>
								</li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link"
								href="index.php?page=SinglePage/contact">ទាក់ទងមកយើង</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
								aria-haspopup="true" aria-expanded="false">ផ្សេងៗ</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=Other/login">ចូលក្នុងកម្មវិធី/ចុះឈ្មោះ</a></li>
								<li class="nav-item"><a class="nav-link"
										href="index.php?page=Other/tracking">ការតាមដានការបញ្ជាទិញ</a></li>
							</ul>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="index.php?page=Shop/cart" class="cart"><span
									class="ti-bag"></span></a></li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
						<li class="nav-item">
							<a href="../backend/index.php">
								<button class="search"><span class="lnr lnr-users"></span></button>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="ស្វែងរកនៅទីនេះ">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div>
</header>