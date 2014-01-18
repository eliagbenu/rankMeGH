<?php


class UserClass{

public function createDefaultPassword()
{
$default_password = '123456';
  
return $default_password;  
}


public function updateUser($id,$username,$user_rank,$district_id,$first_name,$last_name,$password)
{

Yii::app()->db->createCommand()->update("tbl_user",
                                        array(
                                        "username"=> $username,
										"user_rank"=> $user_rank,
                                        "last_name"=>$last_name,
                                        "district_id"=>$district_id,
                                        'password'=>sha1($password),
                                        "first_name"=>$first_name),
                                        "id=:id", array(":id"=>$id));
}



public function saveUser($username,$password,$user_rank,$district_id,$first_name,$last_name)
{

$a = Yii::app()->db->createCommand("select * from tbl_user where username= '$username'")->queryRow();

if(!empty($a['username']))
{
//update
   Yii::app()->db->createCommand()
                ->update('tbl_user',
				       array('user_rank'=>$user_rank),
                             "username = '$username'");
}else{
   Yii::app()->db->createCommand()
                ->insert('tbl_user',array(
                                          'username'=>$username, 
                                          'password'=>sha1($password),
                                          'user_rank'=>$user_rank,
                                          'district_id'=>$district_id,
                                          'first_name'=>$first_name,
                                          'last_name'=>$last_name
                                           ));
}


}

}

?>