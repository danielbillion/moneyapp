
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
.style19 {
	font-size: 9px;
	color: #FFFFFF;
}
.style18 {	font-size: 10px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
i<div align="center">

  <table width="799" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
    <tr>
      <th width="565" scope="row"><span class="style1">Commissions on Transactions ( Non zero com Inclusive )</span> <span class="style19"><a href="admin_page.php" class="style1"></a></span></th>
      <th width="234" scope="row"><a href="admin_page.php" class="style18">Return to administration home page</a></th>
    </tr>
  </table>
  </div>
</body>
</html>

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" >

<caption><EM> Agent Earning Commission per overall Customer </EM></caption>

<tr ><th>No</th>
<th>Agents</th>

<th>Email</th>
<th>No of Trans</th>
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
 $check0 = mysql_query("SELECT * FROM agent WHERE level='0' ")or die(mysql_error());
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

//$con=mysql_connect("daphkkoybiz.ipagemysql.com", "kunzle", "dF6evf88") ;
$dac="download_ag_com";
$dcc="download_cus_com";


function table_exists($tablename, $database = false) {

    if(!$database) {
        $res = mysql_query("SELECT DATABASE()");
        $database = mysql_result($res, 0);
    }

    $res = mysql_query("SELECT COUNT(*) AS count 
        FROM information_schema.tables 
        WHERE table_schema = '$database' 
        AND table_name = '$tablename' ");

    return mysql_result($res, 0) == 1;

}




function insert_unique($table, $vars)
{
  if (count($vars))
  {
    $table = mysql_escape_string($table);
    $vars = array_map('mysql_escape_string', $vars);

    $req = "INSERT INTO `$table` (`". join('`, `', array_keys($vars)) ."`) ";
    $req .= "SELECT '". join("', '", $vars) ."' FROM DUAL ";
    $req .= "WHERE NOT EXISTS (SELECT 1 FROM `$table` WHERE ";

    foreach ($vars AS $col => $val)
      $req .= "`$col`='$val' AND ";

    $req = substr($req, 0, -5) . ") LIMIT 1";

    $res = mysql_query($req) OR die();
    return mysql_insert_id();
  }

  return False;
}






 $num=0;
 
$table_array = mysql_fetch_array($check);
if(!$table_array) {
 ($msg = 'No transaction has yet been made <a href="agent_cust_transaction.php" target="mainframe">click here start </a>');
		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
 // echo $email;
while($row=mysql_fetch_array($check0)){

//$c_name=$row['fname']." ". $row['lname'];
//$c_email=$row['email'];
//$_SESSION['s_phone']=$row['pnumber'];
//$_SESSION['c_name']=$row['fname']." ". $row['lname'];
$a_email=$row['email'];

$date_reg=$row['date_reg'];
$num=$num+1;
echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>";echo strtolower($row['lname']."  ".$row['fname']);
echo "</td><td align='center'>";echo strtolower($row['email']);


$c_email=$row['email'];
$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$a_email'  ")or die(mysql_error());
//$result = mysql_query($check1);
$total_cust_com_a=0;
$total_cust_com_d=0;
$numtra=0;
while($sa = mysql_fetch_array($check1))
{
$total_cust_com_a = $total_cust_com_a + $sa['com_a'];
$total_cust_com_d = $total_cust_com_d + $sa['com_d'];
$numtra = $numtra + 1;
}
//echo $total_cust_com;
echo "</td><td align='center'>";echo $numtra;
echo "</td><td align='center'>";echo number_format($total_cust_com_a, 2);
echo "</td><td align='center'>";echo number_format($total_cust_com_d, 2) ;

$agent=strtolower($row['lname']."  ".$row['fname']);$email_d=strtolower($row['email']);












//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";

echo "</td></tr>";
}
echo "</td><td colspan='4' align='center'>";echo "<strong> Total </strong>";

$totalco=0;
$totalco_a=0;
$check5 = mysql_query("SELECT * FROM agent_cust_transaction   ")or die(mysql_error());
		//$result = mysql_query($check1);
		while($sa = mysql_fetch_array($check5))
		{
		$totalco = $totalco + $sa['com_d'];
		$totalco_a = $totalco_a + $sa['com_a'];
		}
echo "</td><td align='center'>"; echo number_format($totalco_a, 2);
echo "</td><td align='center'>";echo number_format($totalco, 2);


echo "</table>";
//

 }
}
																										

?>


		
		
		<table width="446" height="42" border="0" cellpadding="0" cellspacing="0" align="center" >
    <tr>
      <th scope="row"><strong>Overall Commission (Agent & <?php  include "info.php"; if (isset($name1)){ echo $name1;} ?> )  </strong></th>
	  
	 <?php 
	 
	
		$final = $totalco + $totalco_a;
		
		echo "</td><td align='center'>";echo "£";echo number_format( $final, 2);
	 
	 
	
	 
	 ?>
    </tr>
  </table>
  
  

 <br /> <br />
 
 
 <strong>Customers </strong>
  
   <br > <br >
  
  
  
  
  
  
<?php /* ******************************* Customer ******************************************************************************************************************* */ ?>





<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" >



<tr ><th>No</th>
<th>Customers/ 	Sender Name</th>

<th>Email</th>

<th>No of Trans / Comm To Medium (£)</th>
<th><?php include "info.php"; if (isset($letter3)){ echo $letter3; }?></th>











</tr>

<?php

  
//$email= mysql_escape_string($_SESSION['email']);

//	$email= mysql_escape_string($_SESSION['email']);
//$c_email= mysql_escape_string($_SESSION['c_email']);

$link = include "conn.php";
 include "conn.php";  
 $test = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $test0 = mysql_query("SELECT * FROM new_customer  WHERE level='0' ")or die(mysql_error());
// $test1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c_email' ")or die(mysql_error());
 
/*
 $test1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email' &&  sender_email = '$c_email' ")or die(mysql_error());
$result = mysql_query($test1);
while( ($row = mysql_fetch_array($result))
{
$$sum_cust_com = $sum_cust_com + $row['commission'];
}
echo $sum_cust_com;


*/
 $num=0;
 
$table_array = mysql_fetch_array($test);
if(!$table_array) {
 ($msg = 'No transaction has yet been made <a href="agent_cust_transaction.php" target="mainframe">click here start </a>');
		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
 // echo $email;
while($row=mysql_fetch_array($test0)){

//$c_name=$row['fname']." ". $row['lname'];
//$c_email=$row['email'];
//$_SESSION['s_phone']=$row['pnumber'];
//$_SESSION['c_name']=$row['fname']." ". $row['lname'];
$a_email=$row['email'];

$num=$num+1;
echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>";echo strtolower($row['lname']."  ".$row['fname']);
echo "</td><td align='center'>";echo strtolower($row['email']);

$c_email=$row['email'];
$test1 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '$a_email'  ")or die(mysql_error());
//$result = mysql_query($test1);
$sum_cust_com_a=0;
$sum_cust_com_d=0;
while($sa = mysql_fetch_array($test1))
{
$sum_cust_com_a = $sum_cust_com_a + 1;
$sum_cust_com_d = $sum_cust_com_d +( $sa['commission'] - 1);
}
//echo $sum_cust_com;

echo "</td><td align='center'>";echo number_format($sum_cust_com_a, 2 );
echo "</td><td align='center'>";echo number_format($sum_cust_com_d, 2);
//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='center'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";

echo "</td></tr>";
}
echo "</td><td colspan='3' align='center'>";echo "<strong> sum </strong>";

$sumco=0;
$sumco_a=0;
$test5 = mysql_query("SELECT * FROM cust_transaction   ")or die(mysql_error());
		//$result = mysql_query($test1);
		while($sa = mysql_fetch_array($test5))
		{
		$sumco = $sumco + ( $sa['commission'] - 1);
		$sumco_a = $sumco_a + 1;
		}
echo "</td><td align='center'>"; echo number_format($sumco_a, 2);
echo "</td><td align='center'>";echo number_format($sumco, 2);


echo "</table>";
//

 }
}
																										

?>


		
		
		<table width="446" height="42" border="0" cellpadding="0" cellspacing="0" align="center" >
    <tr>
      <th scope="row"><strong>Overall</strong></th>
	  
	 <?php 
	 
	
		$final = $sumco + $sumco_a;
		
		echo "</td><td align='center'>";echo "£";echo number_format($final, 2);
	 
	 
	
	 
	 ?>
    </tr>
  </table>
		
		