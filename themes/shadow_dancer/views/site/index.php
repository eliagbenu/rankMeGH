<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome</h1>

<div class="flash-success">
	<h3>Our Mission</h3>
	<div style="float:right"><?php echo CHtml::image(Yii::app()->baseUrl."/images/ghana.png"); ?></div>
	<p>
    <b>RankMe GH</b> is here to offer a competitive platform for which Ghanaians can 
        <ul>
        	<li><i>See</i></li>
        	<li><i>Analyse</i></li>
        	<li><i>Grade</i></li>        	
        	<li><i>Participate</i></li>	        	        	
        </ul> in the execution of projects in their districts.
	</p>
</div>

<div class="span-23 showgrid">
<div class="dashboardIcons span-16">
	
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-table.png" alt="Products" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('All Districts',array('district/customizedDistrictList')); ?>
        	</div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-expand.png" alt="Contacts" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('All Projects',array('district/allProjects')); ?>
        	</div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-safe.png" alt="Calendar" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Budgets Per Districts',array('district/budgetsPerDistrict')); ?>
        	</div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-safe.png" alt="Calendar" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Budget Types',array('budgetType/index')); ?>
        	</div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-safe.png" alt="Calendar" /></a>
        <div class="dashIconText">
        	<?php echo CHtml::link('Regions',array('region/index')); ?>
        	</div>
    </div>
            
</div><!-- END OF .dashIcons -->



<div class="span-10" style="background-color:#99CC32;padding:10px">

<div class="chart2">
<div>
        <div class="text">
		<h3>3 Best Performing Districts</h3>
		<?php $this->renderPartial("bestPerformingDistricts"); ?>            
      </div>
</div>
</div>

</div>
                
<div class="span-10" style="background-color:#FF3030;padding:10px">

		<h3>3 Worst Performing Districts</h3>
		<?php $this->renderPartial("worstPerformingDistricts"); ?>		
</div>

<div class="span-16" style="padding:10px;margin-top:20px;background-color:#eeeed1;">
	
<h2>Comparing 2 Districts</h2>

<?php

$sql_d1 = "select district_name,b.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings,
 sum(CEIL((budget_allocated/budget_amount)*d.score)) as total_rankings         
from
(SELECT * FROM `tbl_district_project`) a left join 
(select * from tbl_district where 5) b on 
a.district_id = b.id left join
(select * from tbl_district_budget) c on 
c.district_id = b.id left join
(select * from tbl_budget_type) d on 
c.budget_type = d.id 
order by total_rankings desc";

$sql_d2 = "select district_name,b.id as id,CEIL((budget_allocated/budget_amount)*d.score) as rankings,
 sum(CEIL((budget_allocated/budget_amount)*d.score)) as total_rankings         
from
(SELECT * FROM `tbl_district_project`) a left join 
(select * from tbl_district where 7) b on 
a.district_id = b.id left join
(select * from tbl_district_budget) c on 
c.district_id = b.id left join
(select * from tbl_budget_type) d on 
c.budget_type = d.id 
order by total_rankings desc";

//$count = Yii::app()->db->createCommand($sql_ad)->queryColumn();

$d1 = Yii::app()->db->createCommand($sql_d1)->queryRow();

$d2 = Yii::app()->db->createCommand($sql_d2)->queryRow();

//$dv = Yii::app()->db->createCommand("SELECT LPAD(convert(count(*),char),3,'0')  FROM tbl_staff_details group by department")->queryColumn();


        $this->widget(
            'chartjs.widgets.ChPolar', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'drawLabels'=>true,
               // 'labels' => $dn,
                'datasets' => array(
                    array(
                        "value" => "25",
                        "color" => "rgba(220,30,70,1
						)",
                        "label" => "Amansie Central",
                       // "data" => $dv                        
                    ),       
                    array(
                        "value" => "50",
                        "color" => "rgba(66,66,66,1)",
                        "label" => "Kwaebibirem District",
                       // "data" => $dv                        
                    )                           
                ),
                'options' => array()
            )
        ); 
?>	
	
</div>


<div class="span-16" style="padding:10px;margin-top:20px;background-color:#eeeed1;">
	
<h2>Comparison on Health between <i style="color:red">Amansie Central</i> and <i style="color:green">Kwaebibirem District</i></h2>

<?php

 $this->widget(
            'chartjs.widgets.ChLine', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'labels' => array("2009","2010","2011","2012","2013"),
                'datasets' => array(
                    array(
                        "fillColor" => "rgba(153,204,50,0.3)",
                        "strokeColor" => "rgba(153,204,50,1)",
                        "pointColor" => "rgba(153,204,50,1)",
                        "pointStrokeColor" => "#ffffff",
                        "data" => array(15, 25, 25, 50, 45)
                    ),
                    array(
                        "fillColor" => "rgba(255,0,0,0.3)",
                        "strokeColor" => "rgba(255,0,0,0.4)",
                        "pointColor" => "rgba(0,0,0,1)",
                        "pointStrokeColor" => "#ffffff",
                        "data" => array(20, 25, 30, 20, 30)
                    )      
                ),
                'options' => array()
            )
        ); 
?>	
	
</div>

<div class="span-20" style="margin:auto">
	
	<p>
	
<?php $this->beginWidget('Galleria');?>
    <img src="/images/pix1.jpg" alt="Description of image" title="Title of image" />
    <img src="/images/pix2.jpg" />
    <img src="/images/pix3.jpg" />
    <img src="/images/pix4.jpg" />
<?php $this->endWidget();?>
	

</p>

	
</div>



</div>