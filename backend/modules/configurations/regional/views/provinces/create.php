<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtprovinces */

$this->title = Yii::t('app', 'Create Mtprovinces');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtprovinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary mtprovinces-create">
	<?php echo yii\base\View::render('_menu',['title'=>'Create Province']) ?>
	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
