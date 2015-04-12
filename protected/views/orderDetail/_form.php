<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Order_ID'); ?>
		<?php echo $form->textField($model,'Order_ID'); ?>
		<?php echo $form->error($model,'Order_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Product_ID'); ?>
		<?php echo $form->textField($model,'Product_ID'); ?>
		<?php echo $form->error($model,'Product_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Product_Price'); ?>
		<?php echo $form->textField($model,'Product_Price'); ?>
		<?php echo $form->error($model,'Product_Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Product_Qty'); ?>
		<?php echo $form->textField($model,'Product_Qty'); ?>
		<?php echo $form->error($model,'Product_Qty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->