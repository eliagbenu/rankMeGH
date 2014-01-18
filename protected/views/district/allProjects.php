
<h1>All Projects</h1>


<?php


$sql = "select a.district_name as district_name,project_name, budget_allocated, b.id as id
from
(select * from tbl_district) a inner join
(select * from tbl_district_project) b on 
a.id = b.district_id 
group by b.district_id";


$count = Yii::app()->db->createCommand($sql)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql, 
                                      array(
									          'totalItemCount'=>$count,
											  'sort'=>array(
											                 'attributes'=>array(
															                       'project_name','district_name')
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
/*										array('name'=>'project_name', 'header'=>'Project name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["project_name"]),
					                    	            "../districtProject/view?id=".$data["id"]." ")'),			*/
										array('name'=>'project_name', 'header'=>'Project name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["project_name"]),
					                    	            "../districtProject/rateDistrictProject?id=".$data["id"]." ")'),							                    	            
									   array('name'=>'budget_allocated', 'header'=>"Budget Allocate", 'value'=>'$data["budget_allocated"]'),
				 					   array('name'=>'district_name', 'header'=>"District Name", 'value'=>'$data["district_name"]'),  
									   										   								
										),					 
											 ));

?>
