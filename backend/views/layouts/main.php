<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;


DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
    	<meta charset="<?= Yii::$app->charset ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<?= Html::csrfMetaTags() ?>
    	<title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini fixed">
		<?php $this->beginBody() ?>
		<div class="wrapper">
			<header class="main-header">
				<?= $this->render( 'header', ['param'=> 'somevar'] ); ?>
			</header>

			<aside class="main-sidebar">
				<?= $this->render( 'sidebar', ['adminmenus'=>Yii::$app->params['adminmenus']] ); ?>
			</aside>
			<div class="content-wrapper">
				<section class="content-header">
		        	<h1>
						<?php echo (isset($this->params['moduleName'])?$this->params['moduleName']:'no title') ?>
						<small><?php //echo $this->params['subModuleName']; ?></small>
					</h1>
		          	<ol class="breadcrumb">
		            	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		            	<li class="active">Dashboard</li>
		          	</ol>
		        </section>
		        <section class="content">
	        		<?= $content ?>
		        </section>
			</div>
			<footer class="main-footer">
	        	<div class="pull-right hidden-xs">
	          	<b>Version</b> 2.3.0
	        	</div>
	        	<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
	      	</footer>
			<?= $this->render( 'rightsidebar', ['param'=> 'somevar'] ); ?>
		</div>
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>