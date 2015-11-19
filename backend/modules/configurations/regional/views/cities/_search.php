<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtcitiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtcities-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'city_name') ?>

    <?= $form->field($model, 'city_created') ?>

    <?= $form->field($model, 'city_updated') ?>

    <?= $form->field($model, 'city_status') ?>

    <?php // echo $form->field($model, 'city_country_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
