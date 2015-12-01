<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
			'options' => ['class' => 'form-horizontal'],
			'fieldConfig'=>[
				'template'=>'{label}<div class="col-sm-10">{input}<div class="help-block">{error}</div></div>',
				'labelOptions' => ['class' => 'col-sm-2 control-label'],
			],
		]); ?>
<div class="box-body mtmembergroups-form">
		<?php echo $form->errorSummary($model); ?>
    <?= $form->field($model, 'member_group_name')->textInput(['maxlength' => true]) ?>
		<div class="form-group field-mtmembergroups-member_group_price required">
			<label class="col-sm-2 control-label" for="mtmembergroups-member_group_price">Member Group Price</label>
				<div class="col-sm-2">
					<?= $form->field($model, 'member_group_price')->input('number')->label(false); ?>
				<div class="help-block"><div class="help-block"></div></div>
			</div>
		</div>

    <?= $form->field($model, 'member_group_remark')->textarea(['rows' => 6]) ?>
    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>