<?php
	include ("/data/data.php");

	if (isset($_GET['cle'])) // Si le paramètre existe
	{ 
		$cle = $_GET['cle'];
		if (!array_key_exists($cle, $arr_articles)) // Si la clé n'existe pas dans le tableau
		{ 
			$article_existe = false;
		} 
		else 
		{
			$article_existe = true;
		}
	}
	else {
		$article_existe = false;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="assets/simplegrid.css"/>
		<link rel="stylesheet" href="assets/reset-css.css"/>
		<link rel="stylesheet" href="assets/style.css"/>
		<meta charset="utf-8" />
	</head>
	
	<body>
		<header>
			<?php include ("header.php"); ?>
			<?php if ($article_existe): ?> 		<!-- Si la clé et le paramètre existe -->
			<h1><?php echo $arr_article[$cle]['title']; ?></h1>
		</header>
		<main>
			<ul>
				<h2>
					<br> </br>
					<br> </br>
					<li><?php echo $arr_article[$cle]['description1']; ?></li>
					<li><?php echo $arr_article[$cle]['coordonnees1']; ?></li>
					<br> </br>
					<li><?php echo $arr_article[$cle]['description2']; ?></li>
					<li><?php echo $arr_article[$cle]['coordonnees2']; ?></li>
					<br> </br>
					<li><?php echo $arr_article[$cle]['description3']; ?></li>
					<li><?php echo $arr_article[$cle]['coordonnees3']; ?></li>
					<br> </br>
					<li><?php echo $arr_article[$cle]['description4']; ?></li>
					<li><?php echo $arr_article[$cle]['coordonnees4']; ?></li>
					<br> </br>
				</h2>
			</ul>
			<?php else: ?>			<!-- Si la clé ou le paramètre n'existe pas -->
				<p> OUUUPS! Cette page n'existe pas.</p>
			<?php endif; ?>
		</main>
	</body>
	
	<footer>
		<?php include ("footer.php"); ?>
	</footer>
</html>