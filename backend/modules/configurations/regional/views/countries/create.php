<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MtCountries */

$this->title = Yii::t('app', 'Create Mt Countries');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mt Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
	<?php echo yii\base\View::render('_menu') ?>
	<div class="box-body mt-countries-create">
		<?= $this->render('_form', [
			'model' => $model,
		]) ?>
	</div>
</div>