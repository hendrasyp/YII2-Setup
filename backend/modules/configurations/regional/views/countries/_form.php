<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MtCountries */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
			'options' => ['class' => 'form-horizontal'],
			'fieldConfig'=>[
				'template'=>'{label}<div class="col-sm-10">{input}<div class="help-block">{error}</div></div>',
				'labelOptions' => ['class' => 'col-sm-2 control-label'],
			],
		]); ?>
<div class="box-body mt-countries-create">
		<?php echo $form->errorSummary($model); ?>
    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]); ?>
    <?= $form->field($model, 'country_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => 'Status']); ?>
    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
