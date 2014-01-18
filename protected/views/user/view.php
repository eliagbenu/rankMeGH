<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'district_id',
		'username',
		'first_name',
		'last_name',
		'user_rank',
	),
)); ?>


<?php $this->beginWidget('zii.widgets.CPortlet'); ?>

<?php echo CHtml::link('List',array('index')); ?><p>

<?php echo CHtml::link('Add',array('create')); ?><p>
	
<?php echo CHtml::link('Update',array('update','id'=>$model->id)); ?><p>

<?php echo CHtml::link('Manage',array('admin')); ?><p>

		
<?php $this->endWidget(); ?>