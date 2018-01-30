<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("connect.php");
$data_back= json_decode(file_get_contents('php://input'),true);
$user_id=$data_back['user_id'];
$sub_period=$data_back['sub_period'];


if(isset($user_id) ) 
{

     $a=mysql_query("select * from waste_producer  where waste_producer_id='$user_id' ")or die(mysql_error());
        if(mysql_num_rows($a)>0)
        {
            $sub="y";
            mysql_query("update waste_producer set subscription_status='$sub',subscription_period='$sub_period' where waste_producer_id='$user_id'")or die(mysql_error());
            $success=array();
            $success["success"]="1";
            $success["message"]="SUBSCRIPTION SUCCESSFUL";
            $hommearray[]=$success;
            echo json_encode($hommearray);
            exit();                      
        }
        
            
     $success=array();
     $success["success"]="0";
     $success["message"]="SUBSCRIPTION UNSUCCESSFUL";
     $hommearray[]=$success;
     echo json_encode($hommearray);      
}