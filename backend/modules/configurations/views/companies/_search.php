<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CompaniesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'company_name') ?>

    <?= $form->field($model, 'company_address') ?>

    <?= $form->field($model, 'company_country_id') ?>

    <?= $form->field($model, 'company_province_id') ?>

    <?php // echo $form->field($model, 'company_city_id') ?>

    <?php // echo $form->field($model, 'company_zipcode') ?>

    <?php // echo $form->field($model, 'company_email') ?>

    <?php // echo $form->field($model, 'company_phone') ?>

    <?php // echo $form->field($model, 'company_phone_ii') ?>

    <?php // echo $form->field($model, 'company_contact_person') ?>

    <?php // echo $form->field($model, 'company_website') ?>

    <?php // echo $form->field($model, 'company_status') ?>

    <?php // echo $form->field($model, 'company_key') ?>

    <?php // echo $form->field($model, 'company_logo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
