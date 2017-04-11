<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Administrateur</title>
	</head>

	<body>
		<p>
			<?php
				if(!empty($_POST['choix'])) {
					if($_POST['choix'] == 'choix1'){
						if(!empty($_POST['name1']) && !empty($_POST['prenom']) && !empty($_POST['name2']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['adresse']) && !empty($_POST['url'])) {
							echo 'Nom du commerçant : ' . $_POST['name1'] . '</br>';
							echo 'Prénom du commerçant : ' . $_POST['prenom'] . '</br>';
							echo 'Nom du commerce : ' . $_POST['name2'] . '</br>';
							echo 'Adresse du commerce : ' . $_POST['adresse'] . '</br>';
							echo 'Téléphone : ' . $_POST['tel'] . '</br>';
							echo 'Adresse mail : ' . $_POST['email'] . '</br>';
							echo 'Site web : ' . $_POST['url'] . '</br>';
						} 
						else {
							echo 'Veuillez remplir les champs.';
						}
					}
					elseif ($_POST['choix'] == 'choix2') {
						if(!empty($_POST['name2'])) {
							echo 'Le commerce a bien été supprimé de la base de données';
						}	
					}
				}
			?>
		</p>
	</body>
</html>
