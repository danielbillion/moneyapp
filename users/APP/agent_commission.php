<?php   include "agent_p.php"?>


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
	color: #666600;
}

a:hover {
	text-decoration: none;
	color: #996633;
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
	color: #FFFFFF;
	font-size: 18px;
}
.style2 {
	font-size: 12px;
	font-style: italic;
}
a:visited {
	color: #CC6600;
}
-->
</style>
</head>

<body>
<div align="center">

  <table width="693" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#9900FF">
    <tr>
      <th width="564" scope="row"><span class="style1">Commissions on Cleared Transactions </span></th>
      <th width="129" scope="row"><a href="agent_page.php"><span class="style2">Switch to main Page </span></a></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" >

<caption><EM> Your Earning Commission Per Customer( Cleared Transactions only)</EM></caption>

<tr >
<th>Sender Name</th>


<th>Commission To Agent (£)</th>
<th>Commission To  <?php include "info.php"; if (isset($letter3)){ echo $letter3; }?></th>











</tr>

<?php 

  
//$email= mysql_escape_string($_SESSION['email']);

$email= ($_SESSION['email']);
//$c_email= mysql_escape_string($_SESSION['c_email']);

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$email'  ")or die(mysql_error());



  echo $email;


while($row=mysql_fetch_array($check0)){

$c_email=$row['email'];

$checkt = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'  && sender_email = '$c_email' && agent_ps='np' && status='PAID'  ")or die(mysql_error());
$check2_email = mysql_num_rows($checkt);

if ($check2_email > 0) {

$total_cust_com_a=0;
$total_cust_com_d=0;

echo "</td><td align='center'>";echo $row['lname']."  ".$row['fname'];


$c2_email=$row['email'];
$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c2_email'  && agent_ps='np' && status='PAID' ")or die(mysql_error());
//$result = mysql_query($check1);

while($sa = mysql_fetch_array($check1))
{
$total_cust_com_a = $total_cust_com_a + $sa['com_a'];
$total_cust_com_d = $total_cust_com_d + $sa['com_d'];
}
//echo $total_cust_com;

echo "</td><td align='center'>";echo "<strong> $total_cust_com_a  </strong>";
echo "</td><td align='center'>";echo "<strong> $total_cust_com_d  </strong>";


echo "</td></tr>";
}}


/*************** End of Customer  Process  ***************************/

echo "</td><td colspan='1' align='center'>";echo "<strong>  Unpaid total </strong>";

$totalco=0;
$check5 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' && agent_ps='np' && status='PAID' ")or die(mysql_error());
		//$result = mysql_query($check1);
		while($sa = mysql_fetch_array($check5))
		{
		$totalco = $totalco + $sa['com_a'];
		}
echo "</td><td align='center'>"; echo $totalco;

$totalco_d=0;
$check5_d = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'  && agent_ps='np' && status='PAID' ")or die(mysql_error());
		//$result = mysql_query($check1);
		while($sa_d = mysql_fetch_array($check5_d))
		{
		$totalco_d = $totalco_d + $sa_d['com_d'];
		}
echo "</td><td align='center'>"; echo $totalco_d;






echo "</table>";
//

 
																										


	 
	 ?>
    </tr>
  </table>
		
		