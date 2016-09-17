
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

<caption><EM>Cancelled Agent Transactions</EM></caption>

<tr ><th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Agent</th>
<th>Sender </th>
<th>Receiver </th>
<th>Transfer-M</th>
<th>Amt-P/£ </th>
<th>Lcl-P/N  </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>A-Co/£</th>
<th>Total/£</th>


<th>Status</th>
<th></th>
<th></th>
</tr>

<?php 

  
//$email= $_SESSION['email'];

//if($_SESSION['loginTime'] < time()+20*60){  }

$link = include "conn.php";

$connection = include "conn.php";

 include "conn.php"; $ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-408 months'));


//$ts2  = strtotime(date("Y-m-d")-date("Y") - date("m")- date("d") +7);
 
if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = ($page-1) * 25;

  
 $check = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' ORDER BY date DESC LIMIT $start_from, 25") or die('Query failed: ' . mysql_error());
$check3 = mysql_query("SELECT * FROM agent_cust_transaction_cancel  ORDER BY date DESC ")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM agent_cust_transaction_cancel ")or die(mysql_error());
 //

 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
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
$agent=$row['agent_name'];
$date= $row['date'];
$receiptno= $row['receiptno'];
$age_email= $row['agent_email'];
   $numtr=0;
$sender_email=$row['sender_email'];
  $r_idtype=$row['r_idtype'];
  $rate=$row['exchange_rate'];
$sdate= $row['date'];
$dtime=$row['dtime'];
$senderd=$row['address'];
$status=($row['status']);

 
   
 /****** countint no of tran of d agent ****/ 
// $checkp = mysql_query("SELECT * FROM agent_cust_transaction_cancel WHERE agent_email='$age_email' && status='PAID' ")or die(mysql_error());
//while($rows=mysql_fetch_array($checkp)){$numtr=$numtr +1;}
/* ***** end ****/ 

$check_ag = mysql_query("SELECT * FROM agent WHERE email = '".$age_email."'  ")or die(mysql_error());
while($row_ag=mysql_fetch_array($check_ag)){ $name_age= $row_ag['fname']."  ". $row_ag['lname'];}
$del_agt="del_agt";

$start_from= $start_from+1;
echo "</td><td align='center'>";echo $start_from;

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
if (isset($name_age)){ echo "</td><td align='center'>";echo strtolower($name_age);} if (!isset($name_age)){ echo "</td><td align='center'>";echo strtolower("");}
$sender_name=$row['sender_name'];
$r_name=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));
$r_name = ucfirst (strtolower($r_name));
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo number_format($row['amt_send'],2);
echo "</td><td align='center'>";echo number_format($row['amt_local'],2);
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo number_format($row['total'],2);


/*
echo "</td><td>";echo "<em><a href='admin_pay_agent.php?r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & age_email=$age_email & del_agt=$del_agt & sender=$sender
' > Delete  </a></em>"; 


if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno '></a></strong>";

}



echo "</td><td align='center'>";echo $row['status'];







echo "</td><td>";echo "<em><a href='admin_agent_task.php?r_name=$r_name & s_fname=$s_fname & r_transfer=$r_transfer &agent=$agent  & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & com_a= $com_a & com_d=$com_d & r_total=$r_total & receiptno=$receiptno  & age_email= $age_email & date=$date '> Tsk	</a></em>";



echo "</td><td>";echo "<strong><a href='admin_agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & age_email=$age_email & sender_email=$sender_email & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & s_fname=$s_fname & agent=$agent & com_a= $com_a & com_d=$com_d & date=$date  & del_agt=$del_agt & status=$status & r_idtype=$r_idtype'> View  </a></strong>";
*/


//echo "</td><td>";echo "<strong><a href='admin_zero_com.php?ag_email=$age_email & receiptno=$receiptno'> 0-Com  </a></strong>";


echo "</td></tr>";

}


echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);


$total_amtp=0;
while($sa = mysql_fetch_array($check1))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo number_format($total_amtp),2 ;


$check2 = mysql_query("SELECT * FROM agent_cust_transaction_cancel ")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;





/********** COMMISSION FOR DAPHKKOY ***************************/
$check3d = mysql_query("SELECT * FROM agent_cust_transaction_cancel ")or die(mysql_error());
$total_comd=0;
while($sa = mysql_fetch_array($check3d))
{
$total_comd = $total_comd + $sa['com_d'];
}
echo "</td><td align='center'>"; echo number_format($total_comd,2);

/********** COMMISSION FOR agent ***************************/

$checkag = mysql_query("SELECT * FROM agent_cust_transaction_cancel")or die(mysql_error());
$total_ag=0;
while($sa = mysql_fetch_array($checkag))
{
$total_ag = $total_ag + $sa['com_a'];
}
echo "</td><td align='center'>"; echo number_format($total_ag,2);


/*


$check3 = mysql_query("SELECT * FROM agent_cust_transaction_cancel ")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;


*/

$check4 = mysql_query("SELECT * FROM agent_cust_transaction_cancel ")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center' >"; echo number_format($total_t,2);
echo "</td><td align='center' colspan='3'>";






echo "</table>";

echo "<br>";
echo "<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM agent_cust_transaction_cancel WHERE  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' " or die('Query failed: ' . mysql_error()); 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 25);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='admin_agents_transaction_general _report_cancel.php?page=".$i." & num=$num '>".$i."</a> ";}


																										

?>


		