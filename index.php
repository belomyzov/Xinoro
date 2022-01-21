<?php 

	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	# import modules
	require_once("core/core/router.php");
	require_once("core/core/model.php");
	require_once("core/core/view.php");
	require_once("core/core/controller.php");
	require_once("core/core/db.php");

	# create router and start xinoro
	$router = new Router();

	// var_dump($routes);
	// echo '<pre>';

?>