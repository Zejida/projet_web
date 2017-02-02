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
			<div class="grid grid-pad">
				<div class="col-3-12">
    				<article class="left">
    					<?php foreach ($arr_index_left as $cat1) : ?>
    						<header>
                    		</header>
                    		<section>
                    		<p><?php echo $cat1['description'], $cat1['date'] , $cat1['auteur'] ; ?></p>
                    		</section>
                    	<?php endforeach; ?>
                	</article>
            	</div>
    			<div class="col-9-12">
    				<article class="articles">
    					<?php foreach ($arr_index_art as $cat2) : ?>
    						<header>
                        	<h<?php echo $i; ?>><?php echo $cat2['title']; ?></h<?php echo $i; ?>>
                    		</header>
                    		<section>
                    		<p><?php echo  $cat2['description'], $cat2['date'] , $cat2['auteur'] ; ?></p>
                    		</section>
                    	<?php endforeach; ?>
                	</article>
            	</div>
            </div>
        </main>
		<footer>
		</footer>
	</body>
</html>
