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
<div class="box box-primary">
	<?php echo yii\base\View::render('_menu') ?>
    <?//= $this->renderPartial( '_menu'); ?>
	<div class="box-body mt-countries-trash">
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
						return Html::a('<span class="fa fa-reply"></span>', $url, [
									'title' => Yii::t('app', 'Restore'),
						]);
					}
				],
				'urlCreator' => function ($action, $model, $key, $index) {
					if ($action === 'restore') {
						$url = Yii::$app->urlManager->createUrl('configurations/regional/countries/restore?id='.$model->country_id); // your own url generation logic
						return $url;
					}
				}
			],
        ],
    ]); ?>

	</div>
</div>