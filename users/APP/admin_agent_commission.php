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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 18px;
}
.style18 {
	font-size: 10px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<div align="center">

  <table width="636" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#9900FF">
    <tr>
      <th width="446" scope="row"><span class="style1">Commission on Transactions </span></th>
      <th width="190" scope="row"><a href="admin_page.php" class="style18">Return to administration home page</a></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" >

<caption><EM> Your Earning Commission Per Customer</EM></caption>

<tr >
<th>Sender Name</th>

<th>Email</th>
<th>Commission To Agent (£)</th>
<th>Commission To  <?php include "info.php"; if (isset($letter3)){ echo $letter3; }?></th>











</tr>

<?php 

  
//$email= mysql_escape_string($_SESSION['email']);

if (isset($_GET['ag_email']))
				
	{			

$email= $_GET['ag_email'];

}

//$email= mysql_escape_string($_SESSION['email']);
//$c_email= mysql_escape_string($_SESSION['c_email']);

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$email' ")or die(mysql_error());
// $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c_email' ")or die(mysql_error());
 
/*
 $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c_email' ")or die(mysql_error());
$result = mysql_query($check1);
while( ($row = mysql_fetch_array($result))
{
$$total_cust_com = $total_cust_com + $row['commission'];
}
echo $total_cust_com;


*/
 
 
$table_array = mysql_fetch_array($check);
if(!$table_array) {
 ($msg = 'No transaction has yet been made <a href="agent_cust_transaction.php" target="mainframe">click here start </a>');
		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
  echo $email;
while($row=mysql_fetch_array($check0)){

//$c_name=$row['fname']." ". $row['lname'];
//$c_email=$row['email'];
//$_SESSION['s_phone']=$row['pnumber'];
//$_SESSION['c_name']=$row['fname']." ". $row['lname'];
//$_SESSION['c_email']=$row['email'];



echo "</td><td align='center'>";echo $row['lname']."  ".$row['fname'];
echo "</td><td align='center'>";echo $row['email'];

$c_email=$row['email'];
$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c_email' ")or die(mysql_error());
//$result = mysql_query($check1);
$total_cust_com=0;
$total_cust_com_a=0;
while($sa = mysql_fetch_array($check1))
{
$total_cust_com = $total_cust_com + $sa['com_d'];
$total_cust_com_a = $total_cust_com_a + $sa['com_a'];
}
//echo $total_cust_com;

echo "</td><td align='center'>";echo "<strong> $total_cust_com  </strong>";
echo "</td><td align='center'>";echo "<strong> $total_cust_com_a  </strong>";
//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";

echo "</td></tr>";
}
echo "</td><td colspan='2' align='center'>";echo "<strong> Total </strong>";

$totalco=0;
$totalco_a=0;
$check5 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'  ")or die(mysql_error());
		//$result = mysql_query($check1);
		while($sa = mysql_fetch_array($check5))
		{
		$totalco = $totalco + $sa['com_d'];
		$totalco_a = $totalco_a + $sa['com_a'];
		}
echo "</td><td align='center'>"; echo $totalco;
echo "</td><td align='center'>";echo $totalco_a;


echo "</table>";
//

 }
}
																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
		
		
		<table width="446" height="42" border="0" cellpadding="0" cellspacing="0" align="center" >
    <tr>
      <th scope="row"><strong>Overall Commission </strong></th>
	  
	 <?php 
	 
	 $link = include "conn.php";
 		include "conn.php"; $email= mysql_escape_string($_SESSION['email']);

	$totalcom=0;
 	
	 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
	 $check0 = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$email' ")or die(mysql_error());
	 $table_array = mysql_fetch_array($check); 
	 
	 if(isset($table_array) && $table_array[0] != "") {
	 
		$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'  ")or die(mysql_error());
		//$result = mysql_query($check1);
		while($sa = mysql_fetch_array($check1))
		{
		$totalcom = $totalcom + $sa['commission'];
		}
		//echo $total_cust_com;
		$final=$totalco+$totalco_a;
		echo "</td><td align='center'>";echo "<strong> £$final  </strong>";
	 
	 
	 }
	 
	 ?>
    </tr>
  </table>
		
		