<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtcitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mtcities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtcities-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mtcities'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			'city_name',
            'city_created',
            'city_updated',
            'city_status',
            'city_country_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
