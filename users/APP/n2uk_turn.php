
<?php  include "admin_p.php"?>

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
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<link href="style2.css" rel="stylesheet" type="text/css">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 11px}
.style5 {font-size: 12px}
-->
</style>
</head>




<body>
<div align="center">

  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
    <table width="395" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="31" valign="bottom"  bgcolor="#9999FF" scope="row"><span class="style5">
          <label></label>
          <label></label>
          </span><span class="style5">
            <label></label>
            <label></label>
            </span><span class="style5">
            <label></label>
            <label></label>
            </span>
          <div align="right">&nbsp;</div>          
          <span style="font-size: 14px"><strong style="color: #FFF; font-size: 18px;"><u>N2UK Turnover</u></strong></span></th>
      </tr>
    </table>
  </form>
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
<th>Year</th>
<th>Month</th>
<th>No of Trans</th>

<th>PROFIT(£)</th>
<th>MARGIN(£)</th>
<th>AMOUNT SENT(N)</th>
<th>AMOUNT(£)</th>




<th></th>
</tr>
</html>






<?php 
$email= $_SESSION['email'];
 include "conn.php"; 

$checkr = mysql_query("SELECT
    YEAR(date) as year,
    MONTH(date) AS month,
    SUM(profit) AS profit,
	 SUM(amt_n) AS amtn,
	  SUM(amt_p) AS amtp,
	   SUM(margin) AS mar,
	COUNT(amt_n) AS counted
	
FROM trans2
WHERE date
    BETWEEN DATE(NOW()) - INTERVAL (DAY(NOW()) - 1) DAY - INTERVAL 100 MONTH
    AND NOW()
GROUP BY YEAR(date), MONTH(date)
ORDER BY YEAR(date), MONTH(date)")
 
 
 or die(mysql_error());

while($row=mysql_fetch_array($checkr)){
	
	$month=$row['month'];
	if($month=="1"){ $month="JAN";}
	if($month=="2"){ $month="FEB";}
	if($month=="3"){ $month="MAR";}
	if($month=="4"){ $month="APR";}
	if($month=="5"){ $month="MAY";}
	if($month=="6"){ $month="JUN";}
	if($month=="7"){ $month="JUL";}
	if($month=="8"){ $month="AUG";}
	if($month=="9"){ $month="SEP";}
	if($month=="10"){ $month="OCT";}	
	if($month=="11"){ $month="NOV";}
	if($month=="12"){ $month="DEC";}
echo "</td><td align='center'>";echo $row['year'];
	
echo "</td><td align='center'>";echo $month;
echo "</td><td align='center'>";echo $row['counted'];

echo "</td><td align='center'>";echo number_format($row['profit'],2);
echo "</td><td align='center'>";echo number_format($row['mar'],2);
echo "</td><td align='center'>";echo number_format($row['amtn'],2);
echo "</td><td align='center'>";echo number_format($row['amtp'],2);

echo "</td></tr>";

}


 
		?>