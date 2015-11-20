<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\CountriesAsset;
CountriesAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel common\models\MtCountriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Regional > Countries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
	<?php echo yii\base\View::render('_menu') ?>
    <?//= $this->renderPartial( '_menu'); ?>
	<div class="box-body mt-countries-index">
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
</div>


