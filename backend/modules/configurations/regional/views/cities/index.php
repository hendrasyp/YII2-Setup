<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtcitiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Regional > Cities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
	<?php echo yii\base\View::render('_menu',['title'=>'Cities']) ?>
	<div class="box-body mt-mtcities-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'id' => 'grid-mtcities',
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
							'attribute'=>'city_country_id',
							'value'=>'cityCountry.country_name',
							'label'=>Yii::t('app','Country'),
							'headerOptions' => ['width' => '120'],
						],
						[
							'attribute'=>'city_province_id',
							'value'=>'cityProvince.province_name',
							'label'=>Yii::t('app','Province'),
							'headerOptions' => ['width' => '120'],
						],
            [
							'attribute'=>'city_name',
							'label'=>Yii::t('app','Name'),
						],
						[
							'attribute'=>'city_updated',
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
		$this->registerJs('var buttonID="deleteAll";',View::POS_HEAD); 
		$this->registerJs('var gridID="grid-mtcities";',View::POS_HEAD);
		$this->registerJs('var baseURL=\''.Url::base().'/configurations/regional/cities/'.'\'',\yii\web\View::POS_END); 		
		$this->registerJsFile(
			'scripts/functions.js', 
			[
				'depends'=>[backend\assets\DashboardAsset::className()],
			],View::POS_END);
    

?>




