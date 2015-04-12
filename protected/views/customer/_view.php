<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CusID), array('view', 'id'=>$data->CusID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusName')); ?>:</b>
	<?php echo CHtml::encode($data->CusName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusAddress')); ?>:</b>
	<?php echo CHtml::encode($data->CusAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusMobile')); ?>:</b>
	<?php echo CHtml::encode($data->CusMobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusEmail')); ?>:</b>
	<?php echo CHtml::encode($data->CusEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusPassword')); ?>:</b>
	<?php echo CHtml::encode($data->CusPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CusType')); ?>:</b>
	<?php echo CHtml::encode($data->CusType); ?>
	<br />


</div>