
<?php  include "admin_p.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
<!--

	body {margin:0; padding:0; }
table, td {border-collapse:collapse;}
form, td {margin:0; padding:0;}
td, tr {font:13px/19px arial, tahoma, helvetica, sans-serif; color: #0000 }
}

-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<title>Untitled Document</title>


</head>

<body>
</body>
<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Search Results-- <input name='checkbox2' type='checkbox' id='checkbox2'  checked='checked'/> PAID <input name='checkbox2' type='checkbox' id='checkbox2' />PENDING</EM></caption>
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

  
//$email= $_SESSION['email'];

//if($_SESSION['loginTime'] < time()+20*60){  }

$link = include "conn.php";

$connection = include "conn.php";

 include "conn.php"; $ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-1 months'));


//$ts2  = strtotime(date("Y-m-d")-date("Y") - date("m")- date("d") +7);
 $nr=30;
 $tbq="trans2";

if (isset($_GET["page"])) { $page  = $_GET["page"];   }if (!isset($_GET["page"])) { $page  = 1;   } ;
$start_from = ($page-1) * $nr ;

 $tbq="trans2 ";	
 
 $check = mysql_query("SELECT * FROM trans2 WHERE  STR_TO_DATE(date, '%Y-%m-%d') BETWEEN '$ts2' AND '$ts1' ORDER BY date DESC LIMIT $start_from, 30") or die('Query failed: ' . mysql_error());
$check3 = mysql_query("SELECT * FROM trans2  ORDER BY date DESC ")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM trans2 ")or die(mysql_error());
 //

 //$check2 = mysql_query("SELECT * FROM trans2 WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($check3);


  
  
  //echo $email;
include "n2uk_search_proc.php";




echo "<br>";
echo "<br>";


$sql = "SELECT COUNT(id) FROM $tbq"; 
$fl=basename($_SERVER['SCRIPT_NAME']);
include "nav.php";


 
																										

?>


		