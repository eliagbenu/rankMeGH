<?php
/* @var $this DistrictController */
/* @var $model District */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List District', 'url'=>array('index')),
	array('label'=>'Create District', 'url'=>array('create')),
	array('label'=>'Update District', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Allocate Budget', 'url'=>array('allocateBudget', 'id'=>$model->id)),	
	array('label'=>'Add Project', 'url'=>array('/districtProject/create', 'id'=>$model->id)),		
	array('label'=>'List Projects', 'url'=>array('/districtProject/listProjectsPerDistrict', 'id'=>$model->id)),			
	array('label'=>'Delete District', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage District', 'url'=>array('admin')),
);
?>

<h1>View District #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'district_name',
		'region',
	),
)); ?>

<p>
<?php $this->beginWidget('zii.widgets.CPortlet'); ?>

<?php echo CHtml::link('Manage Districts',array('district/admin')); ?><p>

<?php echo CHtml::link('Add Projects',array('/districtProject/create','id'=>$model->id)); ?><p>

<?php echo CHtml::link('Manage Districts',array('district/admin')); ?><p>

<?php echo CHtml::link('List Projects',array('/districtProject/listProjectsPerDistrict','id'=>$model->id)); ?><p>

<?php echo CHtml::link('Allocate Budget',array('allocateBudget','id'=>$model->id)); ?><p>

<?php $this->endWidget(); ?>
