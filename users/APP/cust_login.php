



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Kunzle Customer Login</title>
  <link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" />

<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style5 {font-size: 13px}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
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
	font-style: italic;
}
.style9 {color: #000000}
.style25 {font-size: 12px;
	font-weight: bold;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style32 {color: #333366;
	font-size: 10.5px;
}
.style33 {color: #333366;
	font-size: 11px;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="1001" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1001" bgcolor="#CCCCCC"><div align="center">
      <table width="903" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="899"><table width="895" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="#FFFFFF">
              <td width="281" valign="middle"><div align="center"><img src="conflt_daph.jpg" alt="" width="203" /></div></td>
              <td width="614" valign="middle"><div align="right">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="373" height="182" id="flashContent">
                  <param name="movie" value="reloaded_player.swf" />
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="reloaded_player.swf" width="373" height="182">
                    <!--<![endif]-->
                    <img src="daph.jpg" width="450" height="249" alt="Put your alternate content here" / align="right" />
                    <!--[if !IE]>-->
                  </object>
                  <!--<![endif]-->
                </object>
              </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
    <td width="740">&nbsp;</td>
  </tr>
  <tr align="center">
    <td colspan="2" bgcolor="#CCCCCC"><ul id="css3menu1" class="topmenu">
      <li class="topfirst">
        <div align="center"><a href="index.php" style="height:20px;line-height:20px;"><img src="admin_menu_files/css3menu1/home.png" alt=""/>Home</a></div>
      </li>
      <li class="topmenu">
        <div align="center"><a href="about us.php" target="mainframe" style="height:20px;line-height:20px;"><span><img src="admin_menu_files/css3menu1/service3.png" alt=""/>About us</span></a></div>
      </li>
      <li class="topmenu">
        <div align="center"><a href="FAQ.php" target="mainframe" style="height:20px;line-height:20px;"><span><img src="admin_menu_files/css3menu1/buy2.png" alt=""/>Faq</span></a></div>
      </li>
      <li class="topfirst">
        <div align="center"><a href="contacts.php" target="mainframe" style="height:20px;line-height:20px;"><img src="" alt=""/>Contact us</a></div>
      </li>
      <li class="topfirst">
        <div align="center"><a href="feedback.php" target="mainframe" style="height:20px;line-height:20px;"><img src="" alt=""/>Feedback</a></div>
      </li>
      <li class="toplast">
        <div align="center"><a href="#" style="height:20px;line-height:20px;"><span><img src="admin_menu_files/css3menu1/samples.png" alt=""/>Registration</span></a>
          <ul>
            <li><a href="new_customer_reg.php">Customer Registration</a></li>
            <li><a href="new_agent_reg.php">Agent Registration</a></li>
          </ul>
        </div>
      </li>
      <li class="topmenu">
        <div align="center"><a href="about us.php" style="height:20px;line-height:20px;"><span><img src="admin_menu_files/css3menu1/service3.png" alt=""/>Login</span></a>
          <ul>
            <li><a href="customer_login.php">Customer Login</a></li>
            <li><a href="agent_login.php">Web Access Login</a></li>
          </ul>
        </div>
      </li>
    </ul>
      &nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="479" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><span style="font-weight: bold; font-size: 18px; color: #030;">Customer Login</span></div></td>
  </tr>
  <tr>
    <td width="473"><form id="form1" name="form1" method="post" action="">
      <table width="474" height="367" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#FFFFFF">
        <tr>
          <td colspan="3"><div align="center" style="font-weight: bold; font-size: 18px; color: #00F;"></div></td>
        </tr>
        <tr>
          <td colspan="3">
          <?php  session_start();



//login page 1
 // Connects to your Database 

 include "conn.php"; 
 
 
 
 
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

		$_SESSION['id']= "Kzl"."1100".$info['id'];

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
          
          &nbsp;</td>
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
          <td height="77" colspan="3"><div align="center" class="style9">Email</div>
            <label>
            <div align="center">
              <input name="email" type="text" id="email" />
            </div>
            </label></td>
        </tr>
        <tr>
          <td height="56" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td height="56" colspan="3"><div align="center">Password</div>
            <label>
            <div align="center">
              <input name="password" type="password" id="password" />
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
          <td height="22">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="22">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="22">&nbsp;</td>
          <td colspan="2"><span class="style5">
            <input type="checkbox" name="checkbox" value="checkbox" />
Keep me sign in (uncheck if on a shared compute</span>r)</td>
        </tr>
        <tr>
          <td height="22">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="161" height="22"><label>
            <div align="center"></div>
            </label></td>
          <td width="157"><span class="style5"><a href="forgot_password.php" style="font-style: italic">Forgot Password</a></span></td>
          <td width="156"><span class="style5"><a href="new_customer_reg.php" style="font-style: italic">Register as new Customer </a></span></td>
        </tr>
        <tr>
          <td height="19" colspan="3">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<table width="936" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="936"><table width="1020" height="197" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr bgcolor="#CCCCCC">
        <td height="83" colspan="2"><div align="center"></div></td>
        <td width="634"><div align="center"><a href="http://www.facebook.com/daphkkoy82"><img src="facebook.png" width="64" height="64" border="0" /></a><a href="https://twitter.com/bolaji_p"><img src="twitter.png" width="64" height="64" border="0" /></a><a href="http://www.youtube.com/watch?v=Y7GtBKhVssg"><img src="youtube.png" width="64" height="64" border="0" /></a></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="143" bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF"><div align="center"></div></td>
        <td height="9" bgcolor="#FFFFFF"><div align="center"></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="143" rowspan="5" bgcolor="#FFFFFF"><img src="ict_web.jpg" width="75" height="90" /></td>
        <td bgcolor="#FFFFFF"><div align="center">
          <div align="center"><span class="style25"><a href="terms &amp; condition.php" class="style30"><span class="style32">Payment Terms &amp; C</span></a></span><a href="terms &amp; condition.php"><span class="style33">onditioin</span></a></div>
        </div></td>
        <td height="2" bgcolor="#FFFFFF"><div align="center"><span class="style33">Kunzle limited is a money transfer and   remittance company fully registeredwith HM revenue and customs   HMRC</span></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td bgcolor="#FFFFFF"><div align="center"></div></td>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><span class="style33">registration number 7429662 and regulated by financial service   authority under payment service regulation 2009</span></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><span class="style32">Sitemap</span></span> | <span class="style25"><a href="terms &amp; condition.php" class="style30"><span class="style32">Policy</span></a></span></div></td>
        <td height="2" bgcolor="#FFFFFF"><div align="center"><span class="style33">registration number   570854,copyright 2012 kunzle limited.All rights reserved world wide</span></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td height="3" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td bgcolor="#FFFFFF"><div align="center"><a href="link_page.htm" target="mainframe"><strong><span class="style32">Links</span></strong></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
