<?php
	return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
		'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
			'allowedIPs' => ['127.0.0.1', '::1',]
        ],
        // ...
    ],
		'adminmenus'=>[
			[
				'menu_name'=>'Dashboard',
				'menu_title'=>'Dashboard',
				'menu_icon_class'=>'fa fa-dashboard',
				'menu_url'=>'#',
				'menu_has_child'=>[],
			],
			[
				'menu_name'=>'Configurations',
				'menu_title'=>'Configurations',
				'menu_icon_class'=>'fa fa-gear',
				'menu_url'=>'#',
				'menu_has_child'=>[
					[
						'parent_menu_name'=>'Regional',
						'submenu'=>[
							[
								'name'=>'Countries',
								'url'=>'configuration/regionals/countries',
							],
							[
								'name'=>'Province',
								'url'=>'#',
							],
							[
								'name'=>'Cities',
								'url'=>'#',
							],
						],
					],
					[
						'parent_menu_name'=>'Relationship',
						'submenu'=>[
							[
								'name'=>'Supplier',
								'url'=>'#',
								'submenu'=>[
									[
										'name'=>'Jenis Supplier',
										'url'=>'#',
									],
									[
										'name'=>'Supplier',
										'url'=>'#',
									],
								],
							],
							[
								'name'=>'Member',
								'url'=>'#',
							],
						],
					],
				],
			],
		],	// END OF adminmenus
	];
