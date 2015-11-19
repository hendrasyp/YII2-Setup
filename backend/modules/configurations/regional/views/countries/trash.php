<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'country_name',
            [
				'class' => 'yii\grid\ActionColumn',
				'header'=>'Action',
				'template'=>'{restore}',
				'buttons'=>[
					'restore' => function ($url, $model) {
						return Html::a('<span class="glyphicon glyphicon-retweet"></span>', $url, [
									'title' => Yii::t('app', 'Restore'),
						]);
					}
				],
				'urlCreator' => function ($action, $model, $key, $index) {
					if ($action === 'restore') {
						$url = Yii::$app->urlManager->createUrl('countries/restore?id='.$model->country_id); // your own url generation logic
						return $url;
					}
				}
			],
        ],
    ]); ?>

</div>
