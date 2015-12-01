<?php use yii\helpers\Html; ?>
<div class="box-header with-border">
	<h3 class="box-title"><?php echo (isset($title)?$title:$this->pageName);?></h3>
	<?= Html::a(Yii::t('app', 'Lists'), ['index'], ['class' => 'btn btn-info']) ?>
    <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    <?= Html::a(Yii::t('app', 'Trash'), ['trash'], ['class' => 'btn btn-warning']) ?>
    <?= Html::button(Yii::t('app', 'Delete All'), ['id'=>'deleteAll','class' => 'btn btn-warning']) ?>
</div><!-- /.box-header -->