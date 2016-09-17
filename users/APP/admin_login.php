<?php  session_start();



//login page 1
 // Connects to your Database 

 include "conn.php";  


 //Checks if there is a login cookie
 /*

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
 
 $username = $_COOKIE['ID_my_site']; 
 	$email = $_COOKIE['ID_my_site']; 
 	$password = $_COOKIE['Key_my_site'];

 	 $check = mysql_query("SELECT * FROM agent WHERE email = '$email'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($password != $info['password']) 

 			{

 			 			}

 		else

 			{

 			header("Location: admin_page.php");



 			}

 		}

 }
*/

 //if the login form is submitted 

 if (isset($_POST['Login'])) { // if form has been submitted

$_POST['password']=mysql_escape_string($_POST['password']);
$_POST['email']=mysql_escape_string($_POST['email']);
$email_check= $_POST['email']=mysql_escape_string($_POST['email']);

 // makes sure they filled it in
 
 if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
																	 $email_check)){

 	if(!$_POST['email'] | !$_POST['password']) {

 		{$msg = ' Empty field <br />';}

 	}

 	// checks it against the database
	$_SESSION['email'] = $_POST['email'];

	$email_check= $_POST['email'];
 	if (!get_magic_quotes_gpc()) {

 		//c  bbv$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['email']."'")or die(mysql_error());


$result = mysql_query('SELECT id,email,date,log_type FROM last_login ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
//print values to screen
while ($row = mysql_fetch_assoc($result)) { $_SESSION['date'] = $row['date'];}



$getll = mysql_query("SELECT date FROM last_login WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
list($lastlogin) = mysql_fetch_row($getll);
$_SESSION['date'] = $lastlogin;

 //Gives error if user dosen't exist4

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

		{$msg = 'That user does not exist in our database';}

 				}
				
	$date=date('Y-m-d H:i:s');
	$time=time("H:i:s");
	$log_type="admin";
	$check3 = mysql_query("SELECT * FROM last_login WHERE email = '$email_check'")or die(mysql_error());
	$check4 = mysql_num_rows($check3);
	
	if ($check4 == 0) {
	mysql_query("INSERT INTO last_login(email,log_type,fname,lname,date,time) VALUES ('$email_check','$log_type','$fname','$lname','$date','$time' )"); }
		

 while($info = mysql_fetch_array( $check )) 	

 {

$_POST['password'] = stripslashes($_POST['password']);
$_SESSION['id']="Kzl"."1100".$info['id'];
$lname=$info['lname'];
$fname=$info['fname'];

$_SESSION['s_fname']=$info['username'];
	

 	$info['password'] = stripslashes($info['password']);

 	$_POST['password'] = md5($_POST['password']);



 //gives error if the password is wrong

 	if ($_POST['password'] != $info['password']) {

		
		{$msg = 'Incorrect password, please try again.';}
 	}
	
	
	
	 
	
	

// The Login Page 2


 else 

 { 
 
  $hour = time() + 3600; 
 setcookie(ID_my_site, $_POST['email'], $hour); 

 setcookie(Key_my_site, $_POST['password'], $hour);

															$date=date('Y-m-d H:i:s');
															$time=time("H:i:s");
															$log_type="admin";
															
															
	$updatelog = mysql_query("UPDATE last_login SET date = '$date' WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
      header('Location: admin_page.php '); 

 

 } 

 } 
}

/* ************* empty fields */


if(!$_POST['email'] | !$_POST['password']) {

 		{$msg = ' Empty Fields .. <br />';}

 	}



/* ******************************** for Email **************** */

 if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
																	 $email_check)){  
																	 
																	 
																	 if(!$_POST['email'] | !$_POST['password']) {

 		{$msg = ' Empty field <br />';}

 	}

 	// checks it against the database
	$_SESSION['email'] = $_POST['email'];

	$email_check= $_POST['email'];
 	if (!get_magic_quotes_gpc()) {

 		//c  bbv$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check_email = mysql_query("SELECT * FROM users WHERE email = '".$_POST['email']."'")or die(mysql_error());


$result_email = mysql_query('SELECT id,email,date,log_type FROM last_login ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
//print values to screen
while ($row = mysql_fetch_assoc($result_email)) { $_SESSION['date'] = $row['date'];}



$getll_email = mysql_query("SELECT date FROM last_login WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
list($lastlogin) = mysql_fetch_row($getll_email);
$_SESSION['date'] = $lastlogin;

 //Gives error if user dosen't exist4

 $check2_email = mysql_num_rows($check_email);

 if ($check2_email == 0) {

		{$msg = 'That user does not exist in our database...';}

 				}
				
	$date=date('Y-m-d H:i:s');
	$time=time("H:i:s");
	$log_type="admin";
	$check3_email = mysql_query("SELECT * FROM last_login WHERE email = '$email_check'")or die(mysql_error());
	$check4_email = mysql_num_rows($check3_email);
	
	if ($check4_email == 0) {
	mysql_query("INSERT INTO last_login(email,log_type,fname,lname,date,time) VALUES ('$email_check','$log_type','$fname','$lname','$date','$time' )"); }
		

 while($info_email = mysql_fetch_array( $check_email )) 	

 {

$_POST['password'] = stripslashes($_POST['password']);
$_SESSION['id']="Kzl"."1100".$info_email['id'];
$lname=$info_email['lname'];
$fname=$info_email['fname'];

$_SESSION['s_fname']=$info_email['fname']."  ".$info_email['lname'];
	

 	$info_email['password'] = stripslashes($info_email['password']);

 	$_POST['password'] = md5($_POST['password']);



 //gives error if the password is wrong

 	if ($_POST['password'] != $info_email['password']) {

		
		{$msg = 'Incorrect password, please try again.';}
 	}
	


 else 

 { 

															$date=date('Y-m-d H:i:s');
															$time=time("H:i:s");
															$log_type="admin";
															
															
 $hour = time() + 3600; 												
 setcookie(ID_my_site, $_POST['email'], $hour); 

 setcookie(Key_my_site, $_POST['password'], $hour);
															
	$updatelog_email = mysql_query("UPDATE last_login SET date = '$date' WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
       header('Location: admin_page.php '); 

 

 } 

 } 

																	 
																	 }











}
 

// if they are not logged in 

 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Kunzle Customer Login</title>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
.style10 {color: #000000; font-weight: bold; }
.style11 {
	color: #FFFFFF;
	font-size: 16px;
}
.style12 {
	color: #990000;
	font-size: 16px;
	font-weight: bold;
}
.style15 {font-size: 18; color: #FFFF33; }
.style16 {color: #990000}
.style19 {
	color: #000099;
	font-size: 10px;
	font-style: italic;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="200" border="0" align="center">
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="378" height="421" border="0" align="center" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="460" height="423" border="1" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#000000">
        <tr bgcolor="#0033FF">
          <td height="22" bgcolor="#5E338C"><div align="center" class="style7">ADMINISTRATIONS</div></td>
        </tr>
        <tr>
          <td height="358"><table width="438" height="374" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#99CCCC">
              <tr>
                <td><div align="center">
                    <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                </div></td>
              </tr>
              <tr>
                <td height="38">&nbsp;</td>
              </tr>
              <tr>
                <td height="38"><div align="center" class="style10">
                    <div align="left" class="style11">
                      <div align="center" class="style16">Email / Username </div>
                    </div>
                </div>
                    <span class="style16">
                    <label>
                    </span>
                    <div align="center"></div>
                  </label></td>
              </tr>
              <tr>
                <td height="39"><div align="center">
                    <input name="email" type="text" id="email" />
                </div></td>
              </tr>
              <tr>
                <td height="19"><div align="center"></div></td>
              </tr>
              <tr>
                <td height="39"><label>
                    <div align="center"></div>
                  <div align="center"></div>
                  <div align="center"></div>
                  <div align="center"></div>
                  <div align="center"></div>
                  </label>
                    <div align="center"></div>
                  <div align="center"></div>
                  <div align="center"></div></td>
              </tr>
              <tr>
                <td height="20"><div align="center"><span class="style12">Password</span></div></td>
              </tr>
              <tr>
                <td height="20">&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <input name="password" type="password" id="password" />
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <input name="Login" type="submit" id="Login" value="Login" />
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><span class="style15">
                  <input type="checkbox" name="checkbox" value="checkbox" />
                  <span class="style19">Keep me sign in (uncheck if on a shared compute</span></span><span class="style19">r) </span></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
