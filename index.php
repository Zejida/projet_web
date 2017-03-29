<?php	
	require_once 'libs/idiorm.php';
	require_once 'libs/paris.php';
	require_once 'libs/flight/Flight.php';
	
	ORM::configure('sqlite:data/halle.sqlite');
	
	require_once 'models/utilisateurs.php';
	
	function admin_utilisateurs(){
		echo 'Ceci est la page d administration utilisateurs';
	}
	
	function hello(){
		$utilisateurs = Model::factory('Utilisateurs')->find_many();
		echo 'Nombre utilisateurs: ' . count($utilisateurs);
	}
	
	
	Flight::route('/admin/utilisateurs/', 'admin_utilisateurs');
	Flight::route('/', 'hello');
	
	Flight::start();
	
?>