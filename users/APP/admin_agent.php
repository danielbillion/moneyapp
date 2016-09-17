
<?php  include "admin_p.php";include "info.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<script>
 function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }

</script>
<style type="text/css">
<!--
body {
	
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

.shout-btn2{
						padding:1px;
						margin-bottom:5px;
						width:80%;
						margin:1 auto;
						color: #FFFFFF;
						background: #06C;
						font-size:15px;	
						cursor:pointer;
						-webkit-border-radius: 10px;
						border-radius:10px;
						}
</style>
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table border=1 style="background-color:#CCCCFF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM>Your Agents Till Date</EM></caption>


<tr >
<th>ID</th>
<th>Name</th>



<th> Pro </th>


<th>  C-Tr  </th>

<th>Search</th>
<?php include "info.php";

if ($level=="1" || $level=="2"){
echo "<th>C-Pay</th>";
echo "<th>C-ID</th>";
echo"<th> M-T </th>";
echo" <th>Cust  </th>";
echo "<th> Edit </th>";	
echo "<th> S-r</th>";
echo "<th> Status</th>";
echo "<th>Ac</th>";
echo "<th>Can</th>";
echo "<th>M-Cr</th>";

	if($ecredit==1){
	echo "<th>Credit</th>";}

 	if (isset($letter1)){ echo "<th>"; echo "C%-$letter1/A" ; echo "</th>";}

 	if (isset($letter1)){ echo "<th> $letter1-Com</th>";}

echo "<th>AT-Com</th>";

}
?>

<th>Pendin-C</th>
<th>TP</th>
<th>TPE</th>



<th></th>
</tr>






<?php 

 $ck=array(); 
$email= $_SESSION['email'];
$stc="stc";
$cxt=0;
$ag_del="ag_del";
$link = include "conn.php";
 include "conn.php";  
if(!isset($_GET['ag_email'])){

 $checkgh= mysql_query("SELECT * FROM agent  ORDER BY lname DESC") or die('Query failed: ' . mysql_error());}
 
 if(isset($_GET['ag_email'])){
$ag_email=$_GET['ag_email'];
 $checkgh= mysql_query("SELECT * FROM agent WHERE email='$ag_email'  ORDER BY lname DESC") or die('Query failed: ' . mysql_error());}
 
 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $checkda = mysql_query("SELECT * FROM agent_cust_transaction")or die(mysql_error());
 $checkts = mysql_query("SELECT * FROM agent ")or die(mysql_error());
  $check_ag = mysql_query("SELECT * FROM new_customer  ") or die('Query failed: ' . mysql_error());
//$table_array = mysql_fetch_array($check);

 $num=0;
  
  
 // echo $email;
while($rec=mysql_fetch_array($checkgh)){
$num=$num + 1 ;

$id= $rec['id'];
$fname=$rec['fname'];
$lname=$rec['lname'];
$ag_email=$rec['email'];
$dob=$rec['dob'];
$mnum=$rec['mnumber'];
$pnum=$rec['pnumber'];
$address=$rec['address'];
$postcode=$rec['postcode'];
$active=$rec['active'];
$rs=$rec['agrs'];
$cred=$rec['credit'];
$youknow=$rec['youknow'];
$lev=$rec['level'];
$comb=$rec['comb'];
$coma=$rec['coma'];
$cust_id_sta=$rec['cust_id_sta'];
if ($active==1){$status= "Active";}
if ($active==-1){$status= "Limit";}
if ($lev==3){$status= "Ad 2";}
if ($active==0){$status= "sus";}


echo "</td><td align='left'>";echo "<input name=ck[] type='checkbox' id=ck[] value='$id' />";echo $num;
echo "</td><td align='left'>"; echo  ucfirst(strtolower($rec['title'])). " ".ucfirst(strtolower($rec['fname'])). " ". ucfirst(strtolower($rec['mname'])) . " ". ucfirst(strtolower($rec['lname'])) ;
//echo "</td><td align='left'>";echo ucfirst(strtolower($rec['lname']));
//echo "</td><td align='left'>";echo strtolower ($rec['email']);
//echo "</td><td align='left'>";echo $rec['dob'];



echo "</td><td align='left'>";echo "<em><a href='admin_agent_profile.php?fname=$fname & lname=$lname & youknow=$youknow & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> V-Fp  </a></em>";







echo "</td><td align='left'>";echo "<em><a href='admin_agent_cust_trans_report.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> View-T </a></em>";	
/*
echo "</td><td align='left'>";echo "<em><a href='admin_agent_commission.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> Ag-C </a></em>"; */

//echo "</td><td align='left'>";echo $status ;





// calculate total unpaid of agent commision
$checkagp = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' && agent_ps='np' && status='PAID' ")or die(mysql_error());
$tnp=0;
while($agct = mysql_fetch_array($checkagp))
{$tnp = $tnp + $agct['com_a'];}
$ag_pay_cl="ag_pay_cl";


echo "</td><td align='left'>";echo "<em><a href='admin_search_trans_a.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & ag=1 & tnp=$tnp'>Search </a></em>";


// calculating total Paid to Agent commission
$checknup = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' && (status=' Pending' || status='SUSPENDED' || status='UNPAID')")or die(mysql_error());
$checknu = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' && status='PAID'")or die(mysql_error());
$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$ag_email' && agent_ps='yp'  ")or die(mysql_error());



/* Exclusive View for Main adminstrator begin here ****************************************************/

if ($level=="1" || $level=="2"){
	
echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_pay_cl=$ag_pay_cl & ag_email=$ag_email & dob=$dob & tnp=$tnp'>Pay-it </a></em>";

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_c_id=ag_c_id & ag_email=$ag_email & dob=$dob & tnp=$tnp'>Set- $cust_id_sta </a></em>";


echo "</td><td align='left'>";echo "<em><a href='admin_agent_mt.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> MT  </a></em>";


 $checkcst = mysql_query("SELECT agent_email FROM agent_new_customer WHERE agent_email = '$ag_email'")or die(mysql_error());
$cxt = mysql_num_rows($checkcst);
//{$cxt = $cxt + 1 ;}

echo "</td><td align='left'>";echo "<em><a href='admin_agent_cust_list.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> V-$cxt </a></em>";
	
echo "</td><td align='left'>";echo "<em><a href='admin_agent_edit.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Mod  </a></em>";



echo "</td><td align='left'>";echo "<em><a href='admin_sr.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> $rs</a></em>";

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & stc=$stc '> $status</a></em>";

echo "</td><td align='left'>";echo "<em><a href='admin_agent_operation.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & ag=1 & tnp=$tnp'>V </a></em>";



echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob  & & ag_del=$ag_del'>Cnl </a></em>";

if($ecredit==1){
	if($cred ==""){ echo  "</td><td align='center'>";echo "<em><a href='admin_credit.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & ag=1 & tnp=$tnp'>Non</a></em>";} else{
echo "</td><td align='center'>";echo "<em><a href='admin_credit.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & ag=1 & tnp=$tnp'> $cred </a></em>";}

}

/* Modify Agent Commission Rate */
echo  "</td><td align='center'>";echo "<em><a href='admin_com_range.php?id=$id & fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & tnp=$tnp & scp=scp & ag_email=$ag_email'>M-Cr</a></em>";
/* Modify Agent Commission Rate */

/* Set Commission % between business and Agent */
if($comb=="" && $coma==""){echo  "</td><td align='center'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & tnp=$tnp & scp=scp & ag_email=$ag_email'>Default</a></em>";} else{
echo "</td><td align='center'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob  & tnp=$tnp & scp=scp & ag_email=$ag_email'> $comb/$coma </a></em>";}


$total_cust_com_a=0;$total_cust_com_d=0;
while($sa = mysql_fetch_array($check1))
{$total_cust_com_a = $total_cust_com_a + $sa['com_a'];$total_cust_com_d = $total_cust_com_d + $sa['com_d'];}

echo "</td><td align='left'>";echo  "<strong>";echo number_format($total_cust_com_d, 2) ;echo" </strong>";
echo "</td><td align='left'>";echo "<strong>"; echo number_format($total_cust_com_a, 2);echo" </strong>";

}
/* Exclusive View for Main adminstrator end here ************************************************** */







$numtra=0;$npe=0;
while($nup = mysql_fetch_array($checknup))
{$npe = $npe + 1;}

while($nu = mysql_fetch_array($checknu))
{$numtra = $numtra + 1;}

echo "</td><td align='left'>";echo "<strong>";  echo number_format($tnp, 2) ; echo  "</strong>";
echo "</td><td align='center'>";echo "<strong>"; echo" </strong>";echo $numtra; echo " </strong>";
echo "</td><td align='center'>";echo "<strong>"; echo" </strong>";echo $npe; echo " </strong>";






echo "</td></tr>";

} 	// submit for sms & email
echo "</td><td colspan='2'  align='center'>";echo "Selectt All"."<input type='checkbox' class='shout-btn2' onchange='checkAll(this)' />";
echo "</td><td colspan='18' align='center'>";echo"<input type='submit' class='shout-btn2' value='Send Email / SMS' name='payt'/>";
echo "</table>";
$paytm=array();
if(isset($_POST['payt']) && !empty($_POST['ck']) ){
	$paytm=$_POST['ck'];
	$sumtv=0;
	$_SESSION['paytm']=$_POST['ck'];
	echo" <script type='text/javascript'> {window.location='admin_msg.php?paytm=$paytm  ' }</script> ";
					 
					
						}

																									

?>




<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} 
		
		
		?></form>
		<html>
		<body>
		<br />
		<div align="center">
		 <caption><EM><b>AT-Com</b> = Agent Total Paid Commission  </EM></caption>, <caption><EM><b>Pending-C </b>= Unpaid / Outstanding, <caption><EM><b>C-Pay </b>= Confirm Payment Now, <br /><br /><caption><EM> <b>TPE</b>= Total Pending  </EM></caption>,<b>TP</b>= Total Paid  </EM></caption>,
         <caption><EM> <b>S-r</b>= Special Rate(Click to Set)  </EM></caption>,<caption><EM> <b>V</b>= View  </EM></caption>,<caption><EM> <b>Can</b>= Cancel or Delete  </EM></caption>,<caption><EM> <b>C%</b>= Commission %-<?php include "info.php"; if (isset($letter2)){ echo '('.$letter2.'/Agent'.')';}?>   </EM></caption><br /><br />
         
         <caption><EM> <b>C-Tr/View-T</b>= View Transactions  </EM></caption>,<caption><EM> <b>V-Fp</b>= View Profile  </EM></caption>,
         <caption><EM> <b>C-ID / Set 1 Unset 0</b>= Set Agent(customer) need to upload  </EM></caption>,
         </div> </body>
		
		
		</body>
		

	
		
	
	
	
	
	
	

		
		