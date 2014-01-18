<?php


class RatingClass{


public function saveUserRating($user_rating,$project_id,$comment)
{

$a = Yii::app()->db->createCommand("select * from tbl_district_project where id = $project_id")->queryRow();

Yii::app()->db->createCommand()->update("tbl_district_project",
                                        array(
                                        "number_of_user_ratings"=> $a['number_of_user_ratings'] + 1,
                                        "user_rating_score"=>  $a['user_rating_score'] + $user_rating),
                                        "id=:id", array(":id"=>$project_id));


if($comment!=""){
   Yii::app()->db->createCommand()
                ->insert('tbl_district_project_comment',array(
                                          'district_id'=>$a['district_id'], 
                                          'project_id'=>$project_id,
                                          'comment'=>$comment ));	
}


}

}

?>