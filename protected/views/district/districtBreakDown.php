<?php
/* @var $this DistrictController */
/* @var $model District */

$district_id = $_GET['id'];
$sql_c = "select district_name from tbl_district where id = $district_id";

$district_name = Yii::app()->db->createCommand($sql_c)->queryScalar();

?>

<h1>All Projects in <?php echo $district_name;?></h1>


<?php

/*
$sql = "select project_name, district_name,a.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings,
           CEIL(user_rating_score/number_of_user_ratings) as users_score
from
(SELECT * FROM `tbl_district_project`) a inner join 
(select * from tbl_district where id = $district_id) b on 
a.district_id = b.id inner join
(select * from tbl_district_budget) c on 
c.district_id = b.id left join
(select * from tbl_budget_type) d on 
c.budget_type = d.id  ";
*/
$sql = "select project_name, district_name,a.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings,
           CEIL(user_rating_score/number_of_user_ratings) as users_score
from
(SELECT * FROM `tbl_district_project` ) a inner join 
(select * from tbl_district where id = $district_id) b on 
a.district_id = b.id inner join
(select * from tbl_district_budget) c on 
c.district_id = b.id inner join
(select * from tbl_budget_type) d on 
c.budget_type = d.id  
group by a.id ";

$count = Yii::app()->db->createCommand($sql)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql, 
                                      array(
									          'totalItemCount'=>$count,
											  'sort'=>array(
											                 'attributes'=>array(
															                       'project_name')
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
										array('name'=>'project_name', 'header'=>'Project name', "type"=>"raw",
					                    	   'value'=>'CHtml::link(CHtml::encode($data["project_name"]),
					                    	            "../districtProject/rateDistrictProject?id=".$data["id"]." ")'),					                    
									 //   array('name'=>'district_name', 'header'=>'District name', 'value'=>'$data["district_name"]'),	
									   array('name'=>'rankings', 'header'=>"Rankings", 'value'=>'$data["rankings"]'),	
									   array('name'=>'users_score', 'header'=>"Users' ratings", 'value'=>'$data["users_score"]'),										   
										array( 'header'=>'Rate Project',
															      'class'=>'CButtonColumn',
															      'template'=>'{rateProject}',
															      'buttons'=> array(
															                 'rateProject'=>array(
																                  'label'=>'Edit',
																                  'imageUrl'=>Yii::app()->request->baseUrl."/images/rate.png",											                     
																				  'url'=>'Yii::app()->createUrl("districtProject/rateDistrictProject",array("id"=>$data["id"]) )',	                 
																									 )											                    
																					),
																  ),	
										),					 
											 ));

?>
