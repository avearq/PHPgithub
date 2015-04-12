<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ProID'); ?>
		<?php echo $form->textField($model,'ProID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProName'); ?>
		<?php echo $form->textField($model,'ProName',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProDesc'); ?>
		<?php echo $form->textField($model,'ProDesc',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProPrice'); ?>
		<?php echo $form->textField($model,'ProPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProImage'); ?>
		<?php echo $form->textField($model,'ProImage',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CateID'); ?>
		<?php echo $form->textField($model,'CateID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->