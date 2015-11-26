<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use kartik\grid\GridView as gview;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MtprovincesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Regional > Provinces');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="box box-primary">
	<?php echo yii\base\View::render('_menu',['title'=>'Provinces']) ?>
	<div class="box-body mtprovinces-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'id' => 'grid-provinces',
				'layout'=>"{items}\n{pager}\n{summary}",
				'tableOptions' =>['class' => 'table table-striped table-bordered'],
				'showFooter' => false,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
						[
							'attribute'=>'province_country_id',
							'label'=>'Country',
							'value'=>'provinceCountry.country_name'
						],
            'province_name',
						[
							'attribute'=>'province_updated',
							'label'=>'Latest Update',
							'format'=>['date','php:d M Y h:i:s'],
						],
            // 'province_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
		
</div>
</div>
<?php 
	$this->registerJsFile(
			'scripts/provinces.js', 
			[
				'depends'=>
					[backend\assets\DashboardAsset::className()],
			],\yii\web\View::POS_END);

	$this->registerJs('var gridview_id = "grid-provinces";',\yii\web\View::POS_END); 
	$this->registerJs('var columns = "1";',\yii\web\View::POS_END); 