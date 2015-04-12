<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(

	//'Orders'=>array('index'),
	//$model->Order_ID,
	
	'Orders'=>array('admin'),
	$model->Contact_Name,
);

/*
$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->Order_ID)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Order_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
*/

?>

<!--<h1>View Order #<?php //echo $model->Order_ID; ?></h1>-->

<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Order_ID',
		'Order_Date',
		'Contact_Name',
		'Contact_Mobile',
		'Contact_Email',
		'Contact_Address',
	),
)); 

$modelOrderDetail = New OrderDetail();
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'order-detail-grid',
	'dataProvider'=>$modelOrderDetail->searchByOrderId($model->Order_ID),
	'columns'=>array(
		//'detailid',
		//'orderid',
		//'restaurantid',
		//'restaurantname',
		//'menuid',
		array(
			'header' => 'Product Name',
			'value' => '$data->OrderRelation->ProName',
			'htmlOptions'=>array('style' => 'text-align: left;'),
		),
		array(
			'header' => 'Product Price',
			'value' => 'number_format($data->Product_Price, 2)',
			'htmlOptions'=>array('style' => 'text-align: right;'),
		),
		array(
			'header' => 'Product Qty',
			'value' => '$data->Product_Qty', 
			'htmlOptions'=>array('style' => 'text-align: right;'),
		),
		array(
			'header' => 'Total',
			'value' => 'number_format($data->Product_Price * $data->Product_Qty, 2)', 
			'htmlOptions'=>array('style' => 'text-align: right;'),
			'footer'=>'Total: '.$modelOrderDetail->fetchTotalPrice($modelOrderDetail->searchByOrderId($model->Order_ID)->getData()),
			'footerHtmlOptions'=> array('style' => 'text-align: right;'),
		),
	),
));
	
?>
