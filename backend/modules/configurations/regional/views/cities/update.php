<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtcities */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mtcities',
]) . ' ' . $model->city_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtcities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city_id, 'url' => ['view', 'id' => $model->city_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary mtcities-update">
	<?php echo yii\base\View::render('_menu',['title'=>'Edit City']) ?>
	<div class="box-body mt-mtcities-update">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>