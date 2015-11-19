<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MtCountries */

$this->title = Yii::t('app', 'Create Mt Countries');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mt Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-countries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
