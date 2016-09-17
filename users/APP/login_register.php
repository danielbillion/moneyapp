<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	font-size: 19px;
	font-weight: bold;
	color: #0000CC;
}
-->
</style></head>

<body>


<?php 
 
 // Connects to your Database
 
  //mysql_connect("daphkkoybiz.ipagemysql.com", "dan", "bless") or die(mysql_error());  

 include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
	echo "<script>alert(\"You did not complete all of the required fields.\");</script>";

 		die('You did not complete all of the required fields');

 	}



 // checks if the username is in use

 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];

 $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {
 	echo "<script>alert(\"Sorry, the username is already in use.\");</script>";


 		die('Sorry, the username '.$_POST['username'].' is already in use.');

 				}


 // this makes sure both passwords entered match

 	if ($_POST['pass'] != $_POST['pass2']) {
	
	echo "<script>alert(\"The two password did not match.\");</script>";

 		die(" <font color='red'>Your passwords did not match</font>");


 	}

// here we encrypt the password and add slashes if needed

 	$_POST['pass'] = md5($_POST['pass']);

 	if (!get_magic_quotes_gpc()) {

 		$_POST['pass'] = addslashes($_POST['pass']);

 		$_POST['username'] = addslashes($_POST['username']);

 			}



 // now we insert it into the database

 	$insert = "INSERT INTO users (username, password)

 			VALUES ('".$_POST['username']."', '".$_POST['pass']."')";

 	$add_member = mysql_query($insert);
		echo "<script>alert(\"Thank you, you have registered - you may now login.\");</script>";


 	?>
	
	<h1>Registered</h1>
	

 	<p>Thank you, you have registered - you may now login</a>.</p>
 	<blockquote>
 	 
  </blockquote>
 	<?php 
 } 

 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <table border="0" align="center">
 <tr><td> 	  <p align="center" class="style1">Amin Setup </p>
</td><td>

 <tr><td>Username:</td><td>

 <input type="text" name="username" maxlength="60">

 </td></tr>

 <tr><td>Password:</td><td>

 <input type="password" name="pass" maxlength="10">

 </td></tr>

 <tr><td>Confirm Password:</td><td>

 <input type="password" name="pass2" maxlength="10">

 </td></tr>

 <tr><th colspan=2><input type="submit" name="submit" 
value="Register"></th></tr> </table>

</form>

<?php

 }
 ?> 
 
</body>
</html>
