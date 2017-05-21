<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Erreur sur le formulaire</title>
	</head>

	<body>
		<p>
			<?php
				if(!empty($_POST['choix'])) {
					if($_POST['choix'] == 'choix1'){
						if(!empty($_POST['name1']) && !empty($_POST['prenom']) && !empty($_POST['login']) && !empty($_POST['mdp_ut2'])) {
							echo 'Les informations ont bien été mis à jour dans la base de données.';
						} 
						else {
							echo 'Veuillez remplir les champs.';
						}
					}
					/*elseif ($_POST['mail'] == 'mail') {
						if (!empty($_POST['mail'])) {
							echo 'Vous êtes enregistré dans la base de données';
						}
					}*/
				
				}
					
				
			?>
		</p>
	</body>
</html>