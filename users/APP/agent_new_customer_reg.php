<?php include "agent_p.php"?>


<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>

<script>
function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="agent_page.php"
	
	}s
</script>

<?php


if(isset($_GET['c_name'])){
	
	$s_mphone=$_GET['s_mphone'];
	$address=$_GET['address'];
	$c_name=$_GET['c_name'];
	$c_email=$_GET['c_email'];
	
	
	}

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="act.css" type="text/css" rel="stylesheet" />  
<link href="style_f.css" type="text/css" rel="stylesheet" /> 
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agent Customer Registration</title>
<style type="text/css">
<!--

.shout-btn2{
	padding:5px;
	margin-bottom:20px;
	width:20%;
	margin:10 auto;
	color: black;
	background: #0FF;
	font-size:15px;
	cursor:pointer;
	-webkit-border-radius: 10px;
	border-radius:10px;
	text-align: center;}
.myh1 {
	color: #FFFFFF;
	font-weight: bold;
}
body {
	background-color: #CCCCCC;
	text-align: left;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style11 {font-size: 10px}
a:link {
	color: #ffffff;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #ffffff;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #ffffff;
}
table {
	text-align: center;
}
#form1 div table tr td div table {
	text-align: right;
}
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
<div align="center">
  <table width="778" height="365" border="1" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
<tr>
      		<td width="774"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="733" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td nowrap="nowrap" bgcolor="#FFFFFF"><div align="center">Areas marked with<span style="color: #FF0000"> *</span> are compulsory fields</div>&nbsp;</td>
              </tr>
              <tr bgcolor="#9900FF">
                <td width="725" nowrap="nowrap" bgcolor="#666633">
                  <p align="left" class="myh1">NEW CUSTOMER REGISTRATION (Agent: <?php 	
				   if(isset($title)){
				   
				 $title=  strtoupper($_SESSION['title']);
				
	echo "$title";} ?>
          <?php 	
				   if(isset($_SESSION['agfname'])){
				   
				  $use=  strtoupper($_SESSION['agfname']);
				
	echo "$use";} ?> ) </p>
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
              </tr>
              
              <tr>
                <td height="167"><div align="center">
                  <table width="719" border="0">
                      <tr>
                        <td colspan="4">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4"><div align="center"></div></td>
                      </tr>
                      <tr>
                        <td width="107"><label>Title
                          
                        </label></td>
                        <td width="244"><label>
                        </label></td>
                        <td width="99">&nbsp;</td>
                        <td width="249"><label>
                        </label></td>
                      </tr>
                      <tr>
                        <td><select name="select">
                          <option selected="selected">MR</option>
                          <option>MRS</option>
                          <option>MISS</option>
                        </select></td>
                        <td>&nbsp;</td>
                        <td valign="middle">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                        <td valign="middle">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><span style="color: #FF0000">*</span>First Name </td>
                        <td width="99" valign="middle"><div align="left"><span style="color: #FF0000">*</span>Last Name</div></td>
                        <td width="249">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="fname" type="text" id="fname" value="<?php echo isset($_POST['fname']) ? ucfirst($_POST['fname']): '' ?>" size="40" /></td>
                        <td colspan="2"><input name="lname" type="text" id="lname" value="<?php echo isset($_POST['lname']) ? ucfirst($_POST['lname']): '' ?>" size="40"/></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="left">Middle Name </div>                          <div align="center"></div></td>
                        <td colspan="2"><div align="left"><span style="color: #FF0000">*</span>Date of Birth</div>
<div align="right"></div>                          <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><input name="mname" type="text" id="mname" value="<?php echo isset($_POST['mname']) ? ucfirst($_POST['mname']): '' ?>" size="40"/></td>
                        <td colspan="2"><?php 
						
						
						$myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1912, 2010); $myCalendar->dateAllow('1912-01-01', '1994-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
						{$date = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
						
						$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
							?>
                        <?php 
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
						if (isset($_POST['Submit'])){
								
					
														
					include "conn.php"; 
				
					$check = mysql_query("SELECT * FROM agent_new_customer WHERE email = '".$_POST['email']."'")or die(mysql_error());
					
														
			$emaval = mysql_query('SELECT id FROM agent_new_customer ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
			while ($rowem = mysql_fetch_assoc($emaval)) { $new_email= $rowem['id'] + 1 ;}

														$check2 = mysql_num_rows($check);
														$age_email = $_SESSION['email'];
														$title=mysql_real_escape_string($_POST['select']);

														$reg_date= date('Y-m-d H:i:s');
														$fname=mysql_real_escape_string($_POST['fname']);
														$mname=mysql_real_escape_string($_POST['mname']);
														$lname=mysql_real_escape_string($_POST['lname']);
														$email=mysql_real_escape_string($_POST['email']);
														$mnumber=mysql_real_escape_string($_POST['mnumber']);
														$pnumber=mysql_real_escape_string($_POST['pnumber']);
														$postcode=mysql_real_escape_string($_POST['postcode']);
														//$dob=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														$add1=$_POST['company'] .' '. $_POST['line1'] .' '. $_POST['line2'] .'
														 '. $_POST['line3'] .' '. $_POST['town'] .' '.
														 $_POST['county']. ' '.$_POST['country'] ;
														 
														 	
														 $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable. 
															$company= $_POST['company'];
														 $line1=$_POST['line1'];
														 $line2=$_POST['line2'];
														 $line3=$_POST['line3'];
														 $town= $_POST['town'];
														 $county=$_POST['county'];
														 $country=$_POST['country'];
														 
														
														 if (empty($_POST['pnumber'])){ $pnumber = $mnumber;}
														 
										if(empty($_POST['fname'])  | empty($_POST['lname'])| empty($_POST['line1'])|
										 empty($_POST['mnumber']) | empty($_POST['postcode']))
												{$nmsg = 'Please fill all required fields and click postcode search button for address<br />';}
												
												if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['mnumber']) &&
											 		 !empty($_POST['postcode'])&& !empty($_POST['line1']))
													
											 		
														
															
															
															 {
													if ($_POST['email'] != $_POST['cemail']) {$emsg = 'Email didnt match.';}
															
													else if  (($check2 != 0) && $email !=="") { $amsg = 'Sorry, the Email '.$_POST['email'].' is already in use.';}

 															

															 
													else if( $email !=="" &&(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
																	 $email))){$msg = 'The email you have entered is invalid, please try again.'; }
													
													 
													else if (!isset($_POST['checkbox']))	
													{ $amsg = 'You need to agree to our terms and conditions.';}
													
													
														 	 
											
															else
																{
																
																$_SESSION['address']=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
															
																  if (empty($_POST['email']))	{ $email= $new_email;}	
								
				
															
															include "conn.php";  
															
																		
							
									mysql_query("INSERT INTO agent_new_customer (fname,lname,mname,email,mnumber,pnumber,dob,address,postcode,hash,date_reg,agent_email,title,company,line1,line2,line3,town,county,country)
		
															VALUES ('$fname','$lname','$mname','$email','$mnumber',
															 '$pnumber', '$dob','$add1','$postcode','$hash','$reg_date','$age_email','$title','$company','$line1','$line2','$line3','$town','$county','$country'
															 )") or die(mysql_error());
															 
							 
														 $address=$_POST['company'] .' '. $_POST['line1'] .' '. $_POST['line2'] .'
														 '. $_POST['line3'] .' '. $_POST['town'] .' '.
														 $_POST['county']. ' '.$_POST['country'] ;
														 
														 $c_name=mysql_real_escape_string($_POST['fname'])." ".mysql_real_escape_string($_POST['lname']);
														 $c_email=$email;
														 $s_mphone=mysql_real_escape_string($_POST['mnumber']);								
															
														
															 
															 {$smsg = "Successully Registered ---<a href='agent_cust_receiver.php?c_name=$c_name & c_email=$c_email & address=$address & s_mphone=$s_mphone & s_phone=$s_mphone'><u> Create New Receiever?<u> </a>.";}
															 
															 echo" <script type='text/javascript'>
 {
 window.alert('Congratulations! Your account has been created ')
window.location='agent_new_customer_reg.php?c_name=$c_name & c_email=&c_email & address=$address & s_mphone=$s_mphone';
 }
</script> ";
															  }
		
															}

							
							
							}	
						 
						 
						
							?></td>
                      </tr>
                      <tr>
                        <td colspan="4">		<div  align="center">
                          <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';

    } 
	if(isset($emsg)){  // Check if $msg is not empty  
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$emsg.'</th> </tr></table>';

    } 
	
	
	if(isset($pmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="600" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$pmsg.'</th> </tr></table>';
    }
	
	
	if(isset($nmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="600" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$nmsg.'</th> </tr></table>';
    }
	
	if(isset($smsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="600" border="0" bgcolor="#0000FF"><tr><th style=" font-size:16px;" scope="row">'.$smsg.'</th> </tr></table>';
    }
	
	if(isset($amsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="600" border="0" bgcolor="#0000FF"><tr><th class="style4" scope="row">'.$amsg.'</th> </tr></table>';
    }
	 
?> 
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="4" bgcolor="#666633"><div align="center" class="myh1">
                          <div align="left"><strong>CONTACT INFORMATION </strong></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="2"><div align="center" style="font-size: 11px; font-style: italic; font-weight: bold;"></div>                          <div align="right"><span style="font-size: 11px; font-style: italic; font-weight: bold; color: #990000;">Your customer email is not compulsory!</span></div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center"><span class="style9"><span style="color: #FF0000">*</span>Mobile Numbe</span></div></td>
                        <td>&nbsp;</td>
                        <td><div align="center">Phone Number </div></td>
                        <td>&nbsp;</td>
                      </tr>
                     
					  <tr>
					    <td colspan="2"><input name="mnumber" type="text" id="mnumber" value="<?php echo isset($_POST['mnumber']) ? ucfirst($_POST['mnumber']): '' ?>" size="40" maxlength="11"  /></td>
					    <td colspan="2"><input name="pnumber" type="text" id="pnumber" value="<?php echo isset($_POST['pnumber']) ? ucfirst($_POST['pnumber']): '' ?>" size="40" maxlength="11" /></td>
				      </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
                        <td><div align="center">Email Address </div></td>
                        <td>&nbsp;</td>
                        <td><div align="center" class="style9">Confirm Email </div></td>
                        <td>&nbsp;</td>
					  </tr>
                      <tr>
                        <td colspan="2"><input name="email" type="text" id="email" value="<?php echo isset($_POST['email']) ? ($_POST['email']): '' ?>" size="40"/></td>
                        <td colspan="2"><input name="cemail" type="text" id="cemail" value="<?php echo isset($_POST['cemail']) ? ($_POST['cemail']): '' ?>" size="40" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center"></div></td>
                        <td>&nbsp;</td>
                        <td><div align="center"></div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#666633"><div align="center" class="myh1">
                          <div align="left"><strong>RESIDENT</strong> <span class="style11">please enter your post code </span></div>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="4">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <div align="center">
                            <label>
                            <input type=text name=postcode id=postcode value="<?php echo isset($_POST['postcode']) ? ucfirst($_POST['postcode']): '' ?>">
                            </label>
                            <label>
                            <input type=button value="Postcode Search" onClick="Javascript:SPLGetAddressData(document.getElementById('postcode').value)">
                            <span style="color: #FF0000">*</span></label>
                          </div>
                          <label></label>
                          <label></label>
						&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="21" colspan="4"><div align="center"><div id="SPLSearchArea" /></div></td>
                      </tr>
                      <tr>
                        <td height="21" colspan="4"><div align="center">
                          <table width="500" border="0">
                            <tr>
                              <td width="83">Company</td>
                              <td width="380"><label>
                                <input type=text name=company id=company size=45 readonly value="<?php echo isset($_POST['company']) ? ucfirst($_POST['company']): '' ?>">
                              </label></td>
                            </tr>
                            <tr>
                              <td>Address Line 1 </td>
                              <td><input type=text name=line1 id=line1 size=45 readonly value="<?php echo isset($_POST['line1']) ? ucfirst($_POST['line1']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address Line 2 </td>
                              <td><input type=text name=line2 id=line2 size=45 readonly value="<?php echo isset($_POST['line2']) ? ucfirst($_POST['line2']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address Line 3 </td>
                              <td><input type=text name=line3 id=line3 size=45 readonly value="<?php echo isset($_POST['line3']) ? ucfirst($_POST['line3']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Town</td>
                              <td><input type=text name=town id=town size=45 readonly value="<?php echo isset($_POST['town']) ? ucfirst($_POST['town']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>County</td>
                              <td><input type=text name=county id=county size=45 readonly value="<?php echo isset($_POST['county']) ? ucfirst($_POST['county']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
                              <td><input type=text name=country id=country size=45 readonly value="<?php echo isset($_POST['country']) ? ucfirst($_POST['country']): '' ?>"></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      
                      <tr bgcolor="#5E338C">
                        <td colspan="4" bgcolor="#666633"><div align="center" class="myh1">
                          <div align="left">TERMS AND CONDITION </div>
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>                          <label>
                          <div align="right">
                            <input type="checkbox" name="checkbox" value="checkbox" />
                          </div>
                        </label></td>
                        <td colspan="3"><p>Have you read and accepted the <a href="terms &amp; condition.php">TERMS AND CONDITIONS?</a> and Your information will be held securely with our data protection and management policy<br />
  &nbsp;</p></td>
                      </tr>
                      <tr>
                        <td colspan="4"><div align="center">
                          <label></label>
                          <p>
                            <label>                            </label>
                            <label>
                            <input type="submit"   name="Submit" value="Submit" />
                            </label>
                          <input type="button" name="Exit" value="Exit" onClick="exit()" /></p>
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

