<?php   include "agent_p.php"?>

<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>  <?php if (isset($name1)){ echo $name1;} ?> </title>
<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
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
</head>

<body>


	
	
                      
                      
 <table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >
<tr >
<th>No</th>
<th>Date</th>
<th>Transfer Code</th>
<th>Sender</th>
<th>Receiver </th>
<th>Transfer Mode</th>
<th>Amount Sent(£)) </th>
<th>Local Pay Out(N)  </th>
<th>C-<?php if (isset($letter2)){ echo $letter2;} ?>£  </th>
<th>C-Agent £</th>
<th>Total Pay(£)</th>
<th>Status</th>
<th></th>
</tr>

<?php 

  
$email= $_SESSION['email'];



$ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-14 days'));
// set table at the top
$tbq="agent_cust_transaction WHERE agent_email = '".$email."'";	

$link = include "conn.php";include "conn.php"; 
 
 $nr=10;
if (isset($_GET["page"])) { $page  = $_GET["page"];   }if (!isset($_GET["page"])) { $page  = 1;   } ;
$start_from = ($page-1) * $nr ;
  
// $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

include "info.php";
if(($bs_mtls=='1')){	
 $check = mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND agent_email = '".$email." ' ORDER BY dtime DESC LIMIT $start_from, $nr ")or die(mysql_error());
 include "search_proc_ag.php";
 
}

if(($bs_mtls=='0')){	
 $check = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email." '  ORDER BY dtime DESC LIMIT $start_from,$nr ")or die(mysql_error());
 include "search_proc_ag.php";
 
}
 
 

echo "<br>";


$sql = "SELECT COUNT(id) FROM $tbq"; 
$fl=basename($_SERVER['SCRIPT_NAME']);
include "nav.php";
																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                      
                      
                      
                      
                      &nbsp;</td>
                    </tr>
                    </table>
<p>&nbsp;
                  
                  
                  
                  
                  </p></th>
                </tr>
</table>
  </blockquote>
</div>  
<p>&nbsp;</p>




</body>
</html>
