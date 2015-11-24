<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mtmembergroups',
]) . ' ' . $model->member_group_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembergroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_group_id, 'url' => ['view', 'id' => $model->member_group_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mtmembergroups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
