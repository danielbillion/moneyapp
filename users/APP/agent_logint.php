<?php  session_start();

$_SESSION['timestamp']=time();

//login page 1
 // Connects to your Database 

  include "conn.php";
 
 //$server="daphkkoybiz.ipagemysql.com";

//mysql_connect("$server", "bolbim_co_uk", "RMWNkScy") or die(mysql_error()); 

// mysql_select_db("bolbim_co_uk") or die(mysql_error()); 


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
																	 
	 if(!$_POST['email'] | !$_POST['password']) {
 		{$msg = ' Empty field <br />';}

 	}

 	// checks it against the database
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['email_ad'] = $_POST['email'];


	$email_check= $_POST['email'];
 	if (!get_magic_quotes_gpc()) {

 		//c  bbv$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_POST['email']."'")or die(mysql_error());
	$checkc_email = mysql_query("SELECT * FROM agent WHERE email = '".$_POST['email']."'")or die(mysql_error());





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
 while($info_email = mysql_fetch_array( $check_email )) 	

 {

$_POST['password'] = stripslashes($_POST['password']);
$_SESSION['id']="dapk"."1100".$info_email['id'];
$lname=$info_email['lname'];
$fname=$info_email['fname'];


$_SESSION['s_fname']=$info_email['fname']."  ".$info_email['lname'];
$_SESSION['agfname']=$info_email['fname']."  ".$info_email['lname'];
$_SESSION['sfname_ad']=$info_email['fname']."  ".$info_email['lname'];
$_SESSION['title']=$info_email['title'];


/*********** *******************Test for admin ************************************************************** */

if ($info_email['type']== "admin"){

 $_SESSION['type']=$info_email['type'];
 $log_type="admin";}

if ($info_email['type']!= "admin"){
	$log_type="agent"; }

	/*********** *******************New for Time & date Login ************************************************************** */
	
	$date=date("Y-m-d H:i:s a", time() + 18000);
	$time=time("H:i:s");

	$check3_email = mysql_query("SELECT * FROM last_login WHERE email = '$email_check'")or die(mysql_error());
	$check4_email = mysql_num_rows($check3_email);
	
	if ($check4_email == 0) {
	mysql_query("INSERT INTO last_login(email,log_type,fname,lname,date,time) VALUES ('$email_check','$log_type','$fname','$lname','$date','$time' )"); }

/*********** *******************New for Time & date Login ************************************************************** */


 //gives error if the password is wrong

		
	$info_email['password'] = stripslashes($info_email['password']);

 	$_POST['password'] = md5($_POST['password']);
	
	if ($_POST['password'] != $info_email['password']) {

		
		{$msg = 'Incorrect password, please try again.';}
 	}
	


 else 

 { 
  while($status_test = mysql_fetch_array( $checkc_email ))  {$check_status=$status_test['active']; }
	if ($check_status == 0) {$msg = 'This accout is inactive. Please contact administrator <br />';}
	else{ 
	   
 //include "time.php";
 $date=date("Y-m-d H:i:s a", time() + 18000);$time=time("H:i:s");$log_type="admin";

 $hour = time() + 3600; 												
 setcookie(ID_my_site, $_POST['email'], $hour); 

 setcookie(Key_my_site, $_POST['password'], $hour);
															
	$updatelog_email = mysql_query("UPDATE last_login SET date = '$date' WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
       
	 
	   
	   header('Location: agent_page.php '); 

 

 } }

 } 

}


// if they are not logged in 

 ?>

<?php include "index_H.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" />

<title> Daphkkoy Customer Login</title>
<link rel="shortcut icon" href="fvr.jpg" type="image/jpeg" />
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
.style5 {font-size: 13px}
.style9 {color: #000000}
.style25 {font-size: 12px;
	font-weight: bold;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style32 {	color: #333366;
	font-size: 10.5px;
}
.style33 {	color: #333366;
	font-size: 11px;
	font-weight: bold;
}
-->
</style></head>

<body>
<p>&nbsp;</p>
<table width="378" height="421" border="0" align="center" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="460" height="423" border="1" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#000000">
        <tr bgcolor="#0033FF">
          <td height="22" bgcolor="#5E338C"><div align="center" class="style7">Member Access Login </div></td>
        </tr>
        <tr>
          <td height="358"><table width="438" height="374" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#99CCCC">
              <tr>
                <td colspan="2"><div align="center">
                    <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                </div></td>
              </tr>
              <tr>
                <td height="38" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td height="38" colspan="2"><div align="center" class="style10">
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
                <td height="39" colspan="2"><div align="center">
                    <input name="email" type="text" id="email" />
                </div></td>
              </tr>
              <tr>
                <td height="19" colspan="2"><div align="center"></div></td>
              </tr>
              <tr>
                <td height="39" colspan="2"><label>
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
                <td height="20" colspan="2"><div align="center"><span class="style12">Password</span></div></td>
              </tr>
              <tr>
                <td height="20" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                    <input name="password" type="password" id="password" />
                </div></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                    <input name="Login" type="submit" id="Login" value="Login" />
                </div></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="326"><div align="center"><span class="style15">
                  <input type="checkbox" name="checkbox" value="checkbox" />
                  <span class="style19">Keep me sign in (uncheck if on a shared compute</span></span><span class="style19">r) </span></div></td>
                <td width="112"><div align="center"><span class="style5"><a href="agent_forgot_password.php">Forgot Password<span class="style9"></span></a><span class="style9"></span></span></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
