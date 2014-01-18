<?php
/* @var $this DistrictProjectController */
/* @var $model DistrictProject */

$this->breadcrumbs=array(
	'District Projects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DistrictProject', 'url'=>array('index')),
	array('label'=>'Create DistrictProject', 'url'=>array('create')),
	array('label'=>'View DistrictProject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DistrictProject', 'url'=>array('admin')),
);
?>

<h1>Update DistrictProject <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>