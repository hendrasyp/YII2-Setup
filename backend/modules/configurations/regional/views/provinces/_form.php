<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Mtcountries;
/* @var $this yii\web\View */
/* @var $model common\models\Mtprovinces */
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
    <?= $form->field($model, 'province_country_id')->dropDownList(
			ArrayHelper::map(Mtcountries::find()->all(),'country_id','country_name'),['prompt'=>'Select Country']
		)->label('Country') ?>
    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>
	  <?php //echo $form->field($model, 'province_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => 'Status'])->label('Status') ?>

    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>