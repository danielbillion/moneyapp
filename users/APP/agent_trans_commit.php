<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
									$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									
									
$sender_email = ($_GET['sender_email']);
$email= $_SESSION['email'];

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE email = '$sender_email' ORDER BY fname  ")or die(mysql_error());
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

	  
	

?> <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link rel="stylesheet" href="css/style.css" type="text/css"/> <title>Receipt of transaction</title>
<style type='text/css'>
<!--


#container{

	background:#fff;
	margin:auto;
}
 .rectangle{
	
	width: 850px;
	height: 1000px;
	background: #993;
	border-radius: 20px 20px 20px 20px;
  border-width: 30px 10px 20px 10px;
  padding: 10px 10px 10px 10px;
  margin: 5px 5px 5px 5px;
  float:center;
 }


.shout-btn2{
	padding:5px;
	margin-bottom:20px;
	width:20%;
	margin:10 auto;
	color: black;
	background: #0FF;
	font-size:15px;
	cursor:pointer;
	-webkit-border-radius: 10px;
	border-radius:10px;
	text-align: center;
						}
.style2 {color: #FFFFFF}
.style7 {
	color: #000000
}
.style10 {
	font-size: 12px;
	color: #000000;
}
.style12 {
	font-size: 16px;
	color: #000000;
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
nwsize {
	font-size: 14px;
}
-->
</style>
<style>
.shout-btn3{
						padding:1px;
						margin-bottom:5px;
						width:250px;
						margin:1 auto;
						color: #FFFFFF;
						background: #06C;
						font-size:15px;	
						cursor:pointer;
						-webkit-border-radius: 10px;
						border-radius:10px;
</style>
</head>

<body>
<div align="center"><a href="agent_page.php" "><span style="colour:black;" class="button">Return to agent home page</span></a></div>

	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <div id="container">
    <div  class="rectangle">
      <table width="850" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th width="850" height="479" scope="row"><div align="center">
            <table width="850" height="908" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" style="font-size: 22px" scope="row">&nbsp;</th>
                <th height="49" colspan="3" style="font-size: 22px" scope="row">&nbsp;</th>
                <th height="49" style="font-size: 22px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th width="161" height="23" scope="row">&nbsp;</th>
                <th colspan="3" scope="row"><span class="style2" style="font-size: 20px; color: #000;">CONFIRM TRANSACTION </span></th>
                <th width="211" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="23" colspan="5" scope="row"><span class="style13"><strong>
                  <?php 
include "info.php";
 if (isset($addressbs)){ echo $addressbs; }  ?>
                  &nbsp;</strong></br>
                  Phone:
                  <?php if (isset($tel)){ echo $tel; }  ?>
                  ,
                  <?php if (isset($tel2)){ echo $tel2; }  ?>
                  &nbsp; Email:
                  <?php if (isset($emailbs)){ echo $emailbs; }  ?>
                  ,
                  <?php if (isset($web1)){ echo $web1; }  ?>
                </span> </strong></strong></th>
              </tr>
              <tr>
                <th height="24" colspan="5" scope="row"><strong><span class="style14"></span></span></strong></th>
              </tr>
              <tr>
                <th height="40" scope="row">&nbsp;</th>
                <td class="style10"><div align="right" class="style12"><span class="style12" style="font-size: 13px">
                 <?php include "time.php"; ?>
                  <?php if (isset($dtime)){
					//$daten=$_GET['sdate'];
					//$dates=date("F j, Y, g:i a");
					//$newDate = date("j  F  Y", strtotime($daten));
					echo $newDate;
				// echo $_GET['sdate'];
				  }
				  ?>
                </span></div></td>
                <td class="style10"><div align="center" class="style12" style="font-size: 13px">
                  <div align="right"></div>
                </div></td>
                <td class="style10"><div align="center">
                <?php include "time.php"; ?>
                  <?php  if (isset($dtime)){
				   $ytime=$dtime;
				 // $newtime = date("h:i:A", strtotime($ytime));
				// echo $_GET['dtime'];
				  echo $newtime2;
				  }
				  ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style10"><div align="right"></div></td>
              </tr>
              <tr>
                <th scope="row"><?php   if (isset($msg)) echo $msg;  ?></th>
                <td colspan="4" class="style10"><div align="left"></div></td>
              </tr>
              <tr>
                <th height="29" colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="center" style="font-size: 18px"><u>SENDER </u></div>
                </div>
                  <div align="center" class="style13">
                    <div align="left" class="style12"></div>
                  </div></th>
                <td class="style10" style="font-size: 14px">&nbsp;</td>
                <td class="style10" style="font-size: 14px"><div align="center" style="font-size: 18px"><u>RECEIVER </u></div></td>
              </tr>
              <tr>
                <th height="47" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDER NAME:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left"><span class="style12">
                  <?PHP  if (isset($_GET['sender']))
				
				echo  strtoupper($_GET['sender']);
				
				
				?>
                </span></div></td>
                <td width="17" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="164" class="style10" style="font-size: 14px"><span class="style12">NAME:</span></td>
                <td class="style10" style="font-size: 14px; text-align: left;"><div align="left">
                  <?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?>
                </div></td>
              </tr>
              <tr>
                <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12">RESIDENCE:</p></th>
                <td width="190" class="style12" style="font-size: 14px"><div align="left">
                  <?php  
    if(isset($address)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($address);} ?>
                </div>
                  <div align="center" class="style12">
                    <div align="left"></div>
                  </div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NO:</td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="left">
                  <?php  if (isset($_GET['r_phone'])) echo strtoupper( $_GET['r_phone']); ?>
                </div></td>
              </tr>
              <tr>
                <td width="190" class="style12" style="font-size: 14px">&nbsp;</td>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION:</td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="left">NIGERIA</div></td>
              </tr>
              <tr>
                <th class="style12" style="font-size: 14px" scope="row"><div align="left" class="style12">POST CODE:</div></th>
                <td class="style12" style="font-size: 14px"><?php  
    if(isset($postcode)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($postcode);} ?>
                  &nbsp;</td>
                <td height="35" class="style12" style="font-size: 14px"><div align="right"></div></td>
                <td class="style12" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY;</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <div align="left">UNITED KINGDOM</div>
                </div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
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
                <td class="style10" style="font-size: 14px"><div align="right"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="24" colspan="5" style="font-size: 14px" scope="row"><hr /></th>
              </tr>
              <tr>
                <th height="24" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
                </div>
                  <div align="left" class="style12"></div></th>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="left" class="style12"><u style="font-size: 18px; font-weight: bold;">
                  <div align="center">MODE OF PAYMENT</div>
                </div></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"> <span class="style7">&pound; </span>
                  <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>
                  .00 </div></td>
                <td class="style10" style="font-size: 14px"><p align="center">&nbsp;</p></td>
                <td class="style10" style="font-size: 14px"><span class="style12"> RATE: &pound;1= &#8358;
                  <?php  if (isset($_GET['rate'])) $x= trim( $_GET['rate']); echo number_format($x,2); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">NAIRA EQUIVALENCE:</div></th>
                <td class="style10" style="font-size: 14px"><span class="style12">&#8358;
                  <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
                </span></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><span class="style12">BANK PAYING:</span></td>
                <td class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_bank'])) echo strtoupper( $_GET['r_bank']); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">COMMISSION:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"> <span class="style7">&pound;</span>
                  <?php  if (isset($_GET['r_commission'])) echo strtoupper( $_GET['r_commission']); ?>
                  .00 </div></td>
                <td class="style10" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style10" style="font-size: 14px"><span class="style12">TRANSFER MODE:</span></td>
                <td class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_transfer'])) echo strtoupper( $_GET['r_transfer']); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TOTAL PAYMENT:</span></div></th>
                <td class="style13" style="font-size: 14px"><span class="style12"><span class="style7">&pound; </span>
                  <?php  if (isset($_GET['r_total'])) echo ( $_GET['r_total']); ?>
                  .00 </span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style13" style="font-size: 14px"><span class="style12"> IDENTITY:</span></td>
                <td class="style13" style="font-size: 14px">&nbsp;
                  <?php if (isset($_GET['r_idtype'])){ 
				
				
				
				
				echo strtoupper($_GET['r_idtype']); } ?></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">TRANSFER CODE:</span></div></th>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
                </span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style13" style="font-size: 14px"><span class="style12">ACCOUNT NUMBER:</span></td>
                <td class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_actno'])) echo strtoupper( $_GET['r_actno']); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="center" class="style12">
                  <div align="left">AGENT NAME:</div>
                </div></th>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php

				 

				

				include "info.php";

				

				if ($br=="0"){

				include "ag_id.php";

				

				}

				

				else 

				

				echo $slogan2;

				

				 ?>
                </span></span></div></th>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="18" colspan="4" style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" colspan="5" scope="row"><div align="left" class="style12"></div></th>
              </tr>
              <tr>
                <th height="18" colspan="5" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="19" colspan="5" scope="row">
				
				<input name='Confirm'  type='submit' class='shout-btn2' id='Confirm' value='Confirm & Pay Later' />
				
                  <input name="Exit" type="submit" class="shout-btn2" id="Exit" value="Exit" /></th>
                  <tr>
                <th height="19" colspan="5" scope="row"> <?php
            if($actpaypal=="ON"){
           echo  "<input name='calculate'  type='submit' class='shout-btn3' id='calculate' value='Confirm & Pay With Paypal' />"; echo "<img src='images/paypal.png' width='75' height='50'> ";
            }
			
			?></th></tr>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row">&nbsp;</th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
      <a href="javascript:window.print()">PRINT</a>
      </label>
    </div>
	</div>
</form>


<p>&nbsp; </p>
</body>


</html>

<?php 

 if(isset($_POST['calculate']) || isset($_POST['Confirm'])){
	
	
	
									$date=$_GET['date'];
									$tcode=$_GET['tcode'];
									 $email=$_GET['email'];
									 $c_email=$_GET['c_email']; 
									 $c_name=$_GET['c_name']; 
									 $s_phone=$_GET['s_phone'];
									 $r_name=$_GET['r_name']; 
									 $r_phone=$_GET['r_phone'];
	 
									  $r_transfer=$_GET['r_transfer'];
									   $r_bank=$_GET['r_bank'];
										$r_idtype=$_GET['r_idtype'];
										$mon=$_GET['mon'];
										$ap=$_GET['ap'];
										 $lc=$_GET['lc'];
										  $tf=$_GET['tf']; 
										  $com_a=$_GET['com_a'];
										    $com_d=$_GET['com_d']; 
										  $status=$_GET['status'];
										  $er=$_GET['er']; 
										  $r_actno=$_GET['r_actno'];
										  $agent_name=$_GET['agent_name'];
										  $ag_ps=$_GET['ag_ps'];
										  $dtime=$_GET['dtime'];
										  $senderd=$_GET['senderd'];
										  $postcode=$_GET['postcode'];
										  $town=$_GET['town'];
										  $county=$_GET['county'];
										  $country=$_GET['country'];
										  $uc=$_GET['uc'];
	
	
	
	
	
						mysql_query("INSERT INTO agent_cust_transaction 		
							(date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,
							r_transfer,r_bank,r_idtype,
							amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,
							agent_name,agent_ps,dtime,address,postcode,town,county,country,clear)
							
							 VALUES ('$date','$tcode', '$email','$c_email', '$c_name', '$s_phone','$r_name', '$r_phone',
							  '$r_transfer', '$r_bank', '$r_idtype','$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', 
							  '$status','$er', '$r_actno','$agent_name','$ag_ps','$dtime','$senderd','$postcode','$town',
							  '$county','$country','uc') ") or die(mysql_error());

								
											$r_phone=$r_phone;
											$r_transfer=$_GET['r_transfer'];
											$r_actno=$_GET['r_actno'];
											$r_amtsend= number_format($_GET['mon']);
											$r_amtlocal= number_format($_GET['lc']);
											$r_commission=  number_format($_GET['tf']);
											$r_total= number_format($_GET['ap']);
											$sender=$_GET['c_name'];
											$receiptno=$_GET['tcode'];
											$s_phone=$_GET['s_phone'];
											$sdate=$_GET['date'];	
											$sender_email=$_GET['c_email'];
											$senderd=$_GET['senderd'];
											$postcode=$_GET['postcode'];
											$town=$_GET['town'];
											$county=$_GET['ccounty'];
											$country=$_GET['country'];
											$rate=$_GET['er'];
											$dtime=$_GET['dtime'];
											$r_idtype=$_GET['r_idtype'];
											
											
	
	
	
								include "email_msg.php";
								
								if (isset($_POST['calculate']) && $actpaypal=="ON" ){
									
									echo"<script type='text/javascript'>
								 { location='payments.php?r_total=$r_total & sender_email=$sender_email';}
								</script> ";
								}
									
									
								
								if ($actpaypal=="" || $actpaypal=="OFF"){  
					
					$msg="<strong>Transaction Successful!</strong>";
							
								// integrate paypal here 			
	
								echo"<script type='text/javascript'>
								 { location='agent_page.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno';}
								</script> ";
								}
}
	 


if(isset($_POST['Exit'])){
	
	echo"<script type='text/javascript'>
								 { location='agent_page.php?';}
								</script> ";

	
	}
?>

