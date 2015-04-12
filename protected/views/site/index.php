<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!-- Step 1 -->
<!--
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->
<!-- Step 2 -->
<h1>Products</h1>

<!-- Step 3-->
<?php
	/*
		$categorymodel=Category::model()->with(array(
				'user'=>array(
				'select'=>'categoryname',
				'joinType'=>'INNER JOIN',
				'condition'=>'user.categoryname="activeuser"',
			),
        ))->findAll();
	*/
	/*
	$model = New Product();
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$model->customFindAll(),
		'itemView'=>'_view',
	));
	*/

	$model = New Product();

	$this->widget('zii.widgets.EColumnListView', array(
		'dataProvider' => $model->customFindAll(),
		'itemView' => '_view',
		'columns' => 2
	));

?>

