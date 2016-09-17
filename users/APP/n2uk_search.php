<?php  include "admin_p.php";?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?>
<script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<style type="text/css">
<!--
<style type="text/css">
<!--

	body {margin:0; padding:0; }
table, td {border-collapse:collapse;}
form, td {margin:0; padding:0;}
td, tr {font:13px/19px arial, tahoma, helvetica, sans-serif; color: #0000 }
}

-->
</style>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Untitled Document</title>
<style type="text/css">
<!--
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
.style16 {
	color: #330000;
	font-size: 12px;
	font-weight: bold;
}
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
<blockquote><span class="style16">N2UK SEACH ENGINE</span></blockquote>
</div>


        
        <tr>
          <th width="1031" scope="row"><form id="form1" name="form1" method="post" action="">
            <div align="center">
<table width="343" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
                      <tr>
                        <th colspan="6" scope="row">&nbsp;</th>
                      </tr>
                      <tr>
                        <th colspan="6" scope="row"><div align="center">N2UK Customer 
                          <hr />
                        </div></th>
                      </tr>
                      <tr>
                        <th width="66" scope="row"> <span class="style5">
                          <label></label>
                          <label>
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
                          <input name="search" type="radio" value="c-tc" />
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
                          <input name="search" type="radio" value="c-ph" />
                        </div></th>
                        <td class="style10">Sender Phone </td>
                        <td class="style5">&nbsp;</td>
                        <td><span class="style10">
                          <label>
                            <input name="search" type="radio" value="c-sn" />
                        </label>
                          </span></td>
                        <td colspan="2"><span class="style11">
                          <label></label>
                          <label>
                          <div align="left" class="style11"><span class="style10">Sender Name</span></div>
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
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
						 
				  ?>
                        </span></th>
    </tr>
                      <tr>
                        <th scope="row"><div align="center" class="style10">
                          <div align="center">To </div>
                        </div></th>
                        <th colspan="5" scope="row"> <?php 
						
				  
				   {$theDate4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : "";}
				  
				   $myCalendar = new tc_calendar("date4", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript();
						
				  ?>
                          &nbsp;</th>
    </tr>
            </table>
<span class="style10">
            <label>
                         
            <table width="940" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <th scope="row"><input name='checkbox2' type='checkbox' id='checkbox2'  checked='checked'/> PAID <input name='checkbox2' type='checkbox' id='checkbox2' />PENDING&nbsp;</th>
                <th scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th width="479" scope="row"><div align="right"><span class="style6"><span class="style6 style5">Transfer Code / Name / Phone/ First Name and Last Name<em></em></span></span></div></th>
                <th width="459" scope="row"><div align="left"><span class="style3">
                  <input name="txt" type="text" id="txt" size="40" />
                  </span><span class="style3">
                    <input name="Submit" type="submit" id="Submit" value="Submit" />	
                  </span></div></th>
              </tr>
              <tr></tr>
            </table>
            <p>&nbsp;</p>
            <tr>
              <th scope="row"><div align="center"></div>
              </label></th>
                        <th colspan="5" scope="row">&nbsp;
                        
                      
                        </th>
            </tr>
                    </table></th>

  
  </form>

</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Search Results</EM></caption>
<tr>
<th>No</th>
<th>Date</th>
<th>Cust ID</th>
<th>TC</th>
<th>C/NAME</th>
<th>R/NAME </th>
<th>AMT / N</th>
<th>AMT / £ </th>
<th>BOU/RATE </th>
<th>SOLD/ RATE </th>
<th>MARGIN </th>
<th>PROFIT </th>
<th>BANK ACR </th>
<th>BANK NAME </th>
<th>BANK NIG </th>


<th></th>
<th></th>
</tr>


<?php 

$email= $_SESSION['email'];
include "time.php";

$value=$dtime;



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
 
   
 $check = mysql_query("SELECT * FROM trans2") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM trans2  ")or die(mysql_error());
// $check1 = mysql_query("SELECT * FROM trans2 WHERE agent_email = '$email'")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM trans2 WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check);
 


 

 
 
 
  if($search == "c-sn"){
	
	 $check= mysql_query("SELECT * FROM trans2 WHERE  `s_name` LIKE  '%$_POST[txt]%' ")or die(mysql_error());
 
 include "n2uk_search_proc.php";
 };
 
 if($search=="c-tc"){
 $check= mysql_query("SELECT * FROM trans2 WHERE  tcode ='$_POST[txt]'  ")or die(mysql_error());
 include "n2uk_search_proc.php";
 
 };
 
 
 if($search=="c-tt"){
	 $value=date("Y-m-d");
 		$ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
 $check= mysql_query("SELECT * FROM trans2 WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4'  ")or die(mysql_error());

 include "n2uk_search_proc.php";
 
 };
 
 
  if($search=="c-bd"){
	  
	    $ts3 = isset($_REQUEST["date3"]) ? $_REQUEST["date3"] : ""; 
		$ts4 = isset($_REQUEST["date4"]) ? $_REQUEST["date4"] : ""; 
  $check_bd = mysql_query("SELECT * FROM trans2") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM trans2 WHERE STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts3' AND '$ts4'  ")or die(mysql_error());

 include "n2uk_search_proc.php";
 };
 
 
 if($search=="c-ph"){
 
 $check_pn = mysql_query("SELECT * FROM trans2") or die('Query failed: ' . mysql_error());
 $check= mysql_query("SELECT * FROM trans2 WHERE  s_phone = '$_POST[txt]' ")or die(mysql_error());

 
  include "n2uk_search_proc.php";
 
 };
 
 
  }
 
 
		?>