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
			'locations'=>[
				'title' => 'Locations',
				'identifier' => 'locations',
				'model' => 'App\Models\Location',
			]
		],
		'positions'=>['Main Menu', 'Footer Menu', 'Bottom Menu'],
	],

	'category_types' => ['Blog', 'Event'],

	'services' => [
		'sections' => false,
	],

);
