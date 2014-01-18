<?php
/* @var $this BudgetTypeController */
/* @var $model BudgetType */

$this->breadcrumbs=array(
	'Budget Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BudgetType', 'url'=>array('index')),
	array('label'=>'Create BudgetType', 'url'=>array('create')),
	array('label'=>'View BudgetType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BudgetType', 'url'=>array('admin')),
);
?>

<h1>Update BudgetType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>