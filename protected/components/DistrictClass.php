<?php


class DistrictClass{


public function saveBudgetAllocated($budget_year,$budget_type,$budget_source,$district_id,$budget_amount)
{

   Yii::app()->db->createCommand()
                ->insert('tbl_district_budget',array(
                                          'district_id'=>$district_id, 
                                          'budget_amount'=>$budget_amount,
                                          'budget_year'=>$budget_year,
                                          'budget_source'=>$budget_source,
                                          'budget_type'=>$budget_type
                                           ));


}

}

?>