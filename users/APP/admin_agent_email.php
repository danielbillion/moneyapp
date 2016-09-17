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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
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

<caption><EM>Email To Agents</EM></caption>


<tr >
<th>ID</th>
<th>FName</th>
<th>LName</th>
<th>Email</th>

<th> Full Profile </th>
<th>Customer  </th>



<th></th>
</tr>






<?php 

  
$email= $_SESSION['email'];



$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent  ") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($checkda);

 
  if(isset($table_array) && $table_array[0] != "") {
  
 // echo $email;
while($row=mysql_fetch_array($check)){


$id= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];

if ($active==1){

$status= "Active";}

else { $status= "Suspended";}


echo "</td><td align='center'>";echo $id;
echo "</td><td align='center'>";echo strtolower($row['fname']);
echo "</td><td align='center'>";echo strtolower($row['lname']);
echo "</td><td align='center'>";echo $row['email'];
//echo "</td><td align='center'>";echo $row['dob'];



echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-Fp  </a></em>";

echo "</td><td align='center'>";echo "<em><a href='admin_agent_cust_list.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View-C </a></em>";

echo "</td><td align='center'>";echo "<em><a href='#?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Email Agent </a></em>";

echo "</td><td align='center'>";echo "<em><a href='#?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Email all Customers </a></em>";



echo "</td></tr>";

}


//echo "<tr ><td>";
echo "</td><td colspan='4' align='center'>";echo "  To All Agents";

echo "</td><td colspan='3' align='center'>";echo "  To All Agents Customers ";

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
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} 
		
		
		?>
		<html>
		<body>
		<br />
		<div align="center">
		 <caption><EM></caption></div> </body>
		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		