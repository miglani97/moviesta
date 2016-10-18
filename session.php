<?php


mysql_connect("localhost","root","");
mysql_select_db("moviesta");



session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT username FROM `user` WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:moviest1.html");
}
?>