<?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("../pages/connect.php");

$data_back= json_decode(file_get_contents('php://input'),true);

$mob_user=$data_back['agent_username'];
$mob_pass=$data_back['agent_password'];


if(isset($agent_user) && ($agent_pass)) {

$result = mysql_query("select * from person where username='$agent_user' and password='$agent_pass'");

    if (mysql_num_rows($result) > 0)
    {
	
        $result1 = mysql_query("select * from signup where name='$agent_user'");
        if (mysql_num_rows($result1) > 0)
        {

            while($row=mysql_fetch_array($result1))
            {
				$details[]=array(
					
                'user_id'=>$row['loginid'],
			    'user_name'=>$row['name'],
			    'user_address'=>$row['address'],
			    'user_mobile'=>$row['mobno'],
				'user_email'=>$row['email'],
				'user_loctype'=>$row['loc_type']
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

}
?>