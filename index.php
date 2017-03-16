<?php
include ("data.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="resetCSS.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<header>
			<h1>Halle au frais</h1>
			<div id="menu"> <!-- menu déroulant -->
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="prod.php">Commerçants</a>
						<ul>
							<li><a href="#">Traiteurs</a></li>
							<li><a href="#">Rotissiers</a></li>
							<li><a href="#">Bouchers</a></li>
							<li><a href="#">Poissoniers</a></li>
							<li><a href="#">Primeurs</a></li>
							<li><a href="#">Epiciers</a></li>
							<li><a href="#">Boulangers</a></li>
							<li><a href="#">Fromagers</a></li>
							<li><a href="#">Cavistes</a></li>
						</ul>
					</li>
					<li><a href="actu.php">Actualités et Événements</a></li>
					<li><a href="qui.php">Informations pratiques</a></li>
					<li><a href="contact.php">Nous contacter</a></li>
				</ul>
			</div>
		</header>	

		<section id="slideshow">  <!-- slide -->
			<div class="container">  
				<div class="c_slider"></div>  
				<div class="slider">  
					<figure>  
						<img src="img/sl_i1.jpg" alt="" width="700" height="340" />  
						<figcaption>Traiteurs</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i2.jpg" alt="" width="700" height="340" />  
						<figcaption>Rotissiers</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i3.jpg" alt="" width="700" height="340" />  
						<figcaption>Bouchers</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i4.jpg" alt="" width="700" height="340" />  
						<figcaption>Poissoniers</figcaption>  	
					</figure> 
					<figure>  
						<img src="img/sl_i5.jpg" alt="" width="700" height="350" />  
						<figcaption>Primeurs</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i6.jpg" alt="" width="700" height="340" />  
						<figcaption>Epiciers</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i7.jpg" alt="" width="700" height="340" />  
						<figcaption>Boulangers</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i8.jpg" alt="" width="700" height="340" />  
						<figcaption>Fromagers</figcaption>  
					</figure>
					<figure>  
						<img src="img/sl_i9.jpg" alt="" width="700" height="340" />  
						<figcaption>Cavistes</figcaption>  
					</figure>
				</div>  
			</div>  
		</section>  
	</h2>
	</body>
	
	<footer>
		<div class="grid grid-pad footer_top">
			<div class="col-1-3">
				<div class="content">
					<p>La Halle au Frais</p>
					<p>Centre Commercial Les Halles</p>
					<p>22b Rue du Général Leclerc</p>
					<p>80000 Amiens</p>						
					<p> </p>
					<p>Horaires</p>
					<p>Du mardi au samedi de 9h à 13h et de 15h à 19h</p>
					<p>Le dimanche de 9h à 12h30</p>	
				</div>
			</div>
			<div class="col-1-3">
				<div class="content">
					<a href="cvg.pdf" target="_blank">
						<img class="imgfooter" class="cvg" src="img/tempo/fb.png" alt="Rejoignez nous " title="Rejoignez nous"/>
					</a>					
				</div>
			</div>
			<div class="col-1-3">
				<div class="content">
					<img class="imgfooter2" src="img/tempo/avis.png" alt="avis_verifié"/>					
				</div>
			</div>
		</div>
		<p id="copyright">La Halle au Frais © 2017 | All rights reserved.</p>				
	</footer>
</html>