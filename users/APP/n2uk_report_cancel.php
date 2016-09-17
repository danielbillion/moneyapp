
<?php  include "admin_p.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style3.css" rel="stylesheet" type="text/css">

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
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

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

<div align="center"<strong>N2UK Cancel Transactions </strong></div>
<p>
<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >


<tr>
<th>No</th>
<th>Date</th>
<th>Cust ID</th>
<th>TC</th>
<th>C/NAME</th>
<th>R/NAME </th>
<th>AMT / N</th>
<th>AMT / £ </th>
<th>BOU/RATE </th>
<th>SOLD/ RATE </th>
<th>MARGIN </th>
<th>PROFIT </th>
<th>BANK ACR </th>
<th>BANK NAME </th>
<th>BANK NIG </th>


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
$ts2  =date('Y-m-d', strtotime('-1 months'));


//$ts2  = strtotime(date("Y-m-d")-date("Y") - date("m")- date("d") +7);
 
if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = ($page-1) * 25;

  
 $check = mysql_query("SELECT * FROM trans2_cancel WHERE  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' ORDER BY date DESC LIMIT $start_from, 25") or die('Query failed: ' . mysql_error());
$check3 = mysql_query("SELECT * FROM trans2_cancel  ORDER BY date DESC ")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM trans2_cancel ")or die(mysql_error());
 //

 //$check2 = mysql_query("SELECT * FROM trans2 WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check3);


  
  
  //echo $email;
$pro=0;$bou=0;$sold=0;$mar=0;$amtn=0;$amtp=0;

if(!isset($start_from)){$start_from=0;}
while($row=mysql_fetch_array($check)){


$custid=$row['custid'];
$tcode=$row['tcode'];
$date=$row['date'];
$sender=$row['s_name'];
$r_name=$row['r_name'];
$amtn=$row['amt_n'];
$amtp=$row['amt_p'];
$bou=$row['bou_r'];
$sold=$row['sold_r'];
$margin=$row['margin'];
$profit=$row['profit'];
$bankn= $row['bank_n'];
$bankna= $row['bank_info'];
$status= $row['status'];
$r_phone= $row['r_phone'];
$banki= $row['banknig'];
$r_transfer= $row['r_transfer'];
$r_idtype= $row['id_type'];
$actname= $row['act_name'];

 
if(isset($start_from)){$start_from= $start_from+1;echo "</td><td align='center'>";echo $start_from;}

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['custid'];
echo "</td><td align='center'>";echo $row['tcode'];
	$sender_name=$row['s_name'];
	
$r_name=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));
$r_name = ucfirst (strtolower($r_name));
echo "</td><td align='center'>";echo $row['amt_n'];
echo "</td><td align='center'>";echo number_format($row['amt_p'],2);
echo "</td><td align='center'>";echo number_format($row['bou_r'],2);
echo "</td><td align='center'>";echo $row['sold_r'];
echo "</td><td align='center'>";echo $row['margin'];
echo "</td><td align='center'>";echo $row['profit'];
echo "</td><td align='center'>";echo $row['bank_n'];
echo "</td><td align='center'>";echo $row['bank_info'];
echo "</td><td align='center'>";echo $row['banknig'];

echo "</td><td align='center'>";echo $row['status'];
/*
echo "</td><td>";echo "<strong><a href='n2uk_trans_receipt.php?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone &  actname=$actname & r_transfer=$r_transfer & r_idtype=$r_idtype'> View  </a></strong>";

*/

//echo "</td><td>";echo "<strong><a href='admin_zero_com.php?ag_email=$age_email & receiptno=$receiptno'> 0-Com  </a></strong>";

$pro = $pro + $row['profit'];$mar = $mar + $row['margin'];$amtn = $amtn + $row['amt_n'];$amtp = $amtp + $row['amt_p'];$bou = $bou + $row['bou_r'];$sold = $sold + $row['sold_r'];


echo "</td></tr>";

}


echo "</td><td colspan='6' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);




echo "</td><td align='center'>";echo number_format($amtn,2) ;
echo "</td><td align='center'>";echo number_format($amtp,2) ;
/********** COMMISSION FOR DAPHKKOY ***************************/

echo "</td><td align='center'>"; echo number_format($bou,2);

/********** COMMISSION FOR agent ***************************/

echo "</td><td align='center'>"; echo number_format($sold,2);
echo "</td><td align='center' >"; echo number_format($mar,2);
echo "</td><td align='center' >"; echo number_format($pro,2);
echo "</td><td align='center' colspan='3'>";

echo "</table>";







echo "<br>";
echo "<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM trans2_cancel WHERE  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' " or die('Query failed: ' . mysql_error()); 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 25);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='n2uk_report_cancel.php?page=".$i." & num=$num '>".$i."</a> ";}


 
																										

?>


		