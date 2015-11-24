<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */

$this->title = Yii::t('app', 'Create Mtmembergroups');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembergroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtmembergroups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
