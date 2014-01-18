<?php
/* @var $this DistrictProjectController */
/* @var $model DistrictProject */

if(Yii::app()->user->isGuest){
	
}else{

$this->breadcrumbs=array(
	'District Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DistrictProject', 'url'=>array('index')),
	array('label'=>'Create DistrictProject', 'url'=>array('create')),
	array('label'=>'Update DistrictProject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DistrictProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DistrictProject', 'url'=>array('admin')),
);
	
}


?>

<?php $this->beginWidget('zii.widgets.CPortlet'); ?>

<?php echo CHtml::link('List',array('index')); ?><p>

<?php echo CHtml::link('Add',array('create')); ?><p>
	
<?php echo CHtml::link('Update',array('update','id'=>$model->id)); ?><p>

<?php echo CHtml::link('Manage',array('admin')); ?><p>

		
<?php $this->endWidget(); ?>

<h1>View DistrictProject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_name',
		'location',
		'description',
		'photos',
		'start_date',
		'end_date',
		'budget_allocated',
		'completion_date',
	),
)); ?>


<!-- for the comments section -->
<div style="margin-top:30px;">
	
	<h4>User comments </h4>
	
<?php
$district_project_id = $model->id;

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
					                //    array('name'=>'number', 'header'=>'No.', 'value'=>'$row+1'),			                    
									   array('name'=>'comment', 'header'=>"Comment", 'value'=>'$data["comment"]')								   
										),					 
											 ));

?>


	
</div>
