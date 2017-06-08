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
			<center><img src="img/banniere/banniere.png" alt="" /></center>
			<div class="grid grid-pad">
				<section id="menu">
					<ul>
						<div class="col-1-5">
						   <div class="content">
								<h3><ul><li><a href="index.php">Accueil</a></li></ul></h3>
						   </div>
						</div>
						<div class="col-1-5">
							<div class="content">								
								<li>
									<h3><a href="prod.php">Commerçants</a></h3>
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
							</div>
						</div>
						<div class="col-1-5">
							<div class="content">
								<h3><li><a href="actu.php">Actualités</a></li></h3>
							</div>
						</div>
						<div class="col-1-5">
							<div class="content">
								<h3><li><a href="info.php">Infos pratiques</a></li></h3>
							</div>
						</div>
						<div class="col-1-5">
							<div class="content">
								<h3><li><a href="contact.php">Nous contacter</a></li></h3>
							</div>
						</div>
					</ul>
				</section>
			</div>
		</header>
	</body>
</html>