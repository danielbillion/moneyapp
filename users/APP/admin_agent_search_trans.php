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
                    <th width="371" scope="row"><table width="343" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
                      <tr>
                        <th colspan="6" scope="row"><div align="center">Customer 
                          <hr />
                        </div></th>
                      </tr>
                      <tr>
                        <th width="66" scope="row"> <span class="style5">
                          <label></label>
                          <label>
                          </span>
                          <div align="right"><span class="style5">
                            <input name="search" type="radio" value="c-tt" checked="checked" />
                          </span></div>
                          <span class="style5">
                            </label>
                            </span></th>
                        <td width="110"><span class="style10">Today's Transactions</span></td>
                        <td width="14"><div align="left"></div></td>
                        <td width="23"><span class="style5">
                          <label></label>
                          <label></label>
                          <input name="search" type="radio" value="c-rn" />
                          </span></td>
                        <td width="130" colspan="2"><div align="left"><span class="style10">Transfer Code</span></div>
                          <span class="style5">
                            <label></label>
                            <label></label>
                            </span><span class="style5">
                              <label></label>
                              </span><span class="style5">
                              <label></label>
                              <label></label>
                            </span></td>
                      </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td class="style10">&nbsp;</td>
                        <td class="style5">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <th scope="row"> <div align="right">
                          <input name="search" type="radio" value="c-pn" />
                        </div></th>
                        <td class="style10">Customer Phone No </td>
                        <td class="style5">&nbsp;</td>
                        <td><span class="style10">
                          <label>
                            <input name="search" type="radio" value="c-ln" />
                            </label>
                          </span></td>
                        <td colspan="2"><span class="style11">
                          <label></label>
                          <label>
                          </span>
                          <div align="left" class="style11"><span class="style5">Name (Receiver)</span></div>
                          <span class="style11">
                            </label>
                            </span></td>
                      </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <th class="style10" scope="row">&nbsp;</th>
                        <th scope="row">&nbsp;</th>
                        <th scope="row">&nbsp;</th>
                        <th colspan="2" scope="row">&nbsp;</th>
                        </tr>
                      <tr>
                        <th scope="row"><div align="right"><span class="style10">
                          <input name="search" type="radio" value="c-bd" />
                        </span></div></th>
                        <th class="style10" scope="row"><div align="left">By Date</div></th>
                        <th colspan="2" scope="row">&nbsp;</th>
                        <th colspan="2" scope="row"><span class="style11" style="font-size: 12px; font-weight: bold;">
                          <input type="radio" name="radio" id="radio2" value="radio" />
                          <label for="radio2"></label>
Download</span></th>
                        </tr>
                      <tr>
                        <th class="style10" scope="row"><div align="center">From</div></th>
                        <th colspan="5" scope="row"><span class="style6">
                          <?php 
				  
				   {$theDate3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : "";}
				  
				   $myCalendar = new tc_calendar("date3", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2016-03-01'); $myCalendar->writeScript(); 
				  
				  ?>
                        </span></th>
                        </tr>
                      <tr>
                        <th scope="row"><div align="center" class="style10">
                          <div align="center">To </div>
                        </div></th>
                        <th colspan="5" scope="row"> <?php 
				  
				   {$theDate4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : "";}
				  
				   $myCalendar2 = new tc_calendar("date4", true);
					  $myCalendar2->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar2->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar2->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2016-03-01'); $myCalendar2->writeScript(); 
				  
				  ?>
                          &nbsp;</th>
                        </tr>
                    </table></th>
                    <th colspan="2" scope="row"><table width="361" border="0" cellpadding="0" cellspacing="0" bgcolor="#CC6633">
                      <tr>
                        <th colspan="6" scope="row"><div align="center">Agent
                          <hr />
                        </div></th>
                      </tr>
                      <tr>
                        <th width="98" scope="row"> <span class="style5">
                          <label></label>
                          <label>
                          </span>
                          <div align="right"><span class="style5">
                            <input name="search" type="radio" value="tt" checked="checked" />
                          </span></div>
                          <span class="style5">
                            </label>
                            </span></th>
                        <td width="111"><span class="style13">Today's Transactions</span></td>
                        <td width="13"><div align="left"></div></td>
                        <td width="23"><span class="style5">
                          <label></label>
                          <label></label>
                          <input name="search" type="radio" value="rn" />
                          </span></td>
                        <td colspan="2"><div align="left"><span class="style13">Transfer Code</span></div>
                          <span class="style5">
                            <label></label>
                            <label></label>
                            </span><span class="style5">
                              <label></label>
                              </span><span class="style5">
                              <label></label>
                              <label></label>
                            </span></td>
                        </tr>
                      <tr>
                        <th scope="row">&nbsp;</th>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <th scope="row"> <div align="right">
                          <input name="search" type="radio" value="pn" />
                        </div></th>
                        <td class="style13">Customer Phone No </td>
                        <td class="style5">&nbsp;</td>
                        <td><span class="style10">
                          <label>
                            <input name="search" type="radio" value="ln" />
                          </label>
                        </span></td>
                        <td colspan="2"><span class="style11">
                          <label></label>
                          <label>
                          </span>
                          <div align="left" class="style11"><span class="style13">Name (Customer)</span></div>
                          <span class="style11">
                            </label>
                          </span></td>
                        </tr>
                      <tr>
                        <th colspan="6" scope="row">&nbsp;</th>
                      </tr>
                      <tr>
                        <th class="style10" scope="row"> <div align="right">
                          <input name="search" type="radio" value="bd" />
                        </div>
                        </th>
                        <th colspan="4" scope="row"><div align="left"><span class="style10">By Date</span></div></th>
                        <th width="115" class="style16" scope="row"><span class="style11">
                          <input type="radio" name="radio" id="radio" value="radio" />
                          <label for="radio"></label>
                          Download </span></th>
                        </tr>
                      <tr>
                        <th class="style10" scope="row"><div align="center">From </div></th>
                        <th colspan="5" scope="row"> <?php 
				  
				   {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
				  
				   $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2016-03-01'); $myCalendar->writeScript(); 
				  
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
                        <th colspan="5" scope="row"> <?php 
				  
				   {$theDate2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : "";}
				  
				   $myCalendar2 = new tc_calendar("date2", true);
					  $myCalendar2->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar2->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar2->setYearInterval(2010, 2016); $myCalendar->dateAllow('2010-01-01', '2016-03-01'); $myCalendar2->writeScript(); 
				  
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

<caption><EM>Search Results</EM></caption>

<tr >
<th>No</th>

<th>Date</th>

<th>Transfer Code</th>
<th>Agent</th>
<th>Sender</th>
<th>Receiver</th>
<th>Transfer Mode</th>
<th>Amt-P(£ </th>
<th>L-P(N </th>
<th>Cm_<?php include "info.php"; if (isset($letter1)){ echo $letter1;}?>(£  </th>
<th>Cm_A(£</th>
<th>Total-P(£</th>
<th>Status</th>
<th></th>
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
 $check1= mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_name = '$_POST[txt]'  ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);
 
 
 if($search == "ln"){
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1)){

echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];



echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];

$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

$agentn = substr($agentn, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($agentn));

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));echo "</td><td align='center'>";echo ($row['r_transfer']);
echo "</td><td align='center'>";echo number_format($row['amt_send']);
echo "</td><td align='center'>";echo number_format($row['amt_local']);
echo "</td><td align='center'>";echo ($row['com_d']);
echo "</td><td align='center'>";echo ($row['com_a']);;
echo "</td><td align='center'>";echo number_format($row['total']);
if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";


echo "</td></tr>";

}}
 };
 
 
 


 if($search=="rn"){
 
  $check_r = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_r= mysql_query("SELECT * FROM agent_cust_transaction WHERE  receiptno = '$_POST[txt]'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_r);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1_r)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

$agentn = substr($agentn, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($agentn));

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];
if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";


echo "</td></tr>";

}}

 
 
 
 
 };
 
 
 
 
 
 
 
 
 
 /* customer receeit******************************************************** */
 
 /*
 if($search=="c-rn"){
 
  $check_r = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_r= mysql_query("SELECT * FROM cust_transaction WHERE  receiptno = '$_POST[txt]'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_r);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1_r)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
//$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

echo "</td><td align='center'>";echo "None";

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo $row['total'];
echo "</td><td align='center'>";echo $row['status'];
echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?s_phone=$s_phone & sdate=$sdate &r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";


echo "</td></tr>";

}}

 
 
 
 
 };*/
 
 
 
 
 
 
 if($search=="tt"){
 
  $check_tt = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_tt= mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_tt);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1_tt)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

$agentn = substr($agentn, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($agentn));

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo number_format($row['r_transfer']);
echo "</td><td align='center'>";echo number_format($row['amt_send']);
echo "</td><td align='center'>";echo number_format($row['amt_local']);
echo "</td><td align='center'>";echo ($row['com_d']);
echo "</td><td align='center'>";echo ($row['com_a']);;
echo "</td><td align='center'>";echo number_format($row['total']);

$tstam=$tstam + ($row['amt_send']);
$tstd=$tstd + $row['com_d'];
$tsta=$tsta + $row['com_a'];
$tstt=$tstt + $row['total'];

if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";
				  


echo "</td></tr>";



}echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) £ </strong>";




$check_tt1bd = mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$total_amtp=0;
while($sa = mysql_fetch_array($check_tt1bd))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo number_format($tstam) ;


$check_tt2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check_tt2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;



/********** COMMISSION FOR DAPHKKOY ***************************/
$check_tt3c = mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$total_comc=0;
while($sa = mysql_fetch_array($check_tt3c))
{
$total_comc = $total_comc + $sa['com_d'];
}
echo "</td><td align='center'>"; echo number_format($tstd);

/********** COMMISSION FOR agent ***************************/

$check_ttag = mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$total_ag=0;
while($sa = mysql_fetch_array($check_ttag))
{
$total_ag = $total_ag + $sa['com_a'];
}
echo "</td><td align='center'>"; echo number_format($tsta);


/*
$check_tt3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check_tt3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;
*/

$check_tt4 = mysql_query("SELECT * FROM agent_cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check_tt4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo number_format($total_t);
echo "</td><td align='center'>";



}
 
 
 };
 
 
 
 
  if($search=="bd"){
	  
	    $ts2 = isset($_REQUEST["date2"]) ? $_REQUEST["date2"] : ""; 
		$ts1 = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
  $check_bd = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_bd= mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_bd);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1_bd)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

$agentn = substr($agentn, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($agentn));

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));

echo "</td><td align='center'>";echo ($row['r_transfer']);
echo "</td><td align='center'>";echo number_format($row['amt_send']);
echo "</td><td align='center'>";echo number_format($row['amt_local']);
echo "</td><td align='center'>";echo ($row['com_d']);
echo "</td><td align='center'>";echo ($row['com_a']);;
echo "</td><td align='center'>";echo number_format($row['total']);

if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";

echo "</td><td>";echo "<em><a href='admin_agent_task.php?r_name=$r_name  & r_transfer=$r_transfer   & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal  & r_total=$r_total & receiptno=$receiptno  '> Tsk	</a></em>";

	 
echo "</td></tr>";

}echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) £ </strong>";




$check1bd = mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' ")or die(mysql_error());
$total_amtp=0;
while($sa = mysql_fetch_array($check1bd))
{
$total_amtp = $total_amtp + $sa['amt_send'];
}
echo "</td><td align='center'>";echo number_format($total_amtp) ;


$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' ")or die(mysql_error());
$total_lc=0;
while($na = mysql_fetch_array($check2))
{
$total_lc = $total_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;



/********** COMMISSION FOR DAPHKKOY ***************************/
$check3c = mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' ")or die(mysql_error());
$total_comc=0;
while($sa = mysql_fetch_array($check3c))
{
$total_comc = $total_comc + $sa['com_d'];
}
echo "</td><td align='center'>"; echo number_format($total_comc);

/********** COMMISSION FOR agent ***************************/

$checkag = mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' ")or die(mysql_error());
$total_ag=0;
while($sa = mysql_fetch_array($checkag))
{
$total_ag = $total_ag + $sa['com_a'];
}
echo "</td><td align='center'>"; echo number_format($total_ag);


/*
$check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
$total_com=0;
while($sa = mysql_fetch_array($check3))
{
$total_com = $total_com + $sa['commission'];
}
echo "</td><td align='center'>"; echo $total_com/2;

echo "</td><td align='center'>";echo $total_com/2;
*/

$check4 = mysql_query("SELECT * FROM agent_cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts1' AND '$ts2' ")or die(mysql_error());
$total_t=0;
while($sa = mysql_fetch_array($check4))
{
$total_t = $total_t + $sa['total'];
}
echo "</td><td align='center'>"; echo number_format($total_t);
echo "</td><td align='center'>";

}
 
 
 };
 
 
 
 
 
 

 if($search=="pn"){
 
 $check_pn = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_pn= mysql_query("SELECT * FROM agent_cust_transaction WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());
$table_array = mysql_fetch_array($check_pn);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($row=mysql_fetch_array($check1_pn)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $row['date'];$s_phone= $row['s_phone'];

$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
$agentn=$row['agent_name'];
$sendern=$row['sender_name'];
$rname=$row['r_name'];

$agentn = substr($agentn, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($agentn));

$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));;
echo "</td><td align='center'>";echo number_format($row['r_transfer']);
echo "</td><td align='center'>";echo number_format($row['amt_send']);
echo "</td><td align='center'>";echo number_format($row['amt_local']);
echo "</td><td align='center'>";echo ($row['com_d']);
echo "</td><td align='center'>";echo ($row['com_a']);;
echo "</td><td align='center'>";echo number_format($row['total']);
if ( $row['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}


if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";


echo "</td></tr>";

}}
 
 
 
 
 
 };
 

 if($search=="wk2"){};
 
 
 
 if($search=="mn3"){};
 
 
  

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /* FOR CUSTOMERS ******************************************************************************************************************** */
 
 
 
 
 
 
 
  if($search == "c-ln"){
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($rowc=mysql_fetch_array($check1)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $rowc['date'];$s_phone= $rowc['s_phone'];

$sender_email=$rowc['sender_email'];
$r_name=$rowc['r_name'];
$r_phone=$rowc['r_phone'];
$s_phone=$rowc['s_phone'];
$r_transfer=$rowc['r_transfer'];
$r_bank=$rowc['r_bank'];
$r_actno=$rowc['r_actno'];
$r_amtsend= number_format($rowc['amt_send']);
$r_amtlocal= $rowc['amt_local'];
$r_commission=  number_format($rowc['amt_send']);
$r_total= number_format($rowc['total']);
$receiptno= $rowc['receiptno'];
$r_idtype= $rowc['r_idtype'];
$sdate= $rowc['date'];
$rate=$rowc['exchange_rate'];
$sender= $rowc['sender_name'];
$date= $rowc['date'];
$s_email=$rowc['sender_email'];
$r_idtype= $rowc['r_idtype'];
$dtime= $rowc['dtime'];

$rate=$rowc['exchange_rate'];
$sender_email=$rowc['sender_email'];

echo "</td><td align='center'>";echo $rowc['date'];
echo "</td><td align='center'>";echo $rowc['receiptno'];
echo "</td><td align='center'>";echo "Customer";


$sendern=$rowc['sender_name'];
$rname=$rowc['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $rowc['r_transfer'];
echo "</td><td align='center'>";echo number_format($rowc['amt_send']);
echo "</td><td align='center'>";echo number_format($rowc['amt_local']);
echo "</td><td align='center'>";echo number_format($rowc['com_d']);
echo "</td><td align='center'>";echo number_format($rowc['com_a']);
echo "</td><td align='center'>";echo number_format($rowc['total']);
echo "</td><td align='center'>";echo $rowc['status'];
if ( $rowc['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $rowc['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";


echo "</td></tr>";

}}
 };
 
 
 


 if($search=="c-rn"){
 
  $check_r = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_r= mysql_query("SELECT * FROM cust_transaction WHERE  receiptno ='$_POST[txt]'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_r);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($rowc=mysql_fetch_array($check1_r)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $rowc['date'];$s_phone= $rowc['s_phone'];

$sender_email=$rowc['sender_email'];
$r_name=$rowc['r_name'];
$r_phone=$rowc['r_phone'];
$s_phone=$rowc['s_phone'];
$r_transfer=$rowc['r_transfer'];
$r_bank=$rowc['r_bank'];
$r_actno=$rowc['r_actno'];
$r_amtsend= number_format($rowc['amt_send']);
$r_amtlocal= $rowc['amt_local'];
$r_commission=  number_format($rowc['amt_send']);
$r_total= number_format($rowc['total']);
$receiptno= $rowc['receiptno'];
$r_idtype= $rowc['r_idtype'];
$sdate= $rowc['date'];
$rate=$rowc['exchange_rate'];
$sender= $rowc['sender_name'];
$date= $rowc['date'];
$s_email=$rowc['sender_email'];
$r_idtype= $rowc['r_idtype'];
$dtime= $rowc['dtime'];

$rate=$rowc['exchange_rate'];
$sender_email=$rowc['sender_email'];

echo "</td><td align='center'>";echo $rowc['date'];
echo "</td><td align='center'>";echo $rowc['receiptno'];
echo "</td><td align='center'>";echo "Customer";

$sendern=$rowc['sender_name'];
$rname=$rowc['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $rowc['r_transfer'];
echo "</td><td align='center'>";echo number_format($rowc['amt_send']);
echo "</td><td align='center'>";echo number_format($rowc['amt_local']);
echo "</td><td align='center'>";echo number_format($rowc['com_d']);
echo "</td><td align='center'>";echo number_format($rowc['com_a']);
echo "</td><td align='center'>";echo number_format($rowc['total']);
echo "</td><td align='center'>";echo $rowc['status'];
if ( $rowc['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $rowc['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";


echo "</td></tr>";

}}

 
 
 
 
 };
 
 
 if($search=="c-tt"){
 
  $check_tt = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_tt= mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_tt);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($rowc=mysql_fetch_array($check1_tt)){
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $rowc['date'];$s_phone= $rowc['s_phone'];

$sender_email=$rowc['sender_email'];
$r_name=$rowc['r_name'];
$r_phone=$rowc['r_phone'];
$s_phone=$rowc['s_phone'];
$r_transfer=$rowc['r_transfer'];
$r_bank=$rowc['r_bank'];
$r_actno=$rowc['r_actno'];
$r_amtsend= number_format($rowc['amt_send']);
$r_amtlocal= $rowc['amt_local'];
$r_commission=  number_format($rowc['amt_send']);
$r_total= number_format($rowc['total']);
$receiptno= $rowc['receiptno'];
$r_idtype= $rowc['r_idtype'];
$sdate= $rowc['date'];
$rate=$rowc['exchange_rate'];
$sender= $rowc['sender_name'];
$date= $rowc['date'];
$s_email=$rowc['sender_email'];
$r_idtype= $rowc['r_idtype'];
$dtime= $rowc['dtime'];

$rate=$rowc['exchange_rate'];
$sender_email=$rowc['sender_email'];

echo "</td><td align='center'>";echo $rowc['date'];
echo "</td><td align='center'>";echo $rowc['receiptno'];
echo "</td><td align='center'>";echo "Customer";

$sendern=$rowc['sender_name'];
$rname=$rowc['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $rowc['r_transfer'];
echo "</td><td align='center'>";echo number_format($rowc['amt_send']);
echo "</td><td align='center'>";echo number_format($rowc['amt_local']);
echo "</td><td align='center'>";echo number_format($rowc['com_d']);
echo "</td><td align='center'>";echo number_format($rowc['com_a']);

echo "</td><td align='center'>";echo number_format($rowc['total']);
echo "</td><td align='center'>";echo $rowc['status'];
if ( $rowc['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $rowc['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";

				  


echo "</td></tr>";



}echo "</td><td colspan='7' align='center'>";echo "<strong> total (Till Date) £ </strong>";




$check_tt1bd = mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$sum_amtp=0;
while($ca = mysql_fetch_array($check_tt1bd))
{
$sum_amtp = $sum_amtp + $ca['amt_send'];
}
echo "</td><td align='center'>";echo number_format($sum_amtp) ;


$check_tt2 = mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$sum_lc=0;
while($na = mysql_fetch_array($check_tt2))
{
$sum_lc = $sum_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;



/********** COMMISSION FOR DAPHKKOY ***************************/
$check_tt3 = mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$sum_comc=0;
while($ca = mysql_fetch_array($check_tt3))
{
$sum_comc = $sum_comc + $ca['com_d'];
}
echo "</td><td align='center'>"; echo number_format($sum_comc);

/********** COMMISSION FOR agent ***************************/

$check_ttag = mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$sum_aga=0;
while($cas = mysql_fetch_array($check_ttag))
{
$sum_aga = $sum_aga + $cas['com_a'];
}
echo "</td><td align='center'>"; echo number_format($sum_aga);


/*
$check_tt3 = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
$sum_com=0;
while($ca = mysql_fetch_array($check_tt3))
{
$sum_com = $sum_com + $ca['commission'];
}
echo "</td><td align='center'>"; echo $sum_com/2;

echo "</td><td align='center'>";echo $sum_com/2;
*/

$check_tt4 = mysql_query("SELECT * FROM cust_transaction WHERE  date = '$value'  ")or die(mysql_error());
$sum_t=0;
while($ca = mysql_fetch_array($check_tt4))
{
$sum_t = $sum_t + $ca['total'];
}
echo "</td><td align='center'>"; echo number_format($sum_t);
echo "</td><td align='center'>";



}
 
 
 };
 
 
 
 
  if($search=="c-bd"){
	  
	    $ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
  $check_bd = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_bd= mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4'  ")or die(mysql_error());
$table_array = mysql_fetch_array($check_bd);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($rowc=mysql_fetch_array($check1_bd)){
	
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $rowc['date'];$s_phone= $rowc['s_phone'];

$sender_email=$rowc['sender_email'];
$r_name=$rowc['r_name'];
$r_phone=$rowc['r_phone'];
$s_phone=$rowc['s_phone'];
$r_transfer=$rowc['r_transfer'];
$r_bank=$rowc['r_bank'];
$r_actno=$rowc['r_actno'];
$r_amtsend= number_format($rowc['amt_send']);
$r_amtlocal= $rowc['amt_local'];
$r_commission=  number_format($rowc['amt_send']);
$r_total= number_format($rowc['total']);
$receiptno= $rowc['receiptno'];
$r_idtype= $rowc['r_idtype'];
$sdate= $rowc['date'];
$rate=$rowc['exchange_rate'];
$sender= $rowc['sender_name'];
$date= $rowc['date'];
$s_email=$rowc['sender_email'];
$r_idtype= $rowc['r_idtype'];
$dtime= $rowc['dtime'];

$rate=$rowc['exchange_rate'];
$sender_email=$rowc['sender_email'];

echo "</td><td align='center'>";echo $rowc['date'];
echo "</td><td align='center'>";echo $rowc['receiptno'];
echo "</td><td align='center'>";echo "Customer";

$sendern=$rowc['sender_name'];
$rname=$rowc['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $rowc['r_transfer'];
echo "</td><td align='center'>";echo number_format($rowc['amt_send']);
echo "</td><td align='center'>";echo number_format($rowc['amt_local']);
echo "</td><td align='center'>";echo number_format($rowc['com_d']);
echo "</td><td align='center'>";echo number_format($rowc['com_a']);
echo "</td><td align='center'>";echo number_format($rowc['total']);
echo "</td><td align='center'>";echo $rowc['status'];
if ( $rowc['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $rowc['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";

	 
echo "</td></tr>";

}echo "</td><td colspan='7' align='center'>";echo "<strong> total (Till Date) £ </strong>";




$check1bd = mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4' ")or die(mysql_error());
$sum_amtp=0;
while($ca = mysql_fetch_array($check1bd))
{
$sum_amtp = $sum_amtp + $ca['amt_send'];
}
echo "</td><td align='center'>";echo number_format($sum_amtp) ;


$check2 = mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4' ")or die(mysql_error());
$sum_lc=0;
while($na = mysql_fetch_array($check2))
{
$sum_lc = $sum_lc + $na['amt_local'];
}
echo "</td><td align='center'>";echo "" ;



/********** COMMISSION FOR DAPHKKOY ***************************/
$check3c = mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4' ")or die(mysql_error());
$sum_comc=0;
while($cas = mysql_fetch_array($check3c))
{
$sum_comc=$sum_comc + $cas['com_d'];
}
echo "</td><td align='center'>"; echo number_format($sum_comc);

/********** COMMISSION FOR agent ***************************/

$checkag = mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4' ")or die(mysql_error());
$sum_ag=0;
while($ca = mysql_fetch_array($checkag))
{
$sum_ag = $sum_ag + $ca['com_a'];
}
echo "</td><td align='center'>"; echo $sum_ag;


/*
$check3 = mysql_query("SELECT * FROM cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
$sum_com=0;
while($ca = mysql_fetch_array($check3))
{
$sum_com = $sum_com + $ca['commission'];
}
echo "</td><td align='center'>"; echo $sum_com/2;

echo "</td><td align='center'>";echo $sum_com/2;
*/

$check4 = mysql_query("SELECT * FROM cust_transaction WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4' ")or die(mysql_error());
$sum_t=0;
while($ca = mysql_fetch_array($check4))
{
$sum_t = $sum_t + $ca['total'];
}
echo "</td><td align='center'>"; echo number_format($sum_t);
echo "</td><td align='center'>";

}
 
 
 };
 
 
 
 
 
 

 if($search=="c-pn"){
 
 $check_pn = mysql_query("SELECT * FROM cust_transaction") or die('Query failed: ' . mysql_error());
 $check1_pn= mysql_query("SELECT * FROM cust_transaction WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());
$table_array = mysql_fetch_array($check_pn);
 
  if(isset($table_array) && $table_array[0] != "") {
 
while($rowc=mysql_fetch_array($check1_pn)){
	echo "</td><td align='center'>";echo $num;
$num=$num+1;$sdate= $rowc['date'];$s_phone= $rowc['s_phone'];

$sender_email=$rowc['sender_email'];
$r_name=$rowc['r_name'];
$r_phone=$rowc['r_phone'];
$s_phone=$rowc['s_phone'];
$r_transfer=$rowc['r_transfer'];
$r_bank=$rowc['r_bank'];
$r_actno=$rowc['r_actno'];
$r_amtsend= number_format($rowc['amt_send']);
$r_amtlocal= $rowc['amt_local'];
$r_commission=  number_format($rowc['amt_send']);
$r_total= number_format($rowc['total']);
$receiptno= $rowc['receiptno'];
$r_idtype= $rowc['r_idtype'];
$sdate= $rowc['date'];
$rate=$rowc['exchange_rate'];
$sender= $rowc['sender_name'];
$date= $rowc['date'];
$s_email=$rowc['sender_email'];
$r_idtype= $rowc['r_idtype'];
$dtime= $rowc['dtime'];

$rate=$rowc['exchange_rate'];
$sender_email=$rowc['sender_email'];

echo "</td><td align='center'>";echo $rowc['date'];
echo "</td><td align='center'>";echo $rowc['receiptno'];
echo "</td><td align='center'>";echo "Customer";

$sendern=$rowc['sender_name'];
$rname=$rowc['r_name'];


$sendern = substr($sendern, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sendern));

$rname = substr($rname, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($rname));
echo "</td><td align='center'>";echo $rowc['r_transfer'];
echo "</td><td align='center'>";echo number_format($rowc['amt_send']);
echo "</td><td align='center'>";echo number_format($rowc['amt_local']);
echo "</td><td align='center'>";echo number_format($rowc['com_d']);
echo "</td><td align='center'>";echo number_format($rowc['com_a']);
echo "</td><td align='center'>";echo number_format($rowc['total']);
echo "</td><td align='center'>";echo $rowc['status'];
if ( $rowc['status']== " Pending") {

echo "</td><td>";echo "<strong><a href='cust_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime  & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $rowc['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> </a></strong>";

}

echo "</td><td>";echo "<strong><a href='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email  & r_idtype=$r_idtype & dtime=$dtime   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> view  </a></strong>";


echo "</td></tr>";

}}
 
 
 
 
 
 };
 
 
  }
 
 
		?>