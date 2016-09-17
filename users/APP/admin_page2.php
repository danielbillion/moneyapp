<?php include "admin_p.php";?>

 <?php 

if (isset($_POST['email'])){
$email2= mysql_escape_string($_POST['email']);
echo $email2;}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
<!--
body {
	background-color: #b4afb5;
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #CCCCCC;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style31 {
	font-size: 13px;
	font-style: italic;
	color: #000099;
	font-weight: bold;
}
.style32 {color: #663300}
.style35 {color: #000033}
.style36 {color: #660000}
.style37 {font-size: 13.5px}
.style38 {color: #003300}
.style41 {color: #660000; font-style: italic; }
.style42 {color: #660000; font-size: 13px; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>




<body>
<table width="796" height="655" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th height="26" colspan="2" bgcolor="#CCCCCC" scope="row"><p>Quick Site Links - Admin Level 2</p></th>
  </tr>
  
  <tr>
    <th height="163" colspan="2" scope="row"><table width="752" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="281" height="42">Site Visit :<span class="style31">
        <?php
	
	$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM visitors_table ORDER BY visitor_date DESC  ") or die('Query failed: ' . mysql_error());
 $check_ts = mysql_query("SELECT * FROM visitors_table  ") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_ts);

 $tt=0;
  if(isset($table_array) && $table_array[0] != "") {
  $tf=0;$ip=0;
while($row=mysql_fetch_array($check)){
$tf= $tf +  $row['frequency'];
$ip= $ip + 1;
}
echo $ip;echo "    Visitors,  ";
echo $tf; echo " Visits / Hits";


 }
	
	?>
&nbsp;</span></td>
        <td width="161" rowspan="4"><img src="admin2.png" alt="" width="198" height="161" /></td>
        <td width="310">Last visit on site: <span class="style31">
        <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls = mysql_query("SELECT * FROM visitors_table ORDER BY visitor_date DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv = mysql_query("SELECT * FROM visitors_table  ") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv);

  if(isset($table_array) && $table_array[0] != "") {
  $tf=0;$ip=0;
while($row=mysql_fetch_array($check_ls)){
echo  $row['visitor_date'];echo",    ";echo "  IP Address:";
echo $row['visitor_ip']; 
}

 }
	
	?>
&nbsp;</span></td>
      </tr>
      <tr>
        <td height="47">&nbsp;</td>
        <td width="310">&nbsp;</td>
      </tr>
      <tr>
        <td height="34">Customer<span class="style31 style36">:
            <?php
	
	$link = include "conn.php";
 include "conn.php";  
 $check_c = mysql_query("SELECT * FROM new_customer WHERE level='0'") or die('Query failed: ' . mysql_error());
 $check_tc = mysql_query("SELECT * FROM new_customer WHERE level='0'  ") or die('Query failed: ' . mysql_error());
 $check_ac = mysql_query("SELECT * FROM new_customer WHERE  level='0'& active='1'  ") or die('Query failed: ' . mysql_error());


 $table_array = mysql_fetch_array($check_tc);

 $tt=0;
  
  $tc=0;$a1=0;
while($cus=mysql_fetch_array($check_c)){
$tc= $tc +  1;
}

while($cac=mysql_fetch_array($check_ac)){
$a1= $a1 +  1;
}
echo $tc;echo "    total Customer,   ";
echo $a1; echo "  active member";



 
	
	?>
&nbsp;</span></td>
        <td width="310">New  customer: <span class="style31">
        <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls = mysql_query("SELECT id,lname,fname,date_reg FROM new_customer WHERE level='0' ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv = mysql_query("SELECT * FROM new_customer WHERE level='0'") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv);

  if(isset($table_array) && $table_array[0] != "") {
while($see=mysql_fetch_array($check_ls)){

echo strtolower($see['lname'])." " .strtolower($see['fname']); echo "  Just registered on ";
echo  $see['date_reg'];

}




 }
	
	?>
&nbsp;</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="310">&nbsp;</td>
      </tr>
    </table></th>
  </tr>
  
  <tr>
    <th height="22" colspan="2" bgcolor="#CCCCCC" scope="row">Statistics / Site Information </th>
  </tr>
  <tr>
    <th width="272" height="32" scope="row">&nbsp;</th>
    <th width="518" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="32" scope="row">Agent<span class="style31 style36">:
        <?php
	
	$link = include "conn.php";
 include "conn.php";  
 $check_c2 = mysql_query("SELECT * FROM agent WHERE level='0' ") or die('Query failed: ' . mysql_error());
 $check_tc2 = mysql_query("SELECT * FROM agent WHERE level='0'  ") or die('Query failed: ' . mysql_error());
 $check_ac2 = mysql_query("SELECT * FROM agent WHERE level='0'& active='1'  ") or die('Query failed: ' . mysql_error());


 $table_array = mysql_fetch_array($check_tc2);

 $tt=0;
 
  $tc12=0;$a12=0;
while($cus2=mysql_fetch_array($check_c2)){
$tc12= $tc12 +  1;
}

while($cac=mysql_fetch_array($check_ac2)){
$a12= $a12 +  1;
}
echo $tc12;echo "    total agent,   ";
echo $a12; echo "  active agent";



 
	
	?>
&nbsp;</span></th>
    <th scope="row">New  Agent<span class="style31">:
      <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls7 = mysql_query("SELECT id,lname,fname,date_reg FROM agent WHERE level='0' ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv7 = mysql_query("SELECT * FROM agent WHERE level='0'") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv7);

  if(isset($table_array) && $table_array[0] != "") {
while($see=mysql_fetch_array($check_ls7)){

echo strtolower($see['lname'])." " .strtolower($see['fname']); echo "  Just registered on ";
echo  $see['date_reg'];

}




 }
	
	?>
&nbsp;</span></th>
  </tr>
  <tr>
    <th height="21" colspan="2" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="32" scope="row">Agent&nbsp; <span class="style41"><u>new transaction</u> </span></th>
    <th class="style31" scope="row"><?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls1 = mysql_query("SELECT id,agent_name,amt_send,date FROM agent_cust_transaction ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv2);

  if(isset($table_array) && $table_array[0] != "") {
while($te=mysql_fetch_array($check_ls1)){

echo strtolower($te['agent_name']); echo "  just placed a transaction of  ";echo"£";
echo "<u>";echo  $te['amt_send']; echo " on "; echo  $te['date']; echo "</u>";
}




 }
	
	?></th>
  </tr>
  
  <tr>
    <th height="32" scope="row">Customer  <span class="style36"><em><u>new transaction</u></em> </span></th>
    <th class="style31 style37 style38" scope="row"><?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls3 = mysql_query("SELECT id,sender_name,amt_send,date FROM cust_transaction ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv3 = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv3);

  if(isset($table_array) && $table_array[0] != "") {
while($te2=mysql_fetch_array($check_ls3)){

echo strtolower($te2['sender_name']); echo "	 just placed a transaction of  </a>";echo"£";
echo "<u>";echo  $te2['amt_send'];echo " on "; echo  $te2['date'];echo "</u>";

}




 }
	
	?>
	
	
	
	&nbsp;
	
	
	&nbsp;</th>
  </tr>
  <tr>
    <th height="32" colspan="2" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row"><span style="color: #F00">Pending Transaction</span> <span style="color: #003">Agent</span></th>
    <th height="32" class="style31 style37 style38" scope="row"><div align="left">
      <table width="370" border="0">
        <tr>
          <td width="9"><div align="right">&#8358;</div></td>
          <td width="17"><div align="left">
            <?php
	
	$link = include "conn.php";
 //include "conn.php";  
	 
	$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status=' Pending'")or die(mysql_error());
		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'")or die(mysql_error());

$total_cust_com_a=0;$total_cust_com_d=0;$numtra=0;
while($sa = mysql_fetch_array($check1))
{$total_cust_com_a = $total_cust_com_a + $sa['amt_local'];}

	$total_cust_com_a=number_format($total_cust_com_a);

echo "</td><td align='center'>";echo "<strong> $total_cust_com_a </strong>";

			
	?>
          </div></td>
          <td width="94">&nbsp;.00</td>
          <td width="232">
          
          <?php
	
	$link = include "conn.php";
 //include "conn.php";  
	 
	$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE status=' Pending'")or die(mysql_error());
		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'")or die(mysql_error());

$total_cust_com_a=0;$total_cust_com_d=0;$nump1=0;
while($sa = mysql_fetch_array($check1))
{$nump1=$nump1 +1; $total_cust_com_a = $total_cust_com_a + $sa['amt_local'];}

	

echo "</td><td align='center'>";echo "<strong> $nump1</strong>";

			
	?>
          
          
          
          &nbsp;</td>
          </tr>
      </table>
    </div></th>
  </tr>
  <tr>
    <th scope="row"><span style="color: #F00">Pending Transaction</span> <span style="color: #003">Customer</span></th>
    <th height="32" class="style31 style37 style38" scope="row"><div align="left">
      <table width="372" border="0">
        <tr>
          <td width="9"><div align="right">&#8358;</div></td>
          <td width="17"><div align="left">
            <?php
	
	$link = include "conn.php";
 include "conn.php";  
	 
	$check1 = mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending	'  ")or die(mysql_error());
		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'  ")or die(mysql_error());

$total_cust_com_a=0;$total_cust_com_d=0;$numtra=0;
while($mi = mysql_fetch_array($check2))
{$total_cust_com_a = $total_cust_com_a + $mi['amt_local'];}
$total_cust_com_a=number_format($total_cust_com_a);
echo "</td><td align='center'>";echo "<strong> $total_cust_com_a </strong>";
	
	?>
          </div></td>
          <td width="93">&nbsp;.00</td>
          <td width="235">
          
          <?php
	
	$link = include "conn.php";
 include "conn.php";  
	 
	$check1 = mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending	'  ")or die(mysql_error());
		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'  ")or die(mysql_error());

$total_cust_com_a=0;$total_cust_com_d=0;$nump2=0;
while($mi = mysql_fetch_array($check2))
{$nump2=$nump2 +1;$total_cust_com_a = $total_cust_com_a + $mi['amt_local'];}
$total_cust_com_a=number_format($total_cust_com_a);
echo "</td><td align='center'>";echo "<strong> $nump2 </strong>";
	
	?>
          
          
          &nbsp;</td>
        </tr>
      </table>
    </div></th>
  </tr>
  <tr>
    <th height="197" colspan="2" scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
