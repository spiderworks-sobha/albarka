<?php

return array(

	'url_prefix' => '/sw-admin',
	'admin_middleware' => 'auth:admin',

	/********* create an create_admin_menu function in model and add that model in this array to reflect in admin menu ***********/
	'menu' => [
		'items'=>[
			'pages'=>[
				'title' => 'Pages',
				'identifier' => 'pages',
				'model' => 'App\Models\Page',
			],
			'frontend_pages'=>[
				'title' => 'Internal Pages',
				'identifier' => 'frontend_pages',
				'model' => 'App\Models\FrontendPage',
			],
			'services'=>[
				'title' => 'Services',
				'identifier' => 'services',
				'model' => 'App\Models\Service',
			]
		],
		'positions'=>['Main Menu', 'Footer Menu'],
	],

	'category_types' => ['Blog', 'Event'],

	'services' => [
		'sections' => false,
	],

);
