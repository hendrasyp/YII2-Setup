<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtmembers */

$this->title = Yii::t('app', 'Create Mtmembers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtmembers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
