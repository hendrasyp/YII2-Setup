<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MtmembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mtmembers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtmembers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mtmembers'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'member_id',
            'member_group_id',
            'member_identity_type_id',
            'member_identity_number',
            'member_code',
            // 'member_sex',
            // 'member_address',
            // 'member_city_id',
            // 'member_address_zipcode',
            // 'member_contact_phone',
            // 'member_contact_mobile',
            // 'member_contact_email:email',
            // 'member_picture',
            // 'member_remark',
            // 'member_created',
            // 'member_updated',
            // 'member_status',
            // 'member_register_date',
            // 'member_card_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
