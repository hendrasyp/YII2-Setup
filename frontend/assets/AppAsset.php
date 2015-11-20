<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'themes/awscomingsoon/css/bootstrap.min.css',
		'themes/awscomingsoon/css/font-awesome.min.css',
		'themes/awscomingsoon/css/main.css',
        'css/site.css',
    ];
    public $js = [
		'themes/awscomingsoon/js/wow.min.js',
		'js/jquery-migrate.min.js',
		'themes/awscomingsoon/js/retina.min.js',
		'themes/awscomingsoon/js/tweetie.min.js',
		'themes/awscomingsoon/js/jquery.downCount.js',
		'themes/awscomingsoon/js/jquery.form.min.js',
		'themes/awscomingsoon/js/jquery.validate.min.js',
		'themes/awscomingsoon/js/jquery.simple-text-rotator.min.js',
		'themes/awscomingsoon/js/main.js',
		'https://maps.googleapis.com/maps/api/js?v=3.exp',
		'themes/awscomingsoon/js/gmap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
