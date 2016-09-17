<?php  include "admin_p.php";?>
<?php 
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
.style3 {	color: #FF0000;
	font-size: 18px;
}
.style5 {
	font-size: 12px;
	font-weight: bold;
}
.style6 {font-size: 10px}
.style10 {
	font-size: 12px;
	color: #000099;
	font-weight: bold;
}
.style11 {color: #000099}
.style13 {color: #FFffff; font-size: 12px; }
.style14 {color: #330000}
.style16 {
	color: #330000;
	font-size: 12px;
	font-weight: bold;
}
.style17 {font-size: 13px}
.style3 .style6 .style6.style5 .style6 {
	color: #00F;
}
#sd {
	color: #F00;
}
em {
	color: #F00;
}
#form1 div table tr th .style6 .style6.style5 {
	font-size: 12px;
}
-->
</style>
</head>




<body>
<div align="center">
  <blockquote><span class="style16">Search By</span></blockquote>
  <table width="817" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th width="229" colspan="3" class="style3" scope="row"><div align="left" class="style6"></div></th>
      <th width="109" class="style3" scope="row">&nbsp;</th>
      <th width="109" class="style3" scope="row">&nbsp;</th>
      <th width="109" class="style3" scope="row">&nbsp;</th>
      <th width="261" class="style3" scope="row"><a href="admin_page.php" class="style2">Return to admin home page</a></th>
    </tr>
    <tr>
      <th colspan="7" scope="row"><table width="800" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
        
        <tr>
          <th width="800" scope="row"><form id="form1" name="form1" method="post" action="">
              <div align="left">
                <table width="794" height="25" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <th scope="row"><span class="style6"><span class="style6 style5">Transfer Code / Name / Phone/ First Name and Last Name<em></em></span></span></th>
                    <th width="367" scope="row"><div align="left"><span class="style3">
                      <input name="txt" type="text" id="txt" />
                      </span><span class="style3">
                        <input name="Submit" type="submit" id="Submit" value="Submit" />
                      </span></div></th>
                    <th width="56" scope="row">&nbsp;</th>
                  </tr>
                  <tr>
                    <th colspan="3" scope="row">&nbsp;</th>
                  </tr>
                  <tr>
                    <th width="371" scope="row">
                    
                    
                    
                    <?php
            
			 if(($bsize !=="Agent")){
           echo" <table width='343' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFCC'>
                      <tr>
                        <th colspan='6' scope='row'><div align='center'>Customer 
                          <hr />
                        </div></th>
                      </tr>
                      <tr>
                        <th width='66' scope='row'> <span class='style5'>
                          <label></label>
                          <label>
                          </span>
                          <div align='right'><span class='style5'>
                            <input name='search' type='radio' value='c-tt' checked='checked' />
                          </span></div>
                          <span class='style5'>
                            </label>
                            </span></th>
                        <td width='110'><span class='style10'>Today's Transactions</span></td>
                        <td width='14'><div align='left'></div></td>
                        <td width='23'><span class='style5'>
                          <label></label>
                          <label></label>
                          <input name='search' type='radio' value='c-rn' />
                          </span></td>
                        <td width='130' colspan='2'><div align='left'><span class='style10'>Transfer Code</span></div>
                          <span class='style5'>
                            <label></label>
                            <label></label>
                            </span><span class='style5'>
                              <label></label>
                              </span><span class='style5'>
                              <label></label>
                              <label></label>
                            </span></td>
                      </tr>
                      <tr>
                        <th scope='row'>&nbsp;</th>
                        <td class='style10'>&nbsp;</td>
                        <td class='style5'>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan='2'>&nbsp;</td>
                      </tr>
                      <tr>
                        <th scope='row'> <div align='right'>
                          <input name='search' type='radio' value='c-pn' />
                        </div></th>
                        <td class='style10'>Customer Phone No </td>
                        <td class='style5'>&nbsp;</td>
                        <td><span class='style10'>
                          <label>
                            <input name='search' type='radio' value='c-ln' />
                            </label>
                          </span></td>
                        <td colspan='2'><span class='style11'>
                          <label></label>
                          <label>
                          </span>
                          <div align='left' class='style11'><span class='style5'>Name (Receiver)</span></div>
                          <span class='style11'>
                            </label>
                            </span></td>
                      </tr>
                      <tr>
                        <th scope='row'>&nbsp;</th>
                        <th class='style10' scope='row'>&nbsp;</th>
                        <th scope='row'>&nbsp;</th>
                        <th scope='row'>&nbsp;</th>
                        <th colspan='2' scope='row'>&nbsp;</th>
                        </tr>
                      <tr>
                        <th scope='row'><div align='right'><span class='style10'>
                          <input name='search' type='radio' value='c-bd' />
                        </span></div></th>
                        <th class='style10' scope='row'><div align='left'>By Date</div></th>
                        <th colspan='2' scope='row'>&nbsp;</th>
                        <th colspan='2' scope='row'><span class='style11' style='font-size: 12px; font-weight: bold;'>
                          <input type='radio' name='search' id='radio2' value='dwc' />
                          <label for='radio2'></label>Download</span></th>

                        </tr>
                      <tr>
                        <th class='style10' scope='row'><div align='center'>From</div></th>
                        <th colspan='5' scope='row'><span class='style6'>";
							 }
							 
						?>
                        
                        
                        
                        
                          <?php if(($bsize !=="Agent")){
				  
				   {$theDate3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : "";}
				  
				   $myCalendar = new tc_calendar("date3", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
						  }
				  ?>
                        </span></th>
                        </tr>
                      <tr>
                        <th scope="row"><div align="center" class="style10">
                          <div align="center">To </div>
                        </div></th>
                        <th colspan="5" scope="row"> <?php 
						if(($bsize !=="Agent")){
				  
				   {$theDate4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : "";}
				  
				   $myCalendar = new tc_calendar("date4", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript();
						}
				  ?>
                          &nbsp;</th>
                        </tr>
                    </table>
                    
                    
                    
                    </th>
                    
                    
                    <?php 
					
					 if(($bsize !=="Customer")){
					
                  echo  " <th colspan='2' scope='row'><table width='361' border='0' cellpadding='0' cellspacing='0' bgcolor='#CC6633'>
                      <tr>
                        <th colspan='6' scope='row'><div align='center'>Agent
                          <hr />
                        </div></th>
                      </tr>
                      <tr>
                        <th width='98' scope='row'> <span class='style5'>
                          <label></label>
                          <label>
                          </span>
                          <div align='right'><span class='style5'>
                            <input name='search' type='radio' value='tt' checked='checked' />
                          </span></div>
                          <span class='style5'>
                            </label>
                            </span></th>
                        <td width='111'><span class='style13'>Today's Transactions</span></td>
                        <td width='13'><div align='left'></div></td>
                        <td width='23'><span class='style5'>
                          <label></label>
                          <label></label>
                          <input name='search' type='radio' value='rn' />
                          </span></td>
                        <td colspan='2'><div align='left'><span class='style13'>Transfer Code</span></div>
                          <span class='style5'>
                            <label></label>
                            <label></label>
                            </span><span class='style5'>
                              <label></label>
                              </span><span class='style5'>
                              <label></label>
                              <label></label>
                            </span></td>
                        </tr>
                      <tr>
                        <th scope='row'>&nbsp;</th>
                        <td colspan='2'>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan='2'>&nbsp;</td>
                      </tr>
                      <tr>
                        <th scope='row'> <div align='right'>
                          <input name='search' type='radio' value='pn' />
                        </div></th>
                        <td class='style13'>Customer Phone No </td>
                        <td class='style5'>&nbsp;</td>
                        <td><span class='style10'>
                          <label>
                            <input name='search' type='radio' value='ln' />
                          </label>
                        </span></td>
                        <td colspan='2'><span class='style11'>
                          <label></label>
                          <label>
                          </span>
                          <div align='left' class='style11'><span class='style13'>Name (Customer)</span></div>
                          <span class='style11'>
                            </label>
                          </span></td>
                        </tr>
                      <tr>
                        <th colspan='6' scope='row'>&nbsp;</th>
                      </tr>
                      <tr>
                        <th class='style10' scope='row'> <div align='right'><input name='search' type='radio' value='bd' /></div> </th>
                        <th colspan='4' scope='row'><div align='left'><span class='style10'>By Date</span></div></th>
						
						
						
                        <th width='115' class='style16' scope='row'><span class='style11'>
                          <input type='radio' name='search' id='radio'  value='dwa' />
                          <label for='radio'></label> Download </span></th>
                         
                        </tr>
                      <tr>
                        <th class='style10' scope='row'><div align='center'>From </div></th>
                        <th colspan='5' scope='row'> ";
						
					 }
						?>
						
						
						<?php 
						 if(($bsize !=="Customer")){
				  
				   {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
				  
				   $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
						 }
				  ?>
                  
                          &nbsp;</th>
                        </tr>
                      <tr>
                        <th scope="row"><span class="style10">
                          <label>
                          <div align="center">To</span>
                          </div>
                          <div align="center"></div>
                          </label></th>
                        <th colspan="5" scope="row">
                        
                         <?php 
				   if(($bsize !=="Customer")){
					   
				   {$theDate = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : "";}
				  
				   $myCalendar = new tc_calendar("date2", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
				   }
				  ?>
                          &nbsp;</th>
                        </tr>
                    </table></th>
                  </tr>
                </table>
              </div>
          </form></th>
          </tr>
      </table></th>
    </tr>
  </table>
</div>


<div align="center">

  <table width="619" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="">
    <tr>
      <th scope="row"><a href="agent_page.php" class="style2"></a></th>
    </tr>
  </table>
</div>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Search Results, R= View Receipt,  N= Write a Note </EM></caption>

<tr >
<th>No</th>

<th>Date</th>

<th>Transfer Code</th>
<th>Agent</th>
<th>Sender</th>
<th>Receiver</th>
<th>R Bank</th>
<th>Amt-P(£ </th>
<th>L-P(N </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>Cm_A(£</th>
<th>Total-P(£</th>
<th>Status</th>
<th>View</th>
</tr>
</html>






<?php 

$email= $_SESSION['email'];

$value=date("Y-m-d");

$tstam=0;
$tsta=0;
$tstd=0;
$tstt=0;

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
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);
 
 
 if($search == "ln"){
	 
 if(($bs_mtls=='1')){	 
  $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND sender_name = '$_POST[txt]'  ")or die(mysql_error());
 include "search_proc.php";
 }
 
 if(($bs_mtls=='0')){	 
  $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_name = '$_POST[txt]'  ")or die(mysql_error());
 include "search_proc.php";
 }
 
 };
 
 
 


 if($search=="rn"){
 
  if(($bs_mtls=='1')){
  $check_r = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND receiptno = '$_POST[txt]'  ")or die(mysql_error());
include "search_proc.php";
  }
  
   if(($bs_mtls=='0')){
  $check_r = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  receiptno = '$_POST[txt]'  ")or die(mysql_error());
include "search_proc.php";
  }
 
 };
 
 
 if($search=="tt"){
	 
  if(($bs_mtls=='1')){
  $check_tt = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND  date = '$value'  ")or die(mysql_error());
 include "search_proc.php";
  }
  
   if(($bs_mtls=='0')){
  $check_tt = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
 include "search_proc.php";
  }
  
  
 };
 
 
  if($search=="bd"){
	  
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
	if(($bs_mtls=='1')){	
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2'  ")or die(mysql_error());

	include "search_proc.php";
 }
 
 if(($bs_mtls=='0')){	
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2'  ")or die(mysql_error());

	include "search_proc.php";
 }
 
 };
 
 

 if($search=="pn"){
 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND  s_phone = '$_POST[txt]' ")or die(mysql_error());
 include "search_proc.php";
 
 }
 
  if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM agent_cust_transaction WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());
 include "search_proc.php";
 
 }
 
 
 };
 

  if($search=="dwa"){
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
		$_SESSION['ts4'] =  $ts2;
		$_SESSION['ts3'] =  $ts1;
		
		
		
echo" <script type='text/javascript'>
 {
location='bydate_proc_download_c.php?ts2=$ts2 & ts1=$ts1';
 }
</script> ";
 };
 
 
 
 
 
 
 
 
 
 /* FOR CUSTOMERS ******************************************************************************************************************** */
 
 
 
 
 
 
 
  if($search == "c-ln"){
	  
if(($bs_mtls=='1')){	  
 $check= mysql_query("SELECT * FROM receiver WHERE `amt_send` <= $bs_mtl AND sender_name = '$_POST[txt]'")or die(mysql_error());
 include "search_proc_cust.php";
}

if(($bs_mtls=='0')){	  
 $check= mysql_query("SELECT * FROM receiver WHERE sender_name = '$_POST[txt]'")or die(mysql_error());
 include "search_proc_cust.php";
}

 };
 



 if($search=="c-rn"){
	 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND  receiptno ='$_POST[txt]'  ")or die(mysql_error());
 include "search_proc_cust.php";}
 
 if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE  receiptno ='$_POST[txt]'  ")or die(mysql_error());
 include "search_proc_cust.php";}
 };
 
 
 if($search=="c-tt"){
 
  $check_tt = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 
 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE  `amt_send` <= $bs_mtl AND date = '$value'  ")or die(mysql_error());
include "search_proc_cust.php";}
 
 if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
include "search_proc_cust.php";}
 
 };
 
 
  if($search=="c-bd"){
	  
	    $ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
  $check_bd = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
  
  if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4'  ")or die(mysql_error());}

if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4'  ")or die(mysql_error());}
 include "search_proc_cust.php";
 };
 
 
 if($search=="c-pn"){
 
 $check_pn = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 if(($bs_mtls=='1')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND  s_phone = '$_POST[txt]' ")or die(mysql_error());}

  if(($bs_mtls=='0')){
 $check= mysql_query("SELECT * FROM cust_transaction WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());}
  include "search_proc_cust.php";
 
 };
 
 
   if($search=="dwc"){
	   $ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
		
		$_SESSION['ts4'] =  $ts4;
		$_SESSION['ts3'] =  $ts3;
		
		
		
echo" <script type='text/javascript'>
 {
location='bydate_proc_download.php?ts2=$ts3 & ts1=$ts4';
 }
</script> ";
 };
 
 
  }
 
 
		?>