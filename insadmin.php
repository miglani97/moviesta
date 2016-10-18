<!DOCTYPE html>
<html >
<head>
</head>
<body>

<?php

$moviename=$_POST['mname']; 
$theatre=$_POST['tname'];
$showtime=$_POST['stime']; 

 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO shows (movie,theatre,time) VALUES ('$moviename','$theatre','$showtime')";
      
      
   mysql_select_db('moviesta');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
 echo '<script language="javascript">';
echo 'alert("Entered Successfully" )';
echo '</script>';

   header("Location:adminlogtheater.php"); 
   
   mysql_close($conn);
   
  
?>


<a href="Login.php">Go back to the home Page</a>

</body>
</html>