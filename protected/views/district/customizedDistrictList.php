<?php
/* @var $this DistrictController */
/* @var $model District */


$sql = "select a.id as id, a.district_name as district_name ,b.region_name as region_name, amount
from 
(SELECT * FROM tbl_district) a left join 
(select * from tbl_region  ) b on 
a.region = b.id left join 
(select sum(budget_amount) as amount, district_id from tbl_district_budget group by district_id) d 
on d.district_id = a.id
ORDER BY d.amount  DESC";



$count = Yii::app()->db->createCommand($sql)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql, 
                                      array(
									          'totalItemCount'=>$count,
											  
											   'pagination'=>array(
											                        'pageSize'=>10,
																	)           
														  ));

?>

<h1>All Districts</h1>



<?php

$this->widget('zii.widgets.grid.CGridView', 
                 array(
				       'dataProvider'=>$dataProvider,
					   'htmlOptions'=>array(
					                          'style'=>'position:relative;top:0px;cursor:arrow;'),
					   'columns'=>array(
					                    array('name'=>'number', 'header'=>'No.', 'value'=>'$row+1'),
										array('name'=>'district_name', 'header'=>'District name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["district_name"]), "../district/districtBreakDown?id=".$data["id"]." ")'),					                    
   					                    array('name'=>'amount', 'header'=>'Amount', 'value'=>'$data["amount"]'),		   					                    									                    										        
					                    array('name'=>'region_name', 'header'=>'Region name', 'value'=>'$data["region_name"]'),						                   
										),					 
											 ));

?>
