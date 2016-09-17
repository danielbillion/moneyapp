<?php require_once('calendar/classes/tc_calendar.php');?>
<script language="javascript" src="calendar/calendar.js"></script>
<?php include "admin_p.php";?>

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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="fvr.jpg" type="image/jpeg" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 18px;
}
.style2 {font-size: 11px}
-->
</style>
</head>

<body>
<table width="331" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="327"><div align="center" style="font-weight: bold; font-size: 18px;">Debtors Diary </div></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="517" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="5" style="text-align: right; font-weight: bold;"><hr />
            <div align="left"></div></td>
        </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td colspan="2">
          
          <?php
		   {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
		   
		   
		  
	if ( isset($_POST['Submit']) ){
		$entry=$_POST['entry']; 
		$amt=$_POST['amt']; 
			//$email=$_GET['ag_email'];
			//$fname=$_GET['fname'];
			//$lname=$_GET['lname'];
			$stat="uc";
			
		//$banke=$_POST['bank'];
		//$dtime=date('Y-m-d H:i:s');
		include "conn.php";include "time.php";
		mysql_query("INSERT INTO diary_cust(mname,amount,status,dtime)

 VALUES ('$entry','$amt','$stat','$theDate') ") or die(mysql_error());
 
 echo" <script type='text/javascript'>
 
 {
 window.alert(' New Entry Successsful')
window.location='admin_diary.php';
 }
</script> ";
		
	} 
		   
		   
		   
		   
		   $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2010, 2026); $myCalendar->dateAllow('2010-01-01', '2026-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 	
		  
		   ?>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          &nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="96" style="text-align: right">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td width="110" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td style="text-align: right">Entry Name</td>
          <td colspan="2"><input name="entry" type="text" size ="30" id="entry" value="" /></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td style="text-align: right">Amount</td>
          <td colspan="2"><input name="amt" type="text" size ="30" id="amt" value="" /></td>
          <td colspan="2"><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
        </tr>
        <tr>
          <td style="text-align: right">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        </table>
      <label for="entry"></label>
    </form></td>
  </tr>
</table>
</body>
</html>

<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Diary</EM></caption>


<tr >
<th>ID</th>
<th>Date</th>
<th>Entry Name</th>
<th>Amount</th>


<th></th>
</tr>






<?php 

  
//$email= $_GET['ag_email'];



$link = include "conn.php";
 include "conn.php";
 $check = mysql_query("SELECT * FROM diary_cust WHERE status='uc' ORDER BY dtime") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM diary_cust ")or die(mysql_error());
// $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 //$checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());	
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
//$table_array = mysql_fetch_array($checkda);
$totd=0;
 $num=0;
  //if(isset($table_array) && $table_array[0] != "") {
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;
$totd=$totd + $row['amount'];
if ($row['status']=="uc"){ $status="Owing";}
else {$status="Paid";}

$id= $row['id'];
//$fname=$row['fname'];
//$fname=$row['fname'];
//$lname=$row['lname'];
$dt=date("d-m-Y",strtotime($row['dtime']));
$amount=$row['amount'];
$email=$row['email'];
$entry=$row['mname'];
$cl1="cl1";
echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>";	echo ($dt);
echo "</td><td align='center'>"; echo  ucfirst(strtolower($entry));
//echo "</td><td align='center'>";	echo ucfirst(strtolower($lname));

echo "</td><td align='center'>";	echo number_format(($amount),2)	;
//echo "</td><td align='center'>";	echo ucfirst(strtolower($status));
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
echo "</td><td align='center'>";echo "<em><a href='admin_diary_clear2.php?email=$email & id=$id & amount=$amount & entry=$entry  '> Clear </a></em>";
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];





//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $num </a></em>";
//echo "</td><td align='center'>";echo "<em><a href='admin_agent_profile.php? '> $bank </a></em>";



echo "</td></tr>";
}
echo "</td><td colspan='3' align='center'>";	echo "Total"	;
echo "</td><td colspan='2' align='left'>";	echo "£".number_format(($totd),2)	;



echo "</table>";


 //}


																										

?>




<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} 
		
		
		?>
		<html>
		<body>
		<br />
		
		
		
		</body>
		

	
    
    
    
    
    
    
    
    
		
	
	
	
	
	
	

		
		