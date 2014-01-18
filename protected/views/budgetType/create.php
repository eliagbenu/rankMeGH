<?php
/* @var $this BudgetTypeController */
/* @var $model BudgetType */

$this->breadcrumbs=array(
	'Budget Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BudgetType', 'url'=>array('index')),
	array('label'=>'Manage BudgetType', 'url'=>array('admin')),
);
?>

<h1>Create BudgetType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>