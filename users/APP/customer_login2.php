

<?php  session_start();



//login page 1
 // Connects to your Database 

 include "conn.php"; mysql_select_db("bolbim_co_uk") or die(mysql_error());
 
 
 
 
/*******test for status ******** */ 


 //Checks if there is a login cookie

/* if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
 	$email = $_COOKIE['ID_my_site']; 

 	$password = $_COOKIE['Key_my_site'];

 	 $check = mysql_query("SELECT * FROM new_customer WHERE email = '$email'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($password != $info['password']) 

 			{

 			 			}

 		else

 			{

 			header("Location: customer_page.php");



 			}

 		}

 }*/


 //if the login form is submitted 

 if (isset($_POST['Login'])) { // if form has been submitted

$_POST['password']=mysql_escape_string($_POST['password']);
$_POST['email']=mysql_escape_string($_POST['email']);


$checkc_email = mysql_query("SELECT * FROM new_customer WHERE email = '".$_POST['email']."'")or die(mysql_error());
/*******test for status ******** */




 // makes sure they filled it in

 	if(!$_POST['email'] | !$_POST['password']) {

 		{$msg = ' Empty field <br />';}
		

 	}
	
	
	else if (isset($_POST['email']) && isset($_POST['password'])) {
	

 	// checks it against the database
	$_SESSION['email'] = $_POST['email'];

$email_check= $_POST['email'];$result = mysql_query('SELECT id,email,date,log_type FROM last_login ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
//print values to screen
while ($row = mysql_fetch_assoc($result)) { $_SESSION['date'] = $row['date'];}

$getll = mysql_query("SELECT date FROM last_login WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
list($lastlogin) = mysql_fetch_row($getll);
$_SESSION['date'] = $lastlogin;

 	if (!get_magic_quotes_gpc()) {

 		//c  bbv$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM new_customer WHERE email = '".$_POST['email']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

		{$msg = 'That user does not exist in our database';}

 				}
				$date=date('Y-m-d H:i:s');
	$time=time("H:i:s");
	$log_type="customer";
	$check3 = mysql_query("SELECT * FROM last_login WHERE email = '$email_check'")or die(mysql_error());
	$check4 = mysql_num_rows($check3);
									 
	


 while($info = mysql_fetch_array( $check )) 	

 {

$_POST['password'] = stripslashes($_POST['password']);

		$_SESSION['id']= "dapk"."1100".$info['id'];

	$_SESSION['s_fname']=$info['fname']."  ".$info['lname'];
	$_SESSION['s_phone']=$info['pnumber'];
	$_SESSION['title']=$info['title'];
$fname=$info['fname'] ;
 $lname=$info['lname'];

 	$info['password'] = stripslashes($info['password']);

 	$_POST['password'] = md5($_POST['password']);



 //gives error if the password is wrong

 	if ($_POST['password'] != $info['password']) {

		
		{$msg = 'Incorrect password, please try again.';}
 	}


// The Login Page 2

 else 

 { 
															$date=date('Y-m-d H:i:s');
															$time=time("H:i:s");
															$log_type="agent";
															
		if ($check4 == 0) {
	mysql_query("INSERT INTO last_login(email,log_type,fname,lname,date,time) VALUES ('$email_check','$log_type','$fname','$lname','$date','$time' )"); }

															
															
	$updatelog = mysql_query("UPDATE last_login SET date = '$date' WHERE email = '$email_check' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 // if login is ok then we add a cookie 
/*
 	 $_POST['email'] = stripslashes($_POST['email']); 

 	 $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['email'], $hour); 

 setcookie(Key_my_site, $_POST['password'], $hour);	 

 //then redirect them to the members area 

 
 //Location: http://www.myshoppingcart.com/category.sc?categoryId=2; Window-target: _blank'); }

   {
?>
<script>
window.open("customer_page.php");self.focus();
//window.location = "customer_page.php";
</script>
<?php }*/
$_SESSION['timestamp']=time();
  
   while($status_test = mysql_fetch_array( $checkc_email ))  {$check_status=$status_test['active']; }
	if ($check_status == 0) {$msg = 'This accout is inactive. Please contact administrator <br />';}
	else{
    
	 
	  header('Location: customer_page.php '); }

 } }

 } 

 } 

 

// if they are not logged in 

 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>----Index----</title>
  <link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" />


<link href="stylede.css" rel="stylesheet" type="text/css">
<style type="text/css">
.nttext {	font-family: "Times New Roman";
	text-align: left;
	font-size: 14px;
	font-weight: normal;
}
.nttext {	font-family: "Trebuchet MS";
}
.nttext {	font-size: 16px;
}
.nxtext {	font-family: "Times New Roman";
}
.m_text table tr td table tr td table tr td .style1 {
	font-weight: bold;
}
.m_text table tr td table tr td table tr td .style1 {
	font-size: 14px;
}
.m_text table tr td table tr td table tr td .style1 {
	font-weight: normal;
}
.nm {	text-align: left;
}
.nm {	font-family: "Trebuchet MS";
}
.nm {	font-size: 16px;
}
.nt {	font-weight: bold;
	font-family: "Trebuchet MS";
	font-size: 16px;
}
.m_text table tr td table tr td table tr td p {
	font-family: "Trebuchet MS";
	font-size: 12px;
	text-align: center;
	font-weight: bold;
}
.m_text table tr td table tr td table tr td .no_class tr td ul li strong {
	text-align: center;
}
.style5 {font-size: 13px}
.style9 {
	color: #000000;
	font-size: 13px;
	font-weight: bold;
}
#form1 table tr td div {
	font-size: 13px;
	font-weight: bold;
}
</style>
</head>

<body>
<blockquote>&nbsp;</blockquote>
<div align="center">	
  <table width="846" align="center" style="width:765px;">
    
    <tr>
      <td height="401" colspan="3"  style="height:401px">
        <table width="100%" >
          <tr>
            <td style="width:219px;"><table width="479" border="2" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><div align="center"></div></td>
              </tr>
              <tr>
                <td width="473"><form id="form1" name="form1" method="post" action="">
                  <table width="474" height="367" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#FFFFFF">
                    <tr>
                      <td colspan="3"><div align="center" style="font-weight: bold; font-size: 18px; color: #00F;"></div></td>
                    </tr>
                    <tr>
                      <td colspan="3"><div align="center"><span style="font-weight: bold; font-size: 18px; color: #030;">Customer Login</span></div></td>
                    </tr>
                    <tr>
                      <td colspan="3"><div align="center">
                        <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                      </div></td>
                    </tr>
                    <tr>
                      <td height="77" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="77" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="77" colspan="3"><div align="center" class="style9">Email</div>
                        <label>
                        <div align="center">
                          <input name="email" type="text" id="email" size="45" />
                        </div>
                        </label></td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="56" colspan="3"><div align="center">Password</div>
                        <label>
                        <div align="center">
                          <input name="password" type="password" id="password" size="45"/>
                        </div>
                        </label></td>
                    </tr>
                    <tr>
                      <td height="44" colspan="3"><div align="center">
                        <label>
                          <input name="Login" type="submit" id="Login" value="Login" />
                        </label>
                      </div></td>
                    </tr>
                    <tr>
                      <td width="161" height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22">&nbsp;</td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3"><div align="center"><span class="style5">
                        <input type="checkbox" name="checkbox" value="checkbox" />
                        Keep me sign in (uncheck if on a shared compute</span>r)</div></td>
                    </tr>
                    <tr>
                      <td height="22" colspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" colspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" colspan="2">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="22" colspan="2"><label>
                        </label>                        <div align="center"><span class="style5"><a href="forgot_password.php" style="font-style: italic; font-weight: normal;">Forgot Password</a></span></div></td>
                      <td width="156"><span class="style5"><a href="new_customer_reg.php" style="font-style: italic">Register as new Customer </a></span></td>
                    </tr>
                    <tr>
                      <td height="19" colspan="3">&nbsp;</td>
                    </tr>
                  </table>
                </form></td>
              </tr>
            </table></td>
          </tr>
          </table>
      </td>
      </tr>
    
    </table>
  <blockquote>&nbsp;</blockquote>
</div>
    
</body>
</html>