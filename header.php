<?php
	include ("/data/data.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/simplegrid.css"/>
		<link rel="stylesheet" href="assets/reset-css.css"/>
		<link rel="stylesheet" href="assets/style.css"/>
	</head>
	
	<body>
		<header>
			<div id="menu"> <!-- menu déroulant -->
				<ul>
				<img src="img/logo.png" alt="" width="120" height="120"/>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="prod.php">Commerçants</a>
						<ul>
						<?php foreach ($arr_articles as $cle => $element): ?>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Rotissiers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Bouchers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Poissoniers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Primeurs</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Epiciers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Boulangers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Fromagers</a></li>
							<li><a href="news.php?cle=<?php echo $cle; ?>">Cavistes</a></li>
						<?php endforeach ?>
						</ul>
					</li>
					<li><a href="actu.php">Actualités et Événements</a></li>
					<li><a href="qui.php">Informations pratiques</a></li>
					<li><a href="contact.php">Nous contacter</a></li>
				</ul>
			</div>
		</header>
	</body>
</html>