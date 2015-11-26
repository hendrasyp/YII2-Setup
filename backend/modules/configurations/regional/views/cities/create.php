<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtcities */

$this->title = Yii::t('app', 'Create City');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary mtcities-create">
	<?php echo yii\base\View::render('_menu',['title'=>'Create City']) ?>
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
