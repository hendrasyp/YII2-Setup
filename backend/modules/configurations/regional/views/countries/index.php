<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtCountriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Regional > Countries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
	<?php echo yii\base\View::render('_menu',['title'=>'Countries']) ?>
    <?//= $this->renderPartial( '_menu'); ?>
	<div class="box-body mt-countries-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'id' => 'grid-mtcountries',
        'filterModel' => $searchModel,
				'layout'=>"{items}\n{pager}\n{summary}",
        'columns' => [
						[
							'class' => 'yii\grid\CheckboxColumn',
							'headerOptions' => ['width' => '20'],
						],
            [
							'class' => 'yii\grid\SerialColumn',
							'headerOptions' => ['width' => '20'],
						],
            [
							'attribute'=>'country_name',
							'label'=>Yii::t('app','Name'),
						],
						[
							'attribute'=>'country_updated',
							'contentOptions'=>['style'=>'text-align:center'],
							'label'=>'Last Update',
							'format'=>['date','php:d M Y'],
							'headerOptions' => ['width' => '120'],
						],
            [
							'class' => 'yii\grid\ActionColumn',
							'header'=>'Action',
							'template'=>'{update} {delete}',
							'headerOptions' => ['width' => '60'],
							//'template'=>'{view} {update} {delete} {link}',
							'buttons'=>[
							'update' => function ($url,$model) {
                    return Html::a(
                        '<span class="fa fa-pencil"></span>',
                        $url);
                },
								'link' => function ($url,$model,$key) {
                        return Html::a('Action', $url);
                },
							],
						],
        ],
				'tableOptions' =>['class' => 'table table-striped table-bordered'],
				'showFooter' => false,
    ]); ?>
	</div>
</div>

<?php 
    $this->registerJs('var baseURL=\''.Url::base().'/configurations/regional/countries/'.'\'',\yii\web\View::POS_END); 
		$this->registerJsFile(
			'scripts/countries.js', 
			[
				'depends'=>
					[backend\assets\DashboardAsset::className()],
			],\yii\web\View::POS_END);
?>


