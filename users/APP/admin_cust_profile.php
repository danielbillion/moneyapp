<?php session_start();
/*	
								
if (isset($_POST['submit']))
	
{


							  echo $row['messageid'];
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

								//print values to screen
								while ($row = mysql_fetch_assoc($result)) {
								  //echo $row['messageid'];
								$er= ($row['rate']);}*/
								 
									// $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									


/*								//print values to screen

if(isset($_SESSION['r_fname']) && !empty($_SESSION['r_fname']) AND isset($_SESSION['r_lname']) && !empty($_SESSION['r_lname']) 
AND isset($_SESSION['r_phone']) && !empty($_SESSION['r_phone'])AND isset($_SESSION['r_transfer']) && !empty($_SESSION['r_transfer'])
AND isset($_SESSION['r_bank']) && !empty($_SESSION['r_bank'])AND isset($_SESSION['r_idtype']) && !empty($_SESSION['r_idtype']) && isset($_POST['submit']))
*/
/*

 include "conn.php"; 
								
								  $r_bank=mysql_escape_string($_SESSION['r_bank']);
									 $r_idtype= mysql_escape_string($_SESSION['r_idtype']);
									 
									 
		
		mysql_query("INSERT INTO agent_cust_transaction (date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno)

 VALUES ('$date','$ref', '$email','$c_email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
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
*/
/*
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
									
									 
		
mysql_query("INSERT INTO agent_cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_actno,
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
<title>Untitled Document</title>
<style type='text/css'>
<!--
.style5 {font-size: 10px}
.style7 {color: #0000FF}
.style8 {font-size: 9px; }
.style10 {font-size: 10px; color: #000000; }
.style12 {font-size: 12px; }
.style14 {font-size: 13px}
.style15 {color: #990033}
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
.style19 {font-size: large}
.style20 {font-size: 14px}
.style21 {font-size: 14px; color: #000000; }
.style22 {font-size: 15.5px; }
.style23 {
	color: #0000CC;
	font-size: 18px;
}
.style24 {font-size: 18px}
.style25 {font-size: 10px; font-style: italic; }
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <table width="603" height="481" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th width="599" height="479" scope="row"><div align="center">
            <table width="584" height="635" border="0" cellpadding="0" cellspacing="0">
              <tr bgcolor="#9933CC">
                <th colspan="4" bgcolor="#CCCCCC" scope="row"><strong><span class="style19"><?php include "info.php"; if (isset($name2)){ echo $name2;} ?></strong></th>
                <th bgcolor="#CCCCCC" scope="row"><a href="admin_page.php" class="style25">Return to administration home page</a></th>
              </tr>
              <tr>
                <th width="174" scope="row"><div align="right"></div></th>
                <td height="39" colspan="4"><div align="left"></div></td>
              </tr>
              <tr>
                <th height="19" colspan="5" scope="row"><div align="right" class="style8">
                    <div align="center"><strong><span class="style5"><?php include "info.php"; if (isset($addressbs)){ echo $addressbs; }  ?> </span>&nbsp;<span class="style5">Phone: <?php include "info.php";if (isset($tel)){ echo $tel; }  ?>,<?php include "info.php";if (isset($tel2)){ echo $tel2; }  ?> &nbsp; Email:<?php include "info.php"; if (isset($emailbs)){ echo $emailbs; }  ?>, <?php include "info.php";if (isset($web1)){ echo $web1; }  ?></span></strong>&nbsp; </div>
                </div>
                  <div align="center" class="style14"></div>
                  <div align="right" class="style8">
                    <div align="center"></div>
                  </div>                  <div align="center" class="style18"></div></th>
              </tr>
              
              <tr>
                <th height="19" colspan="5" scope="row"><div align="right" class="style8">
                    <div align="center">
                      <hr>
                    </div>
                </div>                  <div align="center" class="style17">
                    <div align="center"></div>
                  </div></th>
              </tr>
              <tr>
                <th colspan="5" scope="row"><div align="right" class="style8">
                    <div align="center"><span class="style23">Customer <span class="style24">Profile =&gt; </span> <?PHP  if (isset($_GET['fname']))
				
				echo  strtoupper($_GET['fname']);
				echo  strtoupper($_GET['lname']);
				
				
				?>
                    </span></div>
                </div>                  <div align="center"></div></th>
              </tr>
              
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style10">
                  <div align="right">
                    <?php if (isset($date))
				 echo $date; ?>
                  </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style10"><div align="left"></div></td>
              </tr>
              
              
              <tr>
                <th height="48" scope="row"><div align="left" class="style22">First Name </div></th>
                <td width="132" class="style10"><div align="left" class="style20">
                    <?PHP  if (isset($_GET['fname']))
				
				echo  strtoupper($_GET['fname']);
				
				
				
				?></div></td>
                <td width="86" class="style10">&nbsp;</td>
                <td width="51" class="style10">&nbsp;</td>
                <td width="141" class="style10">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Last Name </div></th>
                <td colspan="4" class="style10"><div align="left" class="style20">
                    
					<?PHP  if (isset($_GET['lname']))
				
				
				echo  strtoupper($_GET['lname']);
				
				
				?>
				</div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left">Date Of Birth </div></th>
                <td colspan="4" class="style21">
				<?PHP  if (isset($_GET['dob']))
				
				
				echo  strtoupper($_GET['dob']);
				
				
				?>
				
				&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Email </div></th>
                <td colspan="4" class="style10"><div align="left" class="style20">
                    <?PHP  if (isset($_GET['ag_email']))
				
				echo  ($_GET['ag_email']);
				
				
				
				?></div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th class="style12" scope="row"><div align="left" class="style22">Mobile No </div></th>
                <td colspan="4" ><div align="left" class="style20">
                    <span class="style20">
                    
                    <div align="left">
                      <?PHP  if (isset($_GET['mnum']))
				
				echo  ($_GET['mnum']);
				
				
				
				?>
                    </div>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Phone No</div></th>
                <td colspan="4" class="style10"><div align="left" class="style20">
                <?PHP  if (isset($_GET['pnum']))
				
				echo  ($_GET['pnum']);
				
				
				
				?></div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Address</div></th>
                <td colspan="4" class="style10"><div align="left" class="style20">
                     
                    <?PHP  if (isset($_GET['address']))
				
				echo  ($_GET['address']);
				
				
				
				?>
                </div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Post Code </div></th>
                <td colspan="4" class="style21"><span class="style12">
                  <div align="left"><span class="style7">
                    <?PHP  if (isset($_GET['postcode']))
				
				echo  ($_GET['postcode']);
				
				
				
				?>
                </span></div></td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th scope="row"><div align="left" class="style22">Proof of Address </div></th>
                <td colspan="4" class="style21">
				
				<?php
				if (isset($_GET['ag_email']))
				
	{			

$agent_em= $_GET['ag_email'];
/*

?>
<a href="download.php?ag_email=<?php=$ag_email;?>"><?php=$name;?></a> <br>
<?php
*/

echo "
<em><a href='customer_proofad_download.php? agent_em=$agent_em '> download</a></em>";

}
				
				
				?>
				
				
				&nbsp;</td>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <td colspan="4" class="style21">&nbsp;</td>
              </tr>
              <tr>
                <th height="22" scope="row"><div align="left" class="style22">Proof of Id </div></th>
                <td colspan="4" class="style10"><div align="left" class="style12"><span class="style20"></span>
				
				
				<?php
				if (isset($_GET['ag_email']))
				
	{			

$agent_em= $_GET['ag_email'];
/*

?>
<a href="download.php?ag_email=<?php=$ag_email;?>"><?php=$name;?></a> <br>
<?php
*/

echo "
<em><a href='customer_proofid_download.php? agent_em=$agent_em '> download</a></em>";




}
				
				
				?>
				
				
				</div></td>
              </tr>
              <tr>
                <th height="22" scope="row">&nbsp;</th>
                <td colspan="4" class="style10">&nbsp;</td>
              </tr>
              <tr>
                <th height="22" scope="row"><div align="left">Advertisement</div></th>
                <td colspan="4" class="style10">
                
                <?php
				if (isset($_GET['youknow']))
				
	{			

$youknow= $_GET['youknow'];
/*

?>
<a href="download.php?ag_email=<?php=$ag_email;?>"><?php=$name;?></a> <br>
<?php
*/

echo "
<em> $youknow</em>";




}
				
				
				?>
                
                &nbsp;</td>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="37" colspan="5" scope="row"><div align="center">
                    	<SCRIPT LANGUAGE="JavaScript"> 
			if (window.print) {
			document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
			}
			</script>
                </div>                  <div align="center"></div>                <span class="style15"><a href="index.php"></a></span></th>
              </tr>
              <tr>
                <th height="37" scope="row">&nbsp;</th>
                <th height="37" colspan="4" scope="row">&nbsp;</th>
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



