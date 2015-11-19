<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'configurations' => [
            'class' => 'backend\modules\configurations\Configurations',
						'modules'=>[
							'regional' => [
									'class' => 'backend\modules\configurations\regional\Regional',
							],
						],
        ],
    ],
    'components' => [
		'request'=>[
			'class' => 'common\components\Request',
			'web'=> '/backend/web',
			'adminUrl' => '/admin'
		],
		'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false,
		],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'assetManager' => [
            'bundles' => [
                'all' => [
                    'class' => 'yii\web\AssetBundle',
                    'basePath' => '@webroot/assets',
                    'baseUrl' => '@web/assets',
                    'css' => ['all-xyz.css'],
                    'js' => ['all-xyz.js'],
                ],
                // 'A' => ['css' => [], 'js' => [], 'depends' => ['all']],
                // 'B' => ['css' => [], 'js' => [], 'depends' => ['all']],
                // 'C' => ['css' => [], 'js' => [], 'depends' => ['all']],
                // 'D' => ['css' => [], 'js' => [], 'depends' => ['all']],
            ],
        ],
    ],
    'params' => $params,
];
