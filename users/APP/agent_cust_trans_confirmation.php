<?php  include "agent_p.php";
include "info.php";
?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>


<?php 

								$r_transfer=($_SESSION['r_transfer']);
								$email= ($_SESSION['email']);
								$c_email= ($_GET['c_email']);
								$senderd= ($_GET['address']);
								$postcode = ($_GET['postcode']);
								$town = ($_GET['town']);
								$county = ($_GET['county']);
								$country = ($_GET['country']);
								$s_fname= (strtolower($_SESSION['s_fname']));
								$c_name= ($_GET['c_name']);
								$mon=($_SESSION['amount']);	
								$er= ($_SESSION['er']) ;
								 $lc =($_SESSION['lc']) ;
								 $ap= ($_SESSION['ap']);
								  $tf= ($_SESSION['tf']);
								  
								   $com_d= ($_SESSION['com_d']);
								  $com_a=  ($_SESSION['com_a']);
								 // $com_d=($tf/2);
								  //$com_a= ($tf/2);
									$date=date("Y-m-d");
									$s_phone=($_GET['s_phone']);
									$status=("Pending");
									$r_name=(strtolower($_SESSION['r_fname']. $_SESSION['r_lname']));
									 $r_phone=($_SESSION['r_phone']);
									// $r_bank=($_SESSION['r_bank']);
									$r_actno=($_SESSION['r_actno']);
									$ag_ps=("np");
									
									include "transfer_code.php";
									include "code_proc.php";
									// $test =(rand(100,100000));
								
								
								include "time.php";
								
								//$dtime=date('Y-m-d H:i:s');
if (isset($_POST['submit']))
	
{
	$postcode = ($_GET['postcode']);
		$town = ($_GET['town']);
		$county = ($_GET['county']);
		$country = ($_GET['country']);



 include "conn.php"; 
 

								
$s_phone = ($_GET['s_phone']);
	$s_mphone = ($_GET['s_mphone']);
 				
								
								
								
								  $r_bank=($_SESSION['r_bank']);
									 $r_idtype= ($_SESSION['r_idtype']);
									 
									/* extracting customers agent name */
									 $check5 = mysql_query("SELECT * FROM agent ")or die(mysql_error());
									
									 $check_name = mysql_query("SELECT * FROM agent WHERE email = '$email' ")or die(mysql_error());
									 $table_array = mysql_fetch_array($check5);
									 
									 if(isset($table_array) && $table_array[0] != "") {

									while($row=mysql_fetch_array($check_name)){  $agent_name=$row['fname']."  ". $ag_cred=$row['credit'];;}}
							include "info.php";		 
						
						if($ecredit==1){
							$newval=$ag_cred-$mon;
				 
				 mysql_query("UPDATE agent SET credit='$newval' WHERE email='$email'");
							
							
							}			 
		
		mysql_query("INSERT INTO agent_cust_transaction (date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,address,postcode,town,county,country,clear)

 VALUES ('$date','$tcode', '$email','$c_email', '$c_name', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno', '$agent_name','$ag_ps','$dtime','$senderd','$postcode','$town','$county','$country','uc') ") or die(mysql_error());




	
	
	include "email_msg.php";


echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful ')
window.location='agent_page.php';
 }
</script> ";

}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #CCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:link {
	text-decoration: none;
	color: #F00;
}
a:visited {
	text-decoration: none;
	color: #906;
}
a:hover {
	text-decoration: none;
	color: #00F;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {
	color: #000;
	font-size: 12px;
}
.style17 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFF33;
}
.style20 {
	font-size: 9.5px;
	color: #FFFFFF;
}
ag {
	color: #F00;
}
rt {
	color: #F00;
}
.nw {
	color: #F00;
}
.style13 {color: #330000; font-weight: bold; }
.style14 {	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style2 {	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
.style21 {
	font-size: 12px;
	color: #F00;
}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
.style5 {font-size: 10px}
-->
</style>
</head>

<body>



<STYLE type="text/css">
 /* List of address */
.SPLAddressListSt{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    margin-top: 0;
    margin-bottom: 0;
    width: 80mm;}
/* Line under the list box when address found */
.SPLAddressListStBottomLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* Line if nothing is found */
.SPLAddressListStErrorLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* License information line */
/* Shown only for "Internal" Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
											
	<script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var b_actno = document.getElementById('b_actno');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
    if(val=='Pick Up')
    {
    b_actno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	
    }
    else
    {
    b_actno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
    }
    }
    </script>
	
	<?php
	if(isset($_GET['c_name']) && !empty($_GET['c_name']) AND isset($_GET['c_email']) && !empty($_GET['c_email']) )
{

	// Verify data
	$c_name = ($_GET['c_name']); // Set email variable
	$c_email = ($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
<form id="form1" name="form1" method="post" action="">
  <table width="856" height="219" border="0" align="center">
    <tr>
      <td width="2" height="32">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="8">&nbsp;</td>
      <td width="122">&nbsp;</td>
      <td width="122">&nbsp;</td>
      <td width="247">&nbsp;</td>
      <td width="241"><div align="right">
        <input type="text" name="txt" id="txt" />
      </div></td>
      <td width="60"><div align="right">
        <input type="button" name="Search" id="Search" value="Search" />
      </div></td>
    </tr>
    <tr>
      <td height="158" colspan="9"><table width="559" height="481" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th height="479" scope="row"><div align="center">
            <table width="476" height="687" border="0" cellpadding="0" cellspacing="0">
              <tr bgcolor="#9933CC">
                <th colspan="3" bgcolor="#FFFFFF" scope="row"><span class="style2">RECEIPT OF TRANSACTION </span></th>
              </tr>
              <tr>
                <th height="19" colspan="3" scope="row"><div align="right" class="style8">
                  <div align="center"><strong><span class="style5">
                    <?php if (isset($addressbs)){ echo $addressbs; }  ?>
                  </span>&nbsp;</strong></br><span class="style5">Phone:
                  <?php if (isset($tel)){ echo $tel; }  ?>
                  ,
                  <?php if (isset($tel2)){ echo $tel2; }  ?>
&nbsp; Email:
<?php if (isset($emailbs)){ echo $emailbs; }  ?>
,
<?php if (isset($web1)){ echo $web1; }  ?>
                  </span></strong>&nbsp;</div>
                  </div>
                  <div align="center" class="style14"></div>
                  <div align="right" class="style8">
                    <div align="center"></div>
                    </div>
                  <div align="center" class="style18"></div></th>
              </tr>
              <tr>
                <th height="19" colspan="3" scope="row"><div align="right" class="style8">
                  <div align="center">
                    <hr />
                  </div>
                </div>
                  <div align="center" class="style17">
                    <div align="center"></div>
                  </div></th>
              </tr>
              <tr>
                <th colspan="3" scope="row"><div align="right" class="style8">
                  <div align="center"></div>
                </div>
                  <div align="center"></div></th>
              </tr>
              <tr>
                <th scope="row"><div align="left"><a href="admin_page.php" class="style23"></a></div></th>
                <td width="604" colspan="2" class="style10"><div align="right" class="style12">
                  <?php if (isset($date))
				 echo $date; ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style10"><div align="left"></div></td>
              </tr>
              <tr>
                <th scope="row"><div align="left"><span class="style12">Sender Name </span></div></th>
                <td colspan="2" class="style12"><?PHP  if (isset($_GET['c_name']))
				
				echo  strtoupper($_GET['c_name']);
				
				
				?></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style10">&nbsp;</td>
              </tr>
              <tr>
                <th width="174" scope="row"><div align="left" class="style12">Agent</div></th>
                <td colspan="2" class="style10"><div align="center" class="style13">
                  <div align="left" class="style12">
                    <?PHP  if (isset($_SESSION['s_fname']))
				
				echo  strtoupper($_SESSION['s_fname']);
				
				
				?>
                  </div>
                </div></td>
              </tr>
              <tr>
                <th height="48" scope="row"><div align="left" class="style12">Sender Phone Number </div></th>
                <td colspan="2" class="style10"><div align="left" class="style12">
                  <?php if(isset($_GET['s_phone']))
				echo $_GET['s_phone']; ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style12">Receiver Name </div></th>
                <td colspan="2" class="style10"><div align="left" class="style12">
                  <?php if (isset($_SESSION['r_fname'])) echo strtoupper($_SESSION['r_fname'].$_SESSION['r_lname']);  ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style12">Receiver Phone Number </div></th>
                <td colspan="2" class="style10"><div align="left" class="style12">
                  <?php  if (isset($_SESSION['r_phone'])) echo strtoupper( $_SESSION['r_phone']); ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style12">Amount to be Sent</div></th>
                <td colspan="2" class="style10"><div align="left" class="style12"> <span class="style7">&pound; </span>
                  <?php if(isset($mon)) echo $mon; ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style12">Naira Equivalence </div></th>
                <td colspan="2" class="style10"><div align="left" class="style12"> N
                  <?php if(isset($lc)) echo $lc; ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style12">Commission</div></th>
                <td colspan="2" class="style10"><div align="left" class="style12"> <span class="style7">&pound;</span>
                  <?php if(isset($tf)) echo $tf; ?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left"><span class="style12">Total to be Paid</span></div></th>
                <td colspan="2" class="style13"><span class="style12"><span class="style7">&pound; </span>
                  <?php if(isset($ap)) echo $ap; ?>
                </span></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style13">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left"><span class="style12">Transfer Code</span></div></th>
                <td colspan="2" class="style10"><span class="style12">
                  <?php if(isset($tcode)) echo $tcode; ?>
                </span></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="2" class="style10">&nbsp;</td>
              </tr>
              <tr>
                <th height="22" scope="row"><div align="left" class="style12">Transfer Type </div></th>
                <td colspan="2" class="style10"><div align="left" class="style12">
                  <?php if(isset($r_transfer)) echo $r_transfer; ?>
                </div></td>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="2" scope="row"><div align="right"></div></th>
              </tr>
              <tr>
                <th height="37" colspan="3" scope="row"><div align="center"><span class="style23"><a href="admin_page.php"></a></span>
                  <input name='submit' type='submit' id='submit' value='Confirm Transaction' />
                	<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
			}
			</script></div>
                  <div align="center"></div>
                  <span class="style21" style="color: #00F">Receipt of transaction will be emailed  to you shortly. Thank You </span></th>
              </tr>
              <tr>
                <th height="19" scope="row">&nbsp;</th>
                <th height="19" colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" colspan="3" scope="row"><span class="style12"><u>Please note</u>:<span class="style20"> <span class="style21">Any  Amount  exceeding &pound;650 will require  uploading your Identification in compliance with the Financial Conduct Authority</span></span></span></th>
              </tr>
            </table>
          </div></th>
        </tr>
      </table>
        &nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
