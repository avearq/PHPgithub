<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// step 1
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProName'); ?>
		<?php echo $form->textField($model,'ProName',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'ProName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProDesc'); ?>
		<?php echo $form->textField($model,'ProDesc',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ProDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProPrice'); ?>
		<?php echo $form->textField($model,'ProPrice'); ?>
		<?php echo $form->error($model,'ProPrice'); ?>
	</div>

	<!-- step 2 -->
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'ProImage'); ?>
		<?php echo $form->textField($model,'ProImage',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ProImage'); ?>
	</div>
	-->

	<!-- step 3 -->
	<div class="row">
		<?php echo $form->labelEx($model,'ProImage'); ?>
		<?php echo CHtml::activeFileField($model,'ProImage'); ?>
		<?php echo $form->error($model,'ProImage'); ?>
	</div>

	<!-- step 4 -->
	<?php 
		if($model->isNewRecord != '1'){
	?>
		<div class="row">
	<?php 
			echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->ProImage,"image",array("width"=>100)); 
	?> 
		</div>
	<?
		}
	?>

	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'CateID'); ?>
		<?php echo $form->textField($model,'CateID'); ?>
		<?php echo $form->error($model,'CateID'); ?>
	</div>
	-->
	<div class="row">
		<?php echo $form->labelEx($model,'CateID'); ?>
		<?php echo $form->dropDownList($model,'CateID', CHtml::ListData(Category::model()->findAll(), 'CateID', 'CateName')); ?>
		<?php echo $form->error($model,'CateID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->