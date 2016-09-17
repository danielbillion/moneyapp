<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="act.css" type="text/css" rel="stylesheet" />  
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
.style8 {color: #5E338C; font-weight: bold; }
.style9 {color: #000000}
.style11 {font-size: 10px}
.style12 {color: #FF0000; font-weight: bold; }
.style13 {color: #FF0000}
a:link {
	color: #993300;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #003366;
}
a:hover {
	text-decoration: none;
	color: #CC0033;
}
a:active {
	text-decoration: none;
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
  <p align="right"><a href="agent_page.php"><em>Swict Back to Agent Page </em></a></p>
  <table width="639" height="365" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
    <tr>
      		<td width="721"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="604" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="598" nowrap="nowrap" bgcolor="#CCCCCC">
                  <p align="left" class="style12">NEW CUSTOMER REGISTRATION ( FOR AGENTS) </p>
                  <hr />
                  <div align="center" class="style4">
                    <div align="left"></div>
                </div></td>
              </tr>
              
              <tr>
                <td height="167"><div align="center">
                  <table width="628" border="0">
                      <tr>
                        <td colspan="4"><div align="center"><span class="style8">YOUR IDENTIFICATION </span></div></td>
                      </tr>
                      <tr>
                        <td width="142"><label>
                          <div align="center">First Name </div>
                        </label></td>
                        <td width="144"><label>
                          <div align="center">
                            <input name="fname" type="text" id="fname" />
                          </div>
                        </label></td>
                        <td width="107"><div align="center">Last / SurnameName</div></td>
                        <td width="217"><label>
                          <div align="center">
                            <input name="lname" type="text" id="lname" />
                          </div>
                        </label></td>
                      </tr>
                      <tr>
                        <td><div align="center">Middle Name </div></td>
                        <td><div align="center">
                          <input name="mname" type="text" id="mname" />
                        </div></td>
                        <td><div align="center">Date of Birth</div>
                          
                          
                          <div align="right"></div></td>
                        <td><div align="center">
                          <?php
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
						if (isset($_POST['Submit'])){
								
								
								
								 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
								 
						
						//echo $theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														
														include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
														$check = mysql_query("SELECT * FROM agent_new_customer WHERE email = '".$_POST['email']."'")or die(mysql_error());
														$check2 = mysql_num_rows($check);
							
														$fname=mysql_escape_string($_POST['fname']);
														$mname=mysql_escape_string($_POST['mname']);
														$lname=mysql_escape_string($_POST['lname']);
														$email=mysql_escape_string($_POST['email']);
														$mnumber=mysql_escape_string($_POST['mnumber']);
														$pnumber=mysql_escape_string($_POST['pnumber']);
														
														$postcode=mysql_escape_string($_POST['postcode']);
														$dob=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														$address=$_POST['company'] .' '. $_POST['line1'] .' '. $_POST['line2'] .'
														 '. $_POST['line3'] .' '. $_POST['town'] .' '.
														 $_POST['county']. ' '.$_POST['country'] ;	
														 $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable. 
												
												if(empty($_POST['fname'])  | empty($_POST['lname'])| empty($_POST['mname'])| empty($_POST['email'])|
											 			empty($_POST['cemail'])| empty($_POST['mnumber']) | empty($_POST['pnumber'])| empty($_POST['postcode']))
														{$nmsg = 'Please fill all required fields<br />';}
												
												if(!empty($_POST['fname'])&& !empty($_POST['lname'])&&
										 			!empty($_POST['mname'])&& !empty($_POST['email'])&&
										  			!empty($_POST['cemail'])&& !empty($_POST['mnumber']) &&
											 		!empty($_POST['pnumber'])&& !empty($_POST['postcode']))
														
															{ 
															
															 
															if ($_POST['email'] != $_POST['cemail']) {$emsg = 'Email didnt match.';}
															
															else if  ($check2 != 0) { $amsg = 'Sorry, the Email '.$_POST['email'].' is already in use.';}

 															

															 
															 else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
																	 $email)){$msg = 'The email you have entered is invalid, please try again.'; }
																	 
															else if (!isset($_POST['checkbox']))	{ $amsg = 'You need to agree to our terms and conditions.';}	 
													
															else
																{
																$_SESSION['fname']= $_POST['fname'];
																$_SESSION['lname']= $_POST['lname'];
																$_SESSION['mname']= $_POST['mname'];
																$_SESSION['email']= $_POST['email'];
																$_SESSION['mnumber']= $_POST['mnumber'];
																$_SESSION['address']=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
															
																	$password = md5($password);
																	
																	if (!get_magic_quotes_gpc()) {$password = addslashes($password);}
								
				
															
															include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
															
																		
							
															mysql_query("INSERT INTO agent_new_customer (fname,lname,mname,email,mnumber,pnumber,dob,address,postcode,hash)
		
															VALUES ('$fname','$lname','$mname','$email','$mnumber',
															 '$pnumber', '$dob','$address','$postcode','$hash'
															 )") or die(mysql_error());
															 
															
															
															
														
															 
															 
												 {$smsg = ' Congratulations! Your account has been created, <br /> please verify it by clicking
															
															  the activation link that has been sent to your email.';}
															  }
		
															}

							
							
							}	
						 
						 $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1912, 2010); $myCalendar->dateAllow('1912-01-01', '2010-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 	
						
							?>  	 
					 
					
					
					 

					 
					 
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="4">		<div align="center">
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
        
	
	echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$pmsg.'</th> </tr></table>';
    }
	
	
	if(isset($nmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$nmsg.'</th> </tr></table>';
    }
	
	if(isset($smsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#0000FF"><tr><th class="style4" scope="row">'.$smsg.'</th> </tr></table>';
    }
	
	if(isset($amsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="200" border="0" bgcolor="#0000FF"><tr><th class="style4" scope="row">'.$amsg.'</th> </tr></table>';
    }
	 
?> 
                        </div></td>
                      </tr>
                      <tr bgcolor="#5E338C">
                        <td colspan="4" bgcolor="#CCCCCC"><div align="center" class="style12">
                          <div align="left"><strong>CONTACT INFORMATION </strong>
                            <hr />
                          </div>
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center">Email Address </div></td>
                        <td><label>
                          <input name="email" type="text" id="email" />
                        </label></td>
                        <td><div align="center" class="style9">Mobile Number</div></td>
                        <td><input name="mnumber" type="text" id="mnumber" /></td>
                      </tr>
                     
					  <tr>
                        <td><div align="center"></div></td>
                        <td>&nbsp;</td>
                        <td><div align="center"></div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center">Confirm Email </div></td>
                        <td><input name="cemail" type="text" id="cemail" /></td>
                        <td><div align="center">Phone Number </div></td>
                        <td><input name="pnumber" type="text" id="pnumber" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
         
		                <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#CCCCCC"><div align="left"><span class="myh1"><span class="style13"><strong>RESIDENT</strong> <span class="style11">please enter your post code </span></span></span>
                          <hr />
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#CCCCCC"><div align="center" class="myh1"></div></td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <div align="center">
                            <label>
                            <input type=text name=postcode id=postcode >
                            </label>
                            <label>
                            <input type=button value="Postcode Search" onClick="Javascript:SPLGetAddressData(document.getElementById('postcode').value)">
                            </label>
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
                                <input type=text name=company id=company size=45 readonly="readonly">
                              </label></td>
                            </tr>
                            <tr>
                              <td>Address 1 </td>
                              <td><input type=text name=line1 id=line1 size=45 readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Address 2 </td>
                              <td><input type=text name=line2 id=line2 size=45 readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Address 3 </td>
                              <td><input type=text name=line3 id=line3 size=45 readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Town</td>
                              <td><input type=text name=town id=town size=45 readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
                              <td><input type=text name=county id=county size=45 readonly="readonly"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
                              <td><input type=text name=country id=country size=45 readonly="readonly"></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      
                      <tr bgcolor="#5E338C">
                        <td colspan="4" bgcolor="#CCCCCC"><div align="center" class="style12">
                          <div align="left">TERMS AND CONDITION 
                            <hr />
                          </div>
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
                        <td colspan="3"><p>Have read and accepted the <a href="terms &amp; condition.php">terms and conditions</a> and your information will be<br />
  &nbsp;held securely with our data protection policy</p></td>
                      </tr>
                      <tr>
                        <td colspan="4"><div align="center">
                          <label></label>
                          <p>
                            <label>                            </label>
                            <label>
                            <input type="submit"   name="Submit" value="Submit" />
                            </label>
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



