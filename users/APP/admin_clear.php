<?php // include "admin_p.php";?>


<?php 

							
								/*$mon=mysql_escape_string($_SESSION['amount']);	
								$er= mysql_escape_string($_SESSION['er']) ;
								 $lc =mysql_escape_string($_SESSION['lc']) ;
								 $ap= mysql_escape_string($_SESSION['ap']);
								  $tf= mysql_escape_string($_SESSION['tf']);
								  $com_d=mysql_escape_string($tf/2);
								  $com_a= mysql_escape_string($tf/2); 
								
									$s_fname=mysql_escape_string($_SESSION['s_fname']);
									$s_phone=mysql_escape_string($_SESSION['s_phone']);
									$status=mysql_escape_string("Pending");
									$r_name=mysql_escape_string($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=mysql_escape_string($_SESSION['r_phone']);
									// $r_bank=mysql_escape_string($_SESSION['r_bank']);
									$r_actno=mysql_escape_string($_SESSION['r_actno']);
if (isset($_POST['submit']))
	
{


								  echo $row['messageid'];
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								$er= ($row['rate']);}
								 
									// $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									


							//print values to screen

if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_idtype']) && !empty($_SESSION['r_idtype']) && isset($_POST['submit']))



 include "conn.php"; 
								
								  $r_bank=mysql_escape_string($_SESSION['r_bank']);
									 $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									 
									 
		
		mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno)

 VALUES ('$date','$ref', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno') ") or die(mysql_error());




	
	
	$to =  $email; 
$subject = "Receipt of Kunzle Money Transfer"; 

//$_REQUEST['message']
 $message =  "This is to confirm that your transaction has been processed. The folowing details has been registered
 
REECIPT OF TRANSACTION 
*********************************
 
 Receiver name : $r_name
 
 Receiver phone number : $r_phone
 
 Amount sending in £:$mon
 
 Commission Paid:$tf
 
 Local Currency Naira: $lc
 
 Total Payable £:$ap
 
 Transfer type: $r_transfer
 
 
 Bank Name : $r_bank
 
 Account No: $r_actno
 
 Transfer code: $ref
 
                   Thank You for Your Partronage with Kunzle Money Transfer
 
 ";
  $to      = $email;
$headers = 'From:<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; }  ?>' . "\r\n"; // Set from headers
 $sent = mail($to, $subject, $message, $headers) ; 
header("location: cus_home.php");

}$headers = 'From:<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; }  ?>' . "\r\n"; // Set from headers



if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_actno']) && !empty($_SESSION['r_actno']) && isset($_POST['submit'])) 
{


else
{
							 $r_transfer=mysql_escape_string($_SESSION['r_transfer']);
								$test =(rand(100,10000));
								$ref= mysql_escape_string(('dkl' . $test));
								$email= mysql_escape_string($_SESSION['email']);
								$mon=mysql_escape_string($_SESSION['amount']);	
								$er= mysql_escape_string($_SESSION['er']) ;
								 $lc =mysql_escape_string($_SESSION['lc']) ;
								 $ap= mysql_escape_string($_SESSION['ap']);
								  $tf= mysql_escape_string($_SESSION['tf']);
								  $com_d=mysql_escape_string($tf/2);
								  $com_a= mysql_escape_string($tf/2);
									$date=date("Y-m-d");
									$s_fname=mysql_escape_string($_SESSION['s_fname']);
									$s_phone=mysql_escape_string($_SESSION['s_phone']);
									$status=mysql_escape_string("Pending");
									$r_name=mysql_escape_string($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=mysql_escape_string($_SESSION['r_phone']);



 include "conn.php"; 
								 
								  	$r_bank=mysql_escape_string($_SESSION['r_bank']);
									 $r_actno=mysql_escape_string($_SESSION['r_actno']);
									
									 
		
mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_actno,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate)

 VALUES ('$date','$ref', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_actno',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er') ") or die(mysql_error());
	

	$to =  $email; 
$subject = "Receipt of Kunzle Money Transfer"; 
$email = 'info@daphkkoy.co.uk' ;
//$_REQUEST['message']
 $message =  "Hi,\n\nHow are you?";
 $headers = "Admin";
 $sent = mail($to, $subject, $message, $headers) ; 
if($sent) {echo "<script>alert(\"Thank you, Your Transaction Request has been submitted - a receipt has beeen sent to your email .\");</script>"; }
	*/													
 
 


	  
	

?>







 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Status Modifcation for Agent</title>
<style type='text/css'>
<!--
.style10 {font-size: 10px; color: #000000; }
.style12 {font-size: 12px; }
.style13 {font-size: 12px; color: #000000; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style15 {
	font-size: 15px;
	color: #330000;
}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="200" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="row"><table width="476" height="282" border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row">Clearance Centre <span style="font-style: italic; color: #00F;">one transaction to clear</span></th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr></th>
            </tr>
            <tr>
              <th height="19" colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th width="114" scope="row"><div align="left" class="style12">
                  <div align="center"></div>
              </div></th>
              <td width="138" class="style10"><div align="center" class="style13">
                  <div align="left" class="style15">
                    <div align="center">Agent  Name </div>
                  </div>
              </div></td>
              <td width="107" class="style15"><?PHP  if (isset($_GET['ag_name']))
				
				echo  strtoupper($_GET['ag_name']);
				
				
				?>
              <div align="center"></div></td>
              <td width="117" class="style15">&nbsp;</td>
            </tr>
            <tr>
              <th height="19" scope="row">&nbsp;</th>
              <td colspan="3" class="style13">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left" class="style12">
                  <div align="center"></div>
              </div></th>
              <td ><div align="left" > <span >
                <div align="center" ">Email</div>
              </div></td>
              <td class="style10"><div align="center"><span class="style12">
                <?PHP  if (isset($_GET['ag_email']))
				
				echo  ($_GET['ag_email']);
				
				
				?>
              </span></div></td>
              <td class="style10">&nbsp;</td>
            </tr>
            <tr>
              <th height="19" scope="row">&nbsp;</th>
              <td colspan="3" class="style13">&nbsp;</td>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><label>
                <input name="Confirm" type="submit" id="Confirm" value="Confirm">
              </label></th>
            </tr>
          </table></th>
        </tr>
      </table>
      </label>
      <?PHP

 if (isset($_POST['Confirm'])) { 
 
$ag_email= $_GET['ag_email'];
 
 
 echo $ag_email;

//$link = include "conn.php";
 include "conn.php";  
 

 $re= $_GET['receiptno'];
 echo $re;	

 mysql_query("UPDATE agent_cust_transaction SET clear = 'cl' WHERE receiptno = '$re' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");

echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent has now been cleared')
window.location='admin_page.php';
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



