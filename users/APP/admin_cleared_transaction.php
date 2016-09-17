
<?php include "admin_p.php";include "info.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #000000;
}

a:hover {
	text-decoration: none;
	color: green;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 18px;
}
.style3 {font-size: 10px}
.style5 {color: #330000; font-size: 18px; }
-->
</style>
</head>

<body>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM> Transactions Agent Cleared Till Date Only For Last 3days
</EM></caption>

<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Agent</th>
<th>Sender </th>
<th>Receiver </th>
<th>Transfer Mode</th>
<th>Amt-P/£ </th>
<th>Lcl-P/N</th>
<th> <?php if(isset($letter3)){echo $letter3;} ?>-Com £  </th>
<th>A-Co/£</th>
<th>Total/£)</th>
<th>Status</th>


<th></th>
</tr>

<?php 

/*

if (isset($_GET['ag_email']))
				
	{			

$email= $_GET['ag_email'];

} */
  



$link = include "conn.php";
 include "conn.php";  
 $ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-3 days'));

 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 
  if(($bs_mtls=='1')){
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE  `amt_send` <= $bs_mtl AND status = 'paid' && STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'  ORDER BY date DESC")or die(mysql_error());}
 
  if(($bs_mtls=='0')){
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid' && STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'  ORDER BY date DESC")or die(mysql_error());}
 
$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid'")or die(mysql_error());
 //$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Pick Up' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);

 $num=0;
 
 /* echo "<u>";
  
  echo  strtoupper($_GET['fname']). strtoupper($_GET['lname']); echo ": ";
   // echo $email;
	  echo "(AGENT)";

  echo "</u>"; */
while($row=mysql_fetch_array($check3)){



$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_fname= $row['sender_name'];

$ag_email= $row['agent_email'];
$check_ag = mysql_query("SELECT * FROM agent WHERE email = '".$ag_email."'  ")or die(mysql_error());
while($row_ag=mysql_fetch_array($check_ag)){ $name_age= $row_ag['fname']."  ". $row_ag['lname'];}



$num= $num+1;
echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo strtolower($name_age);
echo "</td><td align='center'>";echo strtolower($row['sender_name']);
echo "</td><td align='center'>";echo strtolower($row['r_name']);
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];




echo "</td></tr>";

}

echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);


$total_amtp=0;
while($sa = mysql_fetch_array($check1))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo $total_amtp ;


$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;





/********** COMMISSION FOR DAPHKKOY ***************************/
$check3d = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check3d))
{
$total_com = $total_com + $sa['com_d'];
}
echo "</td><td align='center'>"; echo $total_com;

/********** COMMISSION FOR agent ***************************/

$checkag = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_ag=0;
while($sa = mysql_fetch_array($checkag))
{
$total_ag = $total_ag + $sa['com_a'];
}
echo "</td><td align='center'>"; echo $total_ag;




/*$total_com=0;
while($sa = mysql_fetch_array($check3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;
*/

$check4 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo $total_t;
echo "</td><td align='center'>";














echo "</table>";


																										

?>







<Br /> <br />





<?php /* Customer **********************************************************************************************/ ?>


 <table width="634" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="">
    <tr>
      <th width="357" scope="row"><span class="style5"></span></th>
      <th width="23" scope="row">&nbsp;</th>
      <th width="9" scope="row">&nbsp;</th>
      
	  
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#CCCCcF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Customers Transactions  Cleared Till Date</EM></caption>

<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Customer / Sender </th>
<th>Receiver</th>
<th>Transfer Mode</th>
<th>Amount Sent(£)) </th>
<th>Local Pay(N)  </th>
<th> <?php if(isset($letter3)){echo $letter3;} ?>-Com £  </th>
<th> Customer-Com £</th>
<th>Total Payment(£)</th>
<th>Status</th>


<th></th>
</tr>



<?php

/*

if (isset($_GET['ag_email']))
				
	{			

$email= $_GET['ag_email'];

} */
  



$link = include "conn.php";
 include "conn.php";  
 $find = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 
   if(($bs_mtls=='1')){
 $find3 = mysql_query("SELECT * FROM cust_transaction WHERE  `amt_send` <= $bs_mtl AND status = 'paid'  ORDER BY date DESC")or die(mysql_error());}
 
 if(($bs_mtls=='0')){
 $find3 = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'  ORDER BY date DESC")or die(mysql_error());}
 
 
$find1 = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
 $find_c = mysql_query("SELECT * FROM cust_transaction ")or die(mysql_error());
 //$find2 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($find_c);

 $num=0;

 /* echo "<u>";
  
  echo  strtoupper($_GET['fname']). strtoupper($_GET['lname']); echo ": ";
   // echo $email;
	  echo "(AGENT)";

  echo "</u>"; */
while($row=mysql_fetch_array($find3)){



$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_fname= $row['sender_name'];

$num= $num+1;
echo "</td><td align='center'>";echo $num;

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo strtolower($row['sender_name']);
echo "</td><td align='center'>";echo strtolower($row['r_name']);
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['commission']-1;
echo "</td><td align='center'>";echo "1";
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];




echo "</td></tr>";

}

echo "</td><td colspan='6' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($find1);


$total_amtp=0;
while($sa = mysql_fetch_array($find1))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo $total_amtp ;


$find2 = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($find2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;

/********** COMMISSION FOR DAPHKKOY ***************************/
$checkcd = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_cd=0;
while($sa = mysql_fetch_array($checkcd))
{
$total_cd = $total_cd +( $sa['commission'] - 1);
}
echo "</td><td align='center'>"; echo $total_cd;

/********** COMMISSION FOR Medium ***************************/

$checkag = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_mc=0;
while($sa = mysql_fetch_array($checkag))
{
$total_mc = $total_mc + 1;
}
echo "</td><td align='center'>"; echo $total_mc;






/*
$find3 = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($find3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;
*/

$find4 = mysql_query("SELECT * FROM cust_transaction WHERE status = 'paid'")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($find4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo $total_t;
echo "</td><td align='center'>";














echo "</table>";


																										

?>







<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
		
		