<?php
/* @var $this BudgetTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Budget Types',
);

$this->menu=array(
	array('label'=>'Create BudgetType', 'url'=>array('create')),
	array('label'=>'Manage BudgetType', 'url'=>array('admin')),
);
?>

<h1>Budget Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php $this->beginWidget('zii.widgets.CPortlet'); ?>

<?php echo CHtml::link('Manage',array('admin')); ?><p>

<?php echo CHtml::link('Add Budget Type',array('create')); ?><p>

<?php $this->endWidget(); ?>