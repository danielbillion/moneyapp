<?php session_start();

ob_start("ob_gzhandler");

 include "conn.php";  

						
								 
						echo "<table align='center' border='1' bgcolor='#33FF99'>";

								  //echo $row['messageid'];
							/*	 
								
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								 
								$er= ($row['rate']);}*/
								$test =(rand(100,10000));
								$ref= ('dkl' . $test);
				
								$mon=$_SESSION['amount'];		
								$er= $_SESSION['er'] ;
								 $lp= $_SESSION['lc'] ;
								 $ap=  $_SESSION['ap'];
								  $tf=  $_SESSION['tf'];
								  $foo=  $_SESSION['foo'];
								  $com_d=$tf/2;
								  $com_a=$tf/2;
								   $agent=$_SESSION['agent'];

echo "<tr>";
//echo "<td colspan='2'> Transaction Confirmation </td>"; 
  echo "<td colspan='2' bgcolor='#666600'><div align='center' class='style1' >TRANSACTION CONFIRMATION </div></td>";
 echo"<tr>";
echo "<td align='center'> Exchange Rate </td>";
 echo "<td> $er </td>";
echo "<tr>";
echo "<td align='center'> Amount to be Sent </td>"; echo "<td> $mon </td>";
echo "<tr>";
echo "<td align='center'> Local Currency </td>"; echo "<td> $lp </td>";
echo "<tr>";
echo "<td align='center'> Amount in Pounds </td>"; echo "<td> $ap </td>";
echo "<tr>";
echo "<td align='center'> Commission Charged </td>";echo "<td> $tf </td>";
echo "<tr>";
echo "<td align='center'> Reference Number </td>";echo "<td> $ref </td>";

echo "<tr>";
echo "<td align='center'> Agent Name </td>";echo "<td> $agent </td>";

echo "<tr>";
echo "<td colspan='2'> pls contact  the office on the following numbers for payment 07983400887,07943269543 or 02085939056 and quote  your reference number.thank you </td>";



$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								
								 
								 
								  

if (isset($_POST['submit'])) 	
{

 include "conn.php"; 
 
 				
 
								
								  $trans_type=$_SESSION['trans_type'];
								  $s_title=$_SESSION['s_title'];
									 $s_fn=$_SESSION['s_fn'];
									 $s_ln=$_SESSION['s_ln'];
									 $s_add=$_SESSION['s_add'];
									 $s_pc=$_SESSION['s_pc'];
									 $s_phn=$_SESSION['s_phn'];
									 $s_email=$_SESSION['s_email'];
									 $b_title=$_SESSION['b_title'];
									 $b_fn=$_SESSION['b_fn'];
									 $b_ln=$_SESSION['b_ln'];
									 $b_add=$_SESSION['b_add'];
									 $b_toi=$_SESSION['b_toi'];
									 $b_phn=$_SESSION['b_phn'];
									 $bank=$_SESSION['bank'];
									 $bank_act=$_SESSION['bank_act'];
									 $acn=$_SESSION['acn'];
									 $cacn=$_SESSION['cacn'];
									
									 
									 =$_SESSION['tcode'];
 
 		$today = date("F j, Y, g:i a");
		
		mysql_query("INSERT INTO transaction_agent (date,s_title,s_fn,s_ln,s_add,s_pc,s_phn,s_email,b_title,b_fn,b_ln,b_add,b_toi,b_phn,bank,bank_act,b_acn,b_cacn,agent,amt_snd,tcode,ref,trans_type,lp,ap,com_dph,com_ag)

 			VALUES ('$today','$s_title', '$s_fn', '$s_ln', ' $s_add', ' $s_pc', '$s_phn', '$s_email'
			, '$b_title', '$b_fn', '$b_ln', '$b_add', ' $b_toi', ' $b_phn', '$bank', '$bank_act', ' $acn', ' $cacn', ' $agent', '$mon', '', '$ref','$trans_type','$lp','$ap','$com_d','$com_a') ") 
or die(mysql_error());
 	 
	/* 
	 $insert = "INSERT INTO transaction_agent (date,s_title,s_fn,s_ln,s_add,s_pc,s_phn,s_email,b_title,b_fn,b_ln,b_add,b_toi,b_phn,bank,bank_act,acn,cacn,agent,amt_snd,tcode)

 			VALUES ('$today','$s_title', '$s_fn', '$s_ln', ' $s_add', ' $s_pc', '$s_phn', '$s_email'
			, '$b_title', '$b_fn', '$b_ln', '$b_add', ' $b_toi', ' $b_phn', '$bank', '$bank_act', ' $acn', ' $cacn', ' $agent', '$mon', '')";

 	$add_member = mysql_query($insert);
	

	
	
	$to =  $s_email; 
$subject = "Receipt of Kunzle Money Transfer"; 
$email = 'info@daphkkoy.co.uk' ;
//$_REQUEST['message']
 $message =  "Hi,\n\nHow are you?";
 $headers = "From: $email";
 $sent = mail($to, $subject, $message, $headers) ; 
if($sent) {print "Your mail was sent successfully"; }
 //else
 //{print "We encountered an error sending your mail"; }
	
	*/
	
		echo "<script>alert(\"Thank you, Your Transaction Request has been submitted - a receipt will be sent to your email Shortly.\");</script>";

		  }
		  
		  /*
		  if (isset($_POST['close'])) 	
{
header ("Location: wwww.daphkkoy.zzl.org/index.php");}*/

		  
	

echo" <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width='200' border='0' align='center'>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action='confirmation.php'>
	
  
  <label>
  <div align='center'>
    <input name='submit' type='submit' id='submit' value='Confirm Transaction' />  
    <label>
     <input name='close' type='submit' id='close' value='Close' />
    </label>
  </div>
  </label>
</form>
<p>&nbsp; </p>
</body>


</html>

?>

