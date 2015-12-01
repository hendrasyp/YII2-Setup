<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Companies */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->company_id], [
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
            'company_id',
            'company_name',
            'company_address',
            'company_country_id',
            'company_province_id',
            'company_city_id',
            'company_zipcode',
            'company_email:email',
            'company_phone',
            'company_phone_ii',
            'company_contact_person',
            'company_website',
            'company_status',
            'company_key',
            'company_logo',
        ],
    ]) ?>

</div>
