<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Order_ID'); ?>
		<?php echo $form->textField($model,'Order_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Order_Date'); ?>
		<?php echo $form->textField($model,'Order_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_Name'); ?>
		<?php echo $form->textField($model,'Contact_Name',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_Mobile'); ?>
		<?php echo $form->textField($model,'Contact_Mobile',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_Email'); ?>
		<?php echo $form->textField($model,'Contact_Email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_Address'); ?>
		<?php echo $form->textField($model,'Contact_Address',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->