<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProID), array('view', 'id'=>$data->ProID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProName')); ?>:</b>
	<?php echo CHtml::encode($data->ProName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProDesc')); ?>:</b>
	<?php echo CHtml::encode($data->ProDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProPrice')); ?>:</b>
	<?php echo CHtml::encode($data->ProPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProImage')); ?>:</b>
	<?php echo CHtml::encode($data->ProImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CateID')); ?>:</b>
	<?php echo CHtml::encode($data->CateID); ?>
	<br />


</div>