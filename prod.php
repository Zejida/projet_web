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
			<?php include ("header.php"); ?>
		</header>
		<h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare augue in urna congue, sit amet vehicula dui pharetra. Phasellus sodales rutrum leo, in tincidunt dolor cursus at. Nulla quis congue lacus. Maecenas vitae ipsum cursus, elementum dui molestie, luctus augue. Sed lobortis, nunc vel pellentesque luctus, odio justo imperdiet enim, sit amet commodo nibh enim quis elit. Vestibulum eu quam eu purus hendrerit maximus pellentesque nec erat. Sed facilisis iaculis libero, eu placerat quam facilisis maximus. Cras eleifend tempor urna id vestibulum. Mauris venenatis dui in erat viverra condimentum. Nulla facilisi. Quisque et vestibulum quam, ut commodo dui. Integer tellus erat, viverra quis lacus commodo, hendrerit suscipit libero. Nulla ut odio magna. Nulla maximus facilisis leo, non sagittis nunc rutrum sit amet. Nullam ornare pulvinar aliquet. Praesent suscipit commodo velit, nec sodales nunc efficitur id.</p>
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
		</h4>
		<footer>
			<?php include ("footer.php"); ?>
		</footer>
	</body>
</html>