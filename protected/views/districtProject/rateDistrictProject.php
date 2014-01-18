<?php
/* @var $this DistrictProjectController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Rate Project</h1>

<?php 

$district_project_id = $_GET['id'];

$sql = "select *
		from tbl_district_project inner join
		(select * from tbl_district) a on
		tbl_district_project.district_id = a.id
		where tbl_district_project.id = $district_project_id ";
$a = Yii::app()->db->createCommand($sql)->queryRow();
?>


<div class='form'>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'this-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<?php $this->widget('CStarRating',array('name'=>'user_rating')); ?>
</div>

<div class="row">
	<?php
		echo CHtml::textArea("comment","");
	?>
</div>

<div class="row">
	<?php echo CHtml::submitButton('Rate Me Ghana',array('name'=>'submit')); ?>
</div>

<br/><br/>




<?php $this->endWidget(); ?>
	
	<div class="row">
		 Project Name:
		<?php echo $a['project_name'];?>
	</div><br/>

	<div class="row">
		District:
		<?php echo $a['district_name'];?>
	</div><br/>

	<div class="row">
		Description of Project
		<?php echo $a['description'];?>
	</div><br/>

	<div class="row">
		Location:
		<?php echo $a['location'];?>
	</div><br/>

	<div class="row">
		 Start Date:
		<?php echo $a['start_date'];?>
	</div><br/>

	<div class="row">
		 End Date:
		<?php echo $a['end_date'];?>
	</div><br/>
	

</div>

<!-- for the comments section -->
<div>
	
	<h1>User comments for <?php echo $a['project_name'];?></h1>
	
<?php

$sql_f = " select * from tbl_district_project_comment where project_id = $district_project_id";

$count = Yii::app()->db->createCommand($sql_f)->query();
$count = count($count);

$dataProvider = new CSqlDataProvider($sql_f, 
                                      array(
									          'totalItemCount'=>$count,
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
									   array('name'=>'comment', 'header'=>"Comment", 'value'=>'$data["comment"]')								   
										),					 
											 ));

?>


	
</div>
