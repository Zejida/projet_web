<?php
include ("data.php");
if (isset($_GET['cle'])) {		// Si le paramètre existe
	$cle = $_GET['cle'];
	if (!array_key_exists($cle, $arr_articles)) {
		$article_existe = false;		// Si la clé n'existe pas dans le tableau
	} else {
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
		<meta charset="utf-8" />
		<link rel="stylesheet" href="resetCSS.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<header>
				<?php if ($article_existe): ?> 		<!-- Si la clé et le paramètre existe -->
			<h1><?php echo $arr_articles[$cle]['title']; ?></h1>
		</header>
		<main>
			<ul>
				<li><?php echo $element[$cle]['description1']; ?></li>
				<li><?php echo $element[$cle]['coordonnees1']; ?></li>
					
				<li><?php echo $element[$cle]['description2']; ?></li>
				<li><?php echo $element[$cle]['coordonnees2']; ?></li>
					
				<li><?php echo $element[$cle]['description3']; ?></li>
				<li><?php echo $element[$cle]['coordonnees3']; ?></li>
					
				<li><?php echo $element[$cle]['description4']; ?></li>
				<li><?php echo $element[$cle]['coordonnees4']; ?></li>
			</ul>
			<?php else: ?>
			<!-- Si la clé ou le paramètre n'existe pas -->
			<p> Coucou, l'article que tu veux n'existe pas donc va bien niquer ta mère! BAM!</p>
			<?php endif; ?>
		</main>
	</body>
	
	<footer>
	</footer>
</html>