<?php  include "agent_p.php"?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="SPL_AJAX_Full.js"></script>


<?php 

/*
$c_name = ($_GET['c_name']); // Set email variable
$email= ($_SESSION['email']);
$c_email = ($_GET['c_email']); // Set email variable  */

if(isset($_GET['r_fname']) && !empty($_GET['r_fname']) AND isset($_GET['r_lname']) && !empty($_GET['r_lname']) 
AND isset($_GET['r_phone']) && !empty($_GET['r_phone'])AND isset($_GET['r_transfer']) && !empty($_GET['r_transfer'])
AND isset($_GET['r_pbank']) && !empty($_GET['r_pbank'])AND isset($_GET['r_idtype']) && !empty($_GET['r_idtype']))

{



	// Verify data
	$r_fname = ($_GET['r_fname']); // Set email variable
	$r_lname = ($_GET['r_lname']); // Set email variable
	$r_phone = ($_GET['r_phone']);
	$r_transfer = ($_GET['r_transfer']);
	$r_bank = ($_GET['r_pbank']);
	$r_idtype = ($_GET['r_idtype']);
	$c_email = ($_GET['c_email']);
	$c_name = ($_GET['c_name']);
	$s_phone = ($_GET['s_phone']);
	$s_mphone = ($_GET['s_mphone']);
		$address = ($_GET['address']);
		$postcode = ($_GET['postcode']);
		$town = ($_GET['town']);
		$county = ($_GET['county']);
		$country = ($_GET['country']);




	$_SESSION['c_email']= $c_email;
	$_SESSION['c_name']= $c_name;
	$_SESSION['r_fname']= $r_fname;
	$_SESSION['r_lname']= $r_lname;
	$_SESSION['r_phone']= $r_phone;
	$_SESSION['r_transfer']=$r_transfer;
	$_SESSION['r_bank']=$r_bank;
	$_SESSION['r_idtype']=$r_idtype;
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

$_SESSION['r_actno']= "None";
	
	}
	
	
	else 
	{
	
	$r_fname = ($_GET['r_fname']); // Set email variable
	$r_lname = ($_GET['r_lname']); // Set email variable
	$r_phone = ($_GET['r_phone']);
	$r_transfer = ($_GET['r_transfer']);
	$r_bank = ($_GET['r_abank']);
	$r_actno = ($_GET['r_actno']);
	$c_email = ($_GET['c_email']);
	$c_name = ($_GET['c_name']);
	$s_phone = ($_GET['s_phone']);
	$s_mphone = ($_GET['s_mphone']);
	$address = ($_GET['address']);
	$postcode = ($_GET['postcode']);
		$town = ($_GET['town']);
		$county = ($_GET['county']);
		$country = ($_GET['country']);



	$_SESSION['c_email']= $c_email;
	$_SESSION['c_name']= $c_name;
	$_SESSION['r_fname']= $r_fname;
	$_SESSION['r_lname']= $r_lname;
	$_SESSION['r_phone']= $r_phone;
	$_SESSION['r_transfer']=$r_transfer;
	$_SESSION['r_bank']=$r_bank;
	$_SESSION['r_actno']= $r_actno;
	$_SESSION['r_idtype']="None";
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];
	
	


	
	}
	
?>






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
.style2 {
	font-size: 17px;
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
	$c_name = ($_GET['c_name']); // Set email variable
	$c_email = ($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
	<table width="856" height="607" border="0" align="center">
  <tr>
    <td width="14" height="32">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="727"><p align="center"><strong>INSTANT MONEY TRANSFER </strong><strong>&nbsp;With <?php if (isset($name1)){ echo $name1;} ?></strong></p></td>
  </tr>
  <tr>
    <td height="21" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="158" colspan="5"><div align="center">
      <table width="680" height="501" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="583" scope="row"><form id="form1" name="form1" method="post" action="">
            <table width="558" height="448" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th height="30" colspan="2" scope="row"><div align="right"><span class="style3">PROFILE DETAILS</span></div></th>
                <th colspan="2" class="style6 style3" scope="row"><div align="right"><a href="agent_page.php"><em>Return to main page </em></a></div></th>
              </tr>
              <tr>
                <th height="30" colspan="2" scope="row"><div align="left" class="style4">SENDER DETAILS </div></th>
                <th colspan="2" class="style4" scope="row"><div align="left"></div></th>
              </tr>
              <tr>
                <th width="104" height="31" scope="row"><div align="left"><span class="style8">Name</span></div></th>
                <th width="153" scope="row"><span class="style7">
                  <?PHP
			  
			  
			  
			   if(isset($_GET['c_name'])){ echo strtoupper ($_GET['c_name']);}
			 ?>
                </span><span class="style6"> &nbsp;</span></th>
                <th width="112" scope="row">&nbsp;</th>
                <th width="189" scope="row"><span class="style3">QUICK CALCULATOR</span></th>
              </tr>
              <tr>
                <th height="30" class="style7" scope="row"><div align="left"><span class="style8">Phone Numbe</span>r</div></th>
                <th height="30" class="style7" scope="row"><?php
			if( isset($_GET['s_phone'])){ echo $_GET['s_phone'];}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th height="22" colspan="2" class="style4" scope="row">&nbsp;</th>
                <th width="112" class="style4" scope="row">&nbsp;</th>
                <th width="189" class="style4" scope="row">AMOUNT TO BE SENT &pound;</th>
              </tr>
              <tr>
                <th height="31" colspan="2" class="style4" scope="row"><div align="left">RECEIVER DETAILS </div></th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
                <th width="112" scope="row"><label></label></th>
                <th width="189" scope="row"><input name="mon" type="text" id="mon" /></th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">First Name </div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_fname)){ echo strtoupper($r_fname);}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
                <th width="112" scope="row"><label></label></th>
                <th width="189" scope="row"><input name="Calculate" type="submit" id="Calculate" value="Calculate" /></th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Last Name </div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_lname)){ echo strtoupper($r_lname);}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
                <th width="112" rowspan="4" scope="row"><div align="center"></div></th>
                <th width="189" rowspan="4" scope="row"><?php
			
			 if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{

//function start

				

						
								$email=$_SESSION['email'];
								include "conn.php"; 
							 
								$s_phone = ($_GET['s_phone']);
								$s_mphone = ($_GET['s_mphone']);
								$address = ($_GET['address']);
							
							$check = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
							while($row=mysql_fetch_array($check)){
							$rs=$row['agrs'];
							
										;}
			
			if( $rs=="N"){
				$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
				while ($row = mysql_fetch_assoc($result)) { $er= $row['rate']; }
																	  
				}
				
			else {
				if( $rs=="R1"){
						$result = mysql_query('SELECT id,rate1 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
						while ($row = mysql_fetch_assoc($result)) {  $er= $row['rate1']; }
				
								}
				
				if( $rs=="R2"){
						$result = mysql_query('SELECT id,rate2 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
						while ($row = mysql_fetch_assoc($result)) {$er= $row['rate2']; }
								}
				
				}
						
						$id= $row['id'];
						$fname=$row['fname'];
						
						
						
						
//function end

						
						
		// Calculate based on credit ordebit system	

			if ($ecredit==1){						$mon = $_POST['mon'];

						$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
					while($ag_cr=mysql_fetch_array($check_credit)){$ag_cred=$ag_cr['credit'];}

						
				 if ( $ag_cred >= $mon ){if (isset($_POST['Calculate'])){ include "pro_main.php";}else {echo "Insufficient credit";}}
				 
						}
			
			
			if ($ecredit==0){
			// for Debt
				 if (isset($_POST['Calculate']))
			  
						  {
				  
							include "pro_main.php";
							}
							
							}
						 
				
				
	
	
	}			
			
?></th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Phone Number </div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_phone)){ echo $r_phone;}?>
                  &nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Transfer Mode </div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_transfer)){ echo strtoupper($r_transfer);}?>
                  &nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Bank</div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_bank)){ echo strtoupper($r_bank);}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row">&nbsp;</th>
                <th class="style7" scope="row">&nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Proof of Identity </div></th>
                <th class="style7" scope="row"><?php
			if( isset($r_idtype)){ echo strtoupper($r_idtype);}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <th scope="row">&nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th class="style8" scope="row"><div align="left">Account no </div></th>
                <th scope="row"><?php
			if( isset($r_actno)){ echo $r_actno;}?>
                  &nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th scope="row">&nbsp;</th>
                <th scope="row">&nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
              <tr>
                <th colspan="2" scope="row">&nbsp;</th>
                <th colspan="2" scope="row">&nbsp;</th>
              </tr>
            </table>
          </form></th>
          <th width="97" scope="row">&nbsp;</th>
        </tr>
      </table>
      &nbsp;</div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
