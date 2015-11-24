<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtmembergroups-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'member_group_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_group_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_group_price')->textInput() ?>

    <?= $form->field($model, 'member_group_remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'member_group_created')->textInput() ?>

    <?= $form->field($model, 'member_group_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
