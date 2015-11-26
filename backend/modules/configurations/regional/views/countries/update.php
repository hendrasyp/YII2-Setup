<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MtCountries */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mt Countries',
]) . ' ' . $model->country_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mt Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country_id, 'url' => ['view', 'id' => $model->country_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary">
	<?php echo yii\base\View::render('_menu',['title'=>'Edit']) ?>
	<div class="box-body mt-countries-create">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>
