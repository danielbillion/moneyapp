
 <?php 
 include "admin_p.php";
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
	background-color: #CCCCCC;
}
.style31 {
	font-size: 13px;
	font-style: italic;
	color: #F00;
	font-weight: bold;
}

.style311 {
	font-size: 13px;
	font-style: italic;
	color: #00F;
	font-weight: bold;
}
.style36 {color: #660000}
.style37 {font-size: 13.5px}
.style38 {color: #003300}
.style41 {color: #660000; font-style: italic; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>




<body>
<table width="796" height="847" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th height="26" colspan="2" bgcolor="#CCCCCC" scope="row"><p>Quick Site Links </p></th>
  </tr>
  
  <tr>
    <th height="163" colspan="2" scope="row"><table width="752" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="281" height="42">&nbsp;</td>
        <td width="161" rowspan="4"><img src="img_adm1.php" alt="" width="198" height="161" /></td>
        <td width="310">&nbsp;</td>
      </tr>
      <tr>
        <td height="47"><span class="style31 style36"><?php
	
	$link = include "conn.php";
 include "conn.php";  
 $check_c = mysql_query("SELECT * FROM new_customer ") or die('Query failed: ' . mysql_error());
 $check_tc = mysql_query("SELECT * FROM new_customer  ") or die('Query failed: ' . mysql_error());
 $check_ac = mysql_query("SELECT * FROM new_customer WHERE  active='1'  ") or die('Query failed: ' . mysql_error());


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
        <td width="310">&nbsp;</td>
      </tr>
      <tr>
        <td height="34"><span class="style31 style36"><?php
	
	$link = include "conn.php";
 include "conn.php";  
 $check_c2 = mysql_query("SELECT * FROM agent  ") or die('Query failed: ' . mysql_error());
 $check_tc2 = mysql_query("SELECT * FROM agent   ") or die('Query failed: ' . mysql_error());
 $check_ac2 = mysql_query("SELECT * FROM agent WHERE  active='1'  ") or die('Query failed: ' . mysql_error());


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
&nbsp;</span></td>
        <td width="310">&nbsp;</td>
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
    <th height="32" colspan="2" scope="row">Agent</th>
  </tr>
  <tr>
    <th height="32" scope="row">&nbsp;</th>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th width="367" height="32" scope="row"><span style="color: #000000; font-style: normal; font-size: 14px;">Just Registered</span></th>
    <th width="423" scope="row"><div align="left"">&nbsp;<span style="color: #000000; font-style: normal; font-size: 14px;"><u>new transaction</u></span></div></th>
  </tr>
  <tr>
    <th height="32" scope="row">&nbsp;<span class="style311">
      <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls7 = mysql_query("SELECT id,lname,fname,date_reg FROM agent WHERE level='0' ORDER BY id DESC LIMIT 2  ") or die('Query failed: ' . mysql_error());
 $check_lv7 = mysql_query("SELECT * FROM agent WHERE level='0'") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv7);

  if(isset($table_array) && $table_array[0] != "") {
while($see=mysql_fetch_array($check_ls7)){

echo "<a href='admin_agent.php'>".strtolower($see['lname'])." " .strtolower($see['fname']);echo "@"; 
echo  $see['date_reg'], "<br/><br/>","</a>";

}




 }
	
	?>
    </span></th>
    <th scope="row"><span style="color: #F00"></span>      <div align="left" class="style31">
      <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls1 = mysql_query("SELECT id,agent_name,amt_send,date FROM agent_cust_transaction ORDER BY id DESC LIMIT 3  ") or die('Query failed: ' . mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv2);

  if(isset($table_array) && $table_array[0] != "") {
while($te=mysql_fetch_array($check_ls1)){

echo "<a href='admin_agents_trans_status.php'>";echo strtolower($te['agent_name']); echo "   ";echo"£";
echo  $te['amt_send']; echo " on "; echo  $te['date']; echo "</a>";echo "<br/><br/>"; 
}




 }
	
	?>
    </div></th>
  </tr>
  <tr>
    <th height="32" scope="row">&nbsp;</th>
    <th scope="row"><div align="left" class="style31">&nbsp;&nbsp;</div></th>
  </tr>
  <tr>
    <th height="21" colspan="2" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="32" colspan="2" scope="row">Customer</th>
  </tr>
  <tr>
    <th height="32" scope="row"><span style="color: #000000; font-style: normal; font-size: 14px;">Just Registered</span></th>
    <th class="style31" scope="row"><div align="left" "><span style="color: #000000; font-style: normal; font-size: 14px;"><em><u>new transaction</u></em></span></div></th>
  </tr>
  
  <tr>
    <th height="32" scope="row"><span class="style36"><em><span class="style311">
      <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls = mysql_query("SELECT id,lname,fname,date_reg FROM new_customer  ORDER BY id DESC LIMIT 2  ") or die('Query failed: ' . mysql_error());
 $check_lv = mysql_query("SELECT * FROM new_customer ") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv);

  if(isset($table_array) && $table_array[0] != "") {
while($see=mysql_fetch_array($check_ls)){

echo "<a href='admin_customer.php'>";echo strtolower($see['lname'])." " .strtolower($see['fname']);echo "@"; 
echo  $see['date_reg'],"<br/><br/>";

}




 }
	
	?>
    </span></u></em> </span></th>
    <th class="style31" scope="row"><div align="left">
      <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls3 = mysql_query("SELECT id,sender_name,amt_send,date FROM cust_transaction ORDER BY id DESC LIMIT 1  ") or die('Query failed: ' . mysql_error());
 $check_lv3 = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv3);

  if(isset($table_array) && $table_array[0] != "") {
while($te2=mysql_fetch_array($check_ls3)){

echo "<a href='admin_custs_trans_status.php'>";echo strtolower($te2['sender_name']); echo " ";echo"£";
echo  $te2['amt_send'];echo " on "; echo  $te2['date'];echo "<br/><br/>"; echo "</a>";

}




 }
	
	?></div></th>
  </tr>
  <tr>
    <th height="32" colspan="2" scope="row">
    
    <?php
	$link = include "conn.php";
 //include "conn.php";  
	 
	 $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE  `status`='Pending' || `status`=' Pending' ") 
	 or die('Query failed: ' . mysql_error());
	$pc = mysql_num_rows($check1);
	
	 		
	 $check1s = mysql_query("SELECT * FROM agent_cust_transaction WHERE  `status`='SUSPENDED'  ") or 
		 die('Query failed: ' . mysql_error());		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'")or die(mysql_error());
	$sc = mysql_num_rows($check1s);
	
	$tp_a=0;$total_cust_com_d=0;$numtra=0;
	while($tp_aq = mysql_fetch_array($check1))
	{$tp_a = $tp_a + $tp_aq['amt_local'];}
	
	$tp_as=0;$total_cust_com_d=0;$numtra=0;
	while($tp_aqs = mysql_fetch_array($check1s))
	{$tp_as = $tp_as + $tp_aqs['amt_local'];}
	
	
	 
	 $check2= mysql_query("SELECT * FROM cust_transaction WHERE  `status`='Pending' || `status`=' Pending'")or die(mysql_error());
	 $pc_c = mysql_num_rows($check2);
	 
	$check2s= mysql_query("SELECT * FROM cust_transaction WHERE  `status`='SUSPENDED'")or die(mysql_error());
	 $pc_sc = mysql_num_rows($check2s);

$tc_a=0;$total_cust_com_d=0;$numtra=0;
while($tpc_cq = mysql_fetch_array($check2))
{$tc_a = $tc_a + $tpc_cq ['amt_local'];}

$tsc_a=0;$total_cust_com_d=0;$numtra=0;
while($tpc_cqs = mysql_fetch_array($check2s))
{$tsc_a = $tsc_a + $tpc_cqs ['amt_local'];}

	
	?>
    
    &nbsp;</th>
  </tr>
  <tr>
    <th height="32" class="style31" scope="row"><span style="color: #00F">Agent Transaction Status</span></th>
    <th height="32" class="style31" scope="row"><span style="color: #00F">Customer  Transaction Status</span></th>
  </tr>
  <tr>
       <th height="32" class="style31" scope="row"><div align="left" style=" color:#F00; font-weight:bolder;">

      <?php if(isset($pc)){ echo  "<a href='admin_agents_trans_status.php'>Pending:". $pc. "</a>";}  ?>
      /
  <?php if(isset($tp_a)){ echo  "&#8358;",number_format($tp_a,2);}  ?>
    </div></th>
    <th height="32" class="style31" scope="row"><div align="left" style=" color:#F00; font-weight:bolder;">
      <?php if(isset($pc_c)){ echo "<a href='admin_custs_trans_status.php'>Pending:".$pc_c."</a>";}  ?>
      /
  <?php if(isset($tc_a)){ echo  "&#8358;",number_format($tc_a,2);}  ?>
    </div></th>
  </tr>
  <tr>
        <th height="32" class="style31" scope="row"><div align="left" style=" color:#F00; font-weight:bolder;">
<span >
      <?php if(isset($sc)){ echo "<a href='admin_agents_trans_status.php'>Suspended:".$sc. "</a>";}  ?>
      /
  <?php if(isset($tp_as)){ echo  "&#8358;",number_format($tp_as,2);}  ?>
    </span></div></th>
    <th height="32" class="style31 style37 style38" scope="row"><div align="left"><span ">
      <?php if(isset($pc_sc)){ echo "<a href='admin_custs_trans_status.php'>Suspended: ".$pc_sc. "</a>";}  ?>
      /
  <?php if(isset($tsc_a)){ echo  "&#8358;",number_format($tsc_a,2);}  ?>
    </span></div></th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <th height="32" class="style31 style37 style38" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="197" colspan="2" scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
