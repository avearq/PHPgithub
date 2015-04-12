<?php
/* @var $this OrderDetailController */
/* @var $data OrderDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Detail_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Detail_ID), array('view', 'id'=>$data->Detail_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Order_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Order_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Product_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Product_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Product_Price')); ?>:</b>
	<?php echo CHtml::encode($data->Product_Price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Product_Qty')); ?>:</b>
	<?php echo CHtml::encode($data->Product_Qty); ?>
	<br />


</div>