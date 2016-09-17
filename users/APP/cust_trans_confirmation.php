
<?php include "customer_p.php";
include "info.php";
    ?>
<?php 

								$r_transfer=($_SESSION['r_transfer']);
								$test =(rand(100,10000000));
								
								include "transfer_code.php";
								include "code_proc.php";
								
								//$tcode= (('tfc' . $test));
								$email= ($_SESSION['email']);
								$mon=($_SESSION['amount']);	
								$er= ($_SESSION['er']) ;
								 $lc =($_SESSION['lc']) ;
								 $ap= ($_SESSION['ap']);
								  $tf= ($_SESSION['tf']);
								  $com_d=($tf-1);
								  $com_a= "1";
									$date=date("Y-m-d");
									$s_fname=( strtolower($_SESSION['s_fname']));
									$s_phone=($_SESSION['s_phone']);
									$status=("Pending");
									$r_name=(strtolower($_SESSION['r_fname']. $_SESSION['r_lname']));
									 $r_phone=($_SESSION['r_phone']);
									// $r_bank=($_SESSION['r_bank']);
									$r_actno=($_SESSION['r_actno']);
									
									include "time.php";
									
									//$dtime=date('Y-m-d H:i:s');
if (isset($_POST['submit']))
	
{


							/*	  echo $row['messageid'];
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								$er= ($row['rate']);}*/
								 
									// $r_idtype= ($_SESSION['r_idtype']);
									


/*								//print values to screen

if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_idtype']) && !empty($_SESSION['r_idtype']) && isset($_POST['submit']))
*/


 include "conn.php"; 
								
								  $r_bank=($_SESSION['r_bank']);
									 $r_idtype= ($_SESSION['r_idtype']);
									 
									 
		
		mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,dtime,clear)

 VALUES ('$date','$tcode', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno','$dtime','uc') ") or die(mysql_error());



$c_name=$s_fname;
 $s_fname="None"; 

	
	
	include "email_msg.php";

echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful ')
window.location='customer_page.php';
 }
</script> ";



}
	

?> <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style2 {color: #FFFFFF}
.style5 {font-size: 10px}
.style7 {color: #0000FF}
.style8 {font-size: 9px; }
.style10 {font-size: 10px; color: #000000; }
.style12 {
	font-size: 12px;
	color: #000;
}
.style13 {font-size: 12px; color: #000000; }
.style14 {font-size: 13px}
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
.style17 {
	font-size: 11px;
	font-weight: bold;
}
.style18 {font-size: 11px}
.style20 {
	font-size: 12px;
	font-style: italic;
	font-weight: bold;
	color: #0000FF;
}
.style22 {font-size: 9.5px}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <table width="559" height="481" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th height="479" scope="row"><div align="center">
            <table width="476" height="642" border="0" cellpadding="0" cellspacing="0">
              <tr bgcolor="#9933CC">
                <th colspan="3" bgcolor="#FFFFFF" style="font-size: 20px" scope="row">RECEIPT OF TRANSACTION </th>
              </tr>
              <tr>
                <th colspan="3" scope="row"><strong><span class="style5">
                  <?php if (isset($addressbs)){ echo $addressbs; }  ?>
                </span>&nbsp;</strong></br><span class="style5">Phone:
                <?php if (isset($tel)){ echo $tel; }  ?>
,
<?php if (isset($tel2)){ echo $tel2; }  ?>
&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                </span></strong>
                  <div align="right" class="style8">
                    <div align="center"></div>
                  </div>
                  <div align="center" class="style14"></div>
                  <div align="right" class="style8">
                    <div align="center"></div>
                  </div>                  <div align="center" class="style18"></div></th>
              </tr>
              
              <tr>
                <th height="19" colspan="3" scope="row"><div align="right" class="style8">
                    <div align="center">
                      <hr>
                    </div>
                </div>                  <div align="center" class="style17">
                    <div align="center"></div>
                </div></th>
              </tr>
              <tr>
                <th width="133" colspan="2" scope="row">&nbsp;</th>
                <td width="287"><div align="right" class="style8">
                    <div align="center"></div>
                </div>                  <div align="center"></div></td>
              </tr>
              
              <tr>
                <th colspan="2" scope="row">&nbsp;</th>
                <td class="style10">
                  <div align="right">
                    <?php if (isset($date))
				 echo $date; ?>
                  </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style10" style="color: #000"><div align="left"></div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Sender Name </div></th>
                <td class="style10" style="color: #000"><div align="center" class="style13">
                    <div align="left">
                      <?PHP  if (isset($_SESSION['s_fname']))
				
				echo  strtoupper($_SESSION['s_fname']);
				
				
				?>
                    </div>
                </div></td>
              </tr>
              
              <tr>
                <th height="48" colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Sender Phone Number </div></th>
                <td class="style10" style="color: #000"><div align="left" class="style12" style="color: #000">
                    <?php if(isset($_SESSION['s_phone']))
				echo $_SESSION['s_phone']; ?>
                    
                </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Receiver Name </div></th>
                <td class="style10" style="color: #000"><div align="left" class="style12" style="color: #000">
                    <?php if (isset($_SESSION['r_fname'])) echo strtoupper($_SESSION['r_fname'].$_SESSION['r_lname']);  ?>
                </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style13" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Receiver Phone Number </div></th>
                <td class="style10" style="color: #000"><div align="left" class="style12" style="color: #000">
                    <?php  if (isset($_SESSION['r_phone'])) echo strtoupper( $_SESSION['r_phone']); ?>
                </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style13" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2"  scope="row"><div align="left" class="style12" ">Amount to be Sent</div></th>
                <td><div align="left"">
                    &pound; <span style="color: #000"> <?php if(isset($mon)) echo $mon; ?>
                    
                   
                </span></div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style13" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Naira Equivalence </div></th>
                <td ><div align="left" ><span style="color: #000">&#8358;
                  <?php if(isset($lc)) echo $lc; ?>
                  
                </span> </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style13" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2"  scope="row"><div align="left" class="style12" style="color: #033" >Commission</div></th>
                <td ><div align="left">
                    <span style="color: #000">
                    <?php if(isset($tf)) echo $tf; ?>
                </span> </div></td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style13" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left"><span class="style12" style="color: #033">Total to be Paid</span></div></th>
                <td class="style12" style="color: #000">&pound;
                    <?php if(isset($ap)) echo $ap; ?>
                </td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style12" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left"><span class="style12" style="color: #033">Transfer Code </span></div></th>
                <td class="style12" style="color: #000">
                  <?php if(isset($tcode)) echo $tcode; ?>
                </td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row">&nbsp;</th>
                <td class="style10" style="color: #000">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2" style="color: #000" scope="row"><div align="left" class="style12" style="color: #033">Transfer Type </div></th>
                <td ><div align="left">
				  <span style="color: #000">
				  <?php if(isset($r_transfer)) echo $r_transfer; ?>
			    </span> </div></td>
              </tr>
              <tr>
                <th height="37" colspan="2" scope="row">&nbsp;</th>
                <th height="37" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" colspan="3" scope="row"><div align="center">
                    <input name='submit' type='submit' id='submit' value='Confirm Transaction' />
                <SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
			}
			</script></div>                  
                <div align="center" class="style20">Receipt of transaction will be emailed to you <em><strong>shortly. Thank You</strong></em></div>                </th>
              </tr>
              <tr>
                <th height="19" colspan="3" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" colspan="3" style="font-size: 12px; color: #F00;" scope="row">Please note Any  Amount exceeding &pound;650 will require  uploading your Identification in compliance financial service authority</span></span> </span></th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
      </label>
    </div>
</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



