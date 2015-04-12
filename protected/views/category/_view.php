<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CateID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CateID), array('view', 'id'=>$data->CateID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CateName')); ?>:</b>
	<?php echo CHtml::encode($data->CateName); ?>
	<br />


</div>