<?php  include "admin_p.php";?><?php 
require_once('calendar/classes/tc_calendar.php');
?>
<script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>

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
.style2 {font-size: 11px}
.style3 {	color: #FFFFFF;
	font-size: 12px;
}
.style3 {
	color: #00F;
	font-size: 18px;
}
.style5 {font-size: 12px}
.style6 {font-size: 10px}
.style9 {color: #FFFFFF}
-->
</style>
</head>




<body>
<div align="center">
  <blockquote>&nbsp;</blockquote>
  <table width="677" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th width="254" class="style3" scope="row"><div align="left">Search<a href="agent_page.php" class="style2"></a></div></th>
      <th width="255" class="style3" scope="row">
      <?php if(isset($_GET['fname'])){ echo strtoupper( $_GET['fname']); } ?>
      &nbsp;</th>
      <th width="168" class="style3" scope="row"><a href="admin_page.php" class="style2">Return to Admin home page</a></th>
    </tr>
    
    <tr>
      <th colspan="3" scope="row"><table width="676" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFCC99">
        <tr>
          <th width="676" scope="row"><a href="agent_page.php" class="style2"></a> Search By </th>
        </tr>
        
        <tr>
          <th scope="row"><form id="form1" name="form1" method="post" action="">
            <table width="628" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th colspan="2" rowspan="3" scope="row"><span class="style5">
                  <label></label>
                  <label>
                  <div align="left"><span class="style5">
                    <input name="search" type="radio" value="tt" checked="checked" />
                    Today's Transactions</span></div>
                </span></th>
                <td width="8" rowspan="3">&nbsp;</td>
                <td width="15" rowspan="3" class="style5"><div align="left"></div></td>
                <td width="22" rowspan="3"><span class="style5">
                  <label></label>
                  <label></label>
                  <input name="search" type="radio" value="rn" />
                  </span></td>
                <td width="100" rowspan="3"><div align="left"><span class="style5">Transfer Code</span></div></td>
                <td width="13" rowspan="3"><span class="style5">
                  <label></label>
                  <label></label>
                  </span></td>
                <td>&nbsp;</td>
                <td width="130">&nbsp;</td>
                <td width="4">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td bgcolor="#6699FF"><div align="right"></div></td>
                <td bgcolor="#6699FF"><span class="style5">
                  <input name="search" type="radio" value="bd" />
                  By Date</span></td>
                <td bgcolor="#6699FF">&nbsp;</td>
                <td width="68" bgcolor="#6699FF">&nbsp;</td>
                <td colspan="2" bgcolor="#6699FF"><span class="style5">
                  <label></label>
                  <label></label>
  </span></td>
                </tr>
              <tr>
                <td width="56" height="31" bgcolor="#6699FF"><span class="style9">From</span><span class="style5">
                  <label></label>
                  <label></label>
                  </span></td>
                <td colspan="5" bgcolor="#6699FF"><?php 
				  
				   {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
				  
				   $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
				  
				  ?>&nbsp;</td>
                </tr>
              <tr>
                <th colspan="4" scope="row"><div align="left"><span class="style5">
                  <input name="search" type="radio" value="pn" />
                  Customer Phone No</span></div></th>
                <td><span class="style5">
                  <input name="search" type="radio" value="ln" />
                  </span></td>
                <td><span class="style5">Name (last &amp; first)</span></td>
                <td>&nbsp;</td>
                <td bgcolor="#6699FF"><span class="style9">To</span></td>
                <td colspan="5" bgcolor="#6699FF">
                  <?php 
				  
				   {$theDate = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : "";}
				  
				   $myCalendar = new tc_calendar("date2", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript();
				  
				  ?>
                  
                  &nbsp;</td>
                </tr>
              <tr>
                <th width="18" scope="row">&nbsp;</th>
                <td width="144" class="style5">&nbsp; </td>
                <td rowspan="2" class="style5">&nbsp;</td>
                <td rowspan="2" class="style5">&nbsp;</td>
                <td>&nbsp;</td>
                <td><label></label>
                  <label>
                  <div align="left"></div>
                  </label></td>
                <td rowspan="2">&nbsp;</td>
                <td rowspan="2">&nbsp;</td>
                <td colspan="2" rowspan="2">&nbsp;</td>
                <td rowspan="2">&nbsp;</td>
                <td width="18" rowspan="2">&nbsp;</td>
                <td width="32" rowspan="2">&nbsp;</td>
                </tr>
              <tr>
                <th width="18" scope="row"><span class="style5">
                  <input name="search" type="radio" value="cct" />
                </span></th>
                <td class="style5" style="font-weight: bold"><div align="left">Clear Com &amp; Trans</div></td>
                <td><span class="style5">
                  <input name="search" type="radio" value="dw" />
                </span></td>
                <td class="style5" style="font-weight: bold"><div align="left">Download</td>
              </tr>
              <tr>
                <th colspan="13" scope="row">&nbsp;</th>
                </tr>
              <tr>
                <th colspan="13" scope="row"><div align="center">
                  <table width="581" height="23" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <th width="240" scope="row"><span class="style6">Transfer Code / Customer Last Name</span> </th>
                      <th width="341" scope="row"><div align="left">
                        <input name="txt" type="text" id="txt" />
                        <input type="submit" name="Submit" value="Search / Download" />
                        </div></th>
                      </tr>
                    </table>
                  </div></th>
              </tr>
              </table>
            </form></th>
        </tr>
      </table></th>
    </tr>
  </table>
</div>


<div align="center">

  <table width="619" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="">
    <tr>
      <th width="381" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="21" scope="row">&nbsp;</th>
      <th width="196" scope="row"><a href="agent_page.php" class="style2"></a></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Your Transactions Till Date</EM></caption>

<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Agent</th>
<th>Sender </th>
<th>Receiver </th>
<th>Transfer-M</th>
<th>Amt-P/£ </th>
<th>Lcl-P/N  </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>A-Co/£</th>
<th>Total/£</th>


<th>Status</th>
<th></th>
<th></th>
</tr>
</html>






<?php 

$email= $_GET['ag_email'];
$ag_email= $_GET['ag_email'];
$value=date("Y-m-d");

		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

 include "conn.php"; 
 
   $num=1;
 
 
 if (isset($_POST['Submit'])) {
 
 $search = $_POST['search'];
  $entry = $_POST['txt'];
 
 
 }
 
   
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction  ")or die(mysql_error());
// $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $check1= mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_name = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);
 
 
 if($search == "ln"){
	 if(($bs_mtls=='1')){
  $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND sender_name = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());
include "search_proc.php";
	 }
	 
	  if(($bs_mtls=='0')){
  $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_name = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());
include "search_proc.php";
	 }
	 
	 
 };
 
 
 


 if($search=="rn"){
 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND receiptno = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());

 include "search_proc.php";
 }
 
  if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  receiptno = '$_POST[txt]' && agent_email = '$email' ")or die(mysql_error());

 include "search_proc.php";
 }
 
 };
 
 
 if($search=="tt"){
 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND date = '$value' && agent_email = '$email' ")or die(mysql_error());

  include "search_proc.php";}
  
  if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value' && agent_email = '$email' ")or die(mysql_error());

  include "search_proc.php";}
 };
 
 
 
  
 if($search=="dw"){
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
		$_SESSION['ts4'] =  $ts2;
		$_SESSION['ts3'] =  $ts1;
		$_SESSION['aemail'] = $email;
		
		
echo" <script type='text/javascript'>
 {
location='bydate_proc_download_ag.php?ts2=$ts2 & ts1=$ts1';
 }
</script> ";
 };
 
 
  if($search=="bd"){
	  
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
	if(($bs_mtls=='1')){	
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && agent_email = '$email' ")or die(mysql_error());
 include "search_proc.php";
	}
	
	if(($bs_mtls=='0')){	
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && agent_email = '$email' ")or die(mysql_error());
 include "search_proc.php";
	}
 };
 
 
 
 
 
 

 if($search=="pn"){
 
 $check_pn = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND  s_phone = '$_POST[txt]' ")or die(mysql_error());

 include "search_proc.php";}
 
 if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());

 include "search_proc.php";}
 };
 

 if($search=="cct"){
	 				 echo" <script type='text/javascript'>
							 
							 {
							 
							window.location='admin_trans_clear.php?ag_email=$ag_email';
							 }
							</script> ";
	 
	 };
 
 
 
 if($search=="mn3"){};
 
 
  
 }
 
		?>