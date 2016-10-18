<?php
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
 mysql_select_db('moviesta');
 $movie='dhoni';
$result=mysql_query("select * from shows where movie='$movie' ") or die ("failed to connect to database" .mysql_error());
 



?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>MOVIESTA</title>
	<link rel="stylesheet" type="text/css" href="astyle.css">
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
	</head>
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
    background-color: red	;
	 
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
}</style>
	<body>	 	
 <font face = "Copperplate Gothic Light" size="4">
 <ul><li><div class="logo"><font face = "Magneto" size="40" color="white">MOVIESTA</font></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="active" href="#home">Home</a></li>
  
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
 
 <align="center"><font color="#FFFFFF"> Hello 	</font><br>
<td align="center"><a href="logout1.php"><font color="#FFFFFF">Logout</font></a>
 </div>

<div class ="admin" id = "div1" style="display:block">
<label onclick="replace1();return false"/>View Movies</label><br><br>
<label onclick="replace();return false"/>Add Movies</label><br><br>
<label onclick="replace();return false"/>Update Movies</label><br><br>


 </div>
<div class ="admin" id = "div2" style="display:none">
<form action="insadmin.php" method="post">
Movie Name: <input type="text" name="mname"><br><br>
Theatre Name: <input type="text" name="tname"><br><br>
Show Timing: <input type="text" name="stime"><br><br>
<input type="submit">
</form>
</div> 
<div class ="admin" id = "div3" style="display:none">
<?php

$result=mysql_query("SELECT DISTINCT movie FROM shows ") or die ("failed to connect to database" .mysql_error());

while($row = mysql_fetch_array($result))

{
  
 
  
$time=$row['movie'];

  echo ''.$time.'<br><br>';


}
?>

</div> 

<script> 
function replace() { 
 
document.getElementById("div1").style.display="none"; 
document.getElementById("div2").style.display="block"; } 

function replace1() { 
 
document.getElementById("div1").style.display="none"; 
document.getElementById("div3").style.display="block"; } 

</script>
 </div>
<div class="sect sectTwo"></div>

</body>
</html>