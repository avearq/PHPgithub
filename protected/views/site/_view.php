<?php
/* @var $this MenuController */
/* @var $data Menu */
?>
<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'site-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		'htmlOptions' => array(
			'enctype' => 'multipart/form-data',
		),
	)); 
?>
<div style="width: 385px;" class="view">
	<table style="width: 380px;">
		<tr>
			<td colspan="2">
				<strong><?php
				
				//CHtml::encode($data->ProName);

				echo CHtml::encode($data->CategoryRelation->CateName)." : ".CHtml::encode($data->ProName); ?></strong>
			</td>
		</tr>
		<tr>
			<td style="display: table-cell; vertical-align: top;">
				<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->ProImage,"image",array("width"=>150));?>
			</td>
			<td style="display: table-cell; vertical-align: top;">
				<?php
					echo $data->ProDesc;
					echo "<br/>";
					echo "<strong><i>Price : ฿ ".number_format($data->ProPrice, 2)."</i></strong>";
					echo "<br /><br />";
					echo CHtml::dropDownList('NoOfProduct_'.$data->ProID, 0, array("1"=>"1","2"=>"2", "2"=>"2", "3"=>"3", "4"=>"4", "5"=>"5", "6"=>"6", "7"=>"7", "8"=>"8", "9"=>"9", "10"=>"10")); 
					echo "&nbsp;&nbsp;";
					echo CHtml::button('Add',array('submit' => $this->createUrl('Site/AddToCart',array('ProductId'=>$data->ProID, 'ProductName'=>$data->ProName, 'ProductPrice'=>$data->ProPrice))));
				?>
			</td>
		</tr>
	</table>
</div>
<?php $this->endWidget(); ?>