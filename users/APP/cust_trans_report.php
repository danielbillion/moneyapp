
<?php include "customer_p.php";    ?>

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
<title>Receipt of transaction</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 18px;
}
.style3 {font-size: 12px}
-->
</style>
</head>

<body>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Your Previous Transactions Till Date</EM></caption>

<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Receiver Name</th>
<th>Mode of Transfer</th>
<th>Amount Sent(£)) </th>
<th>Local Pay Out(N)  </th>
<th>Commission  </th>
<th>Total Payment(£)</th>
<th>Status</th>
<th></th>
</tr>

<?php 

  
$email= $_SESSION['email'];


$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 if(($bs_mtls=='1')){
 $check3 = mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND sender_email = '".$email."'  ORDER BY dtime DESC ")or die(mysql_error());}
 
 if(($bs_mtls=='0')){
 $check3 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' ORDER BY dtime DESC  ")or die(mysql_error());}
 
 //$check1 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Pick Up' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);

 $rn=0;
  if(isset($table_array) && $table_array[0] != "") {
  
  echo $email;
while($row=mysql_fetch_array($check3)){


$sender_email=$row['sender_email'];
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
$receiptno= $row['receiptno'];
$r_idtype= $row['r_idtype'];
$sdate= $row['date'];
$rate=$row['exchange_rate'];
$sender= $row['sender_name'];
$date= $row['date'];
$s_email=$row['sender_email'];
$r_idtype= $row['r_idtype'];
$dtime= $row['dtime'];

$rate=$row['exchange_rate'];
$sender_email=$row['sender_email'];
$rn=$rn+1;
//$dtime=$row['dtime'];
//$senderd=$row['address'];
echo "</td><td align='center'>";echo $rn;
echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo $row['r_name'];
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['commission'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];


$ts=str_replace(' ', '',($row['status']));

if ( $ts== "Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";


echo "</td></tr>";

}

echo "</table>";


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
		
		