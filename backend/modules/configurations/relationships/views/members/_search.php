<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtmembersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtmembers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_id') ?>

    <?= $form->field($model, 'member_group_id') ?>

    <?= $form->field($model, 'member_identity_type_id') ?>

    <?= $form->field($model, 'member_identity_number') ?>

    <?= $form->field($model, 'member_code') ?>

    <?php // echo $form->field($model, 'member_sex') ?>

    <?php // echo $form->field($model, 'member_address') ?>

    <?php // echo $form->field($model, 'member_city_id') ?>

    <?php // echo $form->field($model, 'member_address_zipcode') ?>

    <?php // echo $form->field($model, 'member_contact_phone') ?>

    <?php // echo $form->field($model, 'member_contact_mobile') ?>

    <?php // echo $form->field($model, 'member_contact_email') ?>

    <?php // echo $form->field($model, 'member_picture') ?>

    <?php // echo $form->field($model, 'member_remark') ?>

    <?php // echo $form->field($model, 'member_created') ?>

    <?php // echo $form->field($model, 'member_updated') ?>

    <?php // echo $form->field($model, 'member_status') ?>

    <?php // echo $form->field($model, 'member_register_date') ?>

    <?php // echo $form->field($model, 'member_card_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
