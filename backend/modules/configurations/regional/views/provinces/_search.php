<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtprovincesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtprovinces-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'province_id') ?>

    <?= $form->field($model, 'province_name') ?>

    <?= $form->field($model, 'province_country_id') ?>

    <?= $form->field($model, 'province_created') ?>

    <?= $form->field($model, 'province_updated') ?>

    <?php // echo $form->field($model, 'province_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
