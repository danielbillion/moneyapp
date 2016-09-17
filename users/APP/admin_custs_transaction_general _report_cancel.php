<?php  include "admin_p.php";?>

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
	color: #0000CC;
	font-size: 18px;
}
.style2 {font-size: 11px}
-->
</style>
</head>

<body>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Cancelled Customer Transactions </EM></caption>

<tr >
<th>No</th>

<th>Date</th>
<th>Transfer Code</th>

<th>Sender </th>
<th>Receiver</th>
<th>Transfer-M</th>
<th>Amt-P /£ </th>
<th>Local-P/N  </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>A-Co/£</th>
<th>Total-P/£</th>
<th></th>
<th>Status</th>

<th></th>


<th></th>
</tr>

<?php 

  
//$email= $_SESSION['email'];


$del_ct="del_ct";
$link = include "conn.php";
 include "conn.php"; if (isset($_GET["page"])) { $page  = $_GET["page"]; $num  = $_GET["num"]; } else { $page=1; $num=0; };
$start_from = ($page-1) * 20;

  
 $check = mysql_query("SELECT * FROM cust_transaction_cancel ORDER BY date DESC LIMIT $start_from, 20") or die('Query failed: ' . mysql_error());
$check3 = mysql_query("SELECT * FROM cust_transaction_cancel  ORDER BY date DESC ")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM cust_transaction_cancel ")or die(mysql_error());
 //$check1 = mysql_query("SELECT * FROM cust_transaction_cancel WHERE sender_email = '".$email."' && b_transfer = 'Pick Up' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM cust_transaction_cancel WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check3);


  
  //echo $email;
while($row=mysql_fetch_array($check)){

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$s_phone=$row['s_phone'];
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
 $com_a=$row['com_a'];
 $com_d= $row['com_d'];
$date= $row['date'];
$s_email=$row['sender_email'];
$r_idtype= $row['r_idtype'];
$sdate= $row['date'];
$rate=$row['exchange_rate'];
$sender= $row['sender_name'];
$sender_email=$row['sender_email'];
$dtime= $row['dtime'];
$status=($row['status']);
//$senderd=$row['address'];


  $numtr=0;
 /****** countint no of tran of d agent ****/ 
 $checkp = mysql_query("SELECT * FROM cust_transaction_cancel WHERE sender_email='$s_email' && status='PAID' ")or die(mysql_error());
while($rows=mysql_fetch_array($checkp)){$numtr=$numtr +1;}
/*

$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno']; */

//$start_from= $start_from+1;
echo "</td><td align='center'>";echo $start_from;

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo strtolower($row['sender_name']);
echo "</td><td align='center'>";echo strtolower($row['r_name']);
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['commission']/2;
echo "</td><td align='center'>";echo $row['commission']/2;
echo "</td><td align='center'>";echo $row['total']; /*
echo "</td><td>";echo "<em><a href='admin_pay_agent.php?r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & s_email=$s_email & del_ct=$del_ct & sender=$sender'> Delete  </a></em>"; */
	/*
if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

} 

echo "</td><td align='center'>";echo $row['status'];

echo "</td><td>";echo "<em><a href='admin_cust_task.php?r_name=$r_name & s_fname=$s_fname & r_transfer=$r_transfer & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & com_a= $com_a & com_d=$com_d & r_total=$r_total & receiptno=$receiptno  & s_email= $s_email & date=$date & numtr=$numtr'> Tsk	</a></em>"; 

echo "</td><td>";echo "<strong><a href='admin_cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & date=$date  & del_ct=$del_ct & status=$status & s_fname=$s_fname'> View  </a></strong>";

*/
echo "</td></tr>";
$start_from++;

}

echo "</td><td colspan='6' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);


$total_amtp=0;
while($sa = mysql_fetch_array($check1))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo $total_amtp ;


$check2 = mysql_query("SELECT * FROM cust_transaction_cancel ")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;


$check3 = mysql_query("SELECT * FROM cust_transaction_cancel ")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;


$check4 = mysql_query("SELECT * FROM cust_transaction_cancel ")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo $total_t;
echo "</td><td align='center'>";

echo "</table>";


echo"<br>";
echo"<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM cust_transaction_cancel"; 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='admin_custs_transaction_general _report_cancel.php?page=".$i." & num=$num'>".$i."</a> ";}




																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
		
		