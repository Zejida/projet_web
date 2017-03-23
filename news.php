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
			<?php if ($article_existe): ?> 		<!-- Si la clé et le paramètre existe -->
			<?php echo $arr_articles[$cle]['title']; ?>
		</header>
		<main>
			<ul>
				<li><?php echo $arr_articles[$cle]['description']; ?></li>
				<li><?php echo $arr_articles[$cle]['coordonnees']; ?></li>
					
				<li><?php echo $arr_articles[$cle]['description']; ?></li>
				<li><?php echo $arr_articles[$cle]['coordonnees']; ?></li>
					
				<li><?php echo $arr_articles[$cle]['description']; ?></li>
				<li><?php echo $arr_articles[$cle]['coordonnees']; ?></li>
					
				<li><?php echo $arr_articles[$cle]['description']; ?></li>
				<li><?php echo $arr_articles[$cle]['coordonnees']; ?></li>
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