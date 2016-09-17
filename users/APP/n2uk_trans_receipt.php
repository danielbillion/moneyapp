<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									
									
//$sender_email = ($_GET['sender_email']);
$custid= $_GET['custid'];



 include "conn.php";  
 $check = mysql_query("SELECT * FROM trans2_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM trans2_customer WHERE custid = '$custid'  ORDER BY fname  ")or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);


 
while($row=mysql_fetch_array($check0)){

$c_name=$row['fname']." ". $row['lname'];
$c_email=$row['email'];
$_SESSION['']=$row['pnumber'];
$s_phone=$row['pnumber'];
$s_mphone=$row['mnumber'];
$addressc=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

}
	  
	

?> <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Receipt of transaction</title>
<style type='text/css'>
<!--
.style2 {color: #FFFFFF}
.style7 {
	color: #000
}
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
            <table width="743" height="890" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="6" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
              </tr>
              <tr>
                <th width="174" height="23" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
                <th colspan="4" bgcolor="#0066CC" scope="row"><span class="style2" style="font-size: 20px; color: #FFF;">RECEIPT OF TRANSACTION </span></th>
              </tr>
              <tr>
                <th height="23" colspan="6" class="style13" scope="row"><?php 
include "info.php";
 if (isset($addressbs)){ echo $addressbs; }  ?>
                </span>&nbsp;</br><span class="style5">Phone:
                <?php if (isset($tel)){ echo $tel; }  ?>
,
<?php if (isset($tel2)){ echo $tel2; }  ?>
&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                </span></th>
              </tr>
              <tr>
                <th height="23" colspan="6" scope="row"><strong><span class="style14"></span></span></strong></th>
              </tr>
              <tr>
                <th height="40" scope="row">&nbsp;</th>
                <td class="style10">
                  <div align="right" class="style12"></div></td>
                <td colspan="3" class="style10"><div align="center" class="style12" style="font-size: 13px">
                  <div align="right"><span class="style12" style="font-size: 13px">
                    <span class="style12" style="font-size: 13px">
                    <?php if (isset($_GET['date']))
					$daten=$_GET['date'];
					//$dates=date("F j, Y, g:i a");
					$newDate = date("j  F  Y", strtotime($daten));
					echo $newDate;
				// echo $_GET['sdate'];
				 
				  ?>
                  </span>
                  </span></div>
                </div></td>
                <td width="195" class="style10"><div align="center">
                  
                  <?php if (isset($_GET['date']))
				   $ytime=$_GET['date'];
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
                <th width="174" height="29" style="font-size: 14px" scope="row"><div align="left" class="style12">
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
                <td width="25" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="154" class="style10" style="font-size: 14px"><span class="style12">NAME:</span></td>
                <td class="style10" style="font-size: 14px"><div align="left"></div></td>
                <td class="style10" style="font-size: 14px"><?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?></td>
              </tr>
              <tr>
                <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12">RESIDENCE:</p></th>
                <td width="153" rowspan="2" class="style12" style="font-size: 14px"><div align="left">
                  <?php  
    if(isset($addressc)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($addressc);} ?>
                  
                </div>                  
                  <div align="center" class="style12">
                    <div align="left">
                      
                    </div>
                  </div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NUMBER:</td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="left"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><?php  if (isset($_GET['r_phone'])) echo strtoupper( $_GET['r_phone']); ?></td>
              </tr>
              <tr>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION:</td>
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
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <div align="left">UNITED KINGDOM</div>
                </div></td>
                <td colspan="3" class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="35" style="font-size: 14px" scope="row"><div align="left" class="style12">PHONE NUMBER:</div></th>
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
                <th height="24" colspan="6" style="font-size: 14px" scope="row"><hr /></th>
              </tr>
              <tr>
                <th height="24" style="font-size: 14px" scope="row"><div align="left" class="style12"></div></th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="left"><u style="font-size: 18px">TRANSACTIONS</u></div>
                </div>                  <div align="left" class="style12"></div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"></div></td>
                <td colspan="3" class="style10" style="font-size: 14px"><span class="style12"><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th height="39" style="font-size: 14px" scope="row"><div align="left" class="style12"><span class="style10" style="font-size: 16px"><span class="style10" style="font-size: 16px"><span class="style10" style="font-size: 16px">RATE</span>: </span></span><span class="style10" style="font-size: 16px">= &#8358;
                      <?php  if (isset($_GET['sold'])) echo (($_GET['sold'])); ?>
                </span></div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12"></div></td>
                <td class="style10" style="font-size: 14px">
                  
                  <p align="center">&nbsp;</p></td>
                <td class="style10" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12">BANK PAYING:</span></span></td>
                <td class="style10" style="font-size: 14px">&nbsp;</td>
                <td class="style10" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['bankna'])) echo strtoupper( $_GET['bankna']); ?>
                </span></span></span></td>
              </tr>
              <tr>
                <th height="36" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING:</div></th>
                <td class="style10" style="font-size: 14px"><span class="style12"><span class="style13" style="font-size: 14px"><span class="style7"><span class="style10" style="font-size: 14px">&#8358;</span></span></span>
                    <?php  if (isset($_GET['amtn'])) echo strtoupper( $_GET['amtn']); ?>
                </span></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td colspan="2" class="style10" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">MODE OF IDENTITY:</span></span></td>
                <td class="style10" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px">
                  <?php if (isset($_GET['r_idtype'])){ 
				
				
				
				
				echo strtoupper($_GET['r_idtype']); } ?>
                </span></span></td>
              </tr>
              <tr>
                <th height="19" style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12">POUNDS EQUIV:</span></div></th>
                <td class="style13" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12"><span class="style7">&pound;</span>
                      <?php  if (isset($_GET['amtp'])) echo strtoupper( $_GET['amtp']); ?>
                </span></span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td colspan="2" class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">ACCOUNT NUMBER:</span></span></td>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['bankn'])) echo strtoupper( $_GET['bankn']); ?>
                </span></span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style12"><span class="style12" style="text-align: left">TRANSFER CODE</span><span style="text-align: left">;</span></div></th>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['tcode'])) echo strtoupper( $_GET['tcode']); ?>
                </span></span></span></td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td colspan="2" class="style13" style="font-size: 14px"><span class="style12" style="font-size: 16px">ACCOUNT NAME</span></td>
                <td class="style13" style="font-size: 14px"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_actname'])) echo strtoupper( $_GET['r_actname']); ?>
                </span></span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="center" class="style12">
                  <div align="left"><span class="style12" style="font-size: 14px"><span class="style10" style="font-size: 16px">TRANSFER MODE:</span></span></div>
                </div></th>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style10" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['r_transfer'])) echo strtoupper( $_GET['r_transfer']); ?>
                </span></span></span></div></th>
                <th class="style12" style="font-size: 14px" scope="row">&nbsp;</th>
                <th class="style12" style="font-size: 16px" scope="row">NIGERIA BANK</th>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['banki'])) echo strtoupper( $_GET['banki']); ?>
                </span></span></div></th>
              </tr>
              <tr>
                <th height="18" style="font-size: 14px" scope="row">&nbsp;</th>
                <th height="18" colspan="5" style="font-size: 14px" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="18" scope="row"><div align="left" class="style12">AGENT NAME</div></th>
                <th height="18" scope="row"><span class="style13" style="font-size: 14px"><span class="style12">
                <div align="left">  <?php

				 

				

				include "info.php";

				

				if ($br=="0"){

				include "ag_id.php";

				

				}

				

				else 

				

				echo $slogan2;

				

				 ?>
                 </div>
                </span></span></th>
                <th height="18" scope="row">&nbsp;</th>
                <th height="18" scope="row"><div align="left"><span class="style12" style="font-size: 16px">NIG ACCOUNT NO</span></div></th>
                <th height="18" scope="row">&nbsp;</th>
                <th height="18" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php  if (isset($_GET['nbankno'])) echo strtoupper( $_GET['nbankno']); ?>
                </span></span></div></th>
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
                <th width="42" height="19" scope="row">&nbsp;</th>
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
$custid=$_GET['custid'];
$tcode=$_GET['tcode'];
$date=$_GET['date'];
$sender=$_GET['sender'];
$r_name=$_GET['r_name'];
$amtn=$_GET['amtn'];
$amtp=$_GET['amtp'];
$bou=$_GET['bou'];
$sold=$_GET['sold'];
$margin=$_GET['margin'];
$profit=$_GET['profit'];
$bankn= $_GET['bankn'];
$bankna= $_GET['bankna'];
$status= $_GET['status'];
$r_phone= $_GET['r_phone'];
$banki= $_GET['banki'];
$r_transfer= $_GET['r_transfer'];
$r_idtype= $_GET['r_idtype'];

$status=($_GET['status']);
$status = preg_replace('/\s+/', '', $status);
$r_idtype=$_GET['r_idtype'];
?>

<table width="652" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="187"><span style="font-size: 14px"><?php
	
	if ( ($status)=="PENDING") {
echo "</td><td>";echo "<strong><a href='#?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone & r_transfer=$r_transfer & r_idtype=$r_idtype'> EDIT:  </a></strong>";

}

if ($_GET['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone & r_transfer=$r_transfer & r_idtype=$r_idtype'> </a></strong>";

}



echo "</td><td align='center'>";echo mysql_escape_string($status);
	
	
	
	 ?></span></td>
    <td width="79">&nbsp;</td>
    
    
    
    
    <td width="145"><span style="font-size: 14px"><?php if ($_SESSION['level']=="1" || $_SESSION['level']=="2"){ $opd="opd";echo "</td><td>";echo "<em><a href='n2uk_pay.php?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone & r_transfer=$r_transfer & r_idtype=$r_idtype & opd=$opd'> Cancel  </a></em>";} ?></span></td>

    <td width="73">&nbsp;</td>
    <td width="168"><span style="font-size: 14px"><?php $op="op"; echo "</td><td>";echo "<em><a href='n2uk_pay.php?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone & r_transfer=$r_transfer & r_idtype=$r_idtype & op=$op'> Task	</a></em>";  ?></span></td>
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



