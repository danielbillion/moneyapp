

<?php
$link= include "conn.php"; include "conn.php";  
 
 	 $d_act="download_agent_clear_trans";
	$d_cct="download_cust_clear_trans";
	
	$d_acom="download_agent_com";
	$d_ccom="download_cust_com";
	
 $check_dact = mysql_query("SELECT * FROM $d_act") ;
 $check_dcct = mysql_query("SELECT * FROM $d_cct  ");
 $check_dacom = mysql_query("SELECT * FROM $d_acom");
 $check_dccom = mysql_query("SELECT * FROM $d_ccom");
 
 if ( $check_dact == FALSE && $check_dcct == FALSE && $check_dacom == FALSE && $check_dccom == FALSE ){
 
 
 $setup= mysql_query("CREATE TABLE newtable (id INT PRIMARY KEY, receiptno INT, agent_email VARCHAR(20));
INSERT newtable (id,receiptno,agent_email) SELECT id,receiptno,agent_email FROM agent_cust_transaction WHERE status='paid'");

 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
/*
$table_dact = mysql_fetch_array($check_dact);
$table_dcct = mysql_fetch_array($check_dcct);
$table_dacom = mysql_fetch_array($check_dacom);
$table_dccom = mysql_fetch_array($check_dccom);

 
if( !isset($table_dact) && $table_dact[0] != "" && !isset($table_dcct) && $table_dcct[0] != "" && !isset($table_dacom) && $table_dacom[0] != "" && !isset($table_dccom) && $table_dccom[0] != "" )
  { echo "table not aavailable";
  
  }
*/


echo "tables are not available";}

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="200" border="2" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="row">goster</th>
    <td>,dd;dddddddddwdfwfefefefwqdqfwqSdddsqdwd</td>
    <td>,ffdd</td>
    <td>reckon</td>
    <td>sdfgg</td>
    <td>dfgdds</td>
    <td>joshas</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
SS
</body>
</html>
