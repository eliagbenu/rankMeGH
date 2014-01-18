<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

$sql_a = Yii::app()->db->createCommand("select id,district_name from tbl_district")->queryAll();
$DistrictChosen = CHtml::listData($sql_a,'id','district_name');				   

$sql_b = Yii::app()->db->createCommand("select id,description from tbl_user_rank")->queryAll();
$UserRankChosen = CHtml::listData($sql_b,'id','description');				   
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'district_id'); ?>
		<?php echo $form->dropDownList($model,'district_id',$DistrictChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'district_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'user_rank'); ?>
		<?php echo $form->dropDownList($model,'user_rank',$UserRankChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'user_rank'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->