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
				'parent_of' => NULL,
				'menu_title'=>'Dashboard',
				'menu_icon_class'=>'fa fa-dashboard',
				'menu_url'=>'#1',
				'submenu'=>[],
			],
			[
				'menu_name'=>'Configurations',
				'menu_id'=>'configurations',
				'parent_of' => NULL,
				'menu_title'=>'Configurations',
				'menu_icon_class'=>'fa fa-gear',
				'menu_url'=>'#',
				'submenu'=>[
					[
						'parent_menu_name'=>'Company',
						'menu_icon_class'=>'fa fa-map-marker',
						'parent_of' => 'configurations',
						'menu_url'=>'##',
						'menu_id'=>'companies',
						'submenu'=>[],
					],
					[
						'parent_menu_name'=>'Regional',
						'menu_icon_class'=>'fa fa-map-marker',
						'parent_of' => 'configurations',
						'menu_url'=>'#',
						'menu_id'=>'regional',
						'submenu'=>[
							[
								'name'=>'Countries',
								'menu_id'=>'countries',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'countries',
								'submenu'=>[],
							],
							[
								'name'=>'Province',
								'menu_id'=>'provinces',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'provinces',
								'submenu'=>[],
							],
							[
								'name'=>'Cities',
								'menu_id'=>'cities',
								'menu_icon_class'=>'fa fa-link',
								'url'=>'cities',
								'submenu'=>[],
							],
						],
					],
					[
						'parent_menu_name'=>'Relationship',
						'parent_of' => 'configurations',
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
										'submenu'=>[],
									],
									[
										'name'=>'Supplier',
										'menu_id'=>'supplier',
										'menu_icon_class'=>'fa fa-link',
										'url'=>'suppliers',
										'submenu'=>[],
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
										'submenu'=>[],
									],
									[
										'name'=>'Jenis Member',
										'menu_id'=>'jenismember',
										'menu_icon_class'=>'fa fa-link',
										'url'=>'membertypes',
										'submenu'=>[],
									],
								],
							],
						],
					],
				],
			],
		],	// END OF adminmenus
	];
