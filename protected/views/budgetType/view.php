<?php
/* @var $this BudgetTypeController */
/* @var $model BudgetType */

$this->breadcrumbs=array(
	'Budget Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BudgetType', 'url'=>array('index')),
	array('label'=>'Create BudgetType', 'url'=>array('create')),
	array('label'=>'Update BudgetType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BudgetType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BudgetType', 'url'=>array('admin')),
);
?>

<h1>View BudgetType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>


<?php $this->beginWidget('zii.widgets.CPortlet'); ?>

<?php echo CHtml::link('Manage',array('admin')); ?><p>

<?php echo CHtml::link('Add Budget Type',array('create')); ?><p>
	
<?php echo CHtml::link('Update Budget Type',array('update','id'=>$model->id)); ?><p>

<?php echo CHtml::link('Manage Budget Type',array('admin')); ?><p>

		
<?php $this->endWidget(); ?>