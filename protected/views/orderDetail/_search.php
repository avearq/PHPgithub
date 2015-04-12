<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Detail_ID'); ?>
		<?php echo $form->textField($model,'Detail_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Order_ID'); ?>
		<?php echo $form->textField($model,'Order_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Product_ID'); ?>
		<?php echo $form->textField($model,'Product_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Product_Price'); ?>
		<?php echo $form->textField($model,'Product_Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Product_Qty'); ?>
		<?php echo $form->textField($model,'Product_Qty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->