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
			<div id="menu">
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
	</body>
	
	<footer>
	</footer>
</html>
<?php foreach ($arr_articles as $cle => $element): ?>
		<article>
			<section>
				<ul>
					<li><h3><?php echo $element['title']; ?></h3></li>
					<li><a href="news.php?cle=<?php echo $cle; ?>">Lire la suite</a></li>
					<li><?php echo $element['description1']; ?></li>
					<li><?php echo $element['coordonnees1']; ?></li>
					
					<li><?php echo $element['description2']; ?></li>
					<li><?php echo $element['coordonnees2']; ?></li>
					
					<li><?php echo $element['description3']; ?></li>
					<li><?php echo $element['coordonnees3']; ?></li>
					
					<li><?php echo $element['description4']; ?></li>
					<li><?php echo $element['coordonnees4']; ?></li>
				</ul>
			</section>
		</article>
		<?php endforeach; ?>