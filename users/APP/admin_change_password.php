
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
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="611" height="249" border="0" align="center">
  <tr>
    <td width="462" height="50"><table width="200" border="0" align="center" bgcolor="#990099">
      <tr>
        <td><div align="center" class="style1">Password Modification </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="168"> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      <div align="center"></div>
      </label>
            <table width="319" height="329" border="2" align="center" bordercolor="#000099">
              <tr>
                <td height="33" valign="top"><div align="center">Username</div></td>
                <td width="149" valign="top"><input name="username" type="text" id="username" /></td>
              </tr>
              <tr>
                <td width="152" height="36" valign="top"><div align="center">Old Password </div></td>
                <td valign="top">
                  <div align="left">
                    <input name="pass" type="password" id="pass" />
                </div></td>
              </tr>
              <tr>
                <td height="31" colspan="2"><div align="center"><strong>New Setting</strong> </div></td>
              </tr>

              <tr>
                <td height="35"><div align="center">New Password </div></td>
                <td><input name="pass1" type="password" id="pass1" /></td>
              </tr>
              <tr>
                <td height="56"><div align="center">Confirm New Password<br />
                  <br />
                </div></td>
                <td>
                    <div align="left">
                      <input name="pass2" type="password" id="pass2" />
                    </div></td>
              </tr>
              <tr>
                <td height="52"><div align="center">New User Name </div></td>
                <td><label>
                  <input name="user_new" type="text" id="user_new" />
                </label></td>
              </tr>
              <tr>
                <td height="66" colspan="2"><div align="center">
                  <input name="submit" type="submit" id="submit" value="submit" />
                </div></td>
              </tr>
            </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>


<?php 
 
 // Connects to your Database
 
  //mysql_connect("daphkkoybiz.ipagemysql.com", "dan", "bless") or die(mysql_error());  

 mysql_connect("daphkkoybiz.ipagemysql.com", "403682_dan", "dF6evf88") or die(mysql_error()); 

 mysql_select_db("daphkkoy_zzl_daph") or die(mysql_error()); 


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 
 
 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass1'] | !$_POST['pass2'] | !$_POST['user_new']) {
  	echo "<script>alert(\"You did not complete all of the required fields. \");</script>";


 		die('You did not complete all of the required fields');

 	}
	
	
	
	
 
 $check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {
 	echo "<script>alert(\"That user does not exist in our database. \");</script>";


 		die('That user does not exist in our database. ');

 				}


 
	
	// checks if the username is in use

 	
				
				
			// this makes sure both passwords entered match

 	if ($_POST['pass1'] != $_POST['pass2']) {
	
	echo "<script>alert(\"The two password did not match.\");</script>";

 		die(" <font color='red'>Your passwords did not match</font>");

 	}
	
	
	//mysql_query("UPDATE users SET username ='$usercheck'
//WHERE username ='$usercheck'");

while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {
		echo "<script>alert(\"Incorrect password, please try again.\");</script>";

	echo "<script>alert(\"Incorrect password, please try again.\");</script>";

 		die('Incorrect password, please try again.');

 	}

// The Login Page 2

 else 

 { 

$_POST['pass'] = md5($_POST['pass2']);

 	if (!get_magic_quotes_gpc()) {

 		$pass = addslashes($_POST['pass']);

 		$use = addslashes($_POST['username']);
		 $use2 = addslashes($_POST['user_new']);

	
 
 //$pass=$_POST['pass2'];
 //$use=$_POST['username'];
 }
 
 mysql_query("UPDATE users SET password = '$pass'
WHERE username = '$use' ");




$usercheck = $_POST['user_new'];

 $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {

 		die('Sorry, the username '.$_POST['username'].' is already in use.');
		header("Location: admin_change_password.php");

 				}


mysql_query("UPDATE users SET username = '$use2' WHERE password = '$pass' ");
		
echo "<script>alert(\"Thank you,your new username and password has been updated.\");</script>";


 echo("Thank you,your new username and password has been updated.");

 

 } 
}
}

?>
