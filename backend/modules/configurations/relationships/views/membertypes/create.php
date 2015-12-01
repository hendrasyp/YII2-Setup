<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */

$this->title = Yii::t('app', 'Create Mtmembergroups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembergroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary mtmembergroups-create">
	<?php echo yii\base\View::render('_menu',['title'=>'Create Member Type']) ?>
	
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
</div>