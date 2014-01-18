<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="dashboardIcons span-16">
	   
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-table.png" alt="Products" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('All Districts',array('district/customizedDistrictList')); ?>
        	</div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-expand.png" alt="Contacts" /></a>
        	<?php echo CHtml::link('All Projects',array('district/allProjects')); ?>        	
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-safe.png" alt="Calendar" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Budgets Per District',array('district/budgetsPerDistrict')); ?>        	
        </div>
    </div>
    
   
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-pen.png" alt="Products" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Districts',array('district/index')); ?>
        	</div>
    </div>
    

    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-pencil.png" alt="Products" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Add Budget Type',array('budgetType/create')); ?>
        	</div>
    </div>

        
</div><!-- END OF .dashIcons -->

<div class="dashboardIcons span-16">

    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-safe.png" alt="Calendar" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Add User',array('user/create')); ?>        	
        </div>
    </div>


</div>


