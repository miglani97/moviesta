
<?php

$username=$_POST['username1']; 
$question=$_POST['question1'];
$password=$_POST['Password'];
$confirmpassword=$_POST['PasswordConfirm'];


$username=stripcslashes($username);
$password=stripcslashes($password);
$question=stripcslashes($question);
$confirmpassword=stripcslashes($confirmpassword);

$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$question=mysql_real_escape_string($question);
$confirmpassword=mysql_real_escape_string($confirmpassword);



mysql_connect("localhost","root","");
mysql_select_db("moviesta");


$result=mysql_query("select * from user where Username='$username' and Question='$question'") or die ("failed to connect to database" .mysql_error());
$row=mysql_fetch_array($result);
 if($row['Username']==$username && $row['Question']==$question)
 {
	$result1 = mysql_query("UPDATE user SET Password='$password' WHERE Username='$username'");
	
	if($result1)
	{echo "password changed successfully  !!!";
	
		
		}
	
 }
	
	 
 
 
 
 else
 {echo "Failed to Change Password";
 }

?>
