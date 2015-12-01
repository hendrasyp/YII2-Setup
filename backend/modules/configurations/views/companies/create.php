<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Companies */

$this->title = Yii::t('app', 'Create Companies');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary companies-create">
	<?php echo yii\base\View::render('_menu',['title'=>'Create Company']) ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
