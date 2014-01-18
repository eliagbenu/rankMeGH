<?php
/* @var $this DistrictProjectController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>List Projects</h1>

<?php 

$district_id = $id;

$sql = "select project_name, district_name,a.id as id,budget_allocated
from
(SELECT * FROM `tbl_district_project`) a inner join 
(select * from tbl_district where id = $district_id) b on 
a.district_id = b.id 
 ";


$count = Yii::app()->db->createCommand($sql)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql, 
                                      array(
									          'totalItemCount'=>$count,
											  'sort'=>array(
											                 'attributes'=>array(
															                       'district_name','project_name')
											              ),
											   'pagination'=>array(
											                        'pageSize'=>10,
																	)           
														  ));

?>


<?php

$this->widget('zii.widgets.grid.CGridView', 
                 array(
				       'dataProvider'=>$dataProvider,
					   'htmlOptions'=>array(
					                          'style'=>'position:relative;top:0px;cursor:arrow;'),
					   'columns'=>array(
					                    array('name'=>'number', 'header'=>'No.', 'value'=>'$row+1'),
									    array('name'=>'project_name', 'header'=>'Project name', 'value'=>'$data["project_name"]'),						              
										array('name'=>'budget_allocated', 'header'=>'Budget Allocated', 'value'=>'$data["budget_allocated"]'),						              								          
									/*	array('name'=>'district_name', 'header'=>'District name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["district_name"]), "../district/districtBreakDown?id=".$data["id"]." ")'),	*/				                    
   					                   	   					                    									                    										        					                   
										),					 
											 ));

?>

