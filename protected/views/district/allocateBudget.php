<?php
/* @var $this DistrictController */
/* @var $model District */

$sql_a = Yii::app()->db->createCommand("select id,description from tbl_budget_type")->queryAll();
$BudgetTypeChosen = CHtml::listData($sql_a,'id','description');				   


$sql_b = Yii::app()->db->createCommand("select id,year from tbl_year")->queryAll();
$BudgetYearChosen = CHtml::listData($sql_b,'id','year');				   


$this->breadcrumbs=array(
	'Allocate Budget'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List District', 'url'=>array('index')),
	array('label'=>'Create District', 'url'=>array('create')),
	array('label'=>'Update District', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Allocate Budget', 'url'=>array('allocateBudget', 'id'=>$model->id)),	
	array('label'=>'Delete District', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage District', 'url'=>array('admin')),
);
?>

<h1>Allocate Budget #<?php echo $model->id; ?></h1>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'budget_year'); ?>
		<?php echo $form->dropDownList($model,'budget_year',$BudgetYearChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'budget_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget_type'); ?>
		<?php echo $form->dropDownList($model,'budget_type',$BudgetTypeChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'budget_type'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'budget_amount'); ?>
		<?php echo $form->textField($model,'budget_amount',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'budget_amount'); ?>
	</div>

		<?php echo $form->hiddenField($model,'district_id',array('value'=>$model->id)); ?>
		
	<div class="row">
		<?php echo $form->labelEx($model,'budget_source'); ?>
		<?php echo $form->textField($model,'budget_source',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'budget_source'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->