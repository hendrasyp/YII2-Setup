<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtprovinces */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mtprovinces',
]) . ' ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtprovinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="box box-primary mtprovinces-update">
	<?php echo yii\base\View::render('_menu',['title'=>'Edit Province']) ?>
	<div class="box-body mt-countries-create">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>