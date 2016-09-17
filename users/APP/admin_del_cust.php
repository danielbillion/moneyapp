<?php  include "admin_p.php";?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<title>Delete / Suspend Customer </title>
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

<caption><EM>Cancel / Suspend Customer</EM></caption>

<tr >
<th>No</th>
<th>Member Since</th>

<th>First Name</th>
<th>Middle Name</th>

<th>Last Name </th>
<th>Email</th>

<th> Current Status</th>

<th>Cancel Customer</th>
<th>Change Status </th>
<th></th>
</tr>

<?php 

  
//$email= $_SESSION['email'];


$del_ct="del_ct";
$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM new_customer ORDER BY lname DESC") or die('Query failed: ' . mysql_error());
 $check1 = mysql_query("SELECT * FROM new_customer WHERE level='0' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check1);

 $num=0;
  if(isset($table_array) && $table_array[0] != "") {
  
  //echo $email;
while($row=mysql_fetch_array($check)){

$ag_email=$row['email'];
$fname=$row['fname'];
$lname=$row['lname'];
$status=$row['active'];

 if ($status=="1" ){

$view= "Active";}

else { $view= "Suspended";}

$cust_del="cust_del";
$num= $num+1;
echo "</td><td align='left'>";echo $num;
echo "</td><td align='left'>";echo $row['date_reg'];

echo "</td><td align='left'>";echo strtolower($row['fname']);
echo "</td><td align='left'>";echo strtolower($row['mname']);
echo "</td><td align='left'>";echo strtolower($row['lname']);
echo "</td><td align='left'>";echo $row['email'];
echo "</td><td align='left'>";echo $view;


echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & ag_email=$ag_email & cust_del=$cust_del '> Cancel  </a></em>";
echo "</td><td align='left'>";echo "<em><a href='admin_cust_profile_task.php?fname=$fname &lname=$lname & ag_email=$ag_email & cust_del=$cust_del '> Change Status  </a></em>";


echo "</td></tr>";
}



echo "</table>";
}

	








 

		
			
			


																										

?>


		
		