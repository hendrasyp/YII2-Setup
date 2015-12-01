<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Companies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Companies'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'company_id',
            'company_name',
            'company_address',
            'company_country_id',
            'company_province_id',
            // 'company_city_id',
            // 'company_zipcode',
            // 'company_email:email',
            // 'company_phone',
            // 'company_phone_ii',
            // 'company_contact_person',
            // 'company_website',
            // 'company_status',
            // 'company_key',
            // 'company_logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
