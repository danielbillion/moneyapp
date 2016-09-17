
<?php   include "agent_p.php"?>

<?php 
require_once('calendar/classes/tc_calendar.php');
?>
<script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>

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
.style2 {font-size: 11px}
.style5 {font-size: 12px}
.style9 {color: #FFFFFF}
-->
</style>
</head>




<body>
<div align="center">

  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
    <table width="395" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="31" valign="bottom" bgcolor="#339933" scope="row"><span class="style5">
          <label></label>
          <label></label>
          </span><span class="style5">
            <label></label>
            <label></label>
            </span><span class="style5">
            <label></label>
            <label></label>
            </span>
          <div align="right">&nbsp;</div>          <span style="font-size: 14px"><strong style="color: #FFF; font-size: 18px;"><u>Your Turnover</u></strong></span></th>
      </tr>
    </table>
  </form>
  <table width="619" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="">
    <tr>
      <th width="381" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="196" scope="row"><a href="agent_page.php" class="style2"></a></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Your Transactions Till Date</EM></caption>

<tr >
<th>Year</th>
<th>Month</th>
<th>No of Trans</th>

<th>TOTAL SENT (£)</th>
<th>COMM TO AGENTS (£)</th>
<th>COMM TO <?php if(isset($_SESSION['letter3'])){ echo $_SESSION['letter3']; } ?>(£))</th>
<th>TOTAL COL (£)</th>
<th>Graph</th>


<th></th>
</tr>
</html>






<?php 
$email= $_SESSION['email'];
 include "conn.php"; 
$nmonth=12;
$checkr = mysql_query("SELECT
    YEAR(date) as year,
    MONTH(date) AS month,
    SUM(total) AS total_amount,
	 SUM(amt_send) AS amtsend,
	  SUM(com_a) AS comd,
	   SUM(com_d) AS coma,
	COUNT(amt_send) AS counted
	
FROM agent_cust_transaction
WHERE agent_email = '$email' && (status = ' Pending' || status = 'Pending' || status='PAID')&& date
    BETWEEN DATE(NOW()) - INTERVAL (DAY(NOW()) - 1) DAY - INTERVAL $nmonth MONTH
    AND NOW()
GROUP BY YEAR(date), MONTH(date)
ORDER BY YEAR(date), MONTH(date)")
 
 
 or die(mysql_error());

while($row=mysql_fetch_array($checkr)){
	
	$month=$row['month'];
	if($month=="1"){ $month="JAN";}
	if($month=="2"){ $month="FEB";}
	if($month=="3"){ $month="MAR";}
	if($month=="4"){ $month="APR";}
	if($month=="5"){ $month="MAY";}
	if($month=="6"){ $month="JUN";}
	if($month=="7"){ $month="JUL";}
	if($month=="8"){ $month="AUG";}
	if($month=="9"){ $month="SEP";}
	if($month=="10"){ $month="OCT";}	
	if($month=="11"){ $month="NOV";}
	if($month=="12"){ $month="DEC";}
echo "</td><td align='center'>";echo $row['year'];
	
echo "</td><td align='center'>";echo $month;
echo "</td><td align='center'>";echo $row['counted'];
echo "</td><td align='center'>";echo number_format ($row['amtsend']);
	

echo "</td><td align='center'>";echo number_format ($row['coma'],2);
echo "</td><td align='center'>";echo number_format ($row['comd'],2);

echo "</td><td align='center'>";echo number_format ($row['total_amount'],2);

$coma=  ($row['coma']);
$comd=  ($row['comd']);
$coma=  ($row['coma']);
$counted=($row['counted']);
$year=  ($row['year']);
$month=  ($row['month']);
$tota=  ($row['total_amount']);

$amts=  ($row['amtsend']);





echo "</td><td>";echo "<strong><a href='agent_tg2.php?coma=$coma & comd=$comd & counted=$counted & month=$month & year=$year & tota=$tota & amts=$amts'> View  </a></strong>";

echo "</td></tr>";
	
}

//$email= $_SESSION['email'];

$value=date("Y-m-d");

		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

 include "conn.php"; 
 
  $num=1;
 
 
 if (isset($_POST['Submit'])) {
 
 $search = $_POST['search'];
  $entry = $_POST['txt'];
 
 
 }
 
   
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction  ")or die(mysql_error());
// $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $check1= mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_name = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());
 
 




$table_array = mysql_fetch_array($check);
 
 
 if($search == "ln"){
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

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

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];

$sendern=$row['sender_name'];
$rname=$row['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));

echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];
echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?s_phone=$s_phone & sdate=$sdate &r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";


echo "</td></tr>";

}}
 };
 
 
 


 
 
 
  
 }
 
		?>
		
        
        