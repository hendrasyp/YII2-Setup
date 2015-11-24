<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtmembers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_group_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_identity_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_identity_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_sex')->dropDownList([ 'MALE' => 'MALE', 'FEMALE' => 'FEMALE', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'member_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_address_zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_contact_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_contact_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_created')->textInput() ?>

    <?= $form->field($model, 'member_updated')->textInput() ?>

    <?= $form->field($model, 'member_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'member_register_date')->textInput() ?>

    <?= $form->field($model, 'member_card_status')->dropDownList([ 'NOT YET' => 'NOT YET', 'DONE' => 'DONE', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
