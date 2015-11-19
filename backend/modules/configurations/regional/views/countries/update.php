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
<div class="mt-countries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
