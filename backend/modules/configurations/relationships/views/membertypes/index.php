<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtmembergroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Relationships > Member Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary mtmembergroups-index">
		<?php echo yii\base\View::render('_menu',['title'=>'Member Types']) ?>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
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
							'attribute'=>'member_group_code',
							'label'=>Yii::t('app','Group Code'),
						],
						[
							'attribute'=>'member_group_name',
							'label'=>Yii::t('app','Name'),
						],
						[
							'attribute'=>'member_group_price',
							'label'=>Yii::t('app','Price'),
						],
						[
							'attribute'=>'member_group_date',
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
