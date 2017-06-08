<?php
	include ("/data/data.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="assets/simplegrid.css"/>
		<link rel="stylesheet" href="assets/reset-css.css"/>
		<link rel="stylesheet" href="assets/style.css"/>
		<meta charset="UTF-8" />
		<meta name="description" content="La Halle au Frais">
		<meta content="true" name="HandheldFriendly">
	</head>
	
	<body>
		<header>
			<?php include ("header.php"); ?>
		</header>
		<div class="grid grid-pad">
			<div class="col-1-1">
			   <div class="content">
				   <h3>
					<section id="slideshow">  <!-- slide -->
						<div class="container">  
							<div class="c_slider">
								<div class="slider">  	
									<figure>  
										<img src="img/slide/sl_i1.jpg" alt="" width="700" height="350" />  
										<figcaption>Traiteurs</figcaption>  
									</figure>
									<figure>  
											<img src="img/slide/sl_i2.jpg" alt="" width="700" height="350"  />  
											<figcaption>Rotissiers</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i3.jpg" alt="" width="700" height="350"  />  
										<figcaption>Bouchers</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i4.jpg" alt="" width="700" height="350"  />  
										<figcaption>Poissoniers</figcaption>  	
									</figure> 
									<figure>  
										<img src="img/slide/sl_i5.jpg" alt="" width="700" height="350"  />  
										<figcaption>Primeurs</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i6.jpg" alt="" width="700" height="350"  />  
										<figcaption>Epiciers</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i7.jpg" alt="" width="700" height="350"  />  
										<figcaption>Boulangers</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i8.jpg" alt="" width="700" height="350"  />  
										<figcaption>Fromagers</figcaption>  
									</figure>
									<figure>  
										<img src="img/slide/sl_i9.jpg" alt="" width="700" height="350"  />  
										<figcaption>Cavistes</figcaption>  
									</figure>
									</div>  
								</div>
							</div>
						</div>
					</section> 
				   </h3>
			   </div>
			</div>
		</div>
	</body>
	
	<footer>
		<?php include ("footer.php"); ?>
	</footer>
</html>