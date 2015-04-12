<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CusName'); ?>
		<?php echo $form->textField($model,'CusName',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'CusName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CusAddress'); ?>
		<?php echo $form->textField($model,'CusAddress',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'CusAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CusMobile'); ?>
		<?php echo $form->textField($model,'CusMobile',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'CusMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CusEmail'); ?>
		<?php echo $form->textField($model,'CusEmail',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'CusEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CusPassword'); ?>
		<?php echo $form->textField($model,'CusPassword',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'CusPassword'); ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'CusType'); ?>
		<?php echo $form->textField($model,'CusType'); ?>
		<?php echo $form->error($model,'CusType'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->