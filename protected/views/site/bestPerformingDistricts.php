<?php
/*
$sql_ad = "select district_name,b.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings,
 sum(CEIL((budget_allocated/budget_amount)*d.score)) as total_rankings         
from
(SELECT * FROM `tbl_district_project`) a left join 
(select * from tbl_district) b on 
a.district_id = b.id left join
(select * from tbl_district_budget) c on 
c.district_id = b.id left join
(select * from tbl_budget_type) d on 
c.budget_type = d.id 
order by total_rankings asc";
*/


$sql_ad = "select district_name,b.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings 
from
(SELECT * FROM `tbl_district_project`) a left join 
(select * from tbl_district) b on 
a.district_id = b.id left join
(select * from tbl_district_budget) c on 
c.district_id = b.id left join
(select * from tbl_budget_type) d on 
c.budget_type = d.id 
group by b.id
having rankings > 0 
order by rankings desc
";

$count = Yii::app()->db->createCommand($sql_ad)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql_ad, 
                                      array(
									          'totalItemCount'=>3,
											  'sort'=>array(
											                 'attributes'=>array('district_name')
											              ),
											   'pagination'=>array(
											                        'pageSize'=>3,
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
									   array('name'=>'district_name', 'header'=>"District name", 'value'=>'$data["district_name"]'),	
									   array('name'=>'rankings', 'header'=>"Rankings", 'value'=>'$data["rankings"]'),										   
											
										),					 
											 ));

?>


<?php echo CHtml::link('View more',array('district/allDistrictRankings')); ?>