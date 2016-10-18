<!DOCTYPE html >
<html >
<head>
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<?php
session_start();
?>

<body background="logback1.jpg" color="white">
<div id="holder">
<div id="header"></div>
<div id="Navbar">
<nav>
<ul>
<li><a href="Login.php">Login</a></li>
<li><a href="Register.php">Register</a></li>
<li><a href="ForgotPassword.php">Forgot Password</a></li>
</ul>

</nav>
</div>
<div id="Content">
<div class="textfieldValidState" id="PageHeading">
  <h1>Login!</h1>
</div>
<div id="ContentLeft">
  
</div>
<div id="ContentRight">
<form id="Login" name="Login" method="post" action="process2.php">
  <table width="400" border="0" align="center">
   	<tr><td><span id="sprytextfield2">
  
</span>
<input type="radio" name="type" value="user" checked> User&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="radio" name="type" value="member" 	> Member
    </tr>
    <tr>
      <td><span id="sprytextfield2">
    <br>
        <label for="UserName2"></label>
        UserName<br />
        <br />
<input name="UserName" type="text" class="StyleTxtField" id="UserName2" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span id="sprypassword1">
        <label for="Password"></label>
        Password<br />
        <br />
<input name="Password" type="password" class="StyleTxtField" id="Password" />
        <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="LoginButton" id="LoginButton" value="Login" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  <span id="sprytextfield1">
  <label for="UserName"></label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>