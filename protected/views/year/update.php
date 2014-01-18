<?php
/* @var $this YearController */
/* @var $model Year */

$this->breadcrumbs=array(
	'Years'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Year', 'url'=>array('index')),
	array('label'=>'Create Year', 'url'=>array('create')),
	array('label'=>'View Year', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Year', 'url'=>array('admin')),
);
?>

<h1>Update Year <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>