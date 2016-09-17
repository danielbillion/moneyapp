<?php  include "admin_p.php"?>


 



 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link href="pay.css" rel="stylesheet" type="text/css" />

<title>Operation Delete</title>

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
	window.location="admin_page.php"
	
	}
</script>



<?PHP
	  
	  $email= $_SESSION['email_ad'];
	  $name=$_SESSION['sfname_ad'];
	  
	  echo $email;
	  
	  
	  if (isset($_POST['Submit'])) { 

 
include "conn.php";

/* Begining of Administrative confirmation */



	
 						$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   				while($info_email = mysql_fetch_array( $check_email )) { 	

 
						$_POST['pass'] = stripslashes($_POST['pass']);$info_email['password'] = stripslashes($info_email['password']);
 
			
					 	$_POST['pass'] = md5($_POST['pass']);
				
			if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			
			
			/* End Administrative confirmation */
	  
	  
	  
	  
	
	
		/*  Traansaction Clearance Agent */   

				 if (isset($_GET['payt'])) {  $tsk=mysql_escape_string($_POST['tsk2']);
				include "time.php";$time=time("H:i:s");$type="Confirm_receipt_Payment";
				$nametype=$_GET['receiptno']."/".$_GET['r_amtsend']."/".$tsk;
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
//$ag_email= $_GET['ag_email'];

 
 								$tdat=date("Y-m-d");
			
							 $tsk=$_POST['tsk2'];$receiptno= $_GET['receiptno'];
							mysql_query("UPDATE agent_cust_transaction SET status = '$tsk', comp='$name' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
						   
						   
						   if($tsk=='PAID'){
							   
							   mysql_query("UPDATE agent_cust_transaction SET status = '$tsk', comp='$name',datepaid='$dtime',man_date='$tdat' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
						   
						    mysql_query("UPDATE clear_trans SET status = '$tsk',man_date='$tdat' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
							   }
						   
				 			echo" <script type='text/javascript'>
							 {
							 window.alert(' Transaction status adjusted successfully ')
							window.location='admin_agents_trans_status.php';
							 }
							</script> ";
				
				
				 }
				 
				 
				 /*  Traansaction Multiple Payment for Agent Transactionst */   

				 if (isset($_GET['paytm'])) {  $tsk=mysql_escape_string($_POST['tsk2']);
				 
				  
				  $vid=$_SESSION['paytm'];
					
					foreach($vid as $re){	
				 
				include "time.php";$time=time("H:i:s");$type="Confirm_receipt_Payment";
				$nametype="Multiple_PAy".$_GET['sumtv']."/".$tsk;
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
//$ag_email= $_GET['ag_email'];

 
 								$tdat=date("Y-m-d");
			
							 $tsk=$_POST['tsk2'];$receiptno= $re;
							mysql_query("UPDATE agent_cust_transaction SET status = '$tsk', comp='$name' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
						   
						   
						   if($tsk=='PAID'){
							   
						mysql_query("UPDATE agent_cust_transaction SET status = '$tsk', comp='$name',datepaid='$dtime',man_date='$tdat' 
						WHERE receiptno = '$receiptno' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
						  
						   
						    mysql_query("UPDATE clear_trans SET status = '$tsk',man_date='$tdat' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
							   }
						   
				 			echo" <script type='text/javascript'>
							 {
							 window.alert(' Transaction status adjusted successfully ')
							window.location='admin_agents_trans_status.php';
							 }
							</script> ";
				
				
				 }}
				 
				 
				 
				 
				
				 
				 
				 /*  Traansaction Clearance customer */   

				 if (isset($_GET['paytc'])) {  $tsk=mysql_escape_string($_POST['tsk2']);
								include "time.php";$time=time("H:i:s");$type="Confirm_receipt_Payment";$nametype=$_GET['receiptno']."/".number_format(($_GET['r_amtsend']),2)."/".$tsk;
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
//$ag_email= $_GET['ag_email'];

 						$tdat=date("Y-m-d");
 
							 $tsk=$_POST['tsk2'];$receiptno= $_GET['receiptno'];
							mysql_query("UPDATE cust_transaction SET status = '$tsk', comp='$name' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
						   
						   
						    if($tsk=='PAID'){
							   
							   mysql_query("UPDATE cust_transaction SET status = '$tsk', comp='$name',
							   man_date='$tdat' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
						   
						    mysql_query("UPDATE clear_trans SET status = '$tsk',man_date='$tdat' WHERE receiptno = '$receiptno' ") or
						   die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
							   }
						   
						   
				 			echo" <script type='text/javascript'>
							 {
							 window.alert(' Transaction status adjusted successfully ')
							window.location='admin_custs_trans_status.php';
							 }
							</script> ";
				
				
				 }
	
	
		  
	/*  Agent Status Modification */   

				 if (isset($_GET['stc'])) { 
								include "time.php";$time=time("H:i:s");$type="status_chng";$nametype=$_GET['ag_email'];
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
$ag_email= $_GET['ag_email'];
 $tsk=mysql_escape_string($_POST['tsk']);
 
 if ($tsk=="ACTIVE" ){mysql_query("UPDATE agent SET active = '1', type='agent', level='0' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}
 if ($tsk=="Admin Level 2" ){mysql_query("UPDATE agent SET level = '3' ,type='admin', active='1' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}
 if ($tsk=="SUSPENDED" ){mysql_query("UPDATE agent SET active = '0' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}
 
  if ($tsk=="LIMIT" ){mysql_query("UPDATE agent SET active = '-1' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}

 

				
				 			echo" <script type='text/javascript'>
							 {
							 window.alert(' Status modification successfully ')
							window.location='admin_agent.php';
							 }
							</script> ";
				
				
				 }
				 
				 
				 
				 /*  Customer  Status Modification */   

				 if (isset($_GET['csch'])) { 
								include "time.php";$time=time("H:i:s");$type="status_cust_chng";$nametype=$_GET['ag_email'];
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
$ag_email= $_GET['ag_email'];
 $tsk=mysql_escape_string($_POST['tsk']);
 
 if ($tsk=="ACTIVE" ){mysql_query("UPDATE new_customer SET active = '1' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}
 
 if ($tsk=="SUSPENDED" ){mysql_query("UPDATE new_customer SET active = '0' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");}

				
				 			echo" <script type='text/javascript'>
							 {
							 window.alert(' Status modification successfully ')
							window.location='admin_customer.php';
							 }
							</script> ";
				
				
				 }
				 
	  
	  
	/*  clear Agent commmision */   

				 if (isset($_GET['ag'])) { 
				include "conn.php";include "password_test.php";
				
				
							
							include "time.php";$time=time("H:i:s");$type="delagent";$nametype=$_GET['ag_email'].""."=jst paid";
								mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
									
				
				
				
				 
				 $ag_email= $_GET['ag_email'];
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 alert('Agent has now been paid ')
				window.location='admin_agent.php';
				 }
				</script> ";
				 
				 mysql_query("UPDATE agent_cust_transaction SET agent_ps = 'yp' WHERE agent_email='$ag_email' ") or
				  die( "<b>Error:</b> Something went wrong, could not edit link status."); 
				
							
				 }
				 
 
 
 /*  clear business commmision */ 
 
							  if ( isset($_GET['daph'])) { 
							 
							include "conn.php";
							
										
										include "time.php";$time=time("H:i:s");$type="delagent";$nametype=$_GET['ag_email'].""."=set to zero";
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
											or die(mysql_error());
												
							
							 
							 $ag_email= $_GET['ag_email'];
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Transaction Successful Cancelled')
							window.location='admin_agents_transaction_general _report.php';
							 }
							</script> ";
							 
							 mysql_query("UPDATE agent_cust_transaction SET com_d = '0' WHERE agent_email='$ag_email' ") or
							  die( "<b>Error:</b> Something went wrong, could not edit link status."); 
							
										
							 }

 /**************************delete transaction from cuttomer ******************************************** */

 
 
 
							  if ( isset($_GET['del_ct'])) { 
							 
							include "conn.php";
							
										
										include "time.php";$time=time("H:i:s");$type="deleted_cust_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno'];
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							 
							 //$s_email= $_GET['s_email'];
							   $receiptno= $_GET['receiptno'];
							
							   $sender= $_GET['sender'];
							   
								/* Move Operation to cancel table */
							   mysql_query("INSERT INTO cust_transaction_cancel (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
									amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,dtime)
									
								SELECT date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
									amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,dtime
									 
									  FROM cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender'");
							   
							   /* Move Operation to cancel table */
							
							 mysql_query("DELETE FROM cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender' ")
							  or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Transaction Successful Cancelled')
							window.location='admin_custs_transaction_general _report.php';
							 }
							</script> ";
							
										
							 }
							 
							 
 

 /**************************delete transaction from agent ******************************************** */
							 if ( isset($_GET['del_agt'] )) {  
							include "conn.php";
							
							 
										
										include "time.php";$time=time("H:i:s");$type="deleted_agent_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							
							
							 
							 $age_email= $_GET['age_email'];
							   $receiptno= $_GET['receiptno'];
							
							   $sender= $_GET['sender'];
							   
							   /* Move Operation to cancel table */
					mysql_query("INSERT INTO agent_cust_transaction_cancel(date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
								amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,address,postcode,town,county,country,clear)
									
								SELECT date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
								amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,address,postcode,town,county,country,clear
									 
									  FROM agent_cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender'");
							   
							   /* Move Operation to cancel table */
							
							 mysql_query("DELETE FROM agent_cust_transaction WHERE receiptno='$receiptno' && sender_name='$sender' ") 
							 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Transaction Successful Cancelled')
							window.location='admin_agents_trans_status.php';
							 }
							</script> ";
										
							 
							 }
 
 
 
 			/**************************Pay Agent Commssion ******************************************** */
					 if ( isset($_GET['ag_pay_cl'] )) {  
					include "conn.php";
					$pay= $_GET['tnp'];
					$sender=$_GET['fname'].$_GET['lname'];
					$name=$sender;
								
								include "time.php";$time=time("H:i:s");$type="Agent comm cleared";$nametype=$sender."/ "."/£".$pay ;
									mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
									or die(mysql_error());
								
					
					
					 
					 $ag_email= $_GET['ag_email'];
					 
					 include "time.php";
					
					
					
					   mysql_query("INSERT INTO clear_trans (agent_email,total,agent_name,dtime,js)
							
						VALUES ('$ag_email','$pay','$name','$dtime','com_cl')");
							 
							  
							  
					 mysql_query("UPDATE agent_cust_transaction SET agent_ps = 'yp' WHERE agent_email='$ag_email' && agent_ps = 'np' ")
					  or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							  
							  
					
							  
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Agent Commission Cleared')
					window.location='admin_agent.php';
					 }
					</script> ";
							
					 
					 }
 
 
 
 
   /**************************Manager  Customer Payment Clearance******************************************** */
							 if (isset($_GET['clpcc'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_trans_pay_clear";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $_GET['receiptno'];
							 $admn= $_GET['admn'];
							
									  
								mysql_query("UPDATE cust_transaction SET mc = '1' WHERE receiptno ='$receiptno' && comp='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Payment Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 
							
							 
							   /**************************Manager Multiple Payment Customer Clearance******************************************** */
							 if (isset($_GET['clpclc'] )) {  
							include "conn.php";
							$val=$_SESSION['tadap'];
							foreach($val as $re){
										include "time.php";$time=time("H:i:s");$type="outstd_cl_Multi";$nametype=$_SESSION['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $re;
							 $admn= $_SESSION['admn'];
							
									  
								mysql_query("UPDATE cust_transaction SET mc='1' WHERE receiptno ='$receiptno' && comp='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Payment Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 }
 
 
 
 
 
 
 
 
 
 
  /**************************Manager  Agent Payment Clearance******************************************** */
							 if (isset($_GET['clpc'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_trans_pay_clear";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $_GET['receiptno'];
							 $admn= $_GET['admn'];
							
									  
								mysql_query("UPDATE agent_cust_transaction SET mc = '1' WHERE receiptno ='$receiptno' && comp='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Payment Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 
							
							 
							   /**************************Manager Multiple Payment agent Clearance******************************************** */
							 if (isset($_GET['clpcl'] )) {  
							include "conn.php";
							$val=$_SESSION['tadap'];
							foreach($val as $re){
										include "time.php";$time=time("H:i:s");$type="outstd_cl_Multi";$nametype=$_SESSION['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $re;
							 $admn= $_SESSION['admn'];
							
									  
								mysql_query("UPDATE agent_cust_transaction SET mc='1' WHERE receiptno ='$receiptno' && comp='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Payment Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 }
 
 
 
 
 
 
 
 
 
    /**************************Manager Oustanding customer******************************************** */
							 if (isset($_GET['adappc'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_outst_cst_clear";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $_GET['receiptno'];
							 $admn= $_GET['admn'];
							
									  
								mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CL1' WHERE receiptno ='$receiptno' && cla='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Outstanding Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 
							 
							   /**************************Manager Customer Multiple Oustanding  Clearance******************************************** */
							 if (isset($_GET['tadapc'] )) {  
							include "conn.php";
							$val=$_SESSION['tadapc'];
							foreach($val as $re){
										include "time.php";$time=time("H:i:s");$type="outstd_cl_Multi";$nametype=$_SESSION['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $re;
							 $admn= $_SESSION['admn'];
							
									  
								mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CLA' WHERE receiptno ='$receiptno' && cla='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Outstanding Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 }
 
  /**************************Manager Oustanding customer Clear All ******************************************** */
							 if (isset($_GET['adapllc'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_outs_cs_clear_all";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							
							 include "time.php";
							 
							 $admn= $_GET['admn'];
							
									  
mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CLa' WHERE  cla='$admn' && type='cs' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('All Outstanding Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
 
 
  /**************************Manager Oustanding Agent Clearance******************************************** */
							 if (isset($_GET['adapp'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_outsttd_clear";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $_GET['receiptno'];
							 $admn= $_GET['admn'];
							
									  
								mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CL1' WHERE receiptno ='$receiptno' && cla='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Outstanding Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 
							
							 
							   /**************************Manager Multiple Oustanding agent Clearance******************************************** */
							 if (isset($_GET['tadap'] )) {  
							include "conn.php";
							$val=$_SESSION['tadap'];
							foreach($val as $re){
										include "time.php";$time=time("H:i:s");$type="outstd_cl_Multi";$nametype=$_SESSION['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $receiptno= $re;
							 $admn= $_SESSION['admn'];
							
									  
								mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CLA' WHERE receiptno ='$receiptno' && cla='$admn' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Outstanding Now Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 }
							 
							 /**************************Manager Oustanding agent  Clear All ******************************************** */
							 if (isset($_GET['adapll'] )) {  
							include "conn.php";
							
										include "time.php";$time=time("H:i:s");$type="Lv2_outstd_clear_all";$nametype=$_GET['admn'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							
							 include "time.php";
							 
							 $admn= $_GET['admn'];
							
									  
mysql_query("UPDATE clear_trans SET adtime = '$dtime',adst='app', jsad='CLa' WHERE  cla='$admn' && type='' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('All Outstanding Cleared')
							window.location='admin_lv2.php';
							 }
							</script> ";
										
							 
							 }
							 
							 
 
 
 
 
 
 
 
  /**************************clear outstanding  transaction of agent ******************************************** */
					 if ( isset($_GET['ag_cl'] )) {  
					include "conn.php";
					 
								
								include "time.php";$time=time("H:i:s");$type="clear_agent_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno']."/£".$_GET['r_amtsend'] ;
									mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
									or die(mysql_error());
										
					
					
					 
					 $age_email= $_GET['ag_email'];
					 
					 include "time.php";
					
					$re= $_GET['receiptno'];
					 mysql_query("UPDATE agent_cust_transaction SET clear = 'cl' WHERE receiptno = '$re' ") 
					 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
					   mysql_query("INSERT INTO clear_trans (date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,man_date)
							
						SELECT date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,man_date FROM agent_cust_transaction WHERE receiptno='$re' ");
							 
							  
							  
						mysql_query("UPDATE clear_trans SET dtime = '$dtime',js='CL1' ,cla='$name' WHERE receiptno = '$re' ")
						 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
							  
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Transaction Successful Cleared')
					window.location='admin_debtor.php';
					 }
					</script> ";
							
					 
					 }
					 
					 /**************************clear outstanding multiple  transaction of agent ******************************************** */
					 if (isset($_GET['tcl'])) {  
					include "conn.php";
					 $vid=$_SESSION['tcl'];
					
					 //foreach ($vid as $key => $value) {
					foreach($vid as $re){			
					
								include "time.php";$time=time("H:i:s");$type="clear_agent_trans";$nametype="Multiple Clear" ;
									mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
									or die(mysql_error());
									
					
					
					 
					 //$age_email= $_GET['ag_email'];
					  include "time.php";
					
					
					// $re=$_SESSION['tcl'];
					 mysql_query("UPDATE agent_cust_transaction SET clear = 'cl' WHERE receiptno = '$re' ") 
					 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
					   mysql_query("INSERT INTO clear_trans (date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,man_date)
							
						SELECT date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,man_date FROM agent_cust_transaction WHERE receiptno='$re' ");
							 
							  
							  
						mysql_query("UPDATE clear_trans SET dtime = '$dtime',js='CLA' ,cla='$name' WHERE receiptno = '$re' ")
						 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
							  
					 
							echo" <script type='text/javascript'>
					 
							 {
							 window.alert('Transaction Successful Cleared')
							window.location='admin_debtor.php';
							 }
							</script> ";
							
					 
					 					 
					 }
 
					 }
 
 
 
 
 
  /**************************CLEAR ALL  outstanding transaction from agent ******************************************** */
							 if (isset($_GET['ag_clall'] )) {  
							include "conn.php";
							
										
										include "time.php";$time=time("H:i:s");$type="CLEAR ALL_agent_trans";$nametype="Multiple Clear" ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							
							
							 include "time.php";
							 $ag_email= $_GET['ag_email'];
							
							
							   
							   mysql_query("INSERT INTO clear_trans (date,receiptno,sender_email,agent_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
								amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,js,man_date)
									
								SELECT date,receiptno,sender_email,agent_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype, amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,clear,man_date FROM agent_cust_transaction WHERE agent_email='$ag_email' && clear='uc' ");
									 
									  
									  
								mysql_query("UPDATE clear_trans SET dtime = '$dtime',cla='$name', js='CLA' WHERE js ='uc' && agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
								mysql_query("UPDATE agent_cust_transaction SET clear = 'cl' WHERE agent_email ='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							mysql_query("UPDATE agent SET sta = '0' WHERE email ='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('All Transaction Successful Cleared')
							window.location='admin_debtor.php';
							 }
							</script> ";
										
							 
							 }
							 
							 
							 
							 
							 /**************************CLEAR outstanding  transaction of customer ******************************************** */
					 if ( isset($_GET['cs_cl'] )) {  
					include "conn.php";
					 
								
								include "time.php";$time=time("H:i:s");$type="clear_cust_trans";$nametype=$_GET['sender']."/ ".$_GET['receiptno']."/£".$_GET['r_amtsend'] ;
									mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
									or die(mysql_error());
										
					
					
					 
					 $age_email= $_GET['ag_email'];
					 
					 include "time.php";
					
					$re= $_GET['receiptno'];
					 mysql_query("UPDATE cust_transaction SET clear = 'cl' WHERE receiptno = '$re' ") 
					 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
					   mysql_query("INSERT INTO clear_trans (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,dtime)
							
						SELECT date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,sender_name,dtime FROM cust_transaction WHERE receiptno='$re' ");
							 
							  
							  
						mysql_query("UPDATE clear_trans SET js='CL1' ,cla='$name',type='cs',dtime = '$dtime' WHERE receiptno = '$re' ")
						 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
							  
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Transaction Successful Cleared')
					window.location='admin_cust_diary.php';
					 }
					</script> ";
							
					 
					 }
					 
					 
					 
					  /**************************Clear outstanding multiple  transaction of customer ******************************************** */
					 if (isset($_GET['cs_tcl'])) {  
					include "conn.php";
					 $vid=$_SESSION['cs_tcl'];
					
					 //foreach ($vid as $key => $value) {
					foreach($vid as $re){			
					
								include "time.php";$time=time("H:i:s");$type="clear_cust_trans";$nametype="Multiple Clear" ;
									mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") 
									or die(mysql_error());
									
					
					
					 
					 //$age_email= $_GET['ag_email'];
					  include "time.php";
					
					
					// $re=$_SESSION['tcl'];
					
					 mysql_query("UPDATE cust_transaction SET clear = 'cl' WHERE receiptno = '$re' ") 
					 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
					   mysql_query("INSERT INTO clear_trans (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,dtime)
							
						SELECT date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,sender_name,dtime FROM cust_transaction WHERE receiptno='$re' ");
							 
							  
							  
						mysql_query("UPDATE clear_trans SET js='CLA' ,cla='$name',type='cs',dtime = '$dtime' WHERE receiptno = '$re' ")
						 or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					
							  
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Transaction Successful Cleared')
					window.location='admin_cust_diary.php';
					 }
					</script> ";
							
					 
					 					 
					 }
 
					 }
							 
							 
					/**************************CLEAR ALL  outstanding transaction from Customer ******************************************** */
							 if (isset($_GET['cs_clall'] )) {  
							include "conn.php";
							
										
										include "time.php";$time=time("H:i:s");$type="CLEAR ALL_cust_trans";$nametype="Multiple Clear" ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							
							
							 include "time.php";
							 $ag_email= $_GET['ag_email'];
							
							
							   
							   mysql_query("INSERT INTO clear_trans (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,dtime)
							
						SELECT date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
						amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,sender_name,dtime FROM cust_transaction WHERE sender_email='$ag_email' && clear='uc' ");
									 
									  
									  
								mysql_query("UPDATE clear_trans SET dtime = '$dtime',cla='$name', js='CLA',type='cs' WHERE sender_email ='$ag_email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 
								
								mysql_query("UPDATE cust_transaction SET clear = 'cl' WHERE sender_email ='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							
							   
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('All Transaction Successful Cleared')
							window.location='admin_cust_diary.php';
							 }
							</script> ";
										
							 
							 }		 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
 
 
 
 
  /**************************delete aGENT ******************************************** */

 
 
 
  if (isset($_GET['ag_del'])) { 
 
include "conn.php"; 


			
			include "time.php";$time=time("H:i:s");$type="deleted agent";$nametype=$_GET['ag_email'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					



   					$email= $_GET['ag_email'];
					
					
					/* Move Operation to cancel table for agent */
		   mysql_query("INSERT INTO agent_cancel (fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,type,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs)
				
			SELECT fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,type,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs
				 
				  FROM agent WHERE email='$email' ");
   
   /* Move Operation to cancel table for agent */
   

					mysql_query("DELETE FROM agent WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
					echo" <script type='text/javascript'>
				 
						 {
						 window.alert('Your Agent has now been Successful Cancelled')
						window.location='admin_del_agent.php';
						 }
						</script> ";
			
	


 }
 
 
 
   /**************************delete  customer ******************************************** */

 
 
 if (isset($_GET['cust_del'])) { 

 
include "conn.php";

  
				 include "time.php";$time=time("H:i:s");$type="deleted customer";$nametype=$_GET['ag_email'];
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
		
											


				 
				
				
				
				   $email= $_GET['ag_email'];
				   
				   /* Move Operation to cancel table for new customer */
		   mysql_query("INSERT INTO  new_customer_cancel (fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs)
				
			SELECT fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs
				 
				  FROM new_customer WHERE email='$email' ");
   
   /* Move Operation to cancel table for agnew customer */
   
				
				 mysql_query("DELETE FROM new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				 
				 echo" <script type='text/javascript'>
				 
				 {
				 window.alert('Your Customer has now been Successful Cancelled')
				window.location='admin_del_cust.php';
				 }
				</script> ";
			
 
 }
 
  /**************************delete agent Customer  ******************************************** */

 
 
 
  if ( isset($_GET['dlac'])) { 
  
  
			
			include "time.php";$time=time("H:i:s");$type="deleted agent customer";$nametype=$_GET['c_ag_email']." & is customer=".$_GET['fname']; ;
				mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')") or die(mysql_error());
					
 
					include "conn.php";
					 
					
					
					$fname= $_GET['fname'];
					$fname= $_GET['lname'];
					   $email= $_GET['c_ag_email'];
					   
					   
					   /* Move Operation to cancel table for agent customer */
		   mysql_query("INSERT INTO agent_new_customer_cancel (fname,lname,mname,email,mnumber,pnumber,dob,address,postcode,hash,date_reg,agent_email,title,company,line1,line2,line3,town,county,country)
				
			SELECT fname,lname,mname,email,mnumber,pnumber,dob,address,postcode,hash,date_reg,agent_email,title,company,line1,line2,line3,town,county,country
				 
				  FROM agent_new_customer WHERE email='$email' ");
   
   /* Move Operation to cancel table for agent customer */
					
					 mysql_query("DELETE FROM agent_new_customer WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
					 
					 echo" <script type='text/javascript'>
					 
					 {
					 window.alert('Your Agent customer has now been Successful Cancelled')
					window.location='admin_page.php';
					 }
					</script> ";
			
 echo $info_email['password'];
 }
 
 
 
 
 
  /**************************delete agent Customer  Receiver ******************************************** */

 
 
 
  if ( isset($_GET['dlacr'])) { 
 
		include "conn.php";
		
	  
			
			include "time.php";$time=time("H:i:s");$type="deleted agent cust receiver";$nametype=$_GET['r_fname']."".$_GET['r_lname'];
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
		
		
		/* mysql_query("DELETE FROM agent_cust_receiver WHERE b_fname='$r_fname' && b_lname='$r_lname'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");*/
		 
		 echo" <script type='text/javascript'>
		 
		 {
		 window.alert('Your Agent Receiver(of Customer) has now been Successful Cancelled')
		window.location='agent_page.php';
		 }
		</script> ";
		
 
 }
 
 	 /****************************  Set Commission % */
 
  if (isset($_GET['scp']) && is_numeric($_POST['bu']) && is_numeric($_POST['ag']) ) {  
							include "conn.php";
							
							
										include "time.php";$time=time("H:i:s");$type="Set com% ";$nametype=$_SESSION['s_fname'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$id2','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $ag_email=$_GET['ag_email'];
							 $bu = ($_POST['bu']);
							  $ag = ($_POST['ag']);
							  
							
							
									  
								mysql_query("UPDATE agent SET comb=$bu,coma=$ag WHERE email='$ag_email'")or
								 die( "<b>Error:</b> Something went wrong, could not edit link status.");
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Commission% successfully Set ')
							window.location='admin_agent.php';
							 }
							</script> ";
										
							 
							 
							 } 
 
 
 
 
 
  /****************************  Set Agent Customer Uplad ID % */
 
  if (isset($_GET['ag_c_id'])  ) {  
							include "conn.php";
							
							
										include "time.php";$time=time("H:i:s");$type="Set agent Cus_id_upload";$nametype=$_SESSION['s_fname'] ;
											mysql_query("INSERT INTO dellog (email,datetime,name,type,nametype)VALUES ('$email','$dtime','$name','$type','$nametype')")
											 or die(mysql_error());
												
							/*  admn = administrator name*/
							 include "time.php";
							 $ag_email=$_GET['ag_email'];
							 $sta=$_POST['tsk'];if($sta=='Activate'){$sta=1;} else {$sta=0;}
							  
							  
							
							
									  
								mysql_query("UPDATE agent SET cust_id_sta=$sta WHERE email='$ag_email'")or
								 die( "<b>Error:</b> Something went wrong, could not edit link status.");
								
							 
							 echo" <script type='text/javascript'>
							 
							 {
							 window.alert('Agent Customer ID status set ')
							window.location='admin_agent.php';
							 }
							</script> ";
										
							 
							 
							 } 
 
 /* End herenProgram admin test */
 
 }}}
 
 
 


?>


</head>

<body>
<div align="center">
  <table width="680" height="194" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFFFFF">
      <th width="676" scope="row"><form id="form1" name="form1" method="post" action="">
        <table width="650" height="232" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th colspan="6" scope="row"><div align="center"><span class="style1"> </span>
                
              </div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"><span style="font-family: arial black; font-size: larger;">Administrative Task<hr /> </span></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left">
              <span style="font-family: arial black; font-size: larger;">Name
             
              </span></div></th>
            </tr>
          <tr>
            <th width="96" scope="row"><div align="right"></div></th>
            <th width="69" scope="row">&nbsp;</th>
            <th width="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"> <div align="left">
              <?php
		  
		  
		     if (isset($_GET['tadap']) || isset($_GET['tadapc']))
		  
		  {
		 echo "Multiple Outstanding-Managers";
		  
		  }
		  
		   if (isset($_GET['tcl']))
		  
		  {
		 echo "Multiple Selection( Agent)";
		  
		  }
		  
		   if (isset($_GET['cs_tcl']))
		  
		  {
		 echo "Multiple";
		  
		  }
		 
		   if (isset($_GET['sender']))
		  
		  {
		  echo strtolower($_GET['sender']);
		  
		  }
		    if (isset($_GET['admn']))
		  
		  {
		  echo strtolower($_GET['admn']);
		  
		  }
		  
		  
		 else if (isset($_GET['fname']))
		  
		  {
		  echo strtolower($_GET['fname']);
		  
		  }
		  
		 

		  ?>
              &nbsp;</span></div></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left"><span style="font-family: arial black; font-size: larger;">Agent/ Sender Email</span></div></th>
            </tr>
          <tr>
            <th colspan="3" scope="row"><div align="right"></div>
              <div align="center"></div></th>
            <th colspan="3" class="style4"  scope="row"> <div align="left">
              <?php
		  
		  
		  if (isset($_GET['tcl']))
		  
		  {
		  echo "Multiple Selection -- Agent";
		  
		  }
		  
		  
		  
		  if (isset($_GET['cs_tcl']))
		  
		  {
		  echo "Multiple";
		  
		  }
		  
		    if (isset($_GET['age_email']))
		  
		  {
		  echo strtolower($_GET['age_email']);
		  
		  }
		  
		   if (isset($_GET['ag_email']))
		  
		  {
		  echo strtolower($_GET['ag_email']);
		  
		  }
		   
	
		  ?>
              &nbsp;</div></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left"><span style="font-family: arial black; font-size: larger;">Operation Type</span></div></th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">
              
              <div align="left"  >
                <?php
				
				if(isset($_GET['scp'])){ echo 'COMMISSION%: BUSINESS & '. ucfirst($_GET['fname']). ucfirst($_GET['lname']);}
				
				 if (isset($_GET['scp']) )  {echo "<br><br>";
				echo "<table><tr>";
				 echo"<td>"; echo "BUSINESS";echo"</td>";echo"<td>";echo"<input type='text' name='bu'>";echo"%";echo"</td></tr>";
				echo"</td><td>";echo ucfirst($_GET['fname']) ;echo"</td><td>";echo "<input type='text' name='ag'>";echo "%";echo"</td></tr>";
				 echo "</table>";
		  
		
		   }
				if(isset($_GET['tadapc'])){ echo "Multiple Customer Clear- manager";}
				 if(isset($_GET['tadap'])){ echo "Multiple Clear- manager";}
				 if(isset($_GET['tcl'])){ echo " Clear Multiple Transaction- Agent";}
                if(isset($_GET['cs_tcl'])){ echo " Clear Multiple Transaction";}
				
				 if(isset($_GET['cs_clall'])){ echo " Clear All Transaction";}
			if(isset($_GET['ag_clall'])){ echo " Clear All Transaction";}
			if(isset($_GET['ag_cl'])){ echo " Clear Single Transaction";}
			if(isset($_GET['cs_cl'])){ echo " Clear Single Transaction- Customer";}
					if(isset($_GET['ag'])){ echo "Confirm Payment";}
					if(isset($_GET['del_agt'])){ echo "Confirm Delete Agent Transaction";}
					if(isset($_GET['ag_del'])){ echo "Confirm Agent Delete";}
					if(isset($_GET['ccch'])){ echo "Confirm Customer Delete";}
					if(isset($_GET['del_ct'])){ echo "Delete Transaction of Customer";}
					if(isset($_GET['cust_del'])){ echo "Delete Customer";}
					
					
					if(isset($_GET['ag_pay_cl'])){ echo "Commission to be cleared =£"; echo $_GET['tnp'];}
					if(isset($_GET['dlac'])){ echo "Delete Agent Customer";}
					if(isset($_GET['stc'])){ echo "Status Modification - Agent";
					echo"<select name='tsk' id='tsk'>
                			<option selected>ACTIVE</option>
                			<option>SUSPENDED</option>
							<option>LIMIT</option>
							<option>Admin Level 2</option>
              			</select>";
					
					}
					
					if(isset($_GET['csch'])){ echo "Status Modification - Customer";
					echo"<select name='tsk' id='tsk'>
                			<option selected>ACTIVE</option>
                			<option>SUSPENDED</option>
              			</select>";
					
					}
				
				if(isset($_GET['payt']) ||isset( $_GET['paytc'])||isset( $_GET['paytm'])){ echo "</br>";echo "Transaction Confirmation";
					echo"<select name='tsk2' id='tsk'>
                			
                			<option selected>PAID</option>
							<option >Pending</option>
							<option>SUSPENDED</option>
              			</select>";echo "</p>";
						
						
						if(isset( $_GET['receiptno'])){
							echo "Sender:"; echo strtoupper($_GET['s_fname']);echo"</br>";
						echo "Transfer Code: ";echo  strtoupper( $_GET['receiptno']);echo "</br>";
						echo "Amount to be Sent:  £";echo number_format (($_GET['r_amtsend']),2);}
						
						if(isset( $_GET['sumtv'])){
						echo"<p>";	echo "Sender:"; echo "Multiple Sender ";echo"</p>";
						echo"</p>";echo "Transfer Code: ";echo  "Multiple Receipt Confirmation";echo "<p>";
						echo "Total Payment :  £";echo number_format (($_GET['sumtv']),2);}
						
					
					}	
					
					if(isset($_GET['adapp']) || isset($_GET['adappc'])){ echo "</br>";echo "Outstanding Approval: ";
					echo"<select name='tsk2' id='tsk'>
                			<option selected>Approve</option>
                			<option>Unapprove</option>
							
              			</select>";echo "</p>";
						echo "Manager: "; echo strtoupper($_GET['admn']);echo"</br>";
						echo "Transfer Code: ";echo  strtoupper( $_GET['receiptno']);echo "</br>";echo "Amount to Approve:  £";echo number_format (($_GET['r_amtsend']),2);
						
					
					}
					
					
						if(isset($_GET['clpcl'])|| isset($_GET['clpc'])|| isset($_GET['clpcc']) || isset($_GET['clpclc'])){ echo "</br>";echo "Transaction Payment Approval: ";
					echo"<select name='tsk2' id='tsk'>
                			<option selected>Approve</option>
                			<option>Unapprove</option>
							
              			</select>";echo "</p>";
						echo "Manager: "; echo strtoupper($_GET['admn']);echo"</br>";
						echo "Transfer Code: ";echo  strtoupper( $_GET['receiptno']);echo "</br>";echo "Amount to Approve:  £";echo 
						 (($_GET['r_amtsend']));
						
					
					}
					
					
					
					if(isset($_GET['adapll']) || isset($_GET['adapllc'])){ echo "</br>";echo " All Outstanding Approval: ";
					echo"<select name='tsk2' id='tsk'>
                			<option selected>Approve</option>
                			<option>Unapprove</option>
							
              			</select>";echo "</p>";
						echo "Manager: "; echo strtoupper($_GET['admn']);echo"</br>";
						echo "Approve All:  £";echo number_format (($_GET['tto']),2);
						
					
					}
					
					if(isset($_GET['ag_c_id'])){ echo "Upload ID - Customer";
					echo"<select name='tsk' id='tsk'>
                			<option selected>Activate</option>
                			<option>Suspend</option>
							
              			</select>";
					
					}
					
					

			?>
                
                
                
                
                
                
                
              &nbsp;</div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"> <div align="center">
              <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style3" scope="row">'.$msg.'</th> </tr></table>';} ?>
              &nbsp;</div></th>
            </tr>
          <tr>
          
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" class="style3" scope="row"><div align="left"><span style="font-family: arial black; font-size: larger;"><strong>Administrative Confirmation for </strong></span></div></th>
            </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left"><strong>
              <?php 	
				   if(isset($_SESSION['sfname_ad'])){
				   
				  $use=  strtoupper($_SESSION['sfname_ad']);
				
	echo "$use";} ?>
            </strong></div></th>
          </tr>
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="3" scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th colspan="3" style="font-size: 12px; color: #906;" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left"><span style="font-family: arial black; font-size: larger;">Password</span></div></th>
            </tr>
          <tr>
            <th colspan="3" style="font-size: 12px; color: #906;" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><div align="left">
              <input name="pass" type="password" id="pass" value="" size="50" />
            </div></th>
            </tr>
          <tr>
            <th colspan="3" style="font-size: 14px; color: #906;" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th width="107" scope="row">&nbsp;</th>
            </tr>
          
          <tr>
            <th colspan="3" scope="row">&nbsp;</th>
            <th colspan="2" scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            </tr>
          <tr>
            <th height="28" colspan="3" scope="row">&nbsp;</th>
            <th width="298" scope="row"> <div align="left">
              <input type="submit" name="Submit" value="Confirm" />
            </div></th>
            <th width="77" scope="row"><div align="left">
              <input type="button" name="Exit" value="Exit" onclick="exit()" />
            </div></th>
            <th scope="row"><div align="left"></div></th>
            </tr>
          <tr>
            <th colspan="6" scope="row"><label></label></th>
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


</html>";



