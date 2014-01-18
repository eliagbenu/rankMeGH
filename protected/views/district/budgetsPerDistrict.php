
<h1>All Projects</h1>


<?php


$sql = "select a.district_name as district_name, total_district_project_budgets as budget_allocated, b.district_id as id
from
(select * from tbl_district) a inner join
(select * from vw_total_district_project_budget) b on 
a.id = b.district_id";


$count = Yii::app()->db->createCommand($sql)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql, 
                                      array(
									          'totalItemCount'=>$count,
											  'sort'=>array(
											                 'attributes'=>array(
															                       'district_name')
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
										array('name'=>'district_name', 'header'=>'Project name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["district_name"]),
					                    	            "../district/view?id=".$data["id"]." ")'),			
									   array('name'=>'budget_allocated', 'header'=>"Budget Allocate", 'value'=>'$data["budget_allocated"]'),										   								
										),					 
											 ));

?>
