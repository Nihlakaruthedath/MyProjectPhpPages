<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("connect.php");
$data_back= json_decode(file_get_contents('php://input'),true);
$name=$data_back['user_username'];
$email=$data_back['user_email'];
$password=$data_back['user_password'];
$address=$data_back['user_address'];
$phone=$data_back['user_phone'];
$gps_latitude=$data_back['user_latitude'];
$gps_longitude=$data_back['user_longitude'];
$loctype_id=$data_back['user_loctype_id'];

if(isset($name) && ($phone) ) 
{

     $a=mysql_query("select * from person INNER JOIN waste_producer on person.person_id = waste_producer.waste_producer_id where phone='$phone' ")or die(mysql_error());
        if(mysql_num_rows($a)>0)
        {
            $success=array();
            $success["success"]="0";
            $success["message"]="ALREADY REGISTERED";
            $hommearray[]=$success;
            echo json_encode($hommearray);
            exit();                      
        }
        else
        {
                
            //move_uploaded_file($_FILES["image"]["tmp_name"],"customers/$image");
           // mysql_query("insert into login(username,password) values ('$name','$password')")or die(mysql_error());
            //$r=mysql_query("SELECT MAX(id) FROM login")or die(mysql_error());
            //$rr=mysql_fetch_array($r);
           // $loginid=$rr['0'];
             mysql_query("insert into Person(name,email,password,address,phone) values('$name','$email','$password','$address','$phone')")or die(mysql_error());
              $id=mysql_insert_id(); 
              $sub = "n";
            mysql_query("insert into waste_producer(waste_producer_id,gps_latitude,gps_longitude,location_type_id,subscription_status) values('$id','$gps_latitude','$gps_longitude','$loctype_id','$sub')")or die(mysql_error());
       
            
        }     
            
     $success=array();
     $success["success"]="1";
     $success["message"]="Successfully Registered..";
     $hommearray[]=$success;
     echo json_encode($hommearray);      
}