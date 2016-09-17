<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									
									
$sender_email = ($_GET['sender_email']);
$email= $_GET['age_email'];



 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE email = '$sender_email' && agent_email = '$email' ORDER BY fname  ")or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);


 
while($row=mysql_fetch_array($check0)){

$c_name=$row['fname']." ". $row['lname'];
$c_email=$row['email'];
$_SESSION['']=$row['pnumber'];
$s_phone=$row['pnumber'];
$s_mphone=$row['mnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

//echo $address;echo $postcode;echo $sender_email;

}



//echo $address;echo $postcode;echo $sender_email;
		
									
							
									
									
									
								/*$mon=($_SESSION['amount']);	
								$er= ($_SESSION['er']) ;
								 $lc =($_SESSION['lc']) ;
								 $ap= ($_SESSION['ap']);
								  $tf= ($_SESSION['tf']);
								  $com_d=($tf/2);
								  $com_a= ($tf/2); 
								
									$s_fname=($_SESSION['s_fname']);
									$s_phone=($_SESSION['s_phone']);
									$status=("Pending");
									$r_name=($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=($_SESSION['r_phone']);
									// $r_bank=($_SESSION['r_bank']);
									$r_actno=($_SESSION['r_actno']);
if (isset($_POST['submit']))
	
{


								  echo $row['messageid'];
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								$er= ($row['rate']);}
								 
									// $r_idtype= ($_SESSION['r_idtype']);
									


							//print values to screen

if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_idtype']) && !empty($_SESSION['r_idtype']) && isset($_POST['submit']))



 include "conn.php"; 
								
								  $r_bank=($_SESSION['r_bank']);
									 $r_idtype= ($_SESSION['r_idtype']);
									 
									 
		
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
							 $r_transfer=($_SESSION['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
								$mon=($_SESSION['amount']);	
								$er= ($_SESSION['er']) ;
								 $lc =($_SESSION['lc']) ;
								 $ap= ($_SESSION['ap']);
								  $tf= ($_SESSION['tf']);
								  $com_d=($tf/2);
								  $com_a= ($tf/2);
									$date=date("Y-m-d");
									$s_fname=($_SESSION['s_fname']);
									$s_phone=($_SESSION['s_phone']);
									$status=("Pending");
									$r_name=($_SESSION['r_fname']. $_SESSION['r_lname']);
									 $r_phone=($_SESSION['r_phone']);



 include "conn.php"; 
								 
								  	$r_bank=($_SESSION['r_bank']);
									 $r_actno=($_SESSION['r_actno']);
									
									 
		
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
 
 


	  
	

?> <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Receipt of transaction</title>
<style type='text/css'>
<!--
.style2 {color: #FFFFFF}
.style7 {color: #0000FF}
.style10 {
	font-size: 12px;
	color: #000000;
}
.style12 {
	font-size: 16px;
	text-align: right;
}
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
.style14 {font-size: 10px}
.style15 {font-size: large}
nwsize {
	font-size: 14px;
}
#form1 div table tr th div table tr .style10 div .style12 {
	text-align: left;
}
#form1 div table tr th div table tr .style12 {
	text-align: left;
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
      <table width="801" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th width="797" height="479" scope="row"><div align="center">
            <table width="743" height="873" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="6" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name1'];} ?></th>
              </tr>
              <tr>
                <th height="23" scope="row">&nbsp;</th>
                <th colspan="4" scope="row"><span class="style2" style="font-size: 20px; color: #000;">RECEIPT OF TRANSACTION </span></th>
                <th width="183" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="23" colspan="6" scope="row"><strong><span class="style14"><?php 
include "info.php";
 if (isset($addressbs)){ echo $addressbs; }  ?>
                </span>&nbsp;</strong></br><span class="style5">Phone:
                <?php if (isset($tel)){ echo $tel; }  ?>
,
<?php if (isset($tel2)){ echo $tel2; }  ?>
&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                </span></strong></strong></th>
              </tr>
              <tr>
                <th height="23" colspan="6" scope="row"><strong><span class="style14">&nbsp; <span style="text-align: center">Email:<?php if (isset($_SESSION['email'])){ echo $_SESSION['email']; }  ?>, <?php if (isset($_SESSION['web1'])){ echo $_SESSION['web1']; }  ?></span></span></strong></th>
              </tr>
              <tr>
                <th height="40" scope="row">&nbsp;</th>
                <td class="style10">
                  <div align="right" class="style12"></div></td>
                <td colspan="3" class="style10"><div align="center" class="style12" style="font-size: 13px">
                  <div align="right"><span class="style12" style="font-size: 13px">
                    <span class="style12" style="font-size: 13px">
                    <?php if (isset($_GET['sdate']))
					$daten=$_GET['sdate'];
					//$dates=date("F j, Y, g:i a");
					$newDate = date("j  F  Y", strtotime($daten));
					echo $newDate;
				// echo $_GET['sdate'];
				 
				  ?>
                  </span>
                  </span></div>
                </div></td>
                <td class="style10"><div align="center">
                  
                  <?php if (isset($_GET['dtime']))
				   $ytime=$_GET['dtime'];
				  $newtime = date("h:i:A", strtotime($ytime));
				// echo $_GET['dtime'];
				  echo $newtime;
				 
				  ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="5" class="style10"><div align="right"></div></td>
              </tr>
              <tr>
                <th scope="row"><?php   if (isset($msg)) echo $msg;  ?></th>
                <td colspan="5" class="style10"><div align="left"></div></td>
              </tr>
              <tr>
                <th width="149" height="29" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="center" style="font-size: 18px"><u>SENDER </u></div>
                </div></th>
                <td colspan="4" class="style10" style="font-size: 14px"><div align="center" class="style13">
                    <div align="left" class="style12"></div>
                </div></td>
                <td class="style10" style="font-size: 14px"><div align="center" style="font-size: 18px"><u>RECEIVER </u></div></td>
              </tr>
              
              <tr>
                <th height="47" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDER NAME:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left"><span class="style12">
                  <?PHP  if (isset($_GET['sender']))
				
				echo  strtoupper($_GET['sender']);
				
				
				?>
                </span></div></td>
                <td width="18" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="173" class="style10" style="font-size: 14px"><span class="style12">NAME:</span></td>
                <td class="style10" style="font-size: 14px"><div align="left"></div></td>
                <td class="style10" style="font-size: 14px"><?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?></td>
              </tr>
              <tr>
                <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12">RESIDENCE:</p></th>
                <td width="180" rowspan="2" class="style12" style="font-size: 14px"><div align="left">
                  <?php  
    if(isset($address)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($address);} ?>
                  
                </div>                  
                  <div align="center" class="style12">
                    <div align="left">
                      
                    </div>
                  </div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NUMBER;</td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="left"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><?php  if (isset($_GET['r_phone'])) echo strtoupper( $_GET['r_phone']); ?></td>
              </tr>
              <tr>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION COUNTRY;</td>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="left"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">NIGERIA</td>
              </tr>
              <tr>
                <th class="style12" style="font-size: 14px" scope="row"><div align="left" class="style12">POST CODE:</div></th>
                <td class="style12" style="font-size: 14px">
                
                <?php  
    if(isset($postcode)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($postcode);} ?>&nbsp;</td>
                <td height="35" colspan="3" class="style12" style="font-size: 14px"><div align="right"></div></td>
                <td class="style12" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUN
                 
                TRY;</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <div align="left">UNITED KINGDOM</div>
                </div></td>
                <td colspan="3" class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="35" style="font-size: 14px" scope="row"><div align="left" class="style12">PHONE NUMBER;</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"><span class="style12" style="font-size: 14px">
                  <?php  
    if(isset($s_phone)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($s_phone);} ?>
                </span></div></td>
                <td colspan="3" class="style10" style="font-size: 14px"><div align="right"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="24" colspan="6" style="font-size: 14px" scope="row"> <hr />&nbsp;</th>
              </tr>
              <tr>
                <th height="24" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
                </div>                  <div align="left" class="style12"></div></th>
                <td colspan="4" class="style10" style="font-size: 14px"><div align="left" class="style12"><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</div></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                    <span class="style7">&pound; </span>
                    <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>.00</div></td>
                <td colspan="4" class="style10" style="font-size: 14px">
                  
                  <p align="center"><span class="style12">TODAY'S RATE: &pound;1= &#8358;
                  <?php  if (isset($_GET['rate'])) echo number_format(( $_GET['rate']),2); ?>
                  
                  </span> </p></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">NAIRA EQUIVALENCE:</div></th>
                <td class="style10" style="font-size: 14px"><span class="style12">&#8358; 
                  <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
                </span></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><span class="style12">BANK PAYING:</span></td>
                <td class="style10" style="font-size: 14px">&nbsp;</td>
                <td class="style10" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_bank'])) echo strtoupper( $_GET['r_bank']); ?>
                </span></span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">COMMISSION:</div></th>
               <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                     <span class="style7">&pound;</span>
                     <?php  if (isset($_GET['r_commission'])) echo strtoupper( $_GET['r_commission']); ?>.00</div></td>
               <td class="style10" style="font-size: 14px"><div align="center" class="style12"></div></td>
               <td class="style10" style="font-size: 14px"><span class="style12">TRANSFER MODE:</span></td>
               <td class="style10" style="font-size: 14px">&nbsp;</td>
               <td class="style10" style="font-size: 14px"><span class="style12">
                 <?php  if (isset($_GET['r_transfer'])) echo strtoupper( $_GET['r_transfer']); ?>
               </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TOTAL PAYMENT:</span></div></th>
                <td class="style13" style="font-size: 14px"><span class="style12"><span class="style7">&pound; </span>
                    <?php  if (isset($_GET['r_total'])) echo strtoupper( $_GET['r_total']); ?>.00</span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td colspan="2" class="style13" style="font-size: 14px"><span class="style12">MODE OF IDENTITY:</span></td>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px">
                  <?php if (isset($_GET['r_idtype'])){ 
				
				
				
				
				echo strtoupper($_GET['r_idtype']); } ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TRANSFER CODE</span>;</div></th>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
                </span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td colspan="2" class="style13" style="font-size: 14px"><span class="style12">ACCOUNT NUMBER:</span></td>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_actno'])) echo strtoupper( $_GET['r_actno']); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="center" class="style12">
                  <div align="left">AGENT NAME:</div>
                </div></th>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12"><?php if (isset($_SESSION['name1'])) { echo $_SESSION['name1']	;}  ?></span></span></div></th>
                <th colspan="3" style="font-size: 14px" scope="row">&nbsp;</th>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="18" colspan="5" style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" colspan="6" scope="row"><div align="left" class="style12"></div></th>
              </tr>
              <tr>
                <th height="18" scope="row">&nbsp;
				
						
				
				</th>
                <th height="18" scope="row">&nbsp;</th>
                <th height="18" colspan="3" scope="row">&nbsp;</th>
                <th height="18" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="19" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="19" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="19" colspan="2" style="font-size: 14px" scope="row">&nbsp;</th>
                <th width="40" height="19" scope="row">&nbsp;</th>
                <th height="19" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="5" scope="row"><div align="right"><a href="admin_page.php" class="style14">Return to agent home page</a></div></th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
      </label>
    </div>
</form>
<div align="center"></div>
<?php
$r_name=$_GET['r_name'];
$r_phone=$_GET['r_phone'];
$r_transfer=$_GET['r_transfer'];
$r_bank=$_GET['r_bank'];
$r_actno=$_GET['r_actno'];
$r_amtsend= $_GET['r_amtsend'];
$r_amtlocal= $_GET['r_amtlocal'];
$r_commission=  $_GET['r_commission'];
$r_total= $_GET['r_total'];
$sender= $_GET['sender'];
$receiptno= $_GET['receiptno'];
$s_phone= $_GET['s_phone'];
$sdate= $_GET['sdate'];
$sender_email=$_GET['sender_email'];
$senderd=$_GET['senderd'];
$com_d=$_GET['com_d'];
$rate=$_GET['rate'];
$dtime=$_GET['dtime'];
$com_a=$_GET['com_a'];
$age_email=$_GET['age_email'];
$date=$_GET['date'];
$s_fname=$_GET['s_fname'];
$agent=$_GET['agent'];
$del_agt=$_GET['del_agt'];

$status=($_GET['status']);
$status = preg_replace('/\s+/', '', $status);
$r_idtype=$_GET['r_idtype'];
?>

<table width="652" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="187"><span style="font-size: 14px"><?php
	
	if ( ($status)=="Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit:   </a></strong>";

}

if ($_GET['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & del_agt=$del_agt'></a></strong>";

}



echo "</td><td align='center'>";echo mysql_escape_string($status);
	
	
	
	 ?></span></td>
    <td width="79">&nbsp;</td>
    
    
    
    
    <td width="145"><span style="font-size: 14px"><?php echo "</td><td>";echo "<em><a href='admin_pay_agent.php?r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & age_email=$age_email & del_agt=$del_agt & sender=$sender
' > Cancel  </a></em>"; ?></span></td>
    <td width="73">&nbsp;</td>
    <td width="168"><span style="font-size: 14px"><?php echo "</td><td>";echo "<em><a href='admin_agent_task.php?r_name=$r_name & s_fname=$s_fname & r_transfer=$r_transfer &agent=$agent  & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & com_a= $com_a & com_d=$com_d & r_total=$r_total & receiptno=$receiptno  & age_email= $age_email & date=$date '> Task	</a></em>";  ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
</body>


</html>



