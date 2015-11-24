<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtmembergroupsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mtmembergroups-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'member_group_id') ?>

    <?= $form->field($model, 'member_group_code') ?>

    <?= $form->field($model, 'member_group_name') ?>

    <?= $form->field($model, 'member_group_price') ?>

    <?= $form->field($model, 'member_group_remark') ?>

    <?php // echo $form->field($model, 'member_group_created') ?>

    <?php // echo $form->field($model, 'member_group_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
