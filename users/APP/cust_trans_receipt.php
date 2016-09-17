<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									
									
$sender_email = ($_GET['sender_email']);
$email= $_SESSION['email_ad'];
echo $sender_email;

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM new_customer WHERE email = '$email' ORDER BY fname  ")or die(mysql_error());
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
<link rel="stylesheet" href="css/style.css" type="text/css"/> 

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
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
    <span class="button">
    <label>
    </span>
    <div align="center">
      <table width="801" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th width="797" height="479" scope="row"><div align="center">
            <table width="743" height="873" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="5" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
              </tr>
              <tr>
                <th width="161" height="23" scope="row">&nbsp;</th>
                <th colspan="3" class="style2" scope="row">RECEIPT OF TRANSACTION </th>
                <th width="161" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="23" colspan="5" class="style10" scope="row">
                  <?php 
include "info.php";
 if (isset($addressbs)){ echo $addressbs; }  ?>                
                  &nbsp;</br>
                Phone:
                <?php if (isset($tel)){ echo $tel; }  ?>
,
<?php if (isset($tel2)){ echo $tel2; }  ?>&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                </th>
              </tr>
              <tr>
                <th height="23" colspan="5" scope="row"><span class="style14"></span></span></th>
              </tr>
              <tr>
                <th height="40" scope="row">&nbsp;</th>
                <td class="style10">
                  <div align="right" class="style12"></div></td>
                <td colspan="2" class="style10"><div align="center" class="style12" style="font-size: 13px">
                  <div align="right" class="style12">
                    <span class="style12" style="font-size: 13px">
                    <?php if (isset($_GET['sdate']))
					$daten=$_GET['sdate'];
					//$dates=date("F j, Y, g:i a");
					$newDate = date("j  F  Y", strtotime($daten));
					echo $newDate;
				// echo $_GET['sdate'];
				 
				  ?>
                  </span>
                  </div>
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
                <td colspan="4" class="style10"><div align="right"></div></td>
              </tr>
              <tr>
                <th scope="row"><?php   if (isset($msg)) echo $msg;  ?></th>
                <td colspan="4" class="style10"><div align="left"></div></td>
              </tr>
              <tr>
                <th height="29" colspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">
                  <div align="center" style="font-size: 18px"><u>SENDER </u></div>
                  </div>                  <div align="center" class="style13">
                    <div align="left" class="style12"></div>
                </div></th>
                <td class="style10" style="font-size: 14px">&nbsp;</td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center" style="font-size: 18px"><u>RECEIVER </u></div></td>
              </tr>
              
              <tr>
                <th height="47" style="font-size: 14px" scope="row"><div align="left" class="style12">SENDER NAME:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <?PHP  if (isset($_GET['sender']))
				
				echo  strtoupper($_GET['sender']);
				
				
				?>
                </div></td>
                <td width="51" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="180" class="style12" style="font-size: 14px">NAME:</td>
                <td class="style10" style="font-size: 14px"><div align="center">
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
                    <div align="left">
                      
                    </div>
                  </div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="27" valign="top" class="style12" style="font-size: 14px">PHONE NO:</td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="center">
                  <?php  if (isset($_GET['r_phone'])) echo strtoupper( $_GET['r_phone']); ?>
                </div></td>
              </tr>
              <tr>
                <td width="190" class="style12" style="font-size: 14px">&nbsp;</td>
                <td height="28" valign="top" class="style12" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td height="28" valign="top" class="style12" style="font-size: 14px">DESTINATION:</td>
                <td valign="top" class="style12" style="font-size: 14px"><div align="center">NIGERIA</div></td>
              </tr>
              <tr>
                <th class="style12" style="font-size: 14px" scope="row"><div align="left" class="style12">POST CODE:</div></th>
                <td class="style12" style="font-size: 14px">
                
                <?php  
    if(isset($postcode)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($postcode);} ?>&nbsp;</td>
                <td height="35" colspan="2" class="style12" style="font-size: 14px"><div align="right"></div></td>
                <td class="style12" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY;</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <div align="left">UNITED KINGDOM</div>
                </div></td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
              </tr>
              <tr>
                <th height="35" style="font-size: 14px" scope="row"><div align="left" class="style12">PHONE NUMBER;</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                  <?php  
    if(isset($s_phone)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo strtoupper ($s_phone);} ?></div></td>
                <td colspan="2" class="style10" style="font-size: 14px"><div align="right"></div></td>
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
                </div>                  <div align="left" class="style12"></div></th>
                <td ><div align="left"></div></td>
                <td colspan="2" class="style12" ><u style="font-size: 18px; font-weight: bold;">MODE OF PAYMENT</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                    <span class="style7">&pound; </span>
                    <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>.00 </div></td>
                <td class="style10" style="font-size: 14px">
                  
                  <p align="center">&nbsp;</p></td>
                <td colspan="2" class="style12" style="font-size: 14px"> RATE: &pound;1= &#8358;
                    <?php  if (isset($_GET['rate'])) $x= trim( $_GET['rate']); echo number_format($x,2); ?>
                </td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">NAIRA EQUIVALENCE:</div></th>
                <td class="style12" style="font-size: 14px">&#8358; 
                  <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
                </td>
                <td class="style10" style="font-size: 14px"><div align="center"></div></td>
                <td class="style12" style="font-size: 14px">BANK PAYING:</td>
                <td class="style12" style="font-size: 14px">
                  <?php  if (isset($_GET['r_bank'])) echo strtoupper( $_GET['r_bank']); ?>
                </td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">COMMISSION:</div></th>
               <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                     <span class="style7">&pound;</span>
                     <?php  if (isset($_GET['r_commission'])) echo strtoupper( $_GET['r_commission']); ?>.00 </div></td>
               <td class="style10" style="font-size: 14px"><div align="center" class="style12"></div></td>
               <td class="style12" style="font-size: 14px">TRANSFER MODE:</td>
               <td class="style12" style="font-size: 14px">
                 <?php  if (isset($_GET['r_transfer'])) echo strtoupper( $_GET['r_transfer']); ?>
               </td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th rowspan="2" style="font-size: 14px" scope="row"><div align="left" class="style12">TOTAL PAYMENT:</div></th>
                <td rowspan="2" class="style12" style="font-size: 14px"><span class="style7">&pound; </span>
                    <?php  if (isset($_GET['r_total'])) echo strtoupper( $_GET['r_total']); ?>.00                </td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style12" style="font-size: 14px">MODE OF IDENTITY:</td>
                <td rowspan="2" class="style13" style="font-size: 14px">&nbsp;
                           <?php if (isset($_GET['r_idtype'])){ 
				
				
				
				
				echo strtoupper($_GET['r_idtype']); } ?>
     
                
                
                </td>
              </tr>
              <tr>
                <td colspan="2" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">TRANSFER CODE:</div></th>
                <td class="style12" style="font-size: 14px">
                  <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
                </td>
                <td class="style13" style="font-size: 14px"><div align="center" class="style12"></div></td>
                <td class="style12" style="font-size: 14px">ACCOUNT NUMBER:</td>
                <td class="style12" style="font-size: 14px">
                  <?php  if (isset($_GET['r_actno'])) echo strtoupper( $_GET['r_actno']); ?>
                </td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="4" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              
                
                
          <tr>
                <th style='font-size: 14px' scope='row'><div align='center' class='style12'>
                  <div align='left'>
                  <?php
				include "info.php";
				if(($brc=="1")){ echo "AGENT NAME";}
				 ?>
                  </div>
                </div></th>
                <th style='font-size: 14px' scope='row'><div align='left' class="style12">
				<?php
				include "info.php";
				if(($brc=="1")){ echo $name1;}
				 ?></div></th>
                <th colspan='2' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
              </tr>      
                
                
                
                
                
                
              <tr>
                <th height="18" colspan="5" scope="row"><div align="left" class="style12"></div></th>
              </tr>
              <tr>
                <th height="18" colspan="5" scope="row">&nbsp;
				
						
				
				</th>
              </tr>
              <tr>
                <th height="19" colspan="5" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row"><div align="right"><a href="customer_page.php" class="style14"><span class="button">Return to  home page</span></a></div></th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
      </label><a href="javascript:window.print()">PRINT</a>
    </div>
</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



