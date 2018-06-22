
<!DOCTYPE html>
<html lang="en">
<head>

	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">


	<!-- STYLESHEET -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url('assets/phasons/owl/docs.theme.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/phasons/main.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/phasons/account.css')?>">

	<!--  Javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('assets/phasons/owl/owl.carousel.min.css')?>">
	<!-- <link rel="stylesheet" href="assets/phasons/owl/owl.theme.default.min.css"> -->

	<!-- owl js -->
	<script src="<?=base_url('assets/phasons/owl/owl.carousel.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/jquery/myjquery.js')?>"></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


	<nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg" style="box-shadow: 0 1px 3px rgba(0,0,0,0.8); background-color:#ddd; color: #ddd;">
		<div class="container-fluid " style="width: 100%;background-color:#2d2d30; color: #ddd">
			<div style="text-align: right;">
				<ul style="list-style-type: none; margin-bottom: 0px; font-size: 12px;">
					<li style="display: inline-block; padding-right: 7px ">
						<span>Track order</span>
					</l      i>
					<li style="display: inline-block;padding-right: 7px">
						<a href="<?=site_url('bulkOrder')?>">Bulk order</a>
					</li>
					<li style="display: inline-block;padding-right: 7px">
						<span>Sell your art</span>
					</li>
				</ul>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a  href="home.php">
					<img src="assets/logo/phashons_logo.png" style="height:70px; width:auto; margin-bottom:5px;" />
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" style="margin-top:15px;">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">MEN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<ul class="dropdown-menu">
							<?
							foreach ($mCat as $key):?>
							<li><a href="<?=site_url('categories:'.$key['id'].'/tagref:'.$key['type'] )?>"><?=$key['name']?></a></li>
							<?
						endforeach;
						?>

					</ul>
				</li>
				<!-- women -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">WOMEN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</a>
					<ul class="dropdown-menu">
						<?
						foreach ($wCat as $key):?>
						<li><a href="<?=site_url('categories:'.$key['id'].'/tagref:'.$key['type'] )?>"><?=$key['name']?></a></li>
						<?
					endforeach;
					?>

				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">

			<!-- search bar start -->
			<li>
				<div id="search-bar">
					<form method="get" action="results.php" id="search">
						<input name="search" type="text" size="40" placeholder="Search..." />
					</form>
				</div>
			</li>

			<li><a href="design.php" style="text-shadow: 2px 2px #f5ccaa;"><strong>DESIGN YOURSELF</strong ></a></li>
				<!-- wishlist icon -->
				<li><a href="wishlist.php"><span class="glyphicon glyphicon-heart">
					<!-- <?php
					//echo $totalwish;
					?> -->
				</span></a></li>

				<!-- cart icon -->
				<li> <a href="view_cart.php">
					cart
					<span id="cart-item" class="badge">
						<?=$card_count?>
					</span>

				</a>
			</li>
			<!-- profile -->

			<?
			if(is_null($user)){
				?>

				<li><a type="button" data-toggle="modal" data-target="#loginModel"><span class="glyphicon glyphicon-user">LOGIN</span></a></li>

			<? }
			else{ ?>
				<li class="dropdown" style="margin-right: 15px; padding-top:0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="img img-responsive img-circle" src=<?=$user['profile_image']?> style="height:30px;width:auto" alt="hello"></a>
					<ul class="dropdown-menu">
						<li><center>HI <?=$user['fname']." ".$user['lname']?></center></li>
						<li><hr style="margin: 0px;"></li>
						<li><a href="#">Your Design</a></li>
						<li><hr style="margin: 0px;"></li>
						<li><a href="profile.php/<?=$user['id']?>">Profile</a></li>
						<li><hr style="margin: 0px;"></li>
						<li><a href="account.php/<?=$user['id']?>">Account</a></li>
						<li><hr style="margin: 0px;"></li>
						<li><a onclick="logOut()">Logout</a></li>

						<!-- first user_id, then flag true of logout -->

					</ul>
				</li>
			<?php }?>

		</ul>



	</div>
</div>
<!-- <hr> -->
</nav>
<div  style="height:100px; "></div>
