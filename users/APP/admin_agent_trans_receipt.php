<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date("Y-m-d");
									
									
									
$sender_email = ($_GET['sender_email']);
$email= $_GET['age_email'];
$admn= $_SESSION['sfname_ad'];



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
$addressc=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

//echo $address;echo $postcode;echo $sender_email;

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
	color: #000000
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
<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
  <table width="801" height="481" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th width="797" height="479" scope="row"><div align="center">
            <table width="743" height="873" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="49" colspan="6" style="font-size: 22px" scope="row"><img src="img_logo.php" width="28" height="54"  /><?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
              </tr>
              <tr>
                <th height="23" scope="row">&nbsp;</th>
                <th colspan="4" scope="row"><span class="style2" style="font-size: 20px; color: #000;">RECEIPT OF TRANSACTION </span></th>
                <th width="183" scope="row">&nbsp;</th>
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
                <td width="77" class="style10" style="font-size: 14px"><div align="right" class="style12"></div></td>
                <td width="114" class="style10" style="font-size: 14px"><span class="style12">NAME:</span></td>
                <td class="style10" style="font-size: 14px"><div align="left"></div></td>
                <td class="style10" style="font-size: 14px"><?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?></td>
              </tr>
              <tr>
                <th rowspan="2" valign="top" class="style12" style="font-size: 14px" scope="row"><p align="left" class="style12">RESIDENCE:</p></th>
                <td width="180" rowspan="2" class="style12" style="font-size: 14px"><div align="left">
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
                <th height="32" style="font-size: 14px" scope="row"><div align="left" class="style12">COUNTRY;</div></th>
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
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">SENDING:</div></th>
                <td class="style10" style="font-size: 14px"><div align="left" class="style12">
                    <span class="style7">&pound; </span>
                <?php  if (isset($_GET['r_amtsend'])) echo number_format( $_GET['r_amtsend'],2); ?></div></td>
                <td class="style10" style="font-size: 14px">
                  
                  <p align="center">&nbsp;</p></td>
                <td colspan="3" class="style10" style="font-size: 14px"><span class="style12">TODAY'S RATE: &pound;1= &#8358;
                    <?php  if (isset($_GET['rate'])) echo number_format(( $_GET['rate']),2); ?>
                </span></td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row">&nbsp;</th>
                <td colspan="5" class="style13" style="font-size: 14px">&nbsp;</td>
              </tr>
              <tr>
                <th style="font-size: 14px" scope="row"><div align="left" class="style12">NAIRA EQUIVALENCE:</div></th>
                <td class="style10" style="font-size: 14px"><span class="style12">&#8358; 
                  <?php  if (isset($_GET['r_amtlocal'])) echo number_format( $_GET['r_amtlocal'],2); ?>
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
                     <?php  if (isset($_GET['r_commission'])) echo number_format( $_GET['r_commission'],2); ?></div></td>
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
                    <?php  if (isset($_GET['r_total'])) echo number_format( $_GET['r_total'],2); ?></span></td>
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
                  <div align="left">AGENT NAME</div>
                </div></th>
                <th style="font-size: 14px" scope="row"><div align="left"><span class="style13" style="font-size: 14px"><span class="style12">
                  <?php

				 

				

				include "info.php";

				

				if ($br=="0"){

				include "ag_id.php";

				

				}

				

				else 

				

				echo $slogan2;

				

				 ?></span></span></div></th>
                <th colspan="2" class="style12" style="font-size: 14px" scope="row">&nbsp;</th>
                <th colspan="2" style="font-size: 14px" scope="row"><label for="b_pbank"></label>
                  <label for="select"></label>
                  <label for="select2"></label>
                  <label for="b_pbank"></label></th>
              </tr>
             
              
            
              <tr>
                <th height="37" scope="row"  >&nbsp;</th>
                <th height="37" scope="row"><div align="right"></div></th>
                <th height="37" scope="row"><a href="javascript:window.print()">PRINT</a>&nbsp;</th>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" scope="row"><a href="admin_page.php" class="style14">Return to agent home page</a></th>
              </tr>
            </table>
          </div></th>
        </tr>
  </table>
  </label>
      
   

    	
        
        
    <div align="center"></div>

<div align="center"></div>
<div align="center">
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
$adp=$_GET['adp'];
?>
  

<table width="775" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"><span style="font-size: 14px">
      <?php
	
	if ( ($status)=="Pending") {

echo "<strong><a href='admin_agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit:</a></strong>";

}

echo  ($status);

if (($status)=="PAID") {

echo "&nbsp;&nbsp;";echo "BY"; echo "&nbsp;";echo strtoupper($adp);



}

	




	
	
	
	 ?>
      </span>      <div align="right"></div></td>
    <td width="212"><span style="font-size: 14px">
      <?php if ($_SESSION['level']=="1" || $_SESSION['level']=="2"){ echo "</td><td>";echo "<em><a href='admin_pay_agent.php?r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & age_email=$age_email & del_agt=$del_agt & sender=$sender
' > Cancel  </a></em>"; }?>
    </span></td>
    <td width="151"><span style="font-size: 14px">
      <?php
	
	$level=$_SESSION['level'];
	
	  if ((($status)=="Pending")  || ($level=="1" || $level=="2" ) )
	  {
	
	 echo "</td><td>";echo "<em><a href='admin_pay_agent.php?r_name=$r_name & payt=payt & s_fname=$s_fname & r_transfer=$r_transfer &agent=$agent  & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & com_a= $com_a & com_d=$com_d & r_total=$r_total & receiptno=$receiptno  & age_email= $age_email & date=$date & admn=$admn '> Make Payment	</a></em>";
	 
	 
	}
	   ?><br/>
      <span style="text-align: right; font-style: italic; font-weight: bold; color: #F00;"><u>
      <?php if(($_GET['note']!=="")){ echo"Note:". $_GET['note'];} ?>
      </u></span></span></td>
    </tr>
  <tr>
    <td colspan="4"><div align="left" style="text-align: center; font-style: italic; font-weight: bold; color: #F00;"></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
    </tr>
  <tr>
  
    <td width="165">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</body>


</html>



