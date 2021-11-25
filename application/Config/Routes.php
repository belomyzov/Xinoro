<?php 

	return [

		/*
			Admin Panel
		*/

		'admin/login' => [
			'controller' => 'Admin',
			'action' => 'AdminLogin',
		],

		'admin/panel' => [
			'controller' => 'Admin',
			'action' => 'Panel',
		],

		/*
			User site
		*/

		'' => [
			'controller' => 'Index',
			'action' => 'Index',
		],	

		'index' => [
			'controller' => 'Index',
			'action' => 'Index',
		],
	];

?>