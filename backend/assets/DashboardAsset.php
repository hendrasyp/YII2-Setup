<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        //'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'dist/css/ionicons.min.css',
        'css/font-googleapis.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
		'plugins/iCheck/flat/blue.css',
		'plugins/morris/morris.css',
		'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
		'plugins/datepicker/datepicker3.css',
		'plugins/daterangepicker/daterangepicker-bs3.css',
		'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        'css/site.css',
		'css/mycustoms.css',
    ];
    public $js = [
		'js/bootstrap.min.js',
		'js/jquery-ui.js',
		'js/button.brigde.js',
		'js/raphael-min.js',
		'plugins/morris/morris.min.js',
		'plugins/sparkline/jquery.sparkline.min.js',
		'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
		'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
		'plugins/knob/jquery.knob.js',
		'js/moment.min.js',
		'plugins/daterangepicker/daterangepicker.js',
		'plugins/datepicker/bootstrap-datepicker.js',
		'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
		'plugins/slimScroll/jquery.slimscroll.min.js',
		'plugins/fastclick/fastclick.min.js',
		'dist/js/app.min.js',
		'dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
