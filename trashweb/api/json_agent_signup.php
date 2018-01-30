<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("../pages/connect.php");

$data_back= json_decode(file_get_contents('php://input'),true);

    
$name=$data_back['agent_name'];
$email=$data_back['agent_email'];
$password=$data_back['agent_password'];
$address=$data_back['agent_address'];
$mobile=$data_back['agent_mobile'];
 


if(isset($name) && ($email) && ($mobile) ) 
{

    
    $a=mysql_query("select * from Person where mobno='$agent_mobile' ")or die(mysql_error());
        if(mysql_num_rows($a)>0)
        {
            $success=array();
            $success["success"]="0";
            $success["message"]="ALREADY REGISTERED";
            //$success['details']=$details;
            $hommearray[]=$success;
            echo json_encode($hommearray)
            exit();                      
        }
        else
        {
            //move_uploaded_file($_FILES["image"]["tmp_name"],"customers/$image");
            mysql_query("insert into login(username,password) values ('$username','$password')")or die(mysql_error());
            $r=mysql_query("SELECT MAX(id) FROM login")or die(mysql_error());
            $rr=mysql_fetch_array($r);
            $loginid=$rr['0'];
            mysql_query("insert into signup(loginid,name,username,address,mobno,email,password,loc_type) values('$loginid','$name','$username'$address','$mobile','$email','$password','$loctype')")or die(mysql_error());
       }
            
            $success=array();
            $success["success"]="1";
            $success["message"]="Successfully Registered..";
            $hommearray[]=$success;
            echo json_encode($hommearray);      
}