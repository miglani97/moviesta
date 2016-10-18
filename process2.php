
<?php

session_start();

{
$username=$_POST['UserName']; 
$password=$_POST['Password'];


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$selected_radio=$_POST['type'];

mysql_connect("localhost","root","");
mysql_select_db("moviesta");


$result=mysql_query("select * from user where Username='$username' and Password='$password'") or die ("failed to connect to database" .mysql_error());
$row=mysql_fetch_array($result);
 if($row['Username']==$username && $row['Password']==$password)
 {
	 
	 echo "Login Success!!! Welcome " .$row['Username'];
		echo "hi".$selected_radio;
$_SESSION['login_username']=$username;
	if($selected_radio==user){
	header("Location:moviesta1.php");	
	}
    else{
		header("Location:adminlogtheater.php");
	}


 

 }
 else
 {echo "Failed to Login";
 }
}
?>
