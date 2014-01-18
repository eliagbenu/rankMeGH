<?php
/* @var $this DistrictProjectController */
/* @var $model DistrictProject */
/* @var $form CActiveForm */
$sql_a = Yii::app()->db->createCommand("select id,description from tbl_budget_type")->queryAll();
$BudgetTypeChosen = CHtml::listData($sql_a,'id','description');				   

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'district-project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget_type'); ?>
		<?php echo $form->dropDownList($model,'budget_type',$BudgetTypeChosen,array('empty' => 'Select ' )); 	?>
		<?php echo $form->error($model,'budget_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photos'); ?>
<?php
  $this->widget('CMultiFileUpload', array(
    // 'model'=>$model,
     //'attribute'=>'photos',
     'name'=>'photos',
     'duplicate'=>'Duplicate file',
     'denied'=>'Please attach a jpg or png file',
     'accept'=>'jpg|png',
     'max'=>10, // max 10 files
 
 
  ));
?>
		<?php echo $form->error($model,'photos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'start_date',
		    'options' => array(
        'showOn' => 'both',             // also opens with a button
        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
        'showOtherMonths' => true,      // show dates in other months
        'selectOtherMonths' => true,    // can seelect dates in other months
        'changeYear' => true,           // can change year
        'changeMonth' => true,          // can change month
        'yearRange' => '2000:2099',     // range of year
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
        'showButtonPanel' => true,      // show button panel
    ),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'end_date',
		    'options' => array(
        'showOn' => 'both',             // also opens with a button
        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
        'showOtherMonths' => true,      // show dates in other months
        'selectOtherMonths' => true,    // can seelect dates in other months
        'changeYear' => true,           // can change year
        'changeMonth' => true,          // can change month
        'yearRange' => '2000:2099',     // range of year
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
        'showButtonPanel' => true,      // show button panel
    ),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'budget_allocated'); ?>
		<?php echo $form->textField($model,'budget_allocated'); ?>
		<?php echo $form->error($model,'budget_allocated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completion_date'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'completion_date',
		    'options' => array(
        'showOn' => 'both',             // also opens with a button
        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
        'showOtherMonths' => true,      // show dates in other months
        'selectOtherMonths' => true,    // can seelect dates in other months
        'changeYear' => true,           // can change year
        'changeMonth' => true,          // can change month
        'yearRange' => '2000:2099',     // range of year
        'minDate' => '2000-01-01',      // minimum date
        'maxDate' => '2099-12-31',      // maximum date
        'showButtonPanel' => true,      // show button panel
    ),
		    'htmlOptions' => array(
		        'size' => '10',         // textField size
		        'maxlength' => '10',    // textField maxlength
		    ),
		));
		?>
		<?php echo $form->error($model,'completion_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->