<html >
<head>
	<title><?php include "info.php"; echo $name1;?>  Sign up</title> 
	<link href="acti.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<!-- start header div -->
	<div id="header">
		<h3><?php include "info.php"; echo $name1;  ?> > Forgot Password for <strong>Agent</strong></h3>
	
	
</div>
	<!-- end header div -->	

	<!-- start wrap div -->
	<div id="wrap">
<table width="582" border="0" align="center" cellpadding="0" cellspacing="0">
											              <tr>
											                <td height="24"><a href="../index.php">Home page</a></td>
    </tr>
											              <tr>
											                <td width="582" height="89"><form id="form1" name="form1" method="post" action="">
      <table width="562" height="205" border="0" align="center">
        <tr>
          <th width="84" scope="row"><div align="left" class="style7">Email</div></th>
          <th width="468" scope="row"><div align="left">
            <input name="email_forgot" type="text" size="40" id="email_forgot"  />
          </div></th>
        </tr>
        <tr>
          <th height="2" colspan="2" scope="row"><label></label></th>
        </tr>
        <tr>
          <th colspan="2" scope="row"><label>
            <input type="submit" name="Submit" value="Submit" />
          </label></th>
        </tr>
        <tr>
          <th colspan="2" scope="row">
          </th>
        </tr>
      </table>
    </form>

</p></td>
										                  </tr>
											              <tr>
											                <td height="90">&nbsp;</td>
    </tr>
										                </table>
	    <?php

If (isset($_POST['Submit'])){

include "conn.php"; 
include "info.php"; 
 $email_f=$_POST['email_forgot'];
 

 
  if(!$_POST['email_forgot'] ) {
 		{$msg = ' Empty field <br />';}

 	}
	
	 	$check_email = mysql_query("SELECT * FROM agent WHERE email = '$email_f'")or die(mysql_error());
		 $check2_email = mysql_num_rows($check_email);
	if ($check2_email == 0) {

		{$msg = 'That user does not exist in our database...';}

 				}
				
				else
				{
 while($rec=mysql_fetch_array($check_email)){

$id= $rec['id'];
$fname=$rec['fname'];
 }
$hash = md5( rand(0,1000) );
//$email=mysql_real_escape_string($_POST['email']);
$email_f=$_POST['email_forgot'];
 $email_f = preg_replace('/\s+/', '', $email_f);

$address="https://".$web1."/app/agent_password_link.php?email_f=$email_f&id=$id";
//$add2=http://www.kunzleltd.com/cust_password_link.php?email='.$email.';
															$to =  $email_f; 
 // Send email to our user
															$subject = 'Password Reset'; // Give the email a subject
															
															
															
												$message = 'Please click this link below to Reset your Password to Customer Login: '.$address; 
															
															
															
															$headers = 'From:'.$emailbs ; // Set from headers
															//$headers = "From:.$web". "\r\n"; // Set from headers
															//$headers = $web1; // Set from headers
															$sent = mail($to, $subject, $message, $headers) ; // Send our email
															
															
															 echo" <script type='text/javascript'>
 
													 {
													 window.alert('Email Successful Sent')
													window.location='../index.php';
													 }
</script> ";


				}}

?>
	    <!-- stop PHP Code -->
<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
</div>
	<!-- end wrap div -->
</body>
</html>
