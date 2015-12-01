<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mtmembergroups */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mtmembergroups',
]) . ' ' . $model->member_group_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mtmembergroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_group_id, 'url' => ['view', 'id' => $model->member_group_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary mtmembergroups-update">
	<?php echo yii\base\View::render('_menu',['title'=>'Update Member Type']) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
