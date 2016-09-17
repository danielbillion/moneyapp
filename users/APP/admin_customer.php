
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

<caption><EM>Your Customer Details</EM></caption>

<tr >
<th>ID</th>
<th> Name</th>

<th>Modify</th>

<th>Profile </th>
<th>Transaction  </th>
<th>Search  </th>
<th>No Trans  </th>
<th>Commission  </th>
<th>Status  </th>
<th>Can  </th>
<th>SP-R  </th>

<th></th>
</tr>

<?php 

  
$email= $_SESSION['email'];

$csch="csch";
$cust_del="cust_del";


$link = include "conn.php";
 include "conn.php"; 
 if(!isset($_GET['c_email'])){
 $check = mysql_query("SELECT * FROM new_customer  ORDER BY fname") or die('Query failed: ' . mysql_error());}
 
 
  if(isset($_GET['c_email'])){$c_email= $_GET['c_email'];
 
 $check = mysql_query("SELECT * FROM new_customer  WHERE email='$c_email'  ORDER BY fname") or die('Query failed: ' . mysql_error());}

 $check3 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '".$email."' ")or die(mysql_error());
 $check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$email'")or die(mysql_error());
 $checkc = mysql_query("SELECT * FROM new_customer WHERE level='0'  ")or die(mysql_error());
 //$check2 = mysql_query("SELECT * FROM agent_cust_transaction WHERE sender_email = '".$email."' && b_transfer = 'Bank Account' ")or die(mysql_error());
$table_array = mysql_fetch_array($checkc);

 $num=0;

  
 // echo $email;
while($row=mysql_fetch_array($check)){


$id= "Kzl"."1100".$row['id'];
$id2=$row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$ag_email=$row['email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$active=$row['active'];
$rs=$row['agrs'];
$youknow=$row['youknow'];

if ($active==1){

$status= "ACTIVE";}

else { $status= "SUSPENDED";}

$num=$num+1;
echo "</td><td align='left'>";echo "<input name=ck[] type='checkbox' id=ck[] value='$id2' />";echo $num;
echo "</td><td align='left'>"; echo  ucfirst(strtolower($row['title'])). " ".ucfirst(strtolower($row['fname'])). " ". ucfirst(strtolower($row['mname'])) . " ". ucfirst(strtolower($row['lname'])) ;//echo "</td><td align='left'>";echo ucfirst(strtolower($row['lname']));

echo "</td><td align='left'>";echo "<em><a href='admin_cust_edit.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode & id= $id2 '> Modify  </a></em>";//echo "</td><td align='left'>";echo $row['dob'];



echo "</td><td align='left'>";echo "<em><a href='admin_cust_profile.php?fname=$fname & lname=$lname & youknow=$youknow & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View  </a></em>";



echo "</td><td align='left'>";echo  "<em><a href='admin_cust_trans_report.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> View </a></em>";

echo "</td><td align='left'>";echo  "<em><a href='admin_search_trans_c.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> search </a></em>";

$checky = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '$ag_email'  ")or die(mysql_error());
//$result = mysql_query($check1);
$numtra=0;

while($sa = mysql_fetch_array($checky))
{
//$total_cust_com_a = $total_cust_com_a + $sa['total'];
$numtra = $numtra + 1;

}
echo "</td><td align='left'>";echo "<em><a href='admin_agent_commission.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> $numtra </a></em>";

echo "</td><td align='left'>";echo "<em><a href='admin_agent_commission.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> Detail </a></em>";

//echo "</td><td>";echo strtolower($status) ;

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & csch=$csch '>"; echo strtolower($status); echo" </a></em>";

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob & cust_del=$cust_del '>"; echo strtolower("cnl"); echo" </a></em>";


echo "</td><td align='left'>";echo "<em><a href='admin_sr2.php?fname=$fname & lname=$lname & ag_email=$ag_email & dob=$dob '> $rs</a></em>";


echo "</td></tr>";

}

	// submit for sms & email
echo "</td><td colspan='2'  align='center'>";echo "Selectt All"."<input type='checkbox' class='shout-btn2' onchange='checkAll(this)' />";
echo "</td><td colspan='9' align='center'>";echo"<input type='submit' class='shout-btn2' value='Send Email / SMS' name='payt'/>";

echo "</table>";


if(isset($_POST['payt']) && !empty($_POST['ck']) ){
	$paytm=$_POST['ck'];
	

	$_SESSION['paytm2']=$_POST['ck'];
	echo" <script type='text/javascript'> {window.location='admin_msg.php?paytm2=$paytm  ' }</script> ";
					 
					
						}

	
																										

?>



<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
        
        <body>
		<br />
		<div align="center">
		 
         <caption><EM> <b>SP-R</b>= Special Rate  </EM></caption>,<caption><EM> <b>V</b>= View  </EM></caption>,<caption><EM> <b>Can</b>= Cancel  </EM></caption>,
         </div> </body>
		
</form>		