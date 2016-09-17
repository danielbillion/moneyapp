
<?php include "admin_p.php";?>

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

<table border=1 style="background-color: #E3E2B3;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM><strong>Last 3weeks Actitivities</strong> </EM></caption>


<tr >
<th>NO </th>
<th>Date / Time </th>
<th>Administrator / Agent</th>
<th>Email</th>
<th>Operation</th>
<th>Basic Task Info</th>


<th></th>
</tr>






<?php 

  
$email= $_SESSION['email'];

$ag=$_GET['ag_email'];
$ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-21 days'));
$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM dellog WHERE( STR_TO_DATE(datetime, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1') && (email='$ag')
  ORDER BY datetime DESC") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM bank")or die(mysql_error());
// $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
//$table_array = mysql_fetch_array($checkda);

 $num=0;
  //if(isset($table_array) && $table_array[0] != "") {
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;
/*
if ($row['status']=="p"){ $status="Pickup";}
else {$status="Bank Account";}

$id= $row['id'];

*/
$db="db";
$name=$row['name'];
$email=$row['email'];
$nametype=$row['nametype'];
$type=$row['type'];

$date=$row['datetime'];
echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  $date;

echo "</td><td align='center'>"; echo  ucfirst(strtolower($name));
echo "</td><td align='center'>";	echo $email;
echo "</td><td align='center'>";	echo $type;
echo "</td><td align='center'>";	echo $nametype;

//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
//echo "</td><td align='center'>";echo "<em><a href='admin_del_bank.php?bank=$bank & db=$db '> Delete </a></em>";
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];





//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $num </a></em>";
//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $bank </a></em>";



echo "</td></tr>";

}

echo "</table>";


 //}


																										

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
		
		
		
		</body>
		

	
    
    
    
    
    
    
    
    
		
	
	
	
	
	
	

		
		