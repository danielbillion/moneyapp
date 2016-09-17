
<?php include "admin_p.php";
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>



<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
	function n2uk_lookup(inputString) {
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("n2uk_rpc.php", {queryString: ""+inputString+""}, function(data){
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
<link href="style2.css" rel="stylesheet" type="text/css">
<link href="" type="text/css" rel="stylesheet" />
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



.faint2 {	color: #CCC;
	font-size: 11px;font-weight: bold; alignment-adjust:central;
}


-->
</style>
</head>

<body>



<div align="left" class="faint">
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
    
    
  <table width="200" border="0" align="right" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td><span class="style1s">Search naija2Uk Sender</span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="faint2"  id="inputString" onFocus="this.value=''" onBlur="fill();" onKeyUp="n2uk_lookup(this.value);" value="first name,last name & phone no	" size="38"/>
                    
                    <div class="suggestionsBox" id="suggestion" style="display: none;">
      <img src="upArrow.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
      <div class="suggestionList" id="autoSuggestionList">
      &nbsp;
                    
                    </div></div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                    </td>
                  </tr>
  </table>
                
                
                
    
    
  <table width="609" height="194" border="0" align="center">
  
    <tr>
      <td width="603" height="46">
        <table style="background-color: #FFC;" align="center" cellpadding="0" cellspacing="0" width="800" border="1">
          <caption>
            <em>N2UK Customers
             
            </em>
          </caption>
          <tr>
            <th>No </th>
            <th>ID </th>
            <th>Sender </th>
            <th>Mobile No</th>
            <th>Sender Since</th>
            <th>Cancel</th>
            <th>Create Recipient</th>
            <th>Edit Profile </th>
            <th>View </th>
          </tr>
          <?php 

	
  
  
//$email= ($_SESSION['email']);

$email=  ($_SESSION['email']);

$link = include "conn.php";
 include "conn.php";
 $check = mysql_query("SELECT * FROM trans2_customer") or die('Query failed: ' . mysql_error());
 
 if(isset($_GET['custid'])){
 $checkac = mysql_query("SELECT * FROM trans2_customer WHERE custid='$_GET[custid]'  ORDER BY fname  ")or die(mysql_error());
 }
 
 else{
 $checkac = mysql_query("SELECT * FROM trans2_customer  ORDER BY fname  ")or die(mysql_error());
 }
 
 
 
 $num=0;
$table_array = mysql_fetch_array($check);


 
while($row=mysql_fetch_array($checkac)){

$c_name=$row['fname']." ". $row['lname'];
$fname=trim($row['fname']);
$lname=trim($row['lname']);
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
$sender=$row['fname']. " ". $row['lname'];
$num=$num+1;
$dlac="dlac";
$custid=$row['custid'];
$cstd="cstd";

echo "</td><td align='left'>";echo $num;
echo "</td><td align='left'>";echo $row['custid'];
echo "</td><td align='left'>";echo ucfirst(strtolower($row['title']))."  ".ucfirst(strtolower($row['fname']))."  ".ucfirst(strtolower($row['lname']));
echo "</td><td align='left'>";echo $row['mnumber'];
echo "</td><td align='left'>";echo $row['date_reg'];

echo "</td><td align='left'>";echo "<strong><a href='n2uk_pay.php?c_email=$c_email & c_name=$c_name & address=$address & s_phone=$s_phone & cstd=$cstd & custid=$custid & s_mphone=$s_mphone''> Cancel </a></strong>";


echo "</td><td align='left'>";echo "<strong><a href='n2uk_receiver.php?c_email=$c_email & c_name=$c_name & address=$address & s_phone=$s_phone & custid=$custid & s_mphone=$s_mphone''> Create Recipient </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='n2uk_edit.php?c_email=$c_email & c_name=$c_name & town=$town & county=$county & country=$country & postcode=$postcode & address=$address & s_phone=$s_phone & s_mphone=$s_mphone  & custid=$custid'> Modify Profile </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='n2uk_cust_receivers_list.php?fname=$fname & lname=$lname & c_email=$c_email & c_name=$c_name & town=$town & county=$county & country=$country & postcode=$postcode & address=$address & s_phone=$s_phone & s_mphone=$s_mphone  & custid=$custid'> View </a></strong>";

echo "</td><td align='left'>";echo "<strong><a href='n2uk_send2.php?fname=$fname & lname=$lname & c_email=$c_email & c_name=$c_name & town=$town & county=$county & country=$country & postcode=$postcode & address=$address & s_phone=$s_phone & s_mphone=$s_mphone  & custid=$custid'> Transfer Now </a></strong>";


//echo "</td><td align='left'>";echo "<em><a href='admin_pay_agent.php?$dlac=$dlac & age_email=$age_email & sender=$sender &c_ag_email=$c_ag_email '> Delete </a></em>";
//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach ID </a></strong>";
//echo "</td><td align='left'>";echo "<strong><a href='#?c_email=$c_email & c_name=$c_name'> Attach Address </a></strong>";
echo "</td></tr>";
}


echo "</table>";
//

 

	
	


																									

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
