
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

<caption><EM>Agent Transactions Till Date</EM></caption>

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
$ag_name=$_GET['ag_name'];
$connection = include "conn.php";

 include "conn.php"; $ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-1 months'));


//$ts2  = strtotime(date("Y-m-d")-date("Y") - date("m")- date("d") +7);
 
if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = ($page-1) * 25;

 include "info.php";
if(($bs_mtls=='1')){ 
 $check = mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND (STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' )&& (comp='$ag_name') ORDER BY date DESC LIMIT $start_from, 25") or die('Query failed: ' . mysql_error());}
 
 if(($bs_mtls=='0')){ 
 $check = mysql_query("SELECT * FROM agent_cust_transaction WHERE  (STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' )&& (comp='$ag_name') ORDER BY date DESC LIMIT $start_from, 25") or die('Query failed: ' . mysql_error());}
 
$check3 = mysql_query("SELECT * FROM agent_cust_transaction  ORDER BY date DESC ")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM agent_cust_transaction ")or die(mysql_error());
 //

 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check3);


  
  
  //echo $email;
include "search_proc.php";





echo "<br>";
echo "<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM agent_cust_transaction WHERE  (STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' )&& (comp='$ag_name') " or die('Query failed: ' . mysql_error()); 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 25);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='admin_lv2_trans.php?page=".$i." & num=$num  &ag_name=$ag_name'>".$i."</a> ";}


 
																										

?>


		