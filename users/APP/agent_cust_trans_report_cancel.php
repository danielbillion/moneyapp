<?php   include "agent_p.php"?>

<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>









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
.style1 {
	color: #FFFFFF;
	font-size: 12px;
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
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFF33;
}
.style19 {
	color: #FFFFFF;
	font-size: 9px;
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
.style15 {	color: #FF0000;
	font-size: 10px;
}
.style171 {color: #0000FF}
.style191 {color: #660033}
.style201 {	font-size: 12px;
	font-style: italic;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style11 {	color: #FFFFFF;
	font-size: 12px;
}
.style11 {	color: #FFFFFF;
	font-size: 18px;
}
.style2 {	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
.style16 {	color: #CCCCCC;
	font-size: 12px;
}
.style21 {	font-size: 18px;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style41 {	font-size: 13px;
	color: #0000FF;
}
.style6 {font-size: 11px}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
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
	
	
                      
                      
                      <table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Cancelled Transactions</EM></caption>

<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Sender / Customer</th>
<th>Receiver </th>
<th>Transfer Mode</th>
<th>Amount Sent(£)) </th>
<th>Local Pay Out(N)  </th>
<th>Comm-<?php if (isset($code)){ echo $code;} ?>£  </th>
<th>Comm-Agent £</th>
<th>Total Payment(£)</th>
<th>Status</th>
<th></th>
</tr>

<?php 

  
$email= $_SESSION['email'];


$ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-500 days'));

$link = include "conn.php";
 include "conn.php"; if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = ($page-1) * 25;

  
 $check = mysql_query("SELECT * FROM agent_cust_transaction_cancel") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '".$email." ' && STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'
  ORDER BY date DESC LIMIT $start_from, 25 ")or die(mysql_error());
  
 $check1 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
 //$check1 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE sender_email = '".$email."' && b_transfer = 'Pick Up' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);

 
  if(isset($table_array) && $table_array[0] != "") {
  
  echo $email;
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
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];





	
	//echo $sender_email;


	
$start_from= $start_from+1;
echo "</td><td align='center'>";echo $start_from;

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];


$sender_name=$row['sender_name'];
$r_name=$row['r_name'];
$r_name2=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name2, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));

echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo $row['total'];
/*echo "</td><td align='center'>";echo $row['status'];

$ts=str_replace(' ', '',($row['status']));

if ( $ts== "Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";
*/

echo "</td></tr>";

}

echo "</td><td colspan='5' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);


$total_amtp=0;
while($sa = mysql_fetch_array($check1))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo $total_amtp ;


$check2 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;



/********** COMMISSION FOR DAPHKKOY ***************************/
$check3c = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
$total_comc=0;
while($sa = mysql_fetch_array($check3c))
{
$total_comc = $total_comc + $sa['com_d'];
}
echo "</td><td align='center'>"; echo $total_comc;

/********** COMMISSION FOR agent ***************************/

$checkag = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
$total_ag=0;
while($sa = mysql_fetch_array($checkag))
{
$total_ag = $total_ag + $sa['com_a'];
}
echo "</td><td align='center'>"; echo $total_ag;









/*
$check3 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;
*/

$check4 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email = '$email'")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo $total_t;
echo "</td><td align='center'>";

echo "</table>";

echo "<br>";
echo "<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
  
$sql = "SELECT COUNT(id) FROM agent_cust_transaction_cancel WHERE agent_email = '".$email." ' && STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'"; 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 25);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='agent_cust_trans_report.php?page=".$i." & num=$num '>".$i."</a> ";}
//

 }

		
			
			

else {
 ($msg = 'You have not set up any transaction <a href="receivers_list.php" target="mainframe">click here start </a>');

}
																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                      
                      
                      
                      
                      &nbsp;</td>
                    </tr>
                    </table>
<p>&nbsp;
                  
                  
                  
                  
                  </p></th>
                </tr>
</table>
  </blockquote>
</div>  
<p>&nbsp;</p>




</body>
</html>
