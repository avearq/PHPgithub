<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Order_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Order_ID), array('view', 'id'=>$data->Order_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Order_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Order_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Mobile')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Email')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Address')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Address); ?>
	<br />


</div>