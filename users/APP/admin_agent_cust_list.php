
<?php  include "admin_p.php";?>

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
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 18px;
}
.style3 {font-size: 10px}
-->
</style>
</head>

<body>
</body>
</html>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" >

<caption><EM>Your customers basic for Agents</EM></caption>

<tr >
<th>NO</th>

<th>Sender Name</th>

<th>Mobile No</th>
<th>Beneficiaries</th>

<th>Sender Since</th>
<th>View </th>
<th>Modify </th>
<th>Delete </th>







</tr>

<?php //session_start();


if (isset($_GET['ag_email']))
				
	{			

$ag_email= $_GET['ag_email'];

}
  
//$email= ($_SESSION['email']);

$email= ($_SESSION['email']);

$link = include "conn.php";
 include "conn.php";  
 $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 
 if(!isset($_GET['c_email'])){
 
 $checkadc = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$ag_email' ")or die(mysql_error());
 }
 
  
 if(isset($_GET['c_email'])){
 $c_email=$_GET['c_email'];
 $checkadc = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$ag_email' && email='$c_email' ")or die(mysql_error());
 }
 
 $num=0;
$table_array = mysql_fetch_array($check);
if(!$table_array) {
   
  //
 ($msg = 'You have not created any  new customer <a href="cust_agent_new_customer.php" target="mainframe">click here start </a>');

		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
  echo "<u>";
  echo  strtoupper($_GET['fname']). strtoupper($_GET['lname']); echo ": ";
   // echo $email;
	  echo "(AGENT)";

  echo "</u>";while($row=mysql_fetch_array($checkadc)){



$id= "Kzl"."1100".$row['id'];
$id2= $row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$mname=$row['mname'];
$c_ag_email=$row['email'];
$age_email=$row['email'];
$ag_email=$row['agent_email'];
$dob=$row['dob'];
$mnum=$row['mnumber'];
$pnum=$row['pnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$sender=$row['fname']. " ". $row['lname'];
$dlac="dlac";

$num=$num+1;
echo "</td><td align='left'>";echo "<input name=ck[] type='checkbox' id=ck[] value='$id2' />";echo $num;
echo "</td><td align='left'>";echo ucfirst(strtolower($row['lname']))."  ". ucfirst(strtolower($row['fname']));
echo "</td><td align='left'>";echo $row['mnumber'];
echo "</td><td align='left'>";echo $row['date_reg'];

 $checkpc = mysql_query("SELECT * FROM agent_cust_receiver WHERE agent_cust_email= '$c_ag_email' ORDER BY b_fname ")or die(mysql_error());
 $crr=mysql_num_rows($checkpc);
 
echo "</td><td align='left'>";echo "<strong><a href='admin_agent_cust_receivers_list.php?fname=$fname & lname=$lname & c_ag_email=$c_ag_email & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> Receivers($crr) </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='admin_agent_cust_profile.php?fname=$fname & lname=$lname & c_ag_email=$c_ag_email & ag_email=$ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '> View Full Profile </a></strong>";


echo "</td><td align='left'>";echo "<strong><a href='admin_agent_cust_edit.php?fname=$fname & lname=$lname & mname=$mname & c_ag_email=$c_ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode '>Modify Profile </a></strong>";

echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?fname=$fname & lname=$lname & c_ag_email=$c_ag_email & dob=$dob & mnum=$mnum & pnum=$pnum & address=$address & postcode= $postcode & $dlac=$dlac & age_email=$age_email & sender=$sender '> Delete </a></em>";

//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";
echo "</td></tr>";


}
	// submit for sms & email
echo "</td><td colspan='2'  align='center'>";echo "Selectt All"."<input type='checkbox' class='shout-btn2' onchange='checkAll(this)' />";
echo "</td><td colspan='6' align='center'>";echo"<input type='submit' class='shout-btn2' value='Send Email / SMS' name='payt'/>";
echo "</table>";
//

 }
}
																										

if(isset($_POST['payt']) && !empty($_POST['ck']) ){
	$paytm3=$_POST['ck'];
	
	$sumtv=0;
	//foreach($paytm as $re){
	//$check_stv = mysql_query("SELECT * FROM agent_cust_transaction WHERE receiptno = '$re'  ")or die(mysql_error());
	//while($row_stv=mysql_fetch_array($check_stv)){ $sumtv= $sumtv + $row_stv['total'];}
		//}
	$_SESSION['paytm3']=$_POST['ck'];
	echo" <script type='text/javascript'> {window.location='admin_msg.php?paytm3=$paytm  ' }</script> ";
					 
					
						}

?>


	</form>	
		