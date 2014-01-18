<?php
/* @var $this DistrictController */
/* @var $model District */
/* @var $form CActiveForm */

$sql_a = Yii::app()->db->createCommand("select id,region_name from tbl_region")->queryAll();
$RegionChosen = CHtml::listData($sql_a,'id','region_name');				   

?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'district-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'district_name'); ?>
		<?php echo $form->textField($model,'district_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'district_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'region'); ?>
		<?php echo $form->dropDownList($model,'region',$RegionChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'region'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->