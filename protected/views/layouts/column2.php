<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$session = Yii::app()->session;
		if(isset($session['intLine']) && ($session['intLine'] > 0))
		{
			$form=$this->beginWidget('CActiveForm', array(
				'id'=>'sidebar-form',
				'enableAjaxValidation'=>false,
				'htmlOptions' => array(
					'enctype' => 'multipart/form-data',
				),
			)); 
			
				
				$lineTotal=0;
				$sumTotal=0;
				
				$arrProductID=$session["productID"];
				$arrProductName=$session["productName"];
				$arrProductPrice=$session["productPrice"] ;
				$arrproductQty=$session["productQty"];
				
				echo '<table style=\'width: 100%;\'>';
				echo '	<tr>';
				echo '		<td style=\'text-align: center; width: 60%\'><b>Product</b></td>';
				echo '		<td style=\'text-align: center;\'><b>Price</b></td>';
				echo '		<td style=\'text-align: center;\'><b>Qty</b></td>';
				echo '		<td style=\'text-align: center;\'><b>Total</b></td>';
				echo '		<td style=\'text-align: center;\'></td>';
				echo '	</tr>';
				
				
				for($i=0;$i<=(int)$session["intLine"];$i++)
				{
					if($arrProductID[$i] != "")
					{
						$lineTotal =$arrProductPrice[$i]*$arrproductQty[$i];
						$sumTotal = $sumTotal + $lineTotal;
			
						echo '	<tr>';
						echo '		<td width=\'60%\'style=\'text-align: left;\'>'.$arrProductName[$i].'</td>';
						echo '		<td width=\'15%\' style=\'text-align: right;\'>'.number_format($arrProductPrice[$i], 2).'</td>';
						echo '		<td width=\'5%\' style=\'text-align: right;\'>'.$arrproductQty[$i].'</td>';
						echo '		<td width=\'15%\' style=\'text-align: right;\'>'.number_format($arrProductPrice[$i]*$arrproductQty[$i], 2).'</td>';

						echo '		<td width=\'5%\' style=\'text-align: center;\'>'.CHtml::button('Del',array('submit' => $this->createUrl('Site/RemoveFromCart',array('LineId'=>$i)), 'confirm'=>'Are you sure?')).'</td>';

						echo '	</tr>';
					}
				}
				
				echo '	<tr>';
				echo '		<td colspan=\'3\'><b>Total<b/></td>';
				echo '		<td><b>'.number_format($sumTotal,2).'</b></td>';
				echo '		<td></td>';
				echo '	</tr>';
				echo '</table>';
				
				echo '<table border=\'1\' width=\'100%\'>';
				echo '	<tr>';
				echo '		<td width=\'50%\' style=\'text-align: right;\'>'.CHtml::button('Clear All', array('submit' => $this->createUrl('Site/RemoveAllFromCart'), 'confirm'=>'Are you sure?')).'</td>';
				echo '		<td width=\'50%\' style=\'text-align: left;\'>'.CHtml::button('Check Out',array('submit' => $this->createUrl('Order/Create'))).'</td>';
				echo '	</tr>';
				
				echo '</table>';
			$this->endWidget();
		}
	?>
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>