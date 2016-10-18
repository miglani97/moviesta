<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>

<?php

$firstname=$_POST['fname']; 
$lastname=$_POST['LName'];
$email=$_POST['Email']; 
$username1=$_POST['UserName'];
$password=$_POST['Password']; 
$confirmpassword=$_POST['PasswordConfirm'];
$question=$_POST['Question'];




$firstname=stripcslashes($firstname);
$lastname=stripcslashes($lastname);

$email=stripcslashes($email);
$username1=stripcslashes($username1);

$password=stripcslashes($password);
$confirmpassword=stripcslashes($confirmpassword);

$firstname=mysql_real_escape_string($firstname);
$lastname=mysql_real_escape_string($lastname);

$email=mysql_real_escape_string($email);
$username1=mysql_real_escape_string($username1);

$confirmpassword=mysql_real_escape_string($confirmpassword);
$password=mysql_real_escape_string($password);

 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO user (fname,Lname,Email,Username,Password,Question) VALUES ('$firstname','$lastname','$email','$username1','$password','$question')";
      
      
   mysql_select_db('moviesta');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
 echo '<script language="javascript">';
echo 'alert("Registration Successful" )';
echo '</script>';

 header("Location:login.php");   
   
   mysql_close($conn);
   
  
?>


<a href="Login.php">Go back to the home Page</a>

</body>
</html>