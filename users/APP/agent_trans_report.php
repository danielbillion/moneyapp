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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<div align="center">

  <table width="446" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCFF">
    <tr>
      <th scope="row"><span class="style1">Previous Transactions </span></th>
    </tr>
  </table>
  </div>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Your Transactions Till Date</EM></caption>

<tr >
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

<?php session_start();

  
$email= $_SESSION['email'];


$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' ")or die(mysql_error());
 //$check1 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Pick Up' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
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
$r_idtype= $row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo $row['r_name'];
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['commission'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];
echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & r_idtype=$r_idtype'> View  </a></strong>";


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
		
		