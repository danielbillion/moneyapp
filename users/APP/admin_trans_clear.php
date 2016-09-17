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
          <th width="676" scope="row"> <span class="style3">Cleared Transaction &amp; Commission</span></th>
        </tr>
        
        <tr bgcolor="#FFFFFF">
          <th scope="row"><form id="form1" name="form1" method="post" action="">
            <table width="628" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th colspan="2" rowspan="4" scope="row"><span class="style5">
                  <label></label>
                  <label>
                  <div align="left"><span class="style5">
                    <input name="search" type="radio" value="ct" checked="checked" />
                    Cleared Transaction
                  </span></div>
                </span></th>
                <td width="8" rowspan="4">&nbsp;</td>
                <td width="15" rowspan="4" class="style5"><div align="left"></div></td>
                <td width="22" rowspan="4"><span class="style5">
                  <label></label>
                  <label></label>
                </span></td>
                <td width="13" rowspan="4"><span class="style5">
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
                <td><div align="right"></div></td>
                <td class="style5">
					
<span style="font-weight: bold">By Date</span></td>
                <td>&nbsp;</td>
                <td width="68">&nbsp;</td>
                <td colspan="2"><span class="style5">
                  <label></label>
                  <label></label>
  </span></td>
                </tr>
              <tr>
                <td height="31">&nbsp;</td>
                <td colspan="5">&nbsp;</td>
              </tr>
              <tr>
                <td width="56" height="31"><span class="style9" style="color: #000">From</span>
                  </td>
                <td colspan="5"><?php 
				  
				   {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
				  
				   $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
				  
				  ?>&nbsp;</td>
                </tr>
              <tr>
                <th colspan="4" scope="row"><div align="left"></div></th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td bgcolor="#FFFFFF"><span class="style9" style="color: #000">To</span></td>
                <td colspan="5" bgcolor="#FFFFFF">
                  <?php 
				  
				   {$theDate2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : "";}
				  
				   $myCalendar2 = new tc_calendar("date2", true);
					  $myCalendar2->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar2->setDate(date('d'), date('m'), date('Y'));$myCalendar2->setPath("calendar/");
					  $myCalendar2->setYearInterval(2010, 2026); $myCalendar2->dateAllow('2010-01-01', '2026-03-01'); $myCalendar2->writeScript(); 
				  
				  ?>
                  
                  &nbsp;</td>
                </tr>
              <tr>
                <th width="18" scope="row"><span class="style5">
                  <input name="search" type="radio" value="cc" />
                </span></th>
                <td width="144" class="style5" style="font-weight: bold"><div align="left">Cleared Commission</div></td>
                <td class="style5">&nbsp;</td>
                <td class="style5">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td width="18">&nbsp;</td>
                <td width="32">&nbsp;</td>
                </tr>
              <tr>
                <th colspan="12" scope="row">&nbsp;</th>
                </tr>
              <tr>
                <th colspan="12" scope="row"><div align="center">
                  <table width="581" height="23" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <th width="240" scope="row">&nbsp;</th>
                      <th width="341" scope="row"><div align="left">
                        <input type="submit" name="Submit" value="Search" />
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


</html>






<?php 
 include 'info.php';


$value=date("Y-m-d");

		if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

 include "conn.php"; 
 
   $num=1;
 
 
 if (isset($_POST['Submit'])) {
 
 $search = $_POST['search'];
 }


  if($search=="ct"){
	  
	  echo"<table border=1 style='background-color:#CCCCFF;' align='center' cellpadding='0' cellspacing='0' >

<caption><EM><strong>Cleared Transactions Till Date, CT=Clear type, CLA= cleared all, CL1=Single clear</strong></EM></caption><p>

<tr >
<th>No</th>
<th>D-T Cleared</th>
<th>Transfer Code</th>
<th>Agent</th>
<th>Sender </th>
<th>Receiver </th>
<th>Transfer-M</th>
<th>Amt-P/£ </th>
<th>Lcl-P/N  </th>
<th>Cm_ $letter1(£  </th>
<th>A-Co/£</th>
<th>Total/£</th>

<th>CT</th>
<th>Status</th>
<th></th>
<th></th>
</tr>";
	  
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
if(isset($_GET['ag_email'])){ $ag_email= $_GET['ag_email'];
	
$checkct= mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && agent_email='$ag_email' && ( js='CL1' || js='CLA' ) ")or die(mysql_error());
	
$checkcla=  mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && agent_email='$ag_email' && (js='CLA' ) ")or die(mysql_error());
	
$checkcl1=  mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && agent_email='$ag_email' && ( js='CL1' ) ")or die(mysql_error());
	
	
	}
	
		
if(!isset($_GET['ag_email'])){
$checkct= mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && ( js='CL1' || js='CLA' ) ")or die(mysql_error());

$checkcla=  mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && (js='CLA' ) ")or die(mysql_error());
	
$checkcl1=  mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && ( js='CL1' ) ")or die(mysql_error());
}		
 

 include "search_trans_clear.php";
 
 };
 
 
 if($search=="cc"){
	  
	  echo"<table border=1 style='background-color:#CCCCFF;' align='center' cellpadding='0' cellspacing='0' >

<caption><EM><strong>Cleared Commission Till Date</strong></EM></caption><p>

<tr >
<th>No</th>
<th>Date -Time Cleared</th>
<th>Agent</th>
<th>Email</th>
<th>Total Cleared/£</th>

<th></th>
<th></th>
</tr>";
	  
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
		
if (isset($_GET['ag_email'])){$ag_email= $_GET['ag_email'];
 $check= mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && js='com_cl' ")or die(mysql_error());

}

if (!isset($_GET['ag_email'])){
 $check= mysql_query("SELECT * FROM clear_trans WHERE STR_TO_DATE(dtime, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' && js='com_cl' ")or die(mysql_error());

}

$total_t=0;

$start_from=0;
while($row=mysql_fetch_array($check)){


$start_from= $start_from+1; echo "</td><td align='center'>";echo $start_from;
echo "</td><td align='center'>";echo $row['dtime'];
$agent_name = ucfirst (strtolower($row['agent_name']));echo "</td><td align='center'>";echo $agent_name ;
echo "</td><td align='center'>";echo strtolower($row['agent_email']);
echo "</td><td align='center'>";echo number_format($row['total'],2);
$total_t = $total_t + $row['total'];
echo "</td></tr>";

}

echo "</td><td colspan='4' align='center'>";echo "<strong> Total (Till Date) GBP </strong>";
echo "</td><td align='center'>";echo number_format($total_t,2) ;
echo "</td><td align='center'>";echo "" ;
echo "</table>";

 
 };
 
 
 
 
  
 }
 
		?>