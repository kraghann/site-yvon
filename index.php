<!DOCTYPE html>
<html>
<title>Urvoy Yvon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylesTimeline.css">
<script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<body id="myPage">

	

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Accueil</a>
			<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Informations générales</a>
			<a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Compétences</a>
			<a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Expériences</a>
			<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
			<a href="CV-2018-2019.pdf">
                <button class="btn btn-warning mr-1" id="menu-ajout" type="button">
                    <i class="fas fa-download"></i>
                        <a href="CV-2018-2019.pdf">Télécharger mon CV</a>
								</button>
			</a>
		</div>

		<!-- Navbar sur petits écrans -->
		<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
			<a href="#team" class="w3-bar-item w3-button">Accueil</a>
			<a href="#work" class="w3-bar-item w3-button">Informations générales</a>
			<a href="#pricing" class="w3-bar-item w3-button">Compétences</a>
			<a href="#contact" class="w3-bar-item w3-button">Expériences</a>
		</div>
	</div>

	<!-- Image d'accueil -->
	<div class="w3-display-container w3-animate-opacity">
		<img src="../images/laptop-wallpaper-1920x1080.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
	</div>

	<?php
	
    setlocale(LC_ALL, "fr_FR.UTF8");
    $date = strtotime("08-05-1996");
    $now = new DateTime("now");
    $interval = intval($now->diff(new DateTime(strftime("%Y-%m-%d", $date)))->format("%Y"));
  ?>

		<!-- Team Container -->
		<div class="w3-container w3-padding-64 w3-center" id="team">
			<h2>Informations générales :</h2>

			<div class="w3-row"><br>

				<div class="w3-quarter">
						<h4><i class="fas fa-birthday-cake"></i>
							<?php echo($interval); echo(" ") ?>ans
				</div>

				<div class="w3-quarter">
					<h4><i class="fas fa-phone-square"></i> 07 83 21 58 25 </h4>
				</div>

				<div class="w3-quarter">
						<h4><i class="fas fa-envelope"></i> urvoy-y@saint-louis29.net</h4>
				</div>

				<div class="w3-quarter">
						<h4><i class="fas fa-road"></i> Permis B & véhicule personnel</h4>
				</div>

			</div>
		</div>

		<!-- Work Row -->
		<div class="w3-row-padding  w3-center  w3-padding-64 w3-theme-l1" id="work">
			<h2>Compétences :</h2>
			

			

			<div class="w3-quarter">
				<div class="w3-card w3-white">
					<div class="w3-container">
						<h3>Programmation :</h3>
						<hr>
						<p>C#</p>
						<p>Python</p>
						<p>VisualBasic</p>
					</div>
				</div>
			</div>

			<div class="w3-quarter">
				<div class="w3-card w3-white">
					<div class="w3-container">
						<h3>Bases de données :</h3>
						<hr>
						<p>MySQL</p>
						<p>PhpMyAdmin</p>
						<p>Access</p>
					</div>
				</div>
			</div>

			<div class="w3-quarter">
				<div class="w3-card w3-white">
					<div class="w3-container">
						<h3>WEB :</h3>
						<hr>
						<p>HTML</p>
						<p>PHP</p>
						<p>Bootstrap</p>
					</div>
				</div>
			</div>

			<div class="w3-quarter">
				<div class="w3-card w3-white">
					<div class="w3-container">
						<h3>Réseau :</h3>
						<hr>
						<p>Configuration actifs réseau</p>
						<p>Management Active Directory</p>
						<p>Maintenance serveurs</p>
					</div>
				</div>
			</div>

		</div>


		<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
			<h2>Expériences :</h2>

			<div class="timeline">

				<div class="container-time left">
					<div class="content">
						<img src="../images/CMA Logo.jpg" alt="CMA-logo" class="img-fluid" width="200px">
						<h2>2018</h2>
						<h4>Technicien réseau</h4>
						<p>J'ai été employé à la Chambre des Métiers et de l'Artisanat de Ploufragan (22440) au service informatique où j'ai déployé et migré la solution Office 365 ainsi que la fibre optique en 		 remplacement du multi-WAN.
						</p>
					</div>
				</div>

				<div class="container-time right">
					<div class="content">
						<img src="../images/CMA Logo.jpg" alt="CMA-logo" class="img-fluid" width="200px">
						<h2>2018</h2>
						<h4>Stage en entreprise</h4>
						<p>J'ai éffectué mon stage à la Chambre des Métiers et de l'Artisanat de Ploufragan (22440) au service informatique où j'ai accompli diverses tâches du maintenance du réseau, et de son infrastructure. J'ai également fait de l'assistance à l'utilisateur.
						</p>
					</div>
				</div>
				<div class="container-time left">
					<div class="content">
						<img src="../images/Saint-Louis_400x400.jpg" alt="Stlouis-log" class="img-fluid" width="200px">
						<h2>2017-2019</h2>
						<h4>BTS SIO, option SISR</h4>
						<p>J'ai choisi le BTS SIO au  lycée Saint-Louis à Chateaulin car je voulais une approche plus pratique de l'informatique. J'ai choisi l'option SISR (solutions d'infrastructure, systèmes et réseaux ).
						</p>
					</div>
				</div>
				<div class="container-time right">
					<div class="content">
						<img src="../images/logor2-Rennes2.png" alt="Rennes2-logo" class="img-fluid">
						<h2>2016-2017</h2>
						<h4>L1 LLCE Anglais </h4>
						<p>J'ai pris une route différente car mon niveau en Anglais est satisfaisant mais les perspectives professionnelles ne me convenait pas.</p>
					</div>
				</div>
				<div class="container-time left">
					<div class="content">
						<img src="../images/Logo-Rennes1.jpg" alt="Rennes1-logo" class="img-fluid">
						<h2>2015-2016</h2>
						<h4>Licence MIEE option informatique</h4>
						<p>J'ai quitté cette formation car l'informatique était trop théorique et ne correspondait pas à mes attentes.</p>
					</div>
				</div>
				<div class="container-time right">
					<div class="content">
						<img src="../images/Logo-Chaptal.JPG" alt="Chaptal-logo" class="img-fluid" height="75px">
						<h2>2016</h2>
						<h4>Baccalauréat STI2D-SIN (Systèmes Informatiques et Numériques)</h4>
						<p>J'ai choisi cette filière car j'aime les matières scientifiques et l'informatique.</p>
					</div>
				</div>
			</div>


			<!-- Google Maps 
			<div id="googleMap" style="width:100%;height:420px;"></div>
			<script>
				function myMap() {
					myCenter = new google.maps.LatLng(41.878114, -87.629798);
					var mapOptions = {
						center: myCenter,
						zoom: 12,
						scrollwheel: false,
						draggable: false,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

					var marker = new google.maps.Marker({
						position: myCenter,
					});
					marker.setMap(map);
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
			-->


			<!-- Footer -->
			<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
				<a href="mentions.php">Mentions légales</a>

				<div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
					<span class="w3-text w3-padding w3-teal w3-hide-small">Revenir en haut</span>
					<a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    				<i class="fa fa-chevron-circle-up"></i></span>
					</a>
				</div>
			</footer>

			<script>
				// Used to toggle the menu on smaller screens when clicking on the menu button
				function openNav() {
					var x = document.getElementById("navDemo");
					if (x.className.indexOf("w3-show") == -1) {
						x.className += " w3-show";
					} else {
						x.className = x.className.replace(" w3-show", "");
					}
				}
			</script>

</body>

</html>