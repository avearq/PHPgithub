<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CusID'); ?>
		<?php echo $form->textField($model,'CusID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusName'); ?>
		<?php echo $form->textField($model,'CusName',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusAddress'); ?>
		<?php echo $form->textField($model,'CusAddress',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusMobile'); ?>
		<?php echo $form->textField($model,'CusMobile',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusEmail'); ?>
		<?php echo $form->textField($model,'CusEmail',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusPassword'); ?>
		<?php echo $form->textField($model,'CusPassword',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CusType'); ?>
		<?php echo $form->textField($model,'CusType'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->