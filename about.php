<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!-- custom icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<?php 
		include "Modules/header.php";
	?>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<?php
		include "Modules/Navigation.php";
	?>
		<!-- /NAVIGATION -->

		<!-- banner -->
		<div class="banner10 " id="home1">
			<div class="container">
				<h2>Giới Thiệu</h2>
			</div>
		</div>
		<!-- //banner -->
		<!-- BREADCRUMB -->
		<div id="breadcrumb">
			<div class="container">
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a>
					</li>
					<li class="active">Products</li>
				</ul>
			</div>
		</div>
		<!-- /BREADCRUMB -->
		<!-- about -->
		<div class="about">
			<div class="container ">
				<div class="w3ls_about_grids">
					<div class="col-md-6 w3ls_about_grid_left">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
							occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="col-xs-2 w3ls_about_grid_left1">
							<i class="large material-icons">flash_on</i>
						</div>
						<div class="col-xs-10 w3ls_about_grid_left2">
							<p>Sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate
								velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<div class="clearfix"> </div>
						<div class="col-xs-2 w3ls_about_grid_left1">
							<i class="large material-icons">flash_on</i>
						</div>
						<div class="col-xs-10 w3ls_about_grid_left2">
							<p>Sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate
								velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 w3ls_about_grid_right">
						<img src="img/cc.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //about -->
		<!-- team -->
		<div class="team">
			<div class="container">
				<div class="section-team">
					<h3 class="title">Đồng Sáng Lập</h3>
					<div class="wthree_team_grids">
						<div class="col-md-4 wthree_team_grid">
							<img src="img/nam.png" alt="" class="img-responsive" />
							<h4>Bùi Phương Nam
								<span>Fashion designer</span>
							</h4>
							<div class="agileits_social_button">
								<ul>
									<li>
										<a href="#" class="facebook"> </a>
									</li>
									<li>
										<a href="#" class="gmail"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="wthree_team_grids">
						<div class="col-md-4 wthree_team_grid">
							<img src="img/tung.png" alt="" class="img-responsive" />
							<h4>Vũ Xuân Tùng
								<span>Fashion designer</span>
							</h4>
							<div class="agileits_social_button">
								<ul>
									<li>
										<a href="#" class="facebook"> </a>
									</li>
									<li>
										<a href="#" class="gmail"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="wthree_team_grids">
						<div class="col-md-4 wthree_team_grid">
							<img src="img/huy.png" alt="" class="img-responsive" />
							<h4>Phan Minh Huy
								<span>Fashion designer</span>
							</h4>
							<div class="agileits_social_button">
								<ul>
									<li>
										<a href="#" class="facebook"> </a>
									</li>
									<li>
										<a href="#" class="gmail"> </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //team -->
		<!-- footer -->
		<?php
		include 'Modules/footer.php';
		?>
		<!-- footer -->
