<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtCountriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mt-countries-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'country_id') ?>

    <?= $form->field($model, 'country_name') ?>

    <?= $form->field($model, 'country_created') ?>

    <?= $form->field($model, 'country_updated') ?>

    <?= $form->field($model, 'country_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
