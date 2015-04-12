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
		if(isset($session['intLine']) && $session['intLine'] > 0){
			
			$arrProductID=$session['productID'];
			$arrProductName=$session['productName'];
			$arrProductPrice=$session['productPrice'];
			$arrProductQty=$session['productQty'];

			echo '<table style=\'width:100%;\'>';
			echo '	<tr>';
			echo '		<td style=\'text-align:center; width:60%;\'>Product</td>';
			echo '		<td style=\'text-align:center;\'>Price</td>';
			echo '		<td style=\'text-align:center;\'>Qty</td>';
			echo '		<td style=\'text-align:center;\'>Total</td>';
			echo '		<td style=\'text-align:center;\'></td>';
			echo '	</tr>';
			

			$lineTotal = 0;
			$Total = 0;

			for($i=0; $i<=(int)$session['intLine'];$i++){
				if($arrProductID[$i] != ''){
					$lineTotal = $arrProductPrice[$i] * $arrProductQty[$i];
					$Total = $Total + $lineTotal;

					echo '	<tr>';
					echo '		<td style=\'text-align:left; width:60%;\'>'.$arrProductName[$i].'</td>';
					echo '		<td style=\'text-align:right; width:15%;\'>'.number_format($arrProductPrice[$i], 2).'</td>';
					echo '		<td style=\'text-align:right; width:5%;\'>'.$arrProductQty[$i].'</td>';
					echo '		<td style=\'text-align:right; width:15%;\'>'.number_format($lineTotal, 2).'</td>';
					echo '		<td style=\'text-align:center; width:5%;\'>'.CHtml::button('Del' ,array('submit' => $this->createUrl('Site/RemoveFromCart',array('LineId' => $i)),'confirm' => 'Are you sure?')).'</td>';
					echo '	</tr>';
				}
			}
			echo '</table>';
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