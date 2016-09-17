

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

<caption><EM>Customer Transactions Till Date</EM></caption>

<tr >
<th>No</th>

<th>Date</th>
<th>Transfer Code</th>
<th>Agent </th>
<th>Sender </th>
<th>Receiver</th>
<th>Transfer-M</th>
<th>Amt-P /£ </th>
<th>Local-P/N  </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>A-Co/£</th>
<th>Total-P/£</th>
<th>Status</th>
<th>View</th>

<th></th>


<th></th>
</tr>

<?php 

  echo $_GET['ag_email'];
//$email= $_SESSION['email'];


$del_ct="del_ct";
$link = include "conn.php";
 include "conn.php"; if (isset($_GET["page"])) { $page  = $_GET["page"]; $num  = $_GET["num"]; } else { $page=1; $num=0; };
$start_from = ($page-1) * 20;

  
 $check3 = mysql_query("SELECT * FROM cust_transaction ORDER BY date DESC LIMIT $start_from, 20") or die('Query failed: ' . mysql_error());
 
 include "info.php";
if(($bs_mtls=='1')){
if (isset($_GET['ag_email'])){$email=trim($_GET['ag_email']);}
//$email= $_SESSION['email'];
$check = mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND sender_email = '".$email."' ORDER BY date DESC  ")or die(mysql_error());

}

if(($bs_mtls=='0')){

if (isset($_GET['ag_email'])){$email= ($_GET['ag_email']);}
//$email= $_SESSION['email'];
$check = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' ORDER BY date DESC  ")or die(mysql_error());
}



include "search_proc_cust.php";




echo"<br>";
echo"<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM cust_transaction WHERE sender_email = '".$email."' ORDER BY date DESC "; 

$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='admin_custs_transaction_general _report.php?page=".$i." & num=$num'>".$i."</a> ";}



 
																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
		
		