<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<div style="margin:auto;width:90%;margin-bottom:10px;min-height: 100px">
	
	<div style="width:40%;float:left"> 
		<h3>OUR MISSION</h3>
		<p>Rank Me Ghana is about so and so</p>	
	</div>
	

	<div style="width:40%;float:right;"> 

	</div>	
</div>


<div style="margin:auto;width:90%;">
	
	<div style="width:40%;float:left;min-height:300px;"> 
		<h3>BEST PERFORMING DISTRICTS</h3>
		<p>Rank Me Ghana is about so and so</p>	
		<?php $this->renderPartial("bestPerformingDistricts"); ?>
	</div>
	

	<div style="width:40%;float:right;min-height:300px;"> 
		<h3>WORST PERFORMING DISTRICTS</h3>
		<?php $this->renderPartial("worstPerformingDistricts"); ?>		
	</div>	
</div>

<p>
	
<?php $this->beginWidget('Galleria');?>
    <img src="/images/pix1.jpg" alt="Description of image" title="Title of image" />
    <img src="/images/pix2.jpg" />
    <img src="/images/pix3.jpg" />
    <img src="/images/pix4.jpg" />
    <img src="/images/pix5.jpg" />            
<?php $this->endWidget();?>
	

</p>
