<?php use yii\helpers\Html; ?>
<div class="box-header with-border">
	<h3 class="box-title">Countries</h3>
	<?= Html::a(Yii::t('app', 'Lists'), ['index'], ['class' => 'btn btn-info']) ?>
    <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a(Yii::t('app', 'Trash'), ['trash'], ['class' => 'btn btn-warning']) ?>
</div><!-- /.box-header -->