<?php
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
 mysql_select_db('moviesta');
 $movie='storks';
$result=mysql_query("select * from shows where movie='$movie' ") or die ("failed to connect to database" .mysql_error());
 



?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>MOVIESTA</title>
	<link rel="stylesheet" type="text/css" href="stylemo.css"></head>

	<style>
 ul {
 
    list-style-type: none;
    margin: 0px;
    padding: 0px;
  overflow: hidden;
    background-color: #333	;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:red	;
	 
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
	<body link="white" vlink="white" alink="white" 	> 	 		
 <font face = "Copperplate Gothic Light" size="4">
 <ul><li><div class="logo"><font face = "Magneto" size="40" color="white">MOVIESTA</font></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="active" href="moviesta.html">Home</a></li>
  
  <li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="movies.html">Movies</a>
      <a href="#">Sports</a>
      <a href="#">Plays</a>
    </div>
  
  </li>
<li><a href="aboutus.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAbout Us</a></li>
  <li><a href="aboutus.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContact Us</a></li>
  </ul>	
 
<div class="sect sectOne" align="center">
 <br><br><br><br><br><br><br>
 <div class="right">
<a href="login.php"><font color="#FFFFFF">LOGIN/Register</font></a>	
	</div>
 <div class="a1">
 JAM MULTIPLEX SHIPRA MALL
	</div>
<div class="a2">
 <hr>
 <br>
 
<p align= "left">&nbsp&nbsp&nbsp&nbsp&nbsp
 <?php

$result=mysql_query("select * from shows where movie='$movie' and theatre='Shipra'") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['time'];

  echo ''.$time.'&nbsp&nbsp&nbsp';


}
?>

	</div>
<div class="a1">
 <a href="shipra.php"> JAM MULTIPLEX SHIPRA MALL</a>
	</div>
<div class="a2">
 <hr>
 <br>
 
<p align= "left">&nbsp&nbsp&nbsp&nbsp&nbsp
 <?php

$result=mysql_query("select * from shows where movie='$movie' and theatre='Shipra'") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['time'];

  echo ''.$time.'&nbsp&nbsp&nbsp';


}
?>

	</div>
<div class="a3">
 <a href="aditiya.php">SRS CINEMA ADITYA MALL</a>
	</div>
<div class="a4">
 <hr>
 <br>
 
<p align= "left">&nbsp&nbsp&nbsp&nbsp&nbsp
 <?php

$result=mysql_query("select * from shows where movie='$movie' and theatre='aditya'") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['time'];

  echo ''.$time.'&nbsp&nbsp&nbsp';


}
?>

	</div>
		
	<div class="a5">
 <a href="jaipuria.php">SRS CINEMA JAIPURIA MALL</a>
	</div>
<div class="a6">
 <hr>
 <br>
 
<p align= "left">&nbsp&nbsp&nbsp&nbsp&nbsp
 <?php

$result=mysql_query("select * from shows where movie='$movie' and theatre='jaipuria'") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['time'];

  echo ''.$time.'&nbsp&nbsp&nbsp';


}
?>

	</div>
		
	<div class="a7">
 <a href="mahagun.php">PVR CINEMA MAHAGUN MALL</a>
	</div>
<div class="a8">
 <hr>
 <br>
 
<p align= "left">&nbsp&nbsp&nbsp&nbsp&nbsp
 <?php

$result=mysql_query("select * from shows where movie='$movie' and theatre='mahagun'") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['time'];

  echo ''.$time.'&nbsp&nbsp&nbsp';


}
?>

	</div>
		
	
	
	
	
	
	
	
	
	
	
	</div>

</body>
</html>