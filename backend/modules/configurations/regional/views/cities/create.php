<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtcities */

$this->title = Yii::t('app', 'Create Mtcities');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtcities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtcities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
