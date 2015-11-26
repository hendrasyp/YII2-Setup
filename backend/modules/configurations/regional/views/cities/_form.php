<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Mtcountries;
use common\models\Mtprovinces;

?>

<?php $form = ActiveForm::begin([
			'options' => ['class' => 'form-horizontal'],
			'fieldConfig'=>[
				'template'=>'{label}<div class="col-sm-10">{input}<div class="help-block">{error}</div></div>',
				'labelOptions' => ['class' => 'col-sm-2 control-label'],
			],
		]); ?>
<div class="box-body mt-cities-create">
		<?php echo $form->errorSummary($model); ?>
		
		<?= $form->field($model, 'city_country_id')->dropDownList(
				ArrayHelper::map(Mtcountries::find()->all(),'country_id','country_name'),
				[
					'prompt'=>'Select Country',
					'onchange'=>'$.post("/admin/configurations/regional/provinces/list?id='.'"+$(this).val(),function(data){
						$("select#mtcities-city_province_id").html(data);
					});',
				]
				
		)->label('Country') ?>
    <?= $form->field($model, 'city_province_id')->dropDownList(
			ArrayHelper::map(Mtprovinces::find()->all(),'province_id','province_name'),['prompt'=>'Select Province']
		)->label('Province') ?>
    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>