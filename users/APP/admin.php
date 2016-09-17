<?php 
//login page 1
 // Connects to your Database 
include "conn.php";  


 //Checks if there is a login cookie

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site'];

 	 $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($pass != $info['password']) 

 			{

 			 			}

 		else

 			{

 			header("Location: members.php");



 			}

 		}

 }


 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {

 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		//c  bbv$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

 		die('That user does not exist in our database. <a href=login_register.php>Click Here to n</a>');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {

 		die('Incorrect password, please try again.');

 	}

// The Login Page 2

 else 

 { 

 
 // if login is ok then we add a cookie 

 	 $_POST['username'] = stripslashes($_POST['username']); 

 	 $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['username'], $hour); 

 setcookie(Key_my_site, $_POST['pass'], $hour);	 

 //then redirect them to the members area 

 header("Location: transaction.php"); 

 } 

 } 

 } 

 else 

{	 

// if they are not logged in 

 ?> 
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
	color: #003300;
	font-size: 16px;
}
.style3 {
	color: #003300;
	font-size: 18px;
	font-weight: bold;
}
.style4 {
	font-size: 18px;
	font-weight: bold;
	color: #003333;
}
-->
</style></head>

<body>
<table width="408" height="322" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><span class="style3">Admin Login </span></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <h2 class="style1">User ID</h2>
    </div>      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

        <div align="center"></div>
        <label>
        <div align="center">
          <input type="text" name="username" maxlength="40">
        </div>
        </label>
        <p align="center" class="style4">Password</p>
        <p align="center">    
          <label>
          <input type="password" name="pass" maxlength="50">
          </label>
        </p>
        <p align="center">
          <label> 
          <input type="submit" name="submit" value="Login">
          </label>
          <label></label>
        </p>
      </form></td>
  </tr>
</table>
</body>
</html>
 <?php 

 } 

 
 ?>