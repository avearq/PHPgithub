<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs=array(
	'Order Details'=>array('index'),
	$model->Detail_ID=>array('view','id'=>$model->Detail_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderDetail', 'url'=>array('index')),
	array('label'=>'Create OrderDetail', 'url'=>array('create')),
	array('label'=>'View OrderDetail', 'url'=>array('view', 'id'=>$model->Detail_ID)),
	array('label'=>'Manage OrderDetail', 'url'=>array('admin')),
);
?>

<h1>Update OrderDetail <?php echo $model->Detail_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>