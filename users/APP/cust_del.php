<?php   include "customer_p.php"?>


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
	text-align: left;
}
-->
</style></head>
</head>

<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      
      </label>
	  
	<html><head>
	<script>

function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="customer_page.php"
	
	}s
</script>

</head>

<body>

<div align="center">
  <table width="680" height="194" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <th width="676" scope="row"><table width="650" height="232" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th colspan="6" scope="row"><div align="center"><span class="style1"> Confirm Delete</span>
            <hr />
            </div></th>
          </tr>
        <tr>
          <th colspan="6" scope="row"><span class="style3">The following details will be affected </span></th>
          </tr>
        <tr>
          <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th width="97" scope="row"><div align="right"></div></th>
            <th width="70" scope="row">Name</th>
            <th width="112" scope="row">&nbsp;</th>
            <th scope="row">
              
              
              <div align="left"><span class="style4" style="font-style: normal; color: #00F;">
                <?php
		  
		  
		  if (isset($_GET['r_fname']))
		  
		  {
		  echo ucfirst (($_GET['r_fname']). ($_GET['r_lname']));
		  
		  }
		  
		  ?>
                
            &nbsp;</span></div></th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th colspan="3" scope="row"><div align="right"></div>            
            <div align="center">Customer</div></th>
            <th class="style4" style="color: #00F" scope="row">
              
            <?php 
		  
		  
		  if (isset($_SESSION['s_fname']))
		  
		  {
		  echo ucfirst(($_SESSION['s_fname']));
		  
		  }
		  
		  ?>&nbsp;</th>
            <th class="style4" scope="row">&nbsp;</th>
            <th class="style4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
          </tr>
        <tr>
          <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
          </tr>
          <form id="form1" name="form1" method="post" action="">
           
        <tr>
          <th height="28" colspan="3" scope="row">&nbsp;</th>
            <th width="106" scope="row"><div align="right">
				<input type="Button" name="Exit" value="Exit" onclick=exit() />

              
				
              </div></th>
            <th width="100" scope="row"><input type="submit" name="Submit" value="Confirm" /></th>
            <th scope="row"><div align="left"></div></th>
          </tr>
             </form>
        <tr>
          <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th width="165" scope="row"><label></label></th>
          </tr>
      </table></th>
      </tr>
    </table>
</div>
</body></html>






      <?PHP
	  
	  

 if (isset($_POST['Submit']) && isset($_GET['ag'])) { 
 
  
 
include "conn.php";
 
 $ag_email= $_GET['ag_email'];
 
 echo" <script type='text/javascript'>
 
 {
 alert('Agent has now been paid ')
window.location='admin_agent.php';
 }
</script> ";
 
 mysql_query("UPDATE agent_cust_transaction SET agent_ps = 'yp' WHERE agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

 
 }
 
 
 
  if (isset($_POST['Submit']) && isset($_GET['daph'])) { 
 
include "conn.php";
 
 $ag_email= $_GET['ag_email'];
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful Deleted')
window.location='admin_agents_transaction_general _report.php';
 }
</script> ";
 
 mysql_query("UPDATE agent_cust_transaction SET com_d = '0' WHERE agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

 
 }

 /**************************delete transaction from cuttomer ******************************************** */

 
 
 
  if ( isset($_POST['Submit']) && isset($_GET['del_ct'])) { 
 
include "conn.php";
 
 $s_email= $_GET['s_email'];
   $receiptno= $_GET['receiptno'];

   $sender= $_GET['sender'];

 mysql_query("DELETE FROM cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful Deleted')
window.location='admin_custs_transaction_general _report.php';
 }
</script> ";

 
 }
 
 
 

 /**************************delete transaction from agent ******************************************** */
 if (isset($_POST['Submit']) && isset($_GET['del_agt'] )) {  
include "conn.php";
 
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

 
 }
 
 
 
 
 
  /**************************delete aGENT ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['ag_del'])) { 
 
include "conn.php";
 



   $email= $_GET['ag_email'];

 mysql_query("DELETE FROM agent WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent has now been Successful Deleted')
window.location='admin_del_agent.php';
 }
</script> ";

 
 }
 
 
 
   /**************************delete  customer ******************************************** */

 
 
 if (isset($_POST['Submit']) && isset($_GET['cust_del'])) { 
 
include "conn.php";
 



   $email= $_GET['ag_email'];

 mysql_query("DELETE FROM new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Your Customer has now been Successful Deleted')
window.location='admin_del_cust.php';
 }
</script> ";

 
 }
 
  /**************************delete agent Customer  ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['dlac'])) { 
 
include "conn.php";
 



   $email= $_GET['c_ag_email'];

 mysql_query("DELETE FROM agent_new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent customer has now been Successful Deleted')
window.location='agent_page.php';
 }
</script> ";

 
 }
 
 
 
 
 
  /**************************delete agent Customer  Receiver ******************************************** */

 
 
 
  if (isset($_POST['Submit']) && isset($_GET['delr'])) { 
 
include "conn.php";
 



   $r_fname= ($_GET['r_fname']);
	   $r_lname= $_GET['r_lname'];


 mysql_query("UPDATE receiver SET sta = 'd' WHERE b_fname='$r_fname' && b_lname='$r_lname'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Your  Beneficiary has now been Successfully Deleted')
window.location='customer_page.php';
 }
</script> ";

 
 }
 
 


?>

    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



