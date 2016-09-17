
<?php  include "admin_p.php";?>
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
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
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
</body>
</html>

<table border=1 style="background-color: #E4F8D1;" align="center" cellpadding="0" cellspacing="0" >




      <tr >
        <th height="31" valign="bottom" bgcolor="#9999FF" scope="row"><span class="style5">
          <label></label>
          <label></label>
          </span><span class="style5">
            <label></label>
            <label></label>
            </span><span class="style5">
            <label></label>
            <label></label>
            </span>
<div align="right">&nbsp;</div> <td colspan="10"><span style="font-size: 14px"><strong style="color: #600; font-size: 18px;"><u> Operation Managers Panel- Level 2</u></strong></span></td></th>	
      </tr>
<tr >
<th>ID</th>
<th rowspan="2">Managers</th>
<th colspan="4"><span style=" color:#30C">Agents</span>  </th>
<th>--</th>
<th colspan="3">Customers  </th>
<th></th>
</tr>

<tr >

<th><span style=" color:#30C"></span></th>
<th> Authorised</th>
<th> Account</th>
<th colspan="3"><span style=" color:#30C">Outstandings Cleared </span> </th>
<th >  ---</th>
<th> Authorised</th>
<th> Account</th>
<th colspan="3">Outstandings Cleared  </th>
<th > </th>


<th></th>
</tr>






<?php 

  
$email= $_SESSION['email'];

$tdate = date("Y-m-d");
 $tto=0;$tto2=0;
$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent WHERE level='3'  ") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());

 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($checkda);
$st=0;
 $num=0;
 
  
 // echo $email;
while($row=mysql_fetch_array($check)){
$num=$num + 1 ;

$id= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];
$ag_name=$row['fname'].$row['lname'];
$ag_name=$row['fname']."  ".$row['lname'];
$admn=$ag_name;
if ($active==1){
	
$status= "Active";}

else { $status= "Suspended";}


echo "</td><td align='center'>";echo $num;
echo "</td><td align='center'>"; echo  ucfirst(strtolower($row['title'])). " ".ucfirst(strtolower($row['fname'])). " ". ucfirst(strtolower($row['mname'])) . " ". ucfirst(strtolower($row['lname'])) ;
//echo "</td><td align='center'>";echo ucfirst(strtolower($row['lname']));
//echo "</td><td align='center'>";echo strtolower ($row['email']);
//echo "</td><td align='center'>";echo $row['dob'];

$ag_clall="ag_clall";

include "info.php";
if(($bs_mtls=='1')){
$checkcst = mysql_query("SELECT agent_email FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND comp = '$ag_name' ")or die(mysql_error());
$checkcst2 = mysql_query("SELECT sender_email FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND comp = '$ag_name' ")or die(mysql_error());}

if(($bs_mtls=='0')){
$checkcst = mysql_query("SELECT agent_email FROM agent_cust_transaction WHERE comp = '$ag_name' ")or die(mysql_error());
$checkcst2 = mysql_query("SELECT sender_email FROM cust_transaction WHERE comp = '$ag_name' ")or die(mysql_error());}

$cxt = mysql_num_rows($checkcst);
$cxt2 = mysql_num_rows($checkcst2);

if(($bs_mtls=='1')){
 $checkos= mysql_query("SELECT cla,type,adst,amt_send FROM clear_trans WHERE  `amt_send` <= $bs_mtl AND cla ='$ag_name' && type='' && adst='' ")or die(mysql_error());
 
   
  $checktdt= mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND comp ='$ag_name' && mc='0' && status='PAID' ")or die(mysql_error());
  
   $checkctdt= mysql_query("SELECT * FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND comp ='$ag_name' && mc='0' && status='PAID' ")or die(mysql_error());

 
 $checkos2= mysql_query("SELECT * FROM clear_trans WHERE  `amt_send` <= $bs_mtl AND cla ='$ag_name' && type='cs' && adst='' ")or die(mysql_error());}
 
 
 if(($bs_mtls=='0')){
 $checkos= mysql_query("SELECT cla,type,adst,amt_send FROM clear_trans WHERE cla ='$ag_name' && type='' && adst='' ")or die(mysql_error());
  
  $checktdt= mysql_query("SELECT * FROM agent_cust_transaction WHERE comp ='$ag_name' && mc='0' &&  status='PAID' ")or die(mysql_error());
  $checkctdt= mysql_query("SELECT * FROM cust_transaction WHERE comp ='$ag_name' && mc='0' &&  status='PAID' ")or die(mysql_error());
 $checkos2= mysql_query("SELECT * FROM clear_trans WHERE cla ='$ag_name' && type='cs' && adst='' ")or die(mysql_error());}
 
 $cxtos = mysql_num_rows($checkos);
  $cxtdt = mysql_num_rows($checktdt);
   $cxtdtc = mysql_num_rows($checkctdt);
 $cxtos2 = mysql_num_rows($checkos2);
 
 $tto=0;$tto2=0;
 while($tt=mysql_fetch_array($checkos)){
	 
	 $tto=$tto + $tt['amt_send'];
	 }
	 
	 while($ttc=mysql_fetch_array($checkos2)){
	 
	 $tto2=$tto2 + $ttc['amt_send'];
	 }
if($level==1 || $level==2){$ac='admin_pay_agent.php';$cc="admin_pay_agent.php";} if ($level==3){$ac="#"; $cc="#";}

echo "</td><td align='center'>";echo "<em><a href='admin_lv2_trans.php?ag_name=$ag_name'> View $cxt  </a></em>";

echo "</td><td align='center' bgcolor='orange'>";echo "<em style=' color:#fffff '><a href='admin_account.php?ag_name=$ag_name'> Accounts $cxtdt  </a></em>";

echo "</td><td align='center'>";echo "<em><a href='admin_lv2_outs.php?ag_name=$ag_name'> Clear   $cxtos (£$tto)  </a></em>";

echo "</td><td align='center'>";echo "<em><a href='$ac?ag_name=$ag_name && tto=$tto & adapll=adapll & admn=$admn '> Clear All (£$tto)</a></em>";

echo "</td><td align='center'>";echo "--";


echo "</td><td align='center'>";echo "<em><a href='admin_lv2_cust_trans.php?ag_name=$ag_name'> View $cxt2 </a></em>";
echo "</td><td align='center' bgcolor='orange'>";echo "<em style=' color:#fffff '><a href='admin_account_cust.php?ag_name=$ag_name'> Account $cxtdtc</a></em>";

echo "</td><td align='center'>";echo "<em><a href='admin_lv2_cust_outs.php?ag_name=$ag_name'> Clear   $cxtos2 (£$tto2)  </a></em>";
echo "</td><td align='center'>";echo "<em><a href='$cc?ag_name=$ag_name && tto=$tto & adapllc=adapllc & admn=$admn '> Clear All (£$tto2)</a></em>";

echo "</td></tr>";

}

echo "</table>";


 


																										

?>

<?php
		echo "<div align='center'>";
		$checkov = mysql_query("SELECT * FROM clear_trans WHERE adst='' ")or die(mysql_error());
$top=0;
while($ags = mysql_fetch_array($checkov))
{$top = $top + $ags['amt_send'];}
//echo "</td><td align='center'>";echo "<strong>";echo " Overall Outstanding : ";echo "£"; echo "</stron>";echo number_format($top,2) ;


		
		echo "</div>";
		 
		 
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
		<div align="center">
		 </div> </body>
		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		