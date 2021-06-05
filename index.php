<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Restauration</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="jquery/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/app.js"></script>
		<!-- <script>
			// $(document).ready(function(){
			// 	$("p").click(function(){
			// 		$(this).hide();
			// 	});
			// });

			$(document).ready(function(){
				$('#contact').click(function(){
					$('#slide_contact').toggle();
				})
			})
		</script> -->
	</head>
	<body id="styles">
		<div spy="scrollspy" data-target=".navbar" data-offset="100">
			<nav class="navbar navbar-expand-lg navbar-fixed-top" id="mainNav">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#styles" class="navbar-brand">SiteResto</a>
					</div>
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="nav navbar-nav">
							<li class="nav-item active"><a href="a-propos.php?id=1#a-propos" class="btn btn-link">a-propos</a></li>
							<li class="nav-item dropdown">
								<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">menu
									<span class="caret"></span>
								<ul class="dropdown-menu"> 
									<li class="nav-item"><a href="menuNourriture.php?id=2" class="nav nav-link">nourriture</a></li>
									<li class="nav-item"><a href="menuBoisson.php?id=3" class="nav nav-link">boisson</a></li>
									<li class="nav-item"><a href="menuCafe.php?id=4" class="nav nav-link">café</a></li>
									<li class="nav-item"><a href="menuEvents.php?id=5" class="nav nav-link">évenement</a></li>
								</ul>
								</a>
							</li>
							<li class="nav-item"><a href="services.php?id=6" class="btn btn-link">services</a></li>
							<li class="nav-item"><a href="contacts.php?id=7" class="btn btn-link">contacts</a></li>
							<li class="nav-item"><a href="nos-clients.php?id=8" class="btn btn-link">nos-clients</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="login.php?id=9" class="btn btn-link"><span class="glyphicon glyphicon-user"></span>login</a></li>
							<li class="nav-item"><a href="connexion.php?id=10" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span>s'inscrire</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<header class="myheader">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="myheader-hello">Hello Bienvenue Chez Nous</div>
						<div class="myheader-present">Ici c'est (nom resto), votre endroit idéal !</div>
						<?php 
							if (isset($_GET['id']) AND $_GET['id'] == 1) {
						?>
						<div class="myheader-button-link"><a href="#a-propos" class="btn btn-primary btn-lg">Savoir plus sur nous</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 2) {
						?>
						<div class="myheader-button-link"><a href="#menuNourriture" class="btn btn-primary btn-lg">voir votre menu nourriture</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 3) {
						?>
						<div class="myheader-button-link"><a href="#boisson" class="btn btn-primary btn-lg">voir votre menu boisson</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 4) {
						?>
						<div class="myheader-button-link"><a href="#café" class="btn btn-primary btn-lg">voir votre menu café</a></div>
						<?php
							}elseif (isset($_GET['id']) AND $_GET['id'] == 5) {
						?>
						<div class="myheader-button-link"><a href="#events" class="btn btn-primary btn-lg">voir les événements</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 6) {
						?>
						<div class="myheader-button-link"><a href="#services" class="btn btn-primary btn-lg">voir nos services</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 7) {
						?>
						<div class="myheader-button-link"><a href="#contacts" class="btn btn-primary btn-lg">voir nos contacts</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 8) {
						?>
						<div class="myheader-button-link"><a href="#clients" class="btn btn-primary btn-lg">voir nos clients</a></div>
						<?php
							}elseif (isset($_GET['id']) AND $_GET['id'] == 9) {
						?>
						<div class="myheader-button-link"><a href="#connexion" class="btn btn-primary btn-lg">Se connecter</a></div>
						<?php
							}else if (isset($_GET['id']) AND $_GET['id'] == 10) {
						?>
						<div class="myheader-button-link"><a href="#inscription" class="btn btn-primary btn-lg">S'inscrire'</a></div>
						<?php
							}
						 ?>
					</div>
				</div>
			</div>
		</header>									
				

	<!-- <div class="container-fluid">
		<footer>Copyright@UVS 2019  mamadou.faye18@uvs.edu.sn Tel: 773827653</footer>
	</div> -->