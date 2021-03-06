<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mtidentitytypes */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mtidentitytypes',
]) . ' ' . $model->identity_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtidentitytypes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->identity_id, 'url' => ['view', 'id' => $model->identity_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mtidentitytypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
