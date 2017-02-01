<?php include ("/data/d_index.php");?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="img\favicon\fav1.png"/>
		<link rel="stylesheet" href="assets/simplegrid.css"/>
		<link rel="stylesheet" href="assets/reset-css.css"/>
		<title>La Halle au Frais</title>
		<meta charset="UTF-8" />
		<meta name="description" content="La Halle au Frais">
		<meta content="true" name="HandheldFriendly">
	</head>
	<body>
		<header>
		<?php include ("header.php"); ?>
		</header>
		<main>
			<?php foreach ($articles as $article) : ?>
			<div class="grid grid-pad">
    			<div class="col-9-12">
    				<article class="articles">
    					<header>
                        <h<?php echo $i; ?>><?php echo $article['title']; ?></h<?php echo $i; ?>>
                    	</header>
                    	<section>
                    	<p><?php echo $article['description'], $article['date'] , $article['auteur'] ; $i+=1; ?></p>
                    	</section>
                	</article>
            	</div>
            </div>
        	<?php endforeach; ?>
        </main>
		<footer>
		</footer>
	</body>
</html>
