<?php  include "admin_p.php"?>

<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #CCC;
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
	color: #F00;
}
a:visited {
	text-decoration: none;
	color: #906;
}
a:hover {
	text-decoration: none;
	color: #00F;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFF33;
}
.style19 {
	color: #FFFFFF;
	font-size: 9px;
}
.style20 {
	font-size: 9.5px;
	color: #FFFFFF;
}
ag {
	color: #F00;
}
rt {
	color: #F00;
}
.nw {
	color: #F00;
}
.style13 {color: #330000; font-weight: bold; }
.style14 {	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style15 {	color: #FF0000;
	font-size: 10px;
}
.style171 {color: #0000FF}
.style191 {color: #660033}
.style201 {	font-size: 12px;
	font-style: italic;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style11 {	color: #FFFFFF;
	font-size: 12px;
}
.style11 {	color: #FFFFFF;
	font-size: 18px;
}
.style2 {	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
.style16 {	color: #CCCCCC;
	font-size: 12px;
}
.style21 {	font-size: 18px;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style41 {	font-size: 13px;
	color: #0000FF;
}
.style6 {font-size: 11px}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
-->
</style>
</head>

<body>



<STYLE type="text/css">
 /* List of address */
.SPLAddressListSt{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    margin-top: 0;
    margin-bottom: 0;
    width: 80mm;}
/* Line under the list box when address found */
.SPLAddressListStBottomLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* Line if nothing is found */
.SPLAddressListStErrorLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* License information line */
/* Shown only for "Internal" Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
											
	
 	                      <table border=1 style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" >

<caption><EM><?php if (isset($_GET['c_name'])) echo strtoupper($_GET['c_name']); ?> Receiver Profile</EM></caption>

<tr >
<th>No</th>

<th>First Name</th>

<th>Last name</th>

<th>Phone Number</th>

<th>Proof of Identity</th>

<th>Mode</th>

<th>Bank </th>

<th>Sort /Acc No</th>
<th>Nig Bank  </th>
<th>Nig Act No  </th>
<th>Act Name  </th>



<th> Del </th>

<th> Edit </th>

<th>Send  </th>


</tr>



<?php

 $opdr	="opdr";
//$email= ($_SESSION['email']);
$email= ($_SESSION['email']);
$fname=trim($_GET['fname']);
$lname=trim($_GET['lname']);
$age_email= ($_SESSION['email']);
$c_name = ($_GET['c_name']); // Set email variable
$address = ($_GET['address']);
$postcode = ($_GET['postcode']);
$town = ($_GET['town']);
$county = ($_GET['county']);
$country = ($_GET['country']);
$c_email = ($_GET['c_email']); // Set email variable
$s_phone = ($_GET['s_phone']); // Set email variable
$s_mphone = ($_GET['s_mphone']); // Set email variable
$custid = ($_GET['custid']); // Set email variable

$num=0;
echo $c_email;

//$email= ($_GET['email']);
$link = include "conn.php";
 include "conn.php"; $dlacr="dlacr";
 
 $check = mysql_query("SELECT * FROM agent_cust_receiver") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM  trans2_receiver WHERE custid= '$custid' ")or die(mysql_error());
 $checkpc = mysql_query("SELECT * FROM  trans2_receiver WHERE custid= '$custid'  && b_transfer = 'Pick Up' ORDER BY b_fname ")or die(mysql_error());
 $checkba = mysql_query("SELECT * FROM  trans2_receiver WHERE custid= '$custid'  && b_transfer = 'Bank Account' ORDER BY b_fname ")or die(mysql_error());
$table_array = mysql_fetch_array($check0);

if(!$table_array) {
   
  //
 $msg = "You have not created any receiver <a href='n2uk_receiver.php?c_email=$c_email & c_name=$c_name & custid=$custid'>click here start </a>";

		}
			
			

else {
if(isset($table_array) && $table_array[0] != "") {
 
while($rowpc=mysql_fetch_array($checkpc)){


$num=$num+1;
echo "</td><td align='center'>";echo $num;
$r_fname=ucfirst(strtolower($rowpc['b_fname']));
$r_lname=ucfirst(strtolower($rowpc['b_lname']));
$r_phone=$rowpc['b_phone'];
$r_transfer=$rowpc['b_transfer'];
$r_pbank=$rowpc['b_pbank'];
$r_idtype=$rowpc['b_idtype'];
$sender= $rowpc['b_fname']." " .$rowpc['b_lname'];
$nbank=$rowpc['nbank'];
$act_name=$rowpc['act_name'];
$nbankno=$rowpc['nbankno'];
$r_uk_abank=$rowpc['b_abank'];
$r_uk_actno=$rowpc['b_actno'];

echo "</td><td align='left'>";echo "<strong><a href='#?r_fname=$r_fname  & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype & c_email=$c_email & c_name=$c_name'> $r_fname </a></strong>";
echo "</td><td align='left'>";echo ucfirst(strtolower($rowpc['b_lname']));
echo "</td><td align='left'>";echo $rowpc['b_phone'];	
echo "</td><td align='left'>";echo $rowpc['b_idtype'];
echo "</td><td align='left'>";echo $rowpc['b_transfer'];
echo "</td><td align='left'>";echo $rowpc['b_pbank'];
echo "</td><td align='left'>";echo "None";
echo "</td><td align='left'>";echo $rowpc['nbank'];
echo "</td><td align='left'>";echo $rowpc['nbankno'];
echo "</td><td align='left'>";echo $rowpc['act_name'];

//echo "</td><td align='left'>";echo $rowpc['date'];

echo "</td><td align='center'>";echo "<em><a href='n2uk_pay.php?r_fname=$r_fname  & s_mphone=$s_mphone & r_lname=$r_lname& opdr=$opdr & c_name=$c_name'> Del</a></em>";

echo "</td><td align='center'>";echo "<em><a href='#?r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & r_idtype=$r_idtype & r_fname=$r_fname & r_lname=$r_lname & sender=$sender &age_email=$age_email & c_name=$c_name'> Edit</a></em>";

$c_name = ($_GET['c_name']); // Set email variable
$c_email = ($_GET['c_email']); // Set email variable

// send now for pickup

echo "</td><td align='left'>";echo "<strong><a href='n2uk_send2.php?fname=$fname & lname=$lname & r_fname=$r_fname & s_phone=$s_phone & s_mphone=$s_mphone & r_lname=$r_lname & c_email=$c_email & c_name=$c_name & r_phone=$r_phone & r_transfer=$r_transfer & r_pbank=$r_pbank & address=$address & postcode=$postcode & town=$town & county=$county & country=$country & r_idtype=$r_idtype & c_name=$c_name & custid=$custid & nbank=$nbank  & act_name=$act_name & nbankno=$nbankno & r_uk_abank=$r_uk_abank & r_uk_actno=$r_uk_actno '> Send </a></strong>";

//echo "</td><td align='left'>";echo "<a href='cust_transaction.php'>Send Money</a>";
//<a href="mysession_tracker.php?session=3&user=me"></a>;
//$_SESSION[b_fname]= $rowpc['b_fname'];
//$rowpc = mysql_fetch_assoc($check1);
//$_SESSION['b_fname'] = $rowpc;
echo "</td></tr>";
}


while($rowba=mysql_fetch_array($checkba)){
$num=$num+1;
echo "</td><td align='center'>";echo $num;

$r_fname=ucfirst(strtolower($rowba['b_fname']));
$r_lname=ucfirst(strtolower($rowba['b_lname']));

$r_phone=$rowba['b_phone'];
$r_transfer=$rowba['b_transfer'];
$r_abank=$rowba['b_abank'];
$r_actno=$rowba['b_actno'];
$sender= $rowba['b_fname']." " .$rowba['b_lname'];
$r_transfer=$rowba['b_transfer'];
$nbank=$rowba['nbank'];
$act_name=$rowba['act_name'];
$nbankno=$rowba['nbankno'];
$r_idtype="";
$r_uk_abank=$rowba['b_abank'];
$r_uk_actno=$rowba['b_actno'];



echo "</td><td align='left'>";echo "<strong><a href='#.php?r_fname=$r_fname & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno & c_email=$c_email & c_name=$c_name'> $r_fname </a></strong>";
echo "</td><td align='left'>";echo ucfirst(strtolower($rowba['b_lname']));
echo "</td><td align='left'>";echo $rowba['b_phone'];
echo "</td><td align='left'>";echo "Not required";
echo "</td><td align='left'>";echo $rowba['b_transfer'];
echo "</td><td align='left'>";echo $rowba['b_abank'];
echo "</td><td align='left'>";echo $rowba['b_actno'];
echo "</td><td align='left'>";echo $rowba['nbank'];
echo "</td><td align='left'>";echo $rowba['nbankno'];

echo "</td><td align='left'>";echo $rowba['act_name'];

//echo "</td><td align='left'>";echo $rowba['date'];


echo "</td><td align='center'>";echo "<em><a href='n2uk_pay.php?r_fname=$r_fname & c_name=$c_name & s_mphone=$s_mphone & r_lname=$r_lname &  opdr=$opdr '> Del </a></em>";

echo "</td><td align='center'>";echo "<em><a href='#?r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_idtype=$r_idtype & r_fname=$r_fname & r_lname=$r_lname & sender=$sender  & c_name=$c_name '> Edit </a></em>";


//send now for bank account
echo "</td><td align='left'>";echo "<strong><a href='n2uk_send2.php?fname=$fname & lname=$lname & r_fname=$r_fname & s_phone=$s_phone & s_mphone=$s_mphone & r_lname=$r_lname & r_phone=$r_phone & r_transfer=$r_transfer & r_abank=$r_abank & r_actno=$r_actno & c_email=$c_email & c_name=$c_name & address=$address & postcode=$postcode & town=$town & county=$county & country=$country & s_phone=$s_phone & s_mphone=$s_mphone  & c_name=$c_name & custid=$custid & nbank=$nbank & act_name=$act_name & nbankno=$nbankno & r_uk_abank=$r_uk_abank & r_uk_actno=$r_uk_actno'> Send</a></strong>";
echo "</td></tr>";

}

echo "</table>";
//

 }
 

}
																										

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>


                         
                      </table>
                      </div></td>
                    </tr>
<tr>
                      <td height="158" colspan="5">&nbsp;</td>
                    </tr>
                  </table>
                  <p>&nbsp;</p></th>
                </tr>
    </table>
  </blockquote>
</div>  
<p>&nbsp;</p>
</body>
</html>
