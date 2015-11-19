<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'username',[
            'template'=>'{input}<span class="glyphicon glyphicon-envelope form-control-feedback"></span>'
        ])->textInput(['class'=>'form-control','placeholder'=>'some@email.you']); ?>
        <!--<input type="email" class="form-control" placeholder="Email">//-->
        
    </div>
    <div class="form-group has-feedback">
        <?= $form->field($model, 'password',[
            'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>'
        ])->passwordInput(['class'=>'form-control','placeholder'=>'Some Password']) ?>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <?= $form->field($model, 'rememberMe',['template'=>'{label}{input}'])->checkbox() ?>
            </div>
        </div><!-- /.col -->
        <div class="col-xs-4">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>//-->
        </div><!-- /.col -->
    </div>
<?php ActiveForm::end(); ?>

<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
</div><!-- /.social-auth-links -->

<a href="#">I forgot my password</a><br>
<a href="register.html" class="text-center">Register a new membership</a>
