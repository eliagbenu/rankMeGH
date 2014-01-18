<?php
/* @var $this DistrictProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'District Projects',
);

$this->menu=array(
	array('label'=>'Create DistrictProject', 'url'=>array('create')),
	array('label'=>'Manage DistrictProject', 'url'=>array('admin')),
);
?>

<h1>District Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
