<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	$model->Detail_ID,
);

$this->menu=array(
	array('label'=>'List OrderDetail', 'url'=>array('index')),
	array('label'=>'Create OrderDetail', 'url'=>array('create')),
	array('label'=>'Update OrderDetail', 'url'=>array('update', 'id'=>$model->Detail_ID)),
	array('label'=>'Delete OrderDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Detail_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderDetail', 'url'=>array('admin')),
);
?>

<h1>View OrderDetail #<?php echo $model->Detail_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Detail_ID',
		'Order_ID',
		'Product_ID',
		'Product_Price',
		'Product_Qty',
	),
)); ?>
