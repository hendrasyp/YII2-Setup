<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtmembergroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mtmembergroups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtmembergroups-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mtmembergroups'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'member_group_id',
            'member_group_code',
            'member_group_name',
            'member_group_price',
            'member_group_remark:ntext',
            // 'member_group_created',
            // 'member_group_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
