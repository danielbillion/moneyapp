

<?php  include "agent_p.php"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	color: #960;
}

a:hover {
	text-decoration: none;
	color: #009;
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
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
a:visited {
	color: #F00;
}
-->
</style>
</head>

<body>
<div align="center">

  <table width="561" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#9900FF">
    <tr>
      <th width="413" scope="row"><span class="style1">Receiver'sEntry </span></th>
      <th width="120" scope="row"><span class="style2"><a href="agent_page.php">Return to main </a></span></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM><?php if (isset($_GET['c_name'])) echo strtoupper($_GET['c_name']); ?> Receiver Profile</EM></caption>

<tr >
<th>No</th>

<th>First Name</th>

<th>Last name</th>

<th>Phone Number</th>

<th>Proof of Identity</th>

<th>Mode of Transfer</th>

<th>Bank </th>

<th>Account No</th>

<th>Receiver Since  </th>


</tr>

<?php 

 
//$email= ($_SESSION['email']);
$email= ($_SESSION['email']);
$age_email= ($_SESSION['email']);
$c_name = ($_GET['c_name']); // Set email variable
$address = ($_GET['address']);
$c_email = ($_GET['c_email']); // Set email variable
$s_phone = ($_GET['s_phone']); // Set email variable
$s_mphone = ($_GET['s_mphone']); // Set email variable


$num=0;
echo $c_email;

//$email= ($_GET['email']);
$link = include "conn.php";
 include "conn.php"; $dlacr="dlacr";
  
 $check = mysql_query("SELECT * FROM agent_cust_receiver") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM agent_cust_receiver WHERE agent_cust_email= '$c_email' ")or die(mysql_error());
 $check1 = mysql_query("SELECT * FROM agent_cust_receiver WHERE agent_cust_email= '$c_email' && agent_email = '$email' && b_transfer = 'Pick Up' ORDER BY date DESC ")or die(mysql_error());
 $check2 = mysql_query("SELECT * FROM agent_cust_receiver WHERE agent_cust_email= '$c_email' && agent_email = '$email' && b_transfer = 'Bank Account' ORDER BY date DESC ")or die(mysql_error());
$table_array = mysql_fetch_array($check0);

if(!$table_array) {
   
  //
 $msg = "You have not created any receiver <a href='agent_cust_receiver.php?c_email=$c_email & c_name=$c_name'>click here start </a>";

		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1)){


$num=$num+1;
echo "</td><td align='left'>";echo $num;
$r_fname=ucfirst(strtolower($row['b_fname']));
$r_lname=ucfirst(strtolower($row['b_lname']));
$r_phone=$row['b_phone'];
$r_transfer=$row['b_transfer'];
$r_pbank=$row['b_pbank'];
$r_idtype=$row['b_idtype'];
$sender= $row['b_fname']." " .$row['b_lname'];

echo "</td><td align=center>";echo "<strong><a href='agent_cust_transaction.php?r_fname=$r_fname  & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype & c_email=$c_email & c_name=$c_name'> $r_fname </a></strong>";
echo "</td><td align=center>";echo ucfirst(strtolower($row['b_lname']));
echo "</td><td align=center>";echo $row['b_phone'];
echo "</td><td align=center>";echo $row['b_idtype'];
echo "</td><td align=center>";echo $row['b_transfer'];
echo "</td><td align=center>";echo $row['b_pbank'];
echo "</td><td align=center>";echo "None";
echo "</td><td align=center>";echo $row['date'];

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?dlacr=$dlacr & r_fname=$r_fname & r_lname=$r_lname & sender=$sender &age_email=$age_email'> Delete</a></em>";
echo "</td><td align='left'>";echo "<em><a href='agent_cust_receiver_edit.php?r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype & r_fname=$r_fname & r_lname=$r_lname & sender=$sender &age_email=$age_email'> Modify</a></em>";

$c_name = ($_GET['c_name']); // Set email variable
$c_email = ($_GET['c_email']); // Set email variable

// send now for pickup

echo "</td><td align=center>";echo "<strong><a href='agent_cust_transaction.php?r_fname=$r_fname & s_phone=$s_phone & s_mphone=$s_mphone & r_lname=$r_lname & c_email=$c_email & c_name=$c_name & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & address=$address & r_idtype=$r_idtype '> Send Money </a></strong>";

//echo "</td><td align=center>";echo "<a href='cust_transaction.php'>Send Money</a>";
//<a href="mysession_tracker.php?session=3&user=me"></a>;
//$_SESSION[b_fname]= $row['b_fname'];
//$row = mysql_fetch_assoc($check1);
//$_SESSION['b_fname'] = $row;
echo "</td></tr>";
}
while($row=mysql_fetch_array($check2)){
$num=$num+1;
echo "</td><td align='left'>";echo $num;

$r_fname=ucfirst(strtolower($row['b_fname']));
$r_lname=ucfirst(strtolower($row['b_lname']));
$r_phone=$row['b_phone'];
$r_transfer=$row['b_transfer'];
$r_abank=$row['b_abank'];
$r_actno=$row['b_actno'];
$sender= $row['b_fname']." " .$row['b_lname'];

echo "</td><td align=center>";echo "<strong><a href='agent_cust_transaction.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno & c_email=$c_email & c_name=$c_name'> $r_fname </a></strong>";
echo "</td><td align=center>";echo ucfirst(strtolower($row['b_lname']));
echo "</td><td align=center>";echo $row['b_phone'];
echo "</td><td align=center>";echo "Not required";
echo "</td><td align=center>";echo $row['b_transfer'];
echo "</td><td align=center>";echo $row['b_abank'];
echo "</td><td align=center>";echo $row['b_actno'];
echo "</td><td align=center>";echo $row['date'];


echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?dlacr=$dlacr & r_fname=$r_fname & r_lname=$r_lname & sender=$sender '> Delete </a></em>";

echo "</td><td align='left'>";echo "<em><a href='agent_cust_receiver_edit.php?r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_idtype=$r_idtype & r_fname=$r_fname & r_lname=$r_lname & sender=$sender '> Modify </a></em>";


//send now for bank account
echo "</td><td align=center>";echo "<strong><a href='agent_cust_transaction.php?r_fname=$r_fname & s_phone=$s_phone & s_mphone=$s_mphone & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno & c_email=$c_email & c_name=$c_name & address=$address & s_phone=$s_phone & s_mphone=$s_mphone '> Send Money </a></strong>";
echo "</td></tr>";

}

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
		
		