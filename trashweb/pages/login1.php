<?php 
session_start();
include "connect.php";
if(isset($_POST['btn'])){
	$user=$_POST["uname"];
	$pass=$_POST["pass"];
	$result=mysql_query("select * from person where username='$user' and password='$pass'")or die(mysql_error());
	if(mysql_num_rows($result)>0)
	{
		$row=mysql_fetch_array($result);
		$type=$row['usertype'];
		$lid=$row['loginid'];
		$_SESSION['loginid']=$lid;
		$_SESSION['usertype']=$type;
		if($type=='admin')
		{
	?>
		<script>
		window.location="admin.php";
		</script>
			<a href="header.php?user=<?php echo $user; ?>"</a>
			<?php
		
			}
			}
		else
		{	?>
	<script>
	alert("invalid User..");
    window.location= "login.php";
    </script>			
				<?php
			
		}
			
}
?>


