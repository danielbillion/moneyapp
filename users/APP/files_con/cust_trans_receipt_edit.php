
<script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var ractno = document.getElementById('ractno');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
    if(val=='Pick Up')
    {
    ractno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	<?php $bank="Skye Bank"; ?>
	
    }
	
	 else if(val=='Bank Account')
    {
    ractno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
	
    }	
	
	
    else
    {
    ractno.style.display = "none";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
	
	
    }
    }
    </script>



<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
			
		if (isset($_POST['Update'])) {	
		
		if($_POST['tmode']== "Transfer Mode") {
 		$msg = ' Please enter a valid transfer mode <br />';
		 } 

		if($_POST['tmode']!== "Transfer Mode") {
			
		 include "conn.php"; 
	
	$rname=mysql_real_escape_string($_POST['rname']);
	$rphone=mysql_real_escape_string($_POST['rphone']);
	$tmode=mysql_real_escape_string($_POST['tmode']);
	$ractno=mysql_real_escape_string($_POST['ractno']);
	$bank=mysql_real_escape_string($_POST['b_abank']);
	$b_idtype=mysql_real_escape_string($_POST['b_idtype']);

$code=$_GET['receiptno'];

		//
		
		
		if ($tmode=="Pick Up")
		
		{
			$bank="Skye Bank";
			}
					
//mysql_query("UPDATE cust_transaction SET r_name = '$rname', r_phone = '$rphone' ,r_transfer = '$tmode',r_bank=$bank ,r_actno = '$ractno'  
//WHERE  receiptno='$code' ");

mysql_query("UPDATE cust_transaction SET r_name = '$rname', r_phone = '$rphone',r_actno = '$ractno',r_idtype = '$b_idtype',r_transfer = '$tmode',r_bank = '$bank' 
	
	
	WHERE receiptno='$code' ");
	echo "<script>alert(\"Thank you,your request has been updated.\");
	
	location='customer_page.php';
	</script>" ;	
	
	}}	
			
	?>		
		
	<?php								
									
$sender_email = ($_GET['sender_email']);
$email= $_SESSION['email'];

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE email = '$sender_email' && agent_email = '$email' ORDER BY fname  ")or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);

if(isset($table_array) && $table_array[0] != "") {
 
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
msg {
	font-size: 11px;
}
-->
</style>






</head>

<body onLoad="toggleMe(this.value)">
<p align='left'></p>
<table width="801" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th width="797" height="479" scope="row"><div align="center">
      <form id="form1" name="form1" method="post" action="">
        <table width="743" height="873" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th height="49" colspan="6" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  />KUNZLE LIMITED</th>
          </tr>
          <tr>
            <th height="23" scope="row">&nbsp;</th>
            <th colspan="3" scope="row"><span class="style2" style="font-size: 20px; color: #000;">RECEIPT OF TRANSACTION </span></th>
            <th colspan="2" scope="row">&nbsp;</th>
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
            <td class="style10"><div align="right" class="style12"></div></td>
            <td colspan="2" class="style10"><div align="center" class="style12" style="font-size: 13px">
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
            <td colspan="2" class="style10"><div align="center"> 
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
            <th scope="row"></th>
            <td colspan="5" class="style10"><div align="left"></div></td>
          </tr>
          <tr>
            <th width="153" height="29" style="font-size: 14px" scope="row"><div align="left" class="style12">
              <div align="center" style="font-size: 18px"><u>SENDER </u></div>
            </div></th>
            <td colspan="3" class="style10" style="font-size: 14px; font-weight: bold; color: #F00; font-style: italic;"><div align="center" class="style13">
              <div align="left" class="style12" style="color: #F00; font-size: 10px;">
                <div align="right">
                  <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="300" border="0" bgcolor="#FF0033"><tr><th class="style12" scope="row">'.$msg.'</th> </tr></table>';} ?>
                </div>
              </div>
            </div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center" style="font-size: 18px"><u><strong>RECEIVER </strong></u></div></td>
          </tr>
          <tr>
            <th height="47" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDER NAME</div></th>
            <td class="style10" style="font-size: 14px"><div align="left"><span class="style12">
              <?PHP  if (isset($_GET['sender']))
				
				echo  strtoupper($_GET['sender']);
				
				
				?>
            </span></div></td>
            <td width="72" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
            <td width="92" class="style10" style="font-size: 14px"><span class="style12">NAME</span></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center">
              <input type="text" name="rname"  size="30" value=" <?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?>" />
            </div></td>
          </tr>
          <tr>
            <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12" style="text-align: left">RESIDENCE</p></th>
            <td width="196" rowspan="2" class="style12" style="font-size: 14px"><div align="left">
              <?php  
    if(isset($address)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($address);} ?>
            </div>
              <div align="center" class="style12">
                <div align="left"></div>
              </div></td>
            <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
            <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NO</td>
            <td colspan="2" valign="top" class="style12" style="font-size: 14px"><div align="center">
              <label for="b_pbank"></label>
              <label for="b_pbank"></label>
              <input type="text" name="rphone" id="rphone" size="30" value="<?php if (isset($_GET['r_phone'])) echo  $_GET['r_phone']; ?>"/>
            </div></td>
          </tr>
          <tr>
            <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
            <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION</td>
            <td colspan="2" valign="top" class="style12" style="font-size: 14px"><div align="center">NIGERIA</div></td>
          </tr>
          <tr>
            <th class="style12" style="font-size: 14px" scope="row"><div align="left" class="style12">POST CODE</div></th>
            <td class="style12" style="font-size: 14px"><?php  
    if(isset($postcode)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($postcode);} ?>
              &nbsp;</td>
            <td height="35" colspan="2" class="style12" style="font-size: 14px"><div align="right"></div></td>
            <td colspan="2" class="style12" style="font-size: 14px"><div align="center">
              <label for="b_pbank"></label>
              <label for="textfield2"></label>
            </div></td>
          </tr>
          <tr>
            <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY</div></th>
            <td class="style10" style="font-size: 14px"><div align="left" class="style12">
              <div align="left">UNITED KINGDOM</div>
            </div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div></td>
          </tr>
          <tr>
            <th height="35" style="font-size: 14px" scope="row"><div align="left" class="style12">PHONE NUMBER</div></th>
            <td class="style10" style="font-size: 14px"><div align="left" class="style12"><span class="style12" style="font-size: 14px">
              <?php  
    if(isset($s_phone)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($s_phone);} ?>
            </span></div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="right"></div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div></td>
          </tr>
          <tr>
            <th height="24" colspan="6" style="font-size: 14px" scope="row"><hr /></th>
          </tr>
          <tr>
            <th height="24" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr>
            <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
              <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
            </div>
              <div align="left" class="style12"></div></th>
            <td colspan="4" class="style10" style="font-size: 14px"><div align="center" class="style12"><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</u></div></td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING </div></th>
            <td class="style10" style="font-size: 14px"><div align="left" class="style12"> <span class="style7">&pound; </span>
              <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>
              .00 </div></td>
            <td colspan="4" class="style10" style="font-size: 14px"><p align="center"><span class="style12">TODAY'S RATE: &pound;1= &#8358;
              <?php  if (isset($_GET['rate'])) echo $_GET['rate']; ?>
              .</span>00</p></td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row"><div align="left" class="style12">NAIRA EQUIVALENCE</div></th>
            <td class="style10" style="font-size: 14px"><span class="style12">&#8358;
              <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
            </span></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="left"><span class="style12">TRANSFER MODE</span></div></td>
            <td width="128" class="style10" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12">
              <select name="tmode" id="tmode" onChange="toggleMe(this.value)">
                <option selected="selected">Transfer Mode</option>
                <option>Bank Account</option>
                <option>Pick Up</option>
                </select>
            </span></span></td>
            <td width="102" class="style10" style="font-size: 14px; color: #00F; font-style: italic; font-weight: bold;"> <?php  if (isset($_GET['r_transfer'])) echo ( $_GET['r_transfer']); ?>&nbsp;</td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row"><div align="left" class="style12">COMMISSION</div></th>
            <td class="style10" style="font-size: 14px"><div align="left" class="style12"> <span class="style7">&pound;</span>
              <?php  if (isset($_GET['r_commission'])) echo strtoupper( $_GET['r_commission']); ?>
              .00 </div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><div align="center" class="style12">
              <div align="left">BANK PAYING</div>
            </div></td>
            <td colspan="2" class="style10" style="font-size: 14px"><span class="style12">
              <label for="tmode3"></label>
              <span class="style10" style="font-size: 14px">
                <select name="b_abank" id="b_abank">
                  <option selected="selected">
                  <?php  if (isset($_GET['r_bank'])) echo $_GET['r_bank']; ?>
                  </option>
                  <option>Access Bank</option>
                  <option>Bank PHP</option>
                  <option>Diamond Bank</option>
                  <option>Eco Bank</option>
                  <option>Enterprise Bank </option>
                  <option>Fidelity Bank</option>
                  <option>First Bank</option>
                  <option>First City Monument Bank</option>
                  <option>First Inland Bank</option>
                  <option>Guarantee Trust Bank</option>
                  <option>Keystone Bank</option>
                  <option>Mainstreet Bank</option>
                  <option>Oceanic Bank</option>
                  <option>Skye Bank</option>
                  <option>Spring Bank</option>
                  <option>Stanbic Bank</option>
                  <option>Sterlin Bank</option>
                  <option>Union Bank</option>
                  <option>United Bank Of Africa</option>
                  <option>Wema Bank</option>
                  <option>Zenith Bank</option>
                </select>
                <span class="style10" style="font-size: 14px">
                <input name="b_pbank" type="text" id="b_pbank" value="<?php   if(isset($bank)) echo $bank; ?>" size="7" readonly="readonly" />
              </span>              </span></span></td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr valign="middle">
            <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TOTAL PAYMENT</span></div></th>
            <td class="style13" style="font-size: 14px"><span class="style12"><span class="style7">&pound; </span>
              <?php  if (isset($_GET['r_total'])) echo strtoupper( $_GET['r_total']); ?>
              .00 </span></td>
            <td colspan="2" valign="bottom" class="style13" style="font-size: 14px"><div align="center" class="style12">
              <div align="left">MODE OF IDENTITY</div>
            </div></td>
            <td colspan="2" class="style13" style="font-size: 14px">&nbsp;
              <select name="b_idtype" id="b_idtype">
                
                <option>National ID</option>
                <option>Int'l Passport</option>
                <option>Drivers Lincence</option>
                <option>Any type of ID</option>
                <option selected="selected"><?php if (isset($_GET['r_idtype'])){ echo strtoupper($_GET['r_idtype']); } ?>
                  </option></option>
                </select>
              
              
            </td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TRANSFER CODE </span></div></th>
            <td class="style13" style="font-size: 14px"><span class="style12">
              <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
            </span></td>
            <td colspan="2" class="style13" style="font-size: 14px"><div align="center" class="style12">
              <div align="left">ACCOUNT NUMBER</div>
            </div></td>
            <td colspan="2" class="style13" style="font-size: 14px"><span class="style12">
              <label for="textfield2"></label>
              <input name="ractno" type="text" id="ractno" value="<?php  if (isset($_GET['r_actno'])) echo $_GET['r_actno']; ?>" size="30"/>
            </span></td>
          </tr>
          <tr>
            <th style="font-size: 14px" scope="row">&nbsp;</th>
            <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
          </tr>	
          <tr>
            <th style="font-size: 14px" scope="row"><div align="center" class="style12">
              <div align="left">AGENT NAME</div>
            </div></th>
            <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12"><?php if (isset($_SESSION['name1'])) { echo $_SESSION['name1']	;}  ?></span></span></div></th>
            <th colspan="2" class="style12" style="font-size: 14px" scope="row">&nbsp;</th>
            <th colspan="2" style="font-size: 14px" scope="row"><label for="b_pbank"></label>
              <label for="select"></label>
              <label for="select2"></label>
              <label for="b_pbank"></label></th>
          </tr>
          <tr>
            <th height="18" style="font-size: 14px" scope="row">&nbsp;</th>
            <th height="18" colspan="5" style="font-size: 14px" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="18" colspan="6" scope="row"><div align="left" class="style12"></div></th>
          </tr>
          <tr>
            <th height="18" colspan="6" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th height="19" colspan="6" scope="row"><input type="submit" name="Update" id="Update" value="Update" /></th>
          </tr>
          <tr>
            <th height="37" scope="row">&nbsp;</th>
            <th height="37" colspan="5" scope="row"><div align="right"><a href="customer_page.php" class="style14">Return to Customer home page</a></div></th>
          </tr>s
        </table>
      </form>
    </div></th>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>










											
	
	
	
   

					   
					    
					    


