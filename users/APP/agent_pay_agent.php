<?php  include "agent_p.php"?>


 



 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Operation Delete</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	color: #663300;
	font-weight: bold;
	font-size: 18px;
}
.style3 {
	font-size: 12px;
	font-style: italic;
	color: #0000FF;
	font-weight: bold;
}
.style4 {
	font-size: 12px;
	font-style: italic;
}
-->
</style></head>
</head>

<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
 
      <label></label>
      
      </label>
	  
	<html><head>
	<script>

function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="agent_page.php"
	
	}s
</script>



<?PHP
	  
	  $email= $_SESSION['email'];
	  $name=$_SESSION['sfname_ad'];

 if (isset($_POST['Submit']) && isset($_GET['ag'])) { 
include "conn.php";include "password_test.php";

if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="delagent";$nametype=$_GET['ag_email'].""."=jst paid";
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					




 $ag_email= $_GET['ag_email'];
 
 echo" <script type='text/javascript'>
 
 {
 alert('Agent has now been paid ')
window.location='admin_agent.php';
 }
</script> ";
 
 mysql_query("UPDATE agent_cust_transaction SET agent_ps = 'yp' WHERE agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

			}}}
 }
 
 
 
  if (isset($_POST['Submit']) && isset($_GET['daph'])) { 
 
include "conn.php";


if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="delagent";$nametype=$_GET['ag_email'].""."=set to zero";
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					


 $ag_email= $_GET['ag_email'];
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful Deleted')
window.location='admin_agents_transaction_general _report.php';
 }
</script> ";
 
 mysql_query("UPDATE agent_cust_transaction SET com_d = '0' WHERE agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

			}}}
 }

 /**************************delete transaction from cuttomer ******************************************** */

 
 
 
  if ( isset($_POST['Submit']) && isset($_GET['del_ct'])) { 
 
include "conn.php";


if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="deleted_cust_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					

 //$s_email= $_GET['s_email'];
   $receiptno= $_GET['receiptno'];

   $sender= $_GET['sender'];

 mysql_query("DELETE FROM cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful Deleted')
window.location='admin_custs_transaction_general _report.php';
 }
</script> ";

			}}}
 }
 
 
 

 /**************************delete transaction from agent ******************************************** */
 if (isset($_POST['Submit']) && isset($_GET['del_agt'] )) {  
include "conn.php";


if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="deleted_agent_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno'] ;
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					


 
 $age_email= $_GET['age_email'];
   $receiptno= $_GET['receiptno'];

   $sender= $_GET['sender'];

 mysql_query("DELETE FROM agent_cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful Deleted')
window.location='admin_agents_transaction_general _report.php';
 }
</script> ";
			}}}
 
 }
 
 
 
 
 
  /**************************delete aGENT ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['ag_del'])) { 
 
include "conn.php"; 


 		
		if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);

				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="deleted agent";$nametype=$_GET['ag_email'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					



   					$email= $_GET['ag_email'];

					mysql_query("DELETE FROM agent WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
					echo" <script type='text/javascript'>
				 
						 {
						 window.alert('Your Agent has now been Successful Deleted')
						window.location='admin_del_agent.php';
						 }
						</script> ";
			
		}}}
 	


 }
 
 
 
   /**************************delete  customer ******************************************** */

 
 
 if (isset($_POST['Submit']) && isset($_GET['cust_del'])) { 

 
include "conn.php";

if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
				 include "time.php";$time=time("H:i:s");$type="deleted customer";$nametype=$_GET['ag_email'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
		
											


				 
				
				
				
				   $email= $_GET['ag_email'];
				
				 mysql_query("DELETE FROM new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 window.alert('Your Customer has now been Successful Deleted')
				window.location='admin_del_cust.php';
				 }
				</script> ";
			}}}
 
 }
 
  /**************************delete agent Customer  ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['dlac'])) { 
  
  
  if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="deleted agent customer";$nametype=$_GET['c_ag_email']." & is customer=".$_GET['fname']; ;
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					
 
					include "conn.php";
					 
					
					
					$fname= $_GET['fname'];
					$fname= $_GET['lname'];
					   $email= $_GET['c_ag_email'];
					
					 mysql_query("DELETE FROM agent_new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Your Agent customer has now been Successful Deleted')
					window.location='admin_page.php';
					 }
					</script> ";
			}}}
 
 }
 
 
 
 
 
  /**************************delete agent Customer  Receiver ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['dlacr'])) { 
 
		include "conn.php";
		
		
		if ($_POST['pass'] != $_POST['pass2']){ $msg = 'Password didnt match.';}
   
  		else {
  
	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			include "time.php";$time=time("H:i:s");$type="Agent Delete Receiver";$nametype=$_GET['r_fname']."".$_GET['r_lname'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					
		 
		
		
		
		   $r_fname= $_GET['r_fname'];
			   $r_lname= $_GET['r_lname'];
			   
			   /* Move Operation to cancel table for agent customer_receiver */
				
		   mysql_query("INSERT INTO agent_cust_receiver_cancel(agent_cust_email,agent_email,c_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
				
			SELECT agent_cust_email,agent_email,c_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date
				 
				  FROM agent_cust_receiver WHERE b_fname='$r_fname' && b_lname='$r_lname'  ");
   
   /* Move Operation to cancel table for agent customer_receiver */
		
		
		 mysql_query("DELETE FROM agent_cust_receiver WHERE b_fname='$r_fname' && b_lname='$r_lname'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
		 
		 echo" <script type='text/javascript'>
		 
		 {
		 window.alert('Your Receiver ( for Customer) has now been Successfully Deleted')
		window.location='agent_page.php';
		 }
		</script> ";
		
		
  }}}

 
 }
 
 


?>


</head>

<body>
<div align="center">
  <table width="680" height="194" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFFFFF">
      <th width="676" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="650" height="232" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th colspan="4" scope="row"><div align="center"><span class="style1"> Confirm Delete</span>
              <hr />
              </div></th>
            </tr>
          <tr>
            <th colspan="4" scope="row"><span class="style3">The following details will be affected </span></th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th scope="row"><div align="right"></div>              Receiver Name</th>
            <th colspan="3" scope="row"> <div align="left"><span class="style4" style="color: #00F">
              <?php
		  
		  
		  if (isset($_GET['sender']))
		  
		  {
		  echo strtolower($_GET['sender']);
		  
		  }
		  
		  
		 else if (isset($_GET['fname']))
		  
		  {
		  echo strtolower($_GET['fname']);
		  
		  }
		  ?>
              &nbsp;</span></div></th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th scope="row"><div align="right"></div>
              <div align="center">Transfer Type</div></th>
            <th width="110" class="style4" style="color: #00F" scope="row"> <div align="left">
              <?php
		  
		  
		  if (isset($_GET['r_transfer']))
		  
		  {
		  echo strtolower($_GET['r_transfer']);
		  
		  }
		  
		  
		  
		  ?>
              &nbsp;</div></th>
            <th width="157" class="style4" scope="row">&nbsp;</th>
            <th width="104" class="style4" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="4" scope="row"> <div align="center">
              <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style3" scope="row">'.$msg.'</th> </tr></table>';} ?>
              &nbsp;</div></th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="3" class="style3" scope="row"><span style="font-size: 14px">Administrative Confirmation for </span>
              <?php 	
				   if(isset($_SESSION['sfname_ad'])){
				   
				  $use=  strtoupper($_SESSION['sfname_ad']);
				
	echo "$use";} ?></th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th style="font-size: 12px; color: #906;" scope="row">Password</th>
            <th colspan="2" scope="row"><input name="pass" type="password" id="pass" value="" size="35" /></th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th style="font-size: 14px; color: #906;" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th style="font-size: 12px; color: #906;" scope="row">Confirm Password</th>
            <th colspan="2" scope="row"><input type="password" name="pass2" id="pass2" size="35" /></th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th height="28" scope="row">&nbsp;</th>
            <th scope="row"><div align="right">
              <input type="submit" name="Submit" value="Confirm" />
              </div></th>
            <th scope="row"><input type="button" name="Exit" value="Exit" onclick="exit()" /></th>
            <th scope="row"><div align="left"></div></th>
            </tr>
          <tr>
            <th colspan="4" scope="row"><label></label></th>
            </tr>
          </table>
      </form></th>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body></html>






     

    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



