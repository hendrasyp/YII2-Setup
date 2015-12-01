<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Companies */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
			'options' => ['class' => 'form-horizontal'],
			'fieldConfig'=>[
				'template'=>'{label}<div class="col-sm-10">{input}<div class="help-block">{error}</div></div>',
				'labelOptions' => ['class' => 'col-sm-2 control-label'],
			],
		]); ?>
<div class="box-body companies-form">
		<?php echo $form->errorSummary($model); ?>
<?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_country_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_province_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_zipcode')->textInput() ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_phone_ii')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_contact_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'company_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_logo')->textInput(['maxlength' => true]) ?>
    <div class="box-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


