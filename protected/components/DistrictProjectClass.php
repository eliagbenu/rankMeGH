<?php


class DistrictProjectClass{


public function saveProject($district_id,$project_name,$location,$budget_type,$description,
			                                    $start_date,$end_date,$budget_allocated,$completion_date,$photos)
{
	$all_files = "";
	foreach($photos as $photo =>$file)
	{
	$mosf = date("yym");
	$rn = rand(0,100);
	$fn = $rn.$mosf;
	$file_name= $fn.$photo->name;
	$file_name = htmlspecialchars($file_name);	
	
	if($file->saveAs(Yii::getPathOfAlias("webroot")."/photos/".$file_name))
	{
	$all_files = $photo."~";	
	}
	
	}
	
	//echo $all_files;Yii::app()->end();
		
   Yii::app()->db->createCommand()
                ->insert('tbl_district_project',array(
                                          'district_id'=>$district_id, 
                                          'project_name'=>$project_name,
                                          'location'=>$location,
                                          'description'=>$description,                                          
                                          'budget_type'=>$budget_type,
	                                      'start_date'=>$start_date,                                                                                    
   	                                      'end_date'=>$end_date,                                                                                    
                                          'budget_allocated'=>$budget_allocated,      
                                          "photos"=>$all_files,                                                                              
                                          'completion_date'=>$completion_date,                                                                                                                      
                                           ));



}

}

?>