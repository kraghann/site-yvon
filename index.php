<!DOCTYPE html>
<html lang="fr_FR">

<head>
	<title>Urvoy Yvon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fichierStyle.css">
	<script src="Fonctions.js"></script>
</head>

<body style="margin-top: 80px;">

	<?php
	
    setlocale(LC_ALL, "fr_FR.UTF8");
    $date = strtotime("08-05-1996");
    $now = new DateTime("now");
    $interval = intval($now->diff(new DateTime(strftime("%Y-%m-%d", $date)))->format("%Y"));
  
    require('yvonNav.php');
  ?>



		<div class="container-fluid">
			<div class="row content" style="height: auto;">
				<div class="col-3">
					<h2>Informations :</h2>
					<br>
					<ul>
						<li class="active">
							<h4><i class="fas fa-birthday-cake"></i>
								<?php echo($interval); echo(" ") ?>ans</h4>
						</li>
						<br>
						<li>
							<h4><i class="fas fa-phone-square"></i> 07 83 21 58 25 </h4>
						</li>
						<br>
						<li>
							<h4><i class="fas fa-envelope"></i> urvoy-y@saint-louis29.net</h4>
						</li>
						<br>
						<li>
							<h4><i class="fas fa-road"></i> Permis B</h4>
						</li>
						<br>
						<li>
							<h4><i class="fas fa-check"></i> Véhicule personnel</h4>
						</li>
						<br>
						<hr>
						<li>
							<h4> Anglais niveau C1</h4>
							<p>Voyages en Angleterre et à l'école Suzanne Sparrow à Plymouth</p> </li>
					</ul>
					<br>
				</div>




				<div class="col-9">
					<h2>Compétences :</h2>
						<hr>

						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
								<li data-target="#demo" data-slide-to="3"></li>
								<li data-target="#demo" data-slide-to="4"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="../images/50-iloveimg-resized.jpg" alt="Background-1" class="img-fluid">
									<div class="carousel-caption">
										<div class="card">
											<div class="card bg-danger text-white">
												<h3>Systèmes d'exploitation :</h3>
												Windows 7, 10, server 2008, 2012
												<br>Linux (desktop et server)
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="../images/career-options-after-bsc-computer-science-e1489736895942.jpg" alt="IT" class="img-responsive">
									<div class="carousel-caption">
										<div class="card">
											<div class="card bg-danger text-white">
												<h3>Bases de données :</h3>
												MySQL, phpMyAdmin,Access
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<img src="../images/eecs_1250x450px.jpg" alt="Background-2" class="img-responsive">
									<div class="carousel-caption">
										<div class="card">
											<div class="card bg-danger text-white">
												<h3>Web :</h3>
												HTML, CSS, Bootstrap
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="../images/computer_programming.jpg" alt="Background-3" class="img-responsive">
									<div class="carousel-caption">
										<div class="card">
											<div class="card bg-danger text-white">
												<h3>Programmation :</h3>
												C#, Python, PHP, VisualBasic, Javascript
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<img src="../images/13888_doctor_who.jpg" alt="Background-4" class="img-responsive">
									<div class="carousel-caption">
										<div class="card my-auto">
											<div class="card bg-danger text-white">
												<h3>Réseau :</h3>
												Création,configuration , entretien réseau
												<br> gestion incidents et tickets
												<br> OCS, GLPI
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
						</div>
				</div>
			</div>
		</div>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<a href="mentions.php"> Mentions légales</a>
			</div>
		</div>
</body>

</html>