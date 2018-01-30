<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("connect.php");

$data_back= json_decode(file_get_contents('php://input'),true);

$user=$data_back['user_username'];
$pass=$data_back['user_password'];


if(isset($user) && ($pass)) 
{
    echo "set";

   
	$result = mysql_query("select * from person t1 inner join waste_producer t2 on t1.person_id = t2.waste_producer_id where name = '$user' and password = '$pass'");

    if (mysql_num_rows($result) > 0)
    {
		while($row=mysql_fetch_array($result))
            {
				$details[]=array(
					
               'user_id'=>$row['person_id'],
			   'user_name'=>$row['name'],
			   'user_address'=>$row['address'],
			    'user_mobile'=>$row['phone'],
				'user_email'=>$row['email'],
				'user_loctype'=>$row['location_type_id'],
				'user_lat'=>$row['gps_latitude'],
				'user_lon'=>$row['gps_longitude']
				
				   
	
         );
    		}

	}

        $success=array();
        $success["success"]="1";
        $success["message"]="success";
        $success['details']=$details;

        $hommearray[]=$success;
        echo json_encode($hommearray);


    }
    else
    {
        $success=array();
        $success["success"]="0";
        $success["message"]="fail";
        //$success['details']=$details;

        $hommearray[]=$success;
        echo json_encode($hommearray);
    }





?>