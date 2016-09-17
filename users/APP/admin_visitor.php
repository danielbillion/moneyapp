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
<title>Visitor Pages</title>
<style type="text/css">
<!--
.style1 {
	color: #663300;
	font-size: 18px;
}
.style2 {font-size: 11px}
-->
</style>
</head>

<body>
<div align="center">

  <table width="619" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
    <tr>
      <th width="381" scope="row"><span class="style1">Site Visitors Administration </span></th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="196" scope="row">2-WEEKS</th>
    </tr>
  </table>
</div>

</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >



<tr >
<th>ID</th>
<th>IP Address / Computer Address</th>
<th> Date & Time - Last Visted </th>
<th>Browser</th>
<th>Page Visted / Site Referral</th>
<th>Visit Frequency-Per Day</th>
<th></th>
</tr>

<?php 

$link = include "conn.php";
 include "conn.php";  
 
 $ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-14 days'));

 
 if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = ($page-1) * 20;

 $check = mysql_query("SELECT * FROM visitors_table  ") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM visitors_table WHERE STR_TO_DATE(visitor_date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'
  ORDER BY visitor_date DESC LIMIT $start_from, 20")or die(mysql_error());
 $checkt = mysql_query("SELECT * FROM visitors_table ORDER BY visitor_date DESC ")or die(mysql_error());
 
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check	);

 $tt=0;
  if(isset($table_array) && $table_array[0] != "") {
  $numtra=0;
 // echo $email;
while($row=mysql_fetch_array($check3)){

$numtra = $numtra + 1;
$visitor_ip= $row['visitor_ip'];

echo "</td><td align='center'>";echo $numtra;
echo "</td><td align='center'>";echo $row['visitor_ip'];

echo "</td><td align='center'>";echo $row['visitor_date'];
echo "</td><td align='center'>";echo $row['visitor_browser'];
//echo $total_cust_com;
$word = substr($row['visitor_page'], 0, 30);
echo "</td><td align='center'>";echo $word;
echo "</td><td align='center'>";echo $row['frequency'];

while($rowa=mysql_fetch_array($checkt)){
$tt= $tt +  $rowa['frequency'];
}
echo "</td></tr>";

}

echo "</td><td colspan='5' align='center'>";echo "<strong> Total Visits </strong>";
echo "</td><td align='center'>";echo $tt;

echo "</table>";


echo "<br>";
echo "<br>";

echo "<table align='center' border='1' cellpadding='0' cellspacing='0' width='450'>";
echo "</td></tr>";
  echo "</td><td align='center'>";echo "<strong> Page Navigation </strong>";
  
$sql = "SELECT COUNT(id) FROM visitors_table WHERE STR_TO_DATE(visitor_date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1'
  ORDER BY visitor_date DESC"; 
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
  
for ($i=1; $i<=$total_pages; $i++) {
           echo "</td><td align='center'>"; echo "<a href='admin_visitor.php?page=".$i." & num=$num '>".$i."</a> ";}


 }

		

																										

?>





		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		