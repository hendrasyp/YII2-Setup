<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\CountriesAsset;
CountriesAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel common\models\MtCountriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Countries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-countries-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Lists'), ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Create Countries'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Trash'), ['trash'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'country_name',
			['attribute'=>'country_updated','label'=>'Last Update','format'=>['date','php:d M Y']],
            ['class' => 'yii\grid\ActionColumn','header'=>'Action'],
        ],
		'showFooter' => true,
    ]); ?>

</div>
