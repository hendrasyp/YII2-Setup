<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembers */

$this->title = $model->member_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mtmembers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->member_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->member_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'member_id',
            'member_group_id',
            'member_identity_type_id',
            'member_identity_number',
            'member_code',
            'member_sex',
            'member_address',
            'member_city_id',
            'member_address_zipcode',
            'member_contact_phone',
            'member_contact_mobile',
            'member_contact_email:email',
            'member_picture',
            'member_remark',
            'member_created',
            'member_updated',
            'member_status',
            'member_register_date',
            'member_card_status',
        ],
    ]) ?>

</div>
