
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
<div align="center"><caption>TPT= Todays Paid Transaction</caption></div>
<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >




      <tr >
        <th  valign="bottom" bgcolor="#339933" scope="row"><span class="style5">
          <label></label>
          <label></label>
          </span><span class="style5">
            <label></label>
            <label></label>
            </span><span class="style5">
            <label></label>
            <label></label>
            </span>
          <div align="right">&nbsp;</div> <td colspan="6">         <span style="font-size: 14px"><strong style="color: red; font-size: 18px;"><u> Outstandings  from Agents</u></strong></span></td></th>	
      </tr>
  




<tr >
<th>ID</th>
<th>Name</th>


<th>Outstandings  </th>
<th>Part Paid In </th>
<th colspan="2">  Clear Debts </th>




<th></th>
</tr>






<?php 

  
$email= $_SESSION['email'];

//date("m/d/Y", strtotime($fromMYSQL));
$tdate = date("Y-m-d");
echo $tdate;

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent  ") or die('Query failed: ' . mysql_error());
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $checkda = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $checkts = mysql_query("SELECT * FROM agent WHERE level='0' ")or die(mysql_error());
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
$nv=$row['sta'];
if(($row['sta'])==""){$nv="New Value";}

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
$checkagp = mysql_query("SELECT * FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND agent_email = '$ag_email' && clear='uc'")
or die(mysql_error());

$checkpt = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' AND `amt_send` <= $bs_mtl AND `man_date` = '$tdate'")
or die(mysql_error());}


if(($bs_mtls=='0')){
$checkagp = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' && clear='uc'")or die(mysql_error());

$checkpt = mysql_query("SELECT * FROM agent_cust_transaction WHERE `agent_email` = '$ag_email' AND `man_date` = '$tdate'")or die(mysql_error());}

$tptv=mysql_num_rows($checkpt);
$rn=mysql_num_rows($checkagp);

$tnp=0;
while($ag = mysql_fetch_array($checkagp))
{$tnp = $tnp + $ag['total'];}

if(($row['sta'])==""){$nv="No Value";
echo "</td><td align='center'>";echo number_format($tnp,2) ;
}

if(($row['sta'])!==""){$tnp=$tnp-($row['sta']);
echo "</td><td align='center'>";echo number_format($tnp,2) ;
}

$st=$st + $tnp;


echo "</td><td align='center'>";echo "<em><a href='admin_agent_debtin.php?nv=$nv & fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> $nv </a></em>"; 

echo "</td><td align='center'>";echo "<em><a href='admin_agent_debt.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View To Clear  </a></em>"; echo "($rn)";

echo "</td><td align='center'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & ag_clall=$ag_clall & ag_name=$ag_name & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Clear All </a></em>";

//echo "</td><td align='center'>";echo "<em><a href='admin_agents_tpt.php?fname=$fname & ag_clall=$ag_clall & ag_name=$ag_name & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Accounts-$tptv </a></em>";




echo "</td></tr>";

}

echo "</table>";


 


																										

?>

<?php
		echo "<div align='center'>";
		$checkov = mysql_query("SELECT * FROM agent_cust_transaction WHERE clear='uc'")or die(mysql_error());
$top=0;
while($ags = mysql_fetch_array($checkov))
{$top = $top + $ags['total'];}
echo "</td><td align='center'>";echo "<strong>";echo " Overall Outstanding : ";echo "£"; echo "</stron>";echo number_format($st,2) ;


		
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
		

	
		
	
	
	
	
	
	

		
		