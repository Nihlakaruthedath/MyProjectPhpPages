    <?php
//header('Content-Type: application/json');
//header('Access-Control-Allow-Origin: *');

include ("../pages/connect.php");
$data_back= json_decode(file_get_contents('php://input'),true);

$client_id=$data_back['user_id'];


  $x=mysql_query("select * from person where userid='$user_id' ")or die(mysql_error());
  if(mysql_num_rows($x)>0){
 
 while($row=mysql_fetch_array($x))
   {
    $subscription=$row['orderid'];
   $t=$row['date'];
    $od=$row['duration']  

 


   if($st=='Completed')
    {
     $sta='Completed';  
    }
    else if($st=='Pending')
    {
     $sta='Pending';  
    }
        $details[]=array(
                'order_id'=>$row['orderid'],
                'o_date'=>$t,
                'status'=>$sta,
              'o_schedule'=>$sc

             );

    $success=array();
    $success["success"]="1";
    $success["message"]="success";
    $success['details']=$details;

   
  }
   $homearray[]=$success;
    echo json_encode($homearray); 
    }
    else
    {$success=array();
    $success["success"]="0";
    $success["message"]="Fail";
    $success['details']="null";
    $homearray[]=$success;
    echo json_encode($homearray); 
}
?>