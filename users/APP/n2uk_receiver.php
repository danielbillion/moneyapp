<?php include "admin_p.php"?>
<?php 
	if(isset($_GET['c_name']) && !empty($_GET['c_name']) AND isset($_GET['c_email']) && !empty($_GET['c_email']) )
{

	// Verify data
	$c_name = ($_GET['c_name']); // Set email variable
	$c_email = ($_GET['c_email']); // Set email variable
	$custid = ($_GET['custid']);

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>

<script language="javascript" type="text/javascript">
    function toggleMe9(val)
    {
	
    var b_actno = document.getElementById('b_actno');
	var b_actno2 = document.getElementById('b_actno2');
	var b_act_name = document.getElementById('b_act_name');
	var b_sort = document.getElementById('b_sort');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
	 var b_abank2 = document.getElementById('b_abank2');

	
	 document.getElementById('actnol').innerHTML = '';
	 document.getElementById('pu').innerHTML = '';
	 document.getElementById('sc').innerHTML = '';
	 document.getElementById('ba').innerHTML = '';
	 document.getElementById('actno2').innerHTML = '';
	 document.getElementById('ti').innerHTML = '';
	 document.getElementById('act_name').innerHTML = '';
	 
		 document.getElementById('bankni').innerHTML = '';
 
	 
    if(val=='Pick Up')
    {
    b_actno.style.display = "none";
	b_sort.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	b_actno2.style.display = "block";
	 b_act_name.style.display = "block";
	  b_abank2.style.display = "block";
	
	 document.getElementById('ti').innerHTML = 'Type of ID';
	  document.getElementById('pu').innerHTML = 'Pick Up';
	  document.getElementById('actnol').innerHTML = 'Account No';
	  document.getElementById('act_name').innerHTML = 'Account Name';
	  document.getElementById('bankni').innerHTML = 'Bank (Nigeria)';
	
    }
    else if(val=='Bank Account')
    {
    b_actno.style.display = "block";
	b_sort.style.display = "block";
	b_actno2.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	 b_act_name.style.display = "block";
	  b_abank2.style.display = "block";
	
	 document.getElementById('actno2').innerHTML = ' Account No';
	  document.getElementById('ba').innerHTML = 'Bank';
	   document.getElementById('sc').innerHTML = 'Sort Code';
	   document.getElementById('actnol').innerHTML = 'Account No';
	    document.getElementById('act_name').innerHTML = 'Account Name';
		document.getElementById('bankni').innerHTML = 'Bank (Nigeria)';
	
    }
	
	
	else
    {
    b_actno.style.display = "none";
	 b_actno2.style.display = "none";
	  b_sort.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	b_act_name.style.display = "none";
	b_abank2.style.display = "none";
	
    }
    }
	
	
	
	
	 function toggle(val)
    {
	
    var b_actno2 = document.getElementById('b_actno2');
	 b_actno2.style.display = "block";
	 b_act_name.style.display = "block";
	  document.getElementById('actnol').innerHTML = 'Account No';
	   document.getElementById('act_name').innerHTML = 'Account Name';
    }
	
	
	function addLoadEvent(func) {  
      var oldonload = window.onload;  
      if (typeof window.onload != 'function') {  
        window.onload = func;  
      } else {  
        window.onload = function() {  
          if (oldonload) {  
            oldonload();  
          }  
          func();  
        }  
      }  
    }  

   addLoadEvent(function() {  
document.getElementById('actnol').innerHTML = 'your tip has been submitted!';

    });  
	
	
	
	
	
	
    </script>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="act.css" type="text/css" rel="stylesheet" />  
<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customer Registration</title>
<style type="text/css">
<!--
.myh1 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #CCCCCC;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style13 {color: #330000; font-weight: bold; }
.style14 {
	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style15 {
	color: #FF0000;
	font-size: 10px;
}
.style19 {color: #660033}
.style20 {
	font-size: 12px;
	font-style: italic;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
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
</head>



											
	<body onLoad="toggleMe9(this.value)">
	
	
   
<div align="center">
  <table width="639" height="365" border="0" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
    <tr>
      		<td width="721"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="604" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="655" nowrap="nowrarrp" bgcolor="#CCCCCC">
                  <p align="center" class="style13"><u><span>REGISTER NEW RECEIVER</span></u> N2UK- <?php if(isset($_GET['c_name'])){ echo $_GET['c_name'];} ?></p>
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
                <td width="80" nowrap="nowrap" bgcolor="#CCCCCC">&nbsp;</td>
              </tr>
              
              <tr>
                <td height="167" colspan="2"><div align="center">
                  <table width="739" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td colspan="6"><div align="center">
<?php 
												//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
															if (isset($_POST['Register'])){
														include "conn.php"; 
														
														$c_name = ($_GET['c_name']); // Set email variable
														$c_email = ($_GET['c_email']); // Set email variable
														$address = ($_GET['address']);
														$c_email = ($_GET['c_email']); // Set email variable
														
														$s_mphone = ($_GET['s_mphone']); // Set email variable
														
														
														$b_act_name=($_POST['b_act_name']);
														$s_fname= $_SESSION['s_fname'];
														$ag_email= $_SESSION['email'];
														
														$b_fname=($_POST['b_fname']);
														$b_lname=($_POST['b_lname']);
														$b_phone=($_POST['b_phone']);
														$b_idtype=($_POST['b_idtype']);
														$b_transfer=($_POST['b_transfer']);
														
														$b_actno2=($_POST['b_actno2']);
														$b_sort=($_POST['b_sort']);
														$b_abank=($_POST['b_abank']);
														$b_abank2=($_POST['b_abank2']);
														$b_pbank=($_POST['b_pbank']);
														include "time.php";
														$date=$dtime;
														$trans=$_POST['b_transfer'];
														$b_actno=($_POST['b_sort'])."/".($_POST['b_actno']);
												
						 // $_POST['b_transfer']="Select Type of Transfer for your Receiver";
						  
												
	 if(empty($_POST['b_fname'])  | empty($_POST['b_lname'])| empty($_POST['b_transfer'])) 
	 
	
	{$msg = 'Please fill all required fields<br />'; $msg2 = '';}
	
	
	
	
		if (!empty($_POST['b_fname'])  && !empty($_POST['b_lname'])&& !empty($_POST['b_transfer']))
												
											 {
												 
												 
												 
												 
							  if(!empty($_POST['b_idtype'])  && !empty($_POST['b_pbank']))
	 
	 {include "conn.php";
															
												$postcode="none";
								$town ="none";
									$county  ="none";	
									$country  ="none";							
							
															mysql_query("INSERT INTO trans2_receiver(custid,cust_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date,nbank,act_name,nbankno)
													
															VALUES ('$custid','$c_name','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date', '$b_abank2', '$b_act_name','$b_actno2' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='n2uk_cust_list.php.php?c_name=$c_name & c_email=$c_email & address=$address & s_phone=$s_phone & s_mphone=$s_mphone  & postcode=$postcode
 & town  =$town & county  =$county  & country =$country '> View </a>";}					 
												 
												 
												 
												 
			else if(!empty($_POST['b_actno'])  && !empty($_POST['b_abank']))								
		 {
			
			include "conn.php";  
															
								$postcode="none";
								$town ="none";
									$county  ="none";	
									$country  ="none";	
							
															mysql_query("INSERT INTO trans2_receiver(custid,cust_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date,nbank,act_name,nbankno)
													
															VALUES ('$custid','$c_name','$b_fname','$b_lname','$b_phone','$b_idtype','$b_transfer',
															 '$b_pbank', '$b_abank','$b_actno','$date', '$b_abank2','$b_act_name','$b_actno2' )") or die(mysql_error());
															 
															 {$msg = ' New receiver has been registered.';}
$msg2 = "<a href='n2uk_cust_list.php.php?c_name=$c_name & c_email=$c_email & address=$address & s_phone=$s_phone & s_mphone=$s_mphone & postcode=$postcode
 & town  =$town & county  =$county  & country =$country '> View </a>";
			
			}
		
		
										 
								else{									
														
				{$msg = 'Please fill all required fields under transfer mode'; $msg2 = '';}											
				
										
			}			
											
			
										}
							
							}	
						 
															
						
							?>
						</div></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td colspan="2"><input name="b_fname" type="text" id="b_fname" /></td>
                        <td>&nbsp;</td>
                        <td colspan="2" rowspan="2"><div align="center">
                          <label></label>
                        </div>
                          <label>
                          
                          <div align="left"></div>                          </label></td>
                      </tr>
                      <tr>
                        <td width="115"><label>
                          <div align="left">Last Name</div>
                          </label></td>
                        <td colspan="2"><label>
                          
                          <div align="left">
                            <input name="b_lname" type="text" id="b_lname" />
                          </div>
                        </label></td>
                        <td width="1">&nbsp;</td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="6" bgcolor="#CCCCCC"><div align="center"><?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.''.$msg2.'</th> </tr></table>';

    } 
	
	
	
	
	 
?></div></td>
                      </tr>
                      <tr>
					    <td>Phone Number </td>
					    <td colspan="2"><input name="b_phone" type="text" id="b_phone" maxlength="11" /></td>
					    <td>&nbsp;</td>
					    <td width="183">&nbsp;</td>
					    <td width="235">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td><u>Transfer Mode</u></span></td>
					    <td colspan="4"><select name="b_transfer" id="b_transfer" onChange="toggleMe9(this.value)">
					      <option></option>
					      <option>Pick Up</option>
					      <option>Bank Account</option>
					      </select>
					      <span style="font-size: 11px; font-style: italic; font-weight: bold; color: #F00;">Select Type of Transfer for your Receiver</span></td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="bankni">Bank (Nigeria)</label></td>
					    <td><span style="font-size: 11px; color: #F00;">
					      <select name="b_abank2" id="b_abank2" onclick="toggle(this.value)">
					        <option></option>
					        <?php
						  
 include "conn.php"; 
 $check = mysql_query("SELECT * FROM trans2_bank WHERE status='nb' ORDER BY bank ") or die('Query failed: ' . mysql_error());
						   
					while($row=mysql_fetch_array($check)){
						$bank=$row['bank'];	
						 echo"<option>"; echo $bank; echo"</option>";
					}
						   ?>
				          </select>
					    </span></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="act_name">Account Name</label></td>
					    <td><input name="b_act_name" type="text" id="b_act_name" maxlength="18" /></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="actnol">Account No</label></td>
					    <td colspan="2"><input name="b_actno2" type="text" id="b_actno2" maxlength="15" /></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="pu">Pick Up</label></td>
					    <td colspan="2"><select name="b_pbank" id="b_pbank">
					      <option></option>
					      <?php
						  
 include "conn.php";
 $check = mysql_query("SELECT * FROM trans2_bank WHERE status='p' ORDER BY bank") or die('Query failed: ' . mysql_error());
						   
					while($row=mysql_fetch_array($check)){
						$bank=$row['bank'];	
						 echo"<option>"; echo $bank; echo"</option>";
					}
						   ?>
					      </select></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="ti">Type of ID</label></td>
					    <td><select name="b_idtype" id="b_idtype">
                         <option selected></option>
                          <option>National ID</option>
                          <option >Intl Passport</option>
                          <option>Drivers Lincence</option>
                          <option>Any type of ID</option>
                         
                        </select></td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td> <label id="ba">Bank</label></td>
					    <td colspan="2" style="font-size: 11px; color: #F00;">
					      <select name="b_abank" id="b_abank">
					        <option></option>
					        
					        <?php
						  
 include "conn.php"; 
 $check = mysql_query("SELECT * FROM trans2_bank WHERE status='b'ORDER BY bank ") or die('Query failed: ' . mysql_error());
						   
					while($row=mysql_fetch_array($check)){
						$bank=$row['bank'];	
						 echo"<option>"; echo $bank; echo"</option>";
					}
						   ?>
					        
					        
					        
				          </select></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="sc">Sort Code</label></td>
					    <td colspan="2"><input name="b_sort" type="text" id="b_sort" maxlength="6" /></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td><label id="actno2">Account No</label></td>
					    <td colspan="2"><input name="b_actno" type="text" id="b_actno" maxlength="8" /></td>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td width="83"><div align="left"></div></td>
					    <td width="96">&nbsp;</td>
					    <td>&nbsp;</td>
					    <td colspan="2">
					      <div align="left"></div>
				          <div align="left"></div></td>
				      </tr>
					  <tr>
					    <td colspan="6"><div align="center">
					      <input name="Register" type="submit" id="Register" value="Register" />
					    </div>
					      <div align="center"></div>
					      <div align="left"></div>					      <div align="center">
                            <label></label>
                            <p>
                              <label>                            </label>
                              <label></label>
                            </p>
                        </div></td>
				      </tr>
                    </table>
                </div></td>
              </tr>
            </table>
        </div>
      </form>
      </td>
    </tr>
  </table>
</div>
</body>
</html>



