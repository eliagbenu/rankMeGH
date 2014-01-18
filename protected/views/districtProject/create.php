<?php if(Yii::app()->user->hasFlash('save_project')): ?>
 
<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('save_project'); ?>
</div>
 
<?php else: ?> 
 

<?php
/* @var $this DistrictProjectController */
/* @var $model DistrictProject */

$this->breadcrumbs=array(
	'District Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DistrictProject', 'url'=>array('index')),
	array('label'=>'Manage DistrictProject', 'url'=>array('admin')),
);
?>

<h1>Create DistrictProject</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

 
<?php endif; ?>

