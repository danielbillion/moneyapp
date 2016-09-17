<?php   
?>
<?php 
include "agent_p.php";
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
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style31 {
	font-size: 12px;
	font-weight: bold;
	color: #666666;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$email_ad=$_SESSION['email_ad'];
$link = include "conn.php";
 //include "conn.php";  
	 
	 $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE `agent_email`='$email' AND (`status`='Pending' || `status`=' Pending') ") 
	 or die('Query failed: ' . mysql_error());
	$pc = mysql_num_rows($check1);
	
	 		
	 $check1s = mysql_query("SELECT * FROM agent_cust_transaction WHERE `agent_email`='$email' &&  `status`='SUSPENDED'  ") or 
		 die('Query failed: ' . mysql_error());		$check2= mysql_query("SELECT * FROM cust_transaction WHERE status=' Pending'")or die(mysql_error());
	$sc = mysql_num_rows($check1s);
	
	$tp_a=0;$total_cust_com_d=0;$numtra=0;
	while($tp_aq = mysql_fetch_array($check1))
	{$tp_a = $tp_a + $tp_aq['amt_local'];}
	
	$tp_as=0;$total_cust_com_d=0;$numtra=0;
	while($tp_aqs = mysql_fetch_array($check1s))
	{$tp_as = $tp_as + $tp_aqs['amt_local'];}
	
	
	 
	
	
	?>
<body>
<p>&nbsp;</p>
<table width="700" height="309" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th height="52" colspan="3" scope="row"><p>SENDING MONEY TO NIGERIA/UK</p>
    <p class="style31">FOLLOW THE STEPS BELOW </p></th>
  </tr>
  <tr>
    <th height="26" colspan="3" scope="row"><p align="left">Recent Activities</p></th>
  </tr>
  <tr>
    <th height="26" class="style31" scope="row">Transactions</th>
    <th height="26" class="style31" scope="row">Recent Transaction</th>
    <th height="26" class="style31" scope="row">New Senders</th>
  </tr>
  <tr>
    <th height="26" style="font-size: 13px; font-style: italic;" scope="row"><?php if(isset($pc)){ echo  "<a href='agent_cust_trans_report.php'>Pending:". $pc. "</a>";}  ?>
      /
  <?php if(isset($tp_a)){ echo  "&#8358;",number_format($tp_a,2);}  ?>
    <?php if(isset($sc)){ echo "<a href='agent_cust_trans_report.php'>Suspended:".$sc. "</a>";}  ?>
/
<?php if(isset($tp_as)){ echo  "&#8358;",number_format($tp_as,2);}  ?></th>
    <th height="26" style="font-size: 13px; font-style: italic;" scope="row">
    
    <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls1 = mysql_query("SELECT id,agent_name,amt_send,date,sender_name,dtime FROM agent_cust_transaction WHERE agent_email='$email' ORDER BY id DESC LIMIT 3  ") or die('Query failed: ' . mysql_error());
 $check_lv2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email='$email'") or die('Query failed: ' . mysql_error());

 $table_array = mysql_fetch_array($check_lv2);

  if(isset($table_array) && $table_array[0] != "") {
while($te=mysql_fetch_array($check_ls1)){

echo "<a href='agent_cust_trans_report.php'>";echo strtolower($te['sender_name']); echo "   ";echo"£";
echo  $te['amt_send']; echo " on "; echo  $te['dtime']; echo "</a>";echo "<br/><br/>"; 
}




 }
	
	?>
    
    
    
    &nbsp;</th>
    <th height="26" style="font-size: 13px; font-style: italic;" scope="row">
    
    <?php
		$link = include "conn.php";
 include "conn.php";  
 $check_ls7 = mysql_query("SELECT id,lname,fname,date_reg FROM agent_new_customer WHERE agent_email='$email' ORDER BY id DESC LIMIT 2  ") or die('Query failed: ' . mysql_error());
 
 $check_agc = mysql_query("SELECT id,lname,fname,date_reg FROM agent_new_customer WHERE agent_email='$email' ORDER BY id DESC  ") or die('Query failed: ' . mysql_error());
 
 $check_lv7 = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email='$email' ") or die('Query failed: ' . mysql_error());
$agcr = mysql_num_rows($check_agc);
 $table_array = mysql_fetch_array($check_lv7);

  if(isset($table_array) && $table_array[0] != "") {
while($see=mysql_fetch_array($check_ls7)){

echo "<a href='agent_cust_list.php'>".strtolower($see['lname'])." " .strtolower($see['fname']);echo "@"; 
echo  $see['date_reg'], "<br/><br/>","</a>";

}




 }
	
	?>
    
    
    
    
    
    &nbsp;</th>
  </tr>
  <tr>
    <th height="26" style="font-size: 13px; font-style: italic;" scope="row">&nbsp;</th>
    <th height="26" scope="row">&nbsp;</th>
    <th height="26" style="font-size: 13px; font-style: italic;"  scope="row">Total Customers/Sender: <?php if (isset($agcr)){ echo $agcr;} ?></th>
  </tr>
  <tr>
    <th width="200" height="136" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><a href="agent_new_customer_reg.php"><img src="img_ag1.php" width="112" height="90" /></a></th>
      </tr>
    </table></th>
    <th width="256" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><a href="agent_cust_list.php"><img src="img_ag2.php" width="72" height="69" /></a></th>
      </tr>
    </table></th>
    <th width="236" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><a href="agent_cust_list.php"><img src="img_ag3.php" width="84" height="96" /></a></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30"><a href="agent_new_customer_reg.php"> START CREATING CUSTOMERS</a></p>
          <p class="style30"><a href="cust_receiver.php" target="mainframe>RECEIVERS</a></p>
            <p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30"><a href="agent_cust_list.php" target="_parent" >CUSTOMERS BENEFICIARIES 
       
        
        </a></p>
          <p class="style30">&nbsp;</p>          </th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30"><a href="agent_cust_list.php">SEND MONEY  WITH 'SEND' BUTTON </a></p>
<p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
  </tr>
</table>
</body>
</html>
