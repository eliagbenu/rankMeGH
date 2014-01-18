<?php
/* @var $this DistrictController */
/* @var $data District */
?>


<div class="view">

<table>
	<tr>
		<td><?php echo CHtml::encode($data->getAttributeLabel('district_name')); ?> </td>
		<td><?php echo CHtml::encode($data->getAttributeLabel('region')); ?> </td>
		<th><!-- Amount budgeted  --> </th>		
	</tr>
	<tr>
		<td>	<?php echo CHtml::link(CHtml::encode($data->district_name), array('view', 'id'=>$data->id)); ?> 
		</td>
		<td>	
<?php
	 $region_id =  CHtml::encode($data->region); //echo $region_id; 
	 $sql = "Select region_name from tbl_region where id = $region_id ";
	 $region_name = Yii::app()->db->createCommand($sql)->queryScalar();
	 echo $region_name;
?>  </td>		
		<td>	
<?php
	$district_id = $data->id;
	$sql_a = "SELECT sum(budget_amount)  FROM `tbl_district_budget` where district_id = $district_id";
	$total_budgeted = Yii::app()->db->createCommand($sql_a)->queryScalar();	
	// echo $total_budgeted;
?>  </td>		
	</tr>	
</table>



</div>