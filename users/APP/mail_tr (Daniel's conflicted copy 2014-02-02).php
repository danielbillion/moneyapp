<?php session_start();

								$r_transfer=($_GET['r_transfer']);
								$test =(rand(100,10000));
								$ref= (('dkl' . $test));
								$email= ($_SESSION['email']);
									$date=date('Y-m-d');
									
									
									
$sender_email = ($_GET['sender_email']);
$email= $_GET['age_email'];
$admn= $_SESSION['sfname_ad'];



 include 'conn.php';  
 $check = mysql_query('SELECT * FROM agent_new_customer') or die('Query failed: ' . mysql_error());
 $check0 = mysql_query('SELECT * FROM agent_new_customer WHERE email = '$sender_email' && agent_email = '$email' ORDER BY fname  ')or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);


 
while($row=mysql_fetch_array($check0)){

$c_name=$row['fname'].' '. $row['lname'];
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
<link rel='shortcut icon' href='img_fvr.php' type='image/jpeg' />
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
   
   
   
   
    <div align='center'>
      <table width='801' height='481' border='1' align='center' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>$message .="<tr>
          		<th width='797' height='479' scope='row'><div align='center'>
            	<table width='743' height='873' border='0' cellpadding='0' cellspacing='0'>$message .="<tr>
                <th height='49' colspan='6' style='font-size: 22px' scope='row'><img src='img_logo.php' width='28' height='54'  />
				<?php if(isset($_SESSION['name2'])){ echo  $_SESSION['name2'];} ?></th>
         </tr>";$message .="<tr>
                <th height='23' scope='row'>&nbsp;</th>
                <th colspan='4' scope='row'><span class='style2' style='font-size: 20px; color: #000;'>RECEIPT OF TRANSACTION </span></th>
                <th width='183' scope='row'>&nbsp;</th>
          </tr>";$message .="<tr>
                <th height='23' colspan='6' class='style13' scope='row'><?php include 'info.php'; if (isset($addressbs)){ echo $addressbs; }  ?>
                </span>&nbsp;</br><span class='style5'>Phone:<?php if (isset($tel)){ echo $tel; }  ?>,<?php if (isset($tel2)){ echo $tel2; }  ?>
				&nbsp; Email:<?php if (isset($emailbs)){ echo $emailbs; }  ?>,<?php if (isset($web1)){ echo $web1; }  ?> </span></th>
         </tr>";$message .="<tr>
                <th height='23' colspan='6' scope='row'><strong><span class='style14'></span></span></strong></th>
          </tr>";$message .="<tr>
                <th height='40' scope='row'>&nbsp;</th> <td class='style10'><div align='right' class='style12'></div></td>
                <td colspan='3' class='style10'><div align='center' class='style12' style='font-size: 13px'>
                  <div align='right'><span class='style12' style='font-size: 13px'>
                    <span class='style12' style='font-size: 13px'>
                    <?php if (isset($_GET['sdate']))$daten=$_GET['sdate'];$newDate = date('j  F  Y', strtotime($daten));echo $newDate;?>
                 	 </span> </span></div> </div></td>
               		 <td class='style10'><div align='center'>
                  
                  <?php if (isset($_GET['dtime']))$ytime=$_GET['dtime']; $newtime = date('h:i:A', strtotime($ytime)); echo $newtime; ?>
                </div></td>
                
             </tr>";$message .="<tr>
                <th scope='row'>&nbsp;</th>
                <td colspan='5' class='style10'><div align='right'></div></td>
            </tr>";$message .="<tr>
                <th scope='row'><?php   if (isset($msg)) echo $msg;  ?></th>
                <td colspan='5' class='style10'><div align='left'></div></td>
            </tr>";$message .="<tr>
                <th width='149' height='29' style='font-size: 14px' scope='row'><div align='left' class='style12'>
                  <div align='center' style='font-size: 18px'><u>SENDER </u></div>
                </div></th>
                <td colspan='4' class='style10' style='font-size: 14px'><div align='center' class='style13'>
                    <div align='left' class='style12'></div>
                </div></td>
                <td class='style10' style='font-size: 14px'><div align='center' style='font-size: 18px'><u>RECEIVER </u></div></td>
           </tr>";$message .="<tr>
                <th height='47' style='font-size: 14px' scope='row'><div align='left' class='style12'>SENDER NAME:</div></th>
                <td class='style10' style='font-size: 14px'><div align='left'><span class='style12'>"
                  .$c_name."</span></div></td>
                <td width='77' class='style10' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td width='114' class='style10' style='font-size: 14px'><span class='style12'>NAME:</span></td>
                <td class='style10' style='font-size: 14px'><div align='left'></div></td>
                <td class='style10' style='font-size: 14px'><?php if (isset($_GET['r_name'])) echo strtoupper($_GET['r_name']);  ?></td>
          </tr>";$message .="<tr>
                <th rowspan='2' valign='top' class='style12' style='font-size: 14px' scope='row'><p align='left' class='style12'>RESIDENCE:</p></th>
                <td width='180' rowspan='2' class='style12' style='font-size: 14px'><div align='left'>
                  <?php    if(isset($addressc)){ echo strtoupper ($addressc);} ?>
                </div><div align='center' class='style12'> <div align='left'>             
                    </div> </div></td>
                 
                <td height='27' valign='top' class='style12' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td height='27' valign='top' class='style12' style='font-size: 14px'>PHONE NUMBER:</td>
                <td height='27' valign='top' class='style12' style='font-size: 14px'><div align='left'></div></td>
    	<td height='27' valign='top' class='style12' style='font-size: 14px'><?php  if (isset($_GET['r_phone'])) echo strtoupper( $_GET['r_phone']); ?></td>				
        </tr>";$message .="<tr>
                <td height='28' valign='top' class='style12' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'>DESTINATION:</td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'><div align='left'></div></td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'>NIGERIA</td>
         </tr>";$message .="<tr>
                <th class='style12' style='font-size: 14px' scope='row'><div align='left' class='style12'>POST CODE:</div></th>
                <td class='style12' style='font-size: 14px'> <?php if(isset($postcode)){ echo strtoupper ($postcode);} ?>	&nbsp;</td>
				
                <td height='35' colspan='3' class='style12' style='font-size: 14px'><div align='right'></div></td>
                <td class='style12' style='font-size: 14px'><div align='center'></div></td>
        </tr>";$message .="<tr>
                <th height='32' style='font-size: 14px' scope='row'><div align='left' class='style12'>COUNTRY;</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                  <div align='left'>UNITED KINGDOM</div></div></td>
                
                <td colspan='3' class='style10' style='font-size: 14px'><div align='center'></div></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
         </tr>";$message .="<tr>
                <th height='35' style='font-size: 14px' scope='row'><div align='left' class='style12'>PHONE NUMBER;</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'><span class='style12' style='font-size: 14px'>
                  <?php   if(isset($s_phone)){ echo strtoupper ($s_phone);} ?> </span></div></td>
                <td colspan='3' class='style10' style='font-size: 14px'><div align='right'></div></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
         </tr>";$message .="<tr>
                <th height='24' colspan='6' style='font-size: 14px' scope='row'><hr /></th>
         </tr>";$message .="<tr>
                <th height='24' style='font-size: 14px' scope='row'><div align='left' class='style12'></div></th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
                <th colspan='2' style='font-size: 14px' scope='row'><div align='left' class='style12'>
                 <div align='left'><u style='font-size: 18px'>TRANSACTIONS</u></div>
                </div>                  <div align='left' class='style12'></div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'></div></td>
                <td colspan='3' class='style10' style='font-size: 14px'><span class='style12'>
                <u style='font-size: 18px; font-weight: bold;'>MODE OF PAYMENT</span></td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left' class='style12'>SENDING:</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                    <span class='style7'>&pound; </span>
                    <?php  if (isset($_GET['r_amtsend'])) echo strtoupper( $_GET['r_amtsend']); ?>.00</div></td>
                <td class='style10' style='font-size: 14px'><p align='center'>&nbsp;</p></td>
                <td colspan='3' class='style10' style='font-size: 14px'><span class='style12'>TODAY'S RATE: &pound;1= &#8358;
                    <?php  if (isset($_GET['rate'])) echo number_format(( $_GET['rate']),2); ?>
                </span></td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left' class='style12'>NAIRA EQUIVALENCE:</div></th>
                <td class='style10' style='font-size: 14px'><span class='style12'>&#8358; 
                  <?php  if (isset($_GET['r_amtlocal'])) echo strtoupper( $_GET['r_amtlocal']); ?>
                </span></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
                <td class='style10' style='font-size: 14px'><span class='style12'>BANK PAYING:</span></td>
                <td class='style10' style='font-size: 14px'>&nbsp;</td>
                <td class='style10' style='font-size: 14px'><span class='style10' style='font-size: 14px'><span class='style12'>
                  <?php  if (isset($_GET['r_bank'])) echo strtoupper( $_GET['r_bank']); ?>
                </span></span></td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
               <th style='font-size: 14px' scope='row'><div align='left' class='style12'>COMMISSION:</div></th>
               <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                     <span class='style7'>&pound;</span>
                     <?php  if (isset($_GET['r_commission'])) echo strtoupper( $_GET['r_commission']); ?>.00</div></td>
               <td class='style10' style='font-size: 14px'><div align='center' class='style12'></div></td>
               <td class='style10' style='font-size: 14px'><span class='style12'>TRANSFER MODE:</span></td>
               <td class='style10' style='font-size: 14px'>&nbsp;</td>
               <td class='style10' style='font-size: 14px'><span class='style12'>
                 <?php  if (isset($_GET['r_transfer'])) echo strtoupper( $_GET['r_transfer']); ?>
               </span></td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
        </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left'><span class='style12'>TOTAL PAYMENT:</span></div></th>
                <td class='style13' style='font-size: 14px'><span class='style12'><span class='style7'>&pound; </span>
                    <?php  if (isset($_GET['r_total'])) echo strtoupper( $_GET['r_total']); ?>.00</span></td>
                <td class='style13' style='font-size: 14px'><div align='center' class='style12'></div></td>
                <td colspan='2' class='style13' style='font-size: 14px'><span class='style12'>MODE OF IDENTITY:</span></td>
                <td class='style13' style='font-size: 14px'><span class='style13' style='font-size: 14px'>
                  <?php if (isset($_GET['r_idtype'])){ echo strtoupper($_GET['r_idtype']); } ?> </span></td>
			
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left'><span class='style12'>TRANSFER CODE</span>;</div></th>
                <td class='style13' style='font-size: 14px'><span class='style12'>
                  <?php  if (isset($_GET['receiptno'])) echo strtoupper( $_GET['receiptno']); ?>
                </span></td>
                <td class='style13' style='font-size: 14px'><div align='center' class='style12'></div></td>
                <td colspan='2' class='style13' style='font-size: 14px'><span class='style12'>ACCOUNT NUMBER:</span></td>
                <td class='style13' style='font-size: 14px'><span class='style12'>
                  <?php  if (isset($_GET['r_actno'])) echo strtoupper( $_GET['r_actno']); ?>
                </span></td>
          
          
          
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='center' class='style12'>
                  <div align='left'>AGENT NAME</div>
                </div></th>
                <th style='font-size: 14px' scope='row'><div align='left'><span class='style13' style='font-size: 14px'><span class='style12'>
                  <?php include 'info.php';if ($br=='0'){include 'ag_id.php';}else echo $slogan2; ?></span></span></div></th>

                <th colspan='2' class='style12' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th colspan='2' style='font-size: 14px' scope='row'><label for='b_pbank'></label>
                  <label for='select'></label>
                  <label for='select2'></label>
                  <label for='b_pbank'></label></th>
          
           </tr>";$message .="<tr>
                <th height='18' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='18' colspan='5' style='font-size: 14px' scope='row'>&nbsp;</th>
           </tr>";$message .="<tr>
                <th height='18' colspan='6' scope='row'><div align='left' class='style12'></div></th>
           </tr>";$message .="<tr>
                <th height='18' scope='row'>&nbsp;
				</th>
                <th height='18' scope='row'>&nbsp;</th>
                <th height='18' colspan='3' scope='row'>&nbsp;</th>
                <th height='18' scope='row'>&nbsp;</th>
            </tr>";$message .="<tr>
                <th height='19' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='19' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='19' colspan='2' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th width='40' height='19' scope='row'>&nbsp;</th>
                <th height='19' scope='row'>&nbsp;</th>
             
             </tr>";$message .="<tr>
                <th height='37' scope='row'>&nbsp;</th>
                <th height='37' colspan='5' scope='row'>&nbsp;</th>
              </tr>";
              
            </table>
          </div></th>
        </tr>";
      </table>
      
      
      
      
      </label>
    </div>
</form>
<div align='center'></div>


<p>&nbsp; </p>
</body>


</html>



