<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<title>Administrateur</title>
	</head>

	<body>
		<div class="container">

			<header class="page-header">
				<h1>Bienvenue sur l'interface administrateur</h1>
			</header>

			<section class="row">
				<form method="POST" action="cible.php">

					<header class="page-header">
						<h3>Les commerçants</h3>
					</header>

					<div class="col-lg-12"><tr><td><label for="choix">Que voulez vous faire ? </label></td><td>
						<select name="choix">
							<option value="choix1">Ajouter un commerçant</option>
							<option value="choix2">Supprimer un commerçant</option>
						</select></td></tr>
					</div>

					<div class="col-lg-6"><tr><td><label for="name1">Nom du commerçant : </label></td><td><input type="text" name="name1" id="name1"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="prenom">Prénom du commerçant : </label></td><td><input type="text" name="prenom" id="prenom"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="name2">Nom du commerce : </label></td><td><input type="text" name="name2" id="name2"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="adresse">Adresse du commerce : </label></td><td><input type="text" name="adresse" id="adresse"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="tel">Téléphone : </label></td><td><input type="tel" name="tel" id="tel"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="email">Adresse mail : </label></td><td><input type="email" name="email" id="email"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="url">Site web : </label></td><td><input type="url" name="url" id="url"></td></tr></br></br></div>
					<div class="col-lg-12"><tr><td><input type="submit" value="Valider"></td></tr></div>

				</form>
			</section>
			</br>

			<section class="row">
				<form method="POST" action="cible.php">

					<header class="page-header">
						<h3>Les évènements et actualités</h3>
					</header>

					<div class="col-lg-12"><tr><td><label for="choix">Que voulez vous faire ? </label></td><td>
						<select name="choix">
							<option value="choix1">Ajouter un évènement/actualité</option>
							<option value="choix2">Supprimer un évènement/actualité</option>
						</select></td></tr>
					</div>

					<div class="col-lg-6"><tr><td><label for="title">Titre de l'évenement : </label></td><td><input type="text" name="title" id="title"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="url2">Photo de l'évènement : </label></td><td><input type="url" name="url2" id="url2"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="date1">Date de publication de l'évènement : </label></td><td><input type="date" name="date1" id="date1"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="place">Lieu de l'évènement : </label></td><td><input type="text" name="place" id="place"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="date2">Date de l'évènement : </label></td><td><input type="date" name="date2" id="date2"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="url3">Miniature de l'évènement : </label></td><td><input type="url" name="url3" id="url3"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="body">Description : </label></td></tr></br>
						<textarea name="body" id="body" rows="20" cols="50">
						</textarea>
					</br></br></div>
					<div class="col-lg-12"><tr><td><input type="submit" value="Valider"></td></tr></div>

				</form>
			</section>

		</div>		
	</body>	
</html>
