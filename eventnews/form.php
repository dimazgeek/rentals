<!DOCTYPE html>
<html>
<head>
<title>Even News</title>
<meta charset="utf-8"/>
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/even.css" />
<script type="text/javascript" src="js/password.js"></script>
</head>
<body id="body1">

<div class="mainheader">
  <?php include("includes/header.php");?>
</div>

<div id="tabs">
<?php include("includes/navigation.php")?>
</div>
<div class="transbox2">
<form id="form" name="myForm" action="http://cscie12.dce.harvard.edu/echo" method="post">
<fieldset name="SignUp">
<legend>sign up</legend>
Username: <br><input size="30" placeholder="username"
            name="username" id="username" type="text"> <br>
Email:<br><input size="30" placeholder="email"
            name="email" id="email" type="text">
     <br>
Password:<br><input size="30" required="required" placeholder="password" name="pwd1"
            id="pwd1" type="password"> <span class="hint" id="pwd1Hint">Password
            is too short (must be at least 8 characters)</span> <br>
Repeat Password:<br><input size="30" required="required" placeholder="password" name="pwd2"
            id="pwd2" type="password"> <span class="hint" id="pwd2Hint">Passwords
            don't match</span><br>
          <br>
<input id="submit" type="submit" value="Submit">
</fieldset>

</form>
</div>
</body>
</html>
