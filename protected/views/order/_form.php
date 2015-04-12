<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Order_Date'); ?>
		<?php echo $form->textField($model,'Order_Date'); ?>
		<?php echo $form->error($model,'Order_Date'); ?>
	</div>
	-->
	
	<?php
		$criteria = new CDbCriteria();
        $criteria->select='*';
        $criteria->condition='CusID='.Yii::app()->session['CusID'];
        $selectedRow=Customer::model()->find($criteria);
		
		$model->Contact_Name = $selectedRow->CusName;
		$model->Contact_Mobile = $selectedRow->CusMobile;
		$model->Contact_Email = $selectedRow->CusEmail;
		$model->Contact_Address = $selectedRow->CusAddress;

	?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Contact_Name'); ?>
		<?php echo $form->textField($model,'Contact_Name',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'Contact_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_Mobile'); ?>
		<?php echo $form->textField($model,'Contact_Mobile',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'Contact_Mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_Email'); ?>
		<?php echo $form->textField($model,'Contact_Email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'Contact_Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_Address'); ?>
		<?php echo $form->textField($model,'Contact_Address',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'Contact_Address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel', array('submit' => $this->createUrl('Site/RemoveAllFromCart'), 'confirm'=>'Are you sure?'))?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->