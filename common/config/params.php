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
				'menu_id'=>'dashboard',
				'menu_title'=>'Dashboard',
				'menu_icon_class'=>'fa fa-dashboard',
				'menu_url'=>'#1',
				'menu_has_child'=>[],
			],
			[
				'menu_name'=>'Configurations',
				'menu_id'=>'configurations',
				'menu_title'=>'Configurations',
				'menu_icon_class'=>'fa fa-gear',
				'menu_url'=>'#',
				'menu_has_child'=>[
					[
						'parent_menu_name'=>'Regional',
						'menu_icon_class'=>'fa fa-map-marker',
						'menu_url'=>'#',
						'menu_id'=>'regional',
						'submenu'=>[
							[
								'name'=>'Countries',
								'menu_id'=>'countries',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'countries',
							],
							[
								'name'=>'Province',
								'menu_id'=>'provinces',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'provinces',
							],
							[
								'name'=>'Cities',
								'menu_id'=>'cities',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'cities',
							],
						],
					],
					[
						'parent_menu_name'=>'Relationship',
						'menu_url'=>'#',
						'menu_id'=>'relationships',
						'menu_icon_class'=>'fa fa-link',
						'menu_id'=>'relationships',
						'submenu'=>[
							[
								'name'=>'Supplier',
								'menu_id'=>'supplier',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'#',
								'submenu'=>[
									[
										'name'=>'Jenis Supplier',
										'menu_icon_class'=>'fa fa-link',
										'menu_id'=>'jenissupplier',
										'url'=>'jenissuppliers',
									],
									[
										'name'=>'Supplier',
										'menu_id'=>'supplier',
										'menu_icon_class'=>'fa fa-link',
										'url'=>'suppliers',
									],
								],
							],
							[
								'name'=>'Membership',
								'menu_icon_class'=>'fa fa-link',
								'menu_id'=>'memberships',
								'url'=>'#',
								'submenu'=>[
									[
										'name'=>'Member',
										'menu_id'=>'member',
										'menu_icon_class'=>'fa fa-link',
										'url'=>'members',
									],
									[
										'name'=>'Jenis Member',
										'menu_id'=>'jenismember',
										'menu_icon_class'=>'fa fa-link',
										'url'=>'membertypes',
									],
								],
							],
						],
					],
				],
			],
		],	// END OF adminmenus
	];
