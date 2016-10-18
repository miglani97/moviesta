<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Layout.css" rel="stylesheet" type="text/css" />
<link href="Menu.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
</head>

<body background="logback1.jpg" color="white"
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
<div id="PageHeading">
  <h1>Forgot Password!!</h1>
</div>
<div id="ContentLeft">
</div>
<div id="ContentRight">
 <form id="RegisterForm" name="RegisterForm" method="post" action="process3.php">
  <table width="400" border="0">
  <tr>    </tr>
  <tr>    </tr>
  </table>
  <table width="400" border="0">
    <tr>
      <td><span id="sprytextfield1">
        <label for="username1"></label>
        Username<br />
        <br />
<input name="username1" type="text" class="StyleTxtField" id="username1" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p>What is your favourite number??</p>
        <span id="sprytextfield2">
        <label for="question1"></label>
        <input name="question1" type="text" class="StyleTxtField" id="question1" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="391" border="0">
        <tr>
          <td width="188"><span id="sprypassword1">
            <label for="Password"></label>
            Enter new Password<br />
            <br />
<input name="Password" type="password" class="StyleTxtField" id="Password" />
            <span class="passwordRequiredMsg">A value is required.</span></span></td>
          <td width="187"><span id="spryconfirm1">
            <label for="PasswordConfirm"></label>
            Confirm new Password<br />
            <br />
<input name="PasswordConfirm" type="password" class="StyleTxtField" id="PasswordConfirm" />
            <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "Password");
</script>
</body>
</html>