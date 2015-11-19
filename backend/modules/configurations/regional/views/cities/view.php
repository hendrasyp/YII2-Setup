<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mtcities */

$this->title = $model->city_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtcities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtcities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->city_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->city_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'city_id',
            'city_name',
            'city_created',
            'city_updated',
            'city_status',
            'city_country_id',
        ],
    ]) ?>

</div>
