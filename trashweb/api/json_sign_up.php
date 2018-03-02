<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("../pages/connect.php");

$data_back= json_decode(file_get_contents('php://input'),true);

$name=$data_back['user_name'];
$mobile=$data_back['user_mobile'];
$loctype=$data_back['user_loctype'];
$address=$data_back['user_address'];
$pin=$data_back['user_pin'];
$email=$data_back['user_email'];
$password=$data_back['user_password']; 

//$gps_latitude=$data_back['user_latitude'];
//$gps_longitude=$data_back['user_longitude'];

if(isset($name) && ($mobile) ) 
{

     $a=mysql_query("select * from Person INNER JOIN Waste_producer on Peson.idWaste_producer=Waste_producer.idWaste_producer where phone='$user_mobile' ")or die(mysql_error());
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
                
            //move_uploaded_file($_FILES["image"]["tmp_name"],"customers/$image");s
           // mysql_query("insert into login(username,password) values ('$name','$password')")or die(mysql_error());
            //$r=mysql_query("SELECT MAX(id) FROM login")or die(mysql_error());
            //$rr=mysql_fetch_array($r);
           // $loginid=$rr['0'];
            mysql_query("insert into Waste_producer(gps_latitude,gps_longitude,idlocation) values('$gps_latitude','gps_longitude','$idlocation')")or die(mysql_error());
           $id=mysql_insert_id(); 
       
            mysql_query("insert into Person(idcollection_agent,idWaste_producer,name,address,mobile,email,password) values('$idcollection_agent','$idWaste_producer','$name','$address','$mobile','$email','$password','$loctype')")or die(mysql_error());
        }     
            
     $success=array();
     $success["success"]="1";
     $success["message"]="Successfully Registered..";
     $hommearray[]=$success;
     echo json_encode($hommearray);      
}