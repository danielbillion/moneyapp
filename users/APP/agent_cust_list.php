<?php include "agent_p.php"?>

<?php
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>




<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					
					
				$('#suggestion').show();
					$('#autoSuggestionList').html(data);
					
						
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
		$('#inputString').val(thisValue);
		$('#inputString2').val(thisValue);
		setTimeout("$('#suggestion').hide();", 200);
	}
</script>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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


.suggestionsBox {
		position: relative;
		left: 30px;
		margin: 10px 0px 0px 0px;
		width: 200px;
		background-color: #212427;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
	}
	
	.suggestionList {
		margin: 0px;
		padding: 0px;
	}
	
	.suggestionList li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
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

.style1300 {
	font-size: 11px;
	font-weight: italic;
	font-family: Georgia, ;
	color: #999;
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



<div align="left">
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
    text-align: left;
    margin-top: 0;
    margin-bottom: 0;
    }
/* Line if nothing is found */
.SPLAddressListStErrorLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    text-align: left;
    margin-top: 0;
    margin-bottom: 0;
    }
/* License information line */
/* Shown only for "Internal" Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: left
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
  
  <script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var b_actno = document.getElementById('b_actno');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
    if(val=='Pick Up')
    {
    b_actno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	
    }
    else
    {
    b_actno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
    }
    }
    </script>
  
  <?php
	if(isset($_GET['c_name']) && !empty($_GET['c_name']) AND isset($_GET['c_email']) && !empty($_GET['c_email']) )
{

	// Verify data
	$c_name = mysql_escape_string($_GET['c_name']); // Set email variable
	$c_email = mysql_escape_string($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
  <table width="609" height="157" border="0" align="center">
    <tr>
      <td width="603" height="94">
        <table style="background-color:#F0F8FF;" align="center" cellpadding="0" cellspacing="0" width="800" border="1">
          <caption>
            <em>Your customers basic Profiles of
              <?php $email= ($_SESSION['email']); echo $email; ?>
            </em>
          </caption>
          <tr>
            <th>No </th>
            <th>Sender </th>
            <th>Mobile No</th>
            <th>Sender Since</th>
            <th>Create Recipient</th>
            <th>View </th>
            <th>Edit Profile </th>
          </tr>
          <?php 

	
  
  
//$email= ($_SESSION['email']);

$email=  ($_SESSION['email']);

$link = include "conn.php";
 include "conn.php";
 
 
$nr=40;
if (isset($_GET["page"])) { $page  = $_GET["page"];   } else { $page=1;  };
$start_from = ($page-1) * $nr ;
$tbq="agent_new_customer WHERE agent_email = '$email'";	
	
 	$check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 	
	if(!isset($_GET['c_email'])){
	$checkac = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$email' ORDER BY date_reg DESC LIMIT $start_from, $nr  ")or die(			mysql_error());}
	
	if(isset($_GET['c_email'])){
		
		$c_email=$_GET['c_email'];
	$checkac = mysql_query("SELECT * FROM agent_new_customer WHERE email='$c_email' ORDER BY date_reg DESC LIMIT $start_from, $nr")or die(			mysql_error());}
	
	
 $num=0;
$table_array = mysql_fetch_array($check);


 
while($row=mysql_fetch_array($checkac)){

$c_name=$row['fname']." ". $row['lname'];
$sender=$row['fname']." ". $row['lname'];
$fname=$row['fname'];
$lname=$row['lname'];
$c_email=$row['email'];
$_SESSION['']=$row['pnumber'];
$s_phone=$row['pnumber'];
$s_mphone=$row['mnumber'];
$address=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

$_SESSION['c_name']=$row['fname']." ". $row['lname'];
$_SESSION['c_email']=$row['email'];
$c_ag_email=$row['email'];
$age_email=$row['email'];

$sender=$row['fname']. " ". $row['lname'];
$num=$num+1;
$dlac="dlac";
echo "</td><td align='left'>";echo $num;
echo "</td><td align='left'>";echo ucfirst(strtolower($row['title']))."  ".ucfirst(strtolower($row['fname']))."  ".ucfirst(strtolower($row['lname']));
echo "</td><td align='left'>";echo $row['mnumber'];
echo "</td><td align='left'>";echo $row['date_reg'];
echo "</td><td align='left'>";echo "<strong><a href='agent_cust_receiver.php?c_email=$c_email & c_name=$c_name & address=$address & s_phone=$s_phone & & s_mphone=$s_mphone''> Create Receiver </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='agent_cust_receivers_list.php?c_email=$c_email & c_name=$c_name & town=$town & county=$county & country=$country & postcode=$postcode & address=$address &fname=$fname & lname=$lname & s_phone=$s_phone & s_mphone=$s_mphone'>Receiver List </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='agent_cust_edit.php?c_email=$c_email & c_name=$c_name'> Edit Profile</a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='agent_send2.php?c_email=$c_email & sender=$sender &fname=$fname & lname=$lname & town=$town & county=$county & country=$country & postcode=$postcode & address=$address & s_phone=$s_phone & s_mphone=$s_mphone'> Send Money </a></strong>";

//echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?$dlac=$dlac & age_email=$age_email & sender=$sender &c_ag_email=$c_ag_email '> Delete </a></em>";
//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";
echo "</td></tr>";
}


echo "</table>";
//

 
  
echo " <br>"; 
$sql = "SELECT COUNT(id) FROM $tbq"; 
$fl=basename($_SERVER['SCRIPT_NAME']);
include "nav.php";

	
	


																									

?>
        </table>
      
      <div align="center"></div></td>
    </tr>
  </table>
</div>
<div align="left"></div>
<blockquote>
     
</body>
</html>
