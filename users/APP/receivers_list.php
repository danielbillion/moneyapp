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
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {font-size: large; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; color: #FFFF33; }
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
-->
</style>
</head>

<body>
<div align="center">

  <table width="446" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#9900FF">
    <tr>
      <th scope="row"><span class="style1">Receiver's  Entry</span></th>
    </tr>
  </table>
  </div>
</body>
</html>

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0"  >

<caption><EM>Your Receiver Profile</EM></caption>

<tr >
<th>No</th>
<th>First Name</th>

<th>Last name</th>

<th>Phone Number</th>



<th>Mode</th>

<th>Bank </th>
<th>Delete </th>
<th>Edit </th>







</tr>

<?php 

  
//$email= mysql_escape_string($_SESSION['email']);
$nm=0;
$nd=0;
$email= ($_SESSION['email']);
//$email= ($_GET['email']);
$delr="delr";

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM receiver WHERE sta='' ") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM receiver WHERE sender_email = '$email' && sta='' ")or die(mysql_error());
 
 $check1 = mysql_query("SELECT * FROM receiver WHERE sender_email = '$email' && b_transfer = 'Pick Up' && sta='' ")or die(mysql_error());
 $check2 = mysql_query("SELECT * FROM receiver WHERE sender_email = '$email' && b_transfer = 'Bank Account' && sta='' ")or die(mysql_error());
$table_array = mysql_fetch_array($check0);
if(!$table_array) {
   
  //
 ($msg = 'You have not created any receiver <a href="cust_receiver.php" target="mainframe">click here start </a>');

		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
  echo $email;
while($row=mysql_fetch_array($check1)){

$r_fname=$row['b_fname'];
$r_lname=$row['b_lname'];
$r_phone=$row['b_phone'];
$r_transfer=$row['b_transfer'];
$r_pbank=$row['b_pbank'];
$r_idtype=$row['b_idtype'];
$nm=$nm+1;
echo "</td><td style='text-align: left'>";echo $nm;

echo "</td><td style='text-align: left'>";echo ucfirst (strtolower($r_fname)) ;
echo "</td><td style='text-align: left'>";echo ucfirst(strtolower($row['b_lname']));
echo "</td><td style='text-align: left'>";echo $row['b_phone'];
//echo "</td><td>";echo ucfirst (strtolower($row['b_idtype']));
echo "</td><td style='text-align: left'>";echo ucfirst(strtolower($row['b_transfer']));
echo "</td><td style='text-align: left'>";echo ucfirst($row['b_pbank']);


echo "</td><td style='text-align: left'>";echo "<a href='cust_del.php?delr=$delr & r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype'> Del </a>";

echo "</td><td style='text-align: left'>";echo "<a href='cust_receiver_edit.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype'> Edit </a>";
echo "</td><td style='text-align: left'>";echo "<a href='cust_send.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_bank=$r_pbank & r_idtype=$r_idtype'> Send Now </a>";


/*
echo "</td><td style='text-align: left'>";echo "<strong><a href='cust_transaction.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype'> Send Money </a></strong>";*/
//echo "</td><td>";echo "<a href='cust_transaction.php'>Send Money</a>";
//<a href="mysession_tracker.php?session=3&user=me"></a>;
//$_SESSION[b_fname]= $row['b_fname'];
//$row = mysql_fetch_assoc($check1);
//$_SESSION['b_fname'] = $row;

echo "</td></tr>";
}





while($row=mysql_fetch_array($check2)){


$r_fname=$row['b_fname'];
$r_lname=$row['b_lname'];
$r_phone=$row['b_phone'];
$r_transfer=$row['b_transfer'];
$r_abank=$row['b_abank'];
$r_actno=$row['b_actno'];

$nm=$nm+1;
echo "</td><td style='text-align: left'>";echo $nm;
echo "</td><td style='text-align: left'>";echo ucfirst(strtolower($r_fname)) ;
echo "</td><td style='text-align: left'>";echo ucfirst(strtolower($row['b_lname']));
echo "</td><td style='text-align: left'>";echo ucfirst($row['b_phone']);
//echo "</td><td>";echo "Not required";
echo "</td><td style='text-align: left'>";echo ucfirst($row['b_transfer']);
echo "</td><td style='text-align: left'>";echo ucfirst($row['b_abank']);



echo "</td><td style='text-align: left'>";echo "<a href='cust_del.php?delr=$delr & r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer '> Del </a>";

echo "</td><td style='text-align: left'>";echo "<a href='cust_receiver_edit.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno'> Edit </a>";

echo "</td><td style='text-align: left'>";echo "<a href='cust_send.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_bank=$r_abank & r_actno=$r_actno'> Send Now </a>";
/*
echo "</td><td style='text-align: left'>";echo "<strong><a href='cust_transaction.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno'> Send Money </a></strong>";
*/echo "</td></tr>"; 

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
		
		