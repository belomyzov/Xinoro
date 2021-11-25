<?php 

	// 
	//    Хранилище маршрутов для сайта
	//

	return [

		/*
			Admin Panel
		*/

		'admin' => [
			'controller' => 'Admin',
			'action' => 'AdminLogin',
			'permission' => 'users',
		],

		'admin/login' => [
			'controller' => 'Admin',
			'action' => 'AdminLogin',
			'permission' => 'users',
		],

		/*
			User site
		*/

		'' => [
			'controller' => 'StartPage',
			'action' => 'Index',
			'permission' => 'All',
		],	

		'index' => [
			'controller' => 'StartPage',
			'action' => 'Index',
			'permission' => 'All',
		],

		'account/login' => [
			'controller' => 'Account',
			'action' => 'Login',
			'permission' => 'All',
		],

		'account/register' => [
			'controller' => 'Account',
			'action' => 'Register',
			'permission' => 'All',
		],

		'account/home' => [
			'controller' => 'Account',
			'action' => 'Home',
			'permission' => 'users',
		],

	];

?>