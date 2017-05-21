<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<title>Formulaire Client</title>
	</head>

	<body>
		<div class="container">

			<header class="page-header">
				<h1>Bienvenue sur le formulaire client </h1>
			</header>

			<section class="row">
				<form method="POST" action="cible.php">

					<header class="page-header">
						<h3>Nouveau client</h3>
					</header>

					<div class="col-lg-12"><tr><td><label for="choix">Que voulez vous faire ? </label></td><td>
						<select name="choix">
							<option value="choix1">Vous êtes un nouveau client </option>
							<option value="choix2">Vous voulez modifier votre profil</option>
						</select></td></tr>
						</br></br>
					</div>

					<div class="col-lg-6"><tr><td><label for="name1">Nom : </label></td><td><input type="text" name="name1" id="name1"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="prenom">Prénom : </label></td><td><input type="text" name="prenom" id="prenom"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="login">Choix du login: </label></td><td><input type="text" name="login" id="login"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="mdp_ut">Choix de votre mot de passe : </label></td><td><input type="text" name="mdp_ut" id="mdp_ut"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="mdp_ut2">Confirmation du mot de passe : </label></td><td><input type="text" name="mdp_ut2" id="mdp_ut2"></td></tr></div>
					

				</form>
			</section>
			</br>

			<section class="row">
				<form method="POST" action="cible.php">

					<header class="page-header">
						<h3>Votre mail</h3>
					</header>
					
					<div class="col-lg-6"><tr><td><label for="mail">Entrer votre mail : </label></td><td><input type="text" name="mail" id="mail"></td></tr></div>
					<div class="col-lg-6"><tr><td><label for="mail1">Confirmation de l'adresse mail : </label></td><td><input type="text" name="mail1" id="mail1"></td></tr></div>
					
				</form>
			</section>
			
			<section class="row">
				<form method="POST" action="cible.php">

					<header class="page-header">
						<h3>Abonnement à la Newsletter</h3>
					</header>
					
					<div class="col-lg-12"><tr><td><label for="choix">Voulez-vous vous abonner à la Newsletter ? </label></td><td>
						<select name="choix">
							<option value="choix1">Oui </option>
							<option value="choix2">Non</option>
						</select></td></tr>
						</br></br>
					</div>
					
					<div class="col-lg-12"><tr><td><input type="submit" value="Valider"></td></tr></div>
				</form>
			</section>

		</div>		
	</body>	
</html>