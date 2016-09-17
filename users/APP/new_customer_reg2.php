
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>----Index----</title>
  <link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" />


<link href="stylede.css" rel="stylesheet" type="text/css">
<style type="text/css">
.nttext {	font-family: "Times New Roman";
	text-align: left;
	font-size: 14px;
	font-weight: normal;
}
.nttext {	font-family: "Trebuchet MS";
}
.nttext {	font-size: 16px;
}
.nxtext {	font-family: "Times New Roman";
}
.m_text table tr td table tr td table tr td .style1 {
	font-weight: bold;
}
.m_text table tr td table tr td table tr td .style1 {
	font-size: 14px;
}
.m_text table tr td table tr td table tr td .style1 {
	font-weight: normal;
}
.nm {	text-align: left;
}
.nm {	font-family: "Trebuchet MS";
}
.nm {	font-size: 16px;
}
.nt {	font-weight: bold;
	font-family: "Trebuchet MS";
	font-size: 16px;
}
.m_text table tr td table tr td table tr td p {
	font-family: "Trebuchet MS";
	font-size: 12px;
	text-align: center;
	font-weight: bold;
}
.m_text table tr td table tr td table tr td .no_class tr td ul li strong {
	text-align: center;
}
.myh1 {	color: #FFFFFF;
	font-weight: bold;
}
.style11 {font-size: 10px}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style8 {color: #5E338C; font-weight: bold; }
.style9 {color: #000000}
#form1 div table tr td div table tr td div table {
	text-align: left;
}
.fm {
	text-align: center;
}
#form1 div table tr td div table {
	text-align: left;
}
#form1 div table tr td div table tr td {
	text-align: center;
}
</style>
</head>

<body>
<blockquote>&nbsp;</blockquote>
<div align="center">	
  <table width="846" align="center" style="width:765px;">
    
    <tr>
      <td height="401" colspan="3"  style="height:401px">
        <table width="100%" >
          <tr>
            <td style="width:219px;"><table width="778" height="365" border="3" cellpadding="0" cellspacing="0" bordercolor="#000000">
              <tr>
                <td width="746"><form action="" method="post" name="form1" id="form1">
                  <div align="center">
                    <table width="696" height="247" border="0">
                      <tr bgcolor="#9900FF">
                        <td width="690" nowrap="nowrap" bgcolor="#5E338C"><p align="left" class="myh1">NEW CUSTOMER REGISTRATION </p>
                          <div align="center" class="style4">
                            <div align="left"></div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="167"><div align="center">
                          <table width="691" border="0">
                            <tr>
                              <td colspan="5"><div align="center"><span class="style8">BASIC IDENTIFICATION </span></div></td>
                            </tr>
                            <tr>
                              <td>Title</td>
                              <td><select name="select">
                                <option selected="selected">MR</option>
                                <option>MRS</option>
                                <option>MISS</option>
                              </select></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Last / SurnameName</td>
                              <td><input name="lname" type="text" id="lname" /></td>
                              <td>&nbsp;</td>
                              <td>First Name </td>
                              <td><input name="fname" type="text" id="fname" /></td>
                            </tr>
                            <tr>
                              <td><div align="center">Middle Name </div></td>
                              <td><input name="mname" type="text" id="mname" /></td>
                              <td>&nbsp;</td>
                              <td>Date of Birth</td>
                              <td><div align="center"></div></td>
                            </tr>
                            <tr>
                              <td width="7%" rowspan="2"><label>
                                <label></label>
                                </label></td>
                              <td width="28%" rowspan="2">&nbsp;</td>
                              <td width="18%"><label>
                                <div align="center">
                                  <label>
                                  <div align="left"></div>
                                  </label>
                                </div>
                                </label></td>
                              <td colspan="2" rowspan="2"><div align="center"></div>
                                <label>
                                <?php
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
						if (isset($_POST['Submit'])){
								
								
								
								 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
								 
						
						//echo $theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														
														include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
														$check = mysql_query("SELECT * FROM new_customer WHERE email = '".$_POST['email']."'")or die(mysql_error());
														$check2 = mysql_num_rows($check);
														$title=mysql_escape_string($_POST['select']);
														$reg_date= date('Y-m-d H:i:s');
														$fname=mysql_escape_string($_POST['fname']);
														$mname=mysql_escape_string($_POST['mname']);
														$lname=mysql_escape_string($_POST['lname']);
														$email=mysql_escape_string($_POST['email']);
														$mnumber=mysql_escape_string($_POST['mnumber']);
														$pnumber=mysql_escape_string($_POST['pnumber']);
														$password=mysql_escape_string($_POST['password']);
														$postcode=mysql_escape_string($_POST['postcode']);
														$dob=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														$address=$_POST['company'] .' '. $_POST['line1'] .' '. $_POST['line2'] .'
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
														  $youknow=$_POST['youknow'];
														 
												
												if(empty($_POST['fname'])  | empty($_POST['lname'])| empty($_POST['email'])|
											 			empty($_POST['cemail'])| empty($_POST['password']) | empty($_POST['line1'])
														| empty($_POST['cpassword'])| empty($_POST['mnumber']) | empty($_POST['pnumber'])| empty($_POST['postcode']))
														{$nmsg = 'Please fill all required fields and click postcode search button for address<br />';}
												
												if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['email'])&&
										  			!empty($_POST['cemail'])&& !empty($_POST['password'])&& 
										  			!empty($_POST['cpassword'])&& !empty($_POST['mnumber']) &&
											 		!empty($_POST['pnumber'])&& !empty($_POST['postcode']) &&
													
											 		!empty($_POST['line1']))
														
															{ if ($_POST['password'] != $_POST['cpassword']){ $pmsg = 'Password didnt match.';}
															
															 
															else if ($_POST['email'] != $_POST['cemail']) {$emsg = 'Email didnt match.';}
															
															else if  ($check2 != 0) { $amsg = 'Sorry, the Email '.$_POST['email'].' is already in use.';}

 															

															 
															 else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
																	 $email)){$msg = 'The email you have entered is invalid, please try again.'; }
																	 
															else if (!isset($_POST['checkbox']))	{ $amsg = 'You need to agree to our terms and conditions.';}
															 
													
															else
																{
																
															
																	$password = md5($password);
																	
																	if (!get_magic_quotes_gpc()) {$password = addslashes($password);}
								
				
															
															include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
															
																		
								$agrs="N";	
											mysql_query("INSERT INTO new_customer (fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs)
		
											VALUES ('$fname','$lname','$mname','$email','$password','$mnumber','$pnumber', '$dob','$address','$postcode','$hash','$reg_date','$title','$company','$line1','$line2','$line3','$town','$county','$country','$youknow','$agrs'														 
															 )") or die(mysql_error());
															 
															 $to      = $email; // Send email to our user
															$subject = 'Signup | Verification'; // Give the email a subject
															
															$message = 'Thanks for signing up! Your account has been created, you can login with the following credentials
															 after you have activated your account by pressing the url below.
															 ------------------------
															Username: '.$fname.'
															Password: '.$password.'
															------------------------
															Please click this link to activate your account:
															
															http://www.daphkkoy.biz/verify.php?email='.$email.'&hash='.$hash.'
															
															'; // Our message above including the link
															
															$headers = 'From:admin@daphkkoy.com' . "\r\n"; // Set from headers
															mail($to, $subject, $message, $headers); // Send our email
															
															
														
															 
															 
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
<div align="center"></div>
                                </label></td>
                              </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="7%">&nbsp;</td>
                              <td width="28%">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td width="21%">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><div align="left"></div></td>
                              <td colspan="2"><div align="center"></div>
                                <div align="right"></div></td>
                              </tr>
                            <tr>
                              <td colspan="5"><div align="center">
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
                              <td colspan="5" bgcolor="#5E338C"><div align="center" class="myh1"><strong>CONTACT INFORMATION </strong></div></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="center">Email Address </div></td>
                              <td><input name="email" type="text" id="email" /></td>
                              <td>&nbsp;</td>
                              <td><div align="center" class="style9">Password</div></td>
                              <td><div align="center">
                                <input name="password" type="password" id="password" />
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="center">Confirm Email </div></td>
                              <td><input name="cemail" type="text" id="cemail" /></td>
                              <td>&nbsp;</td>
                              <td><div align="center">Confirm Password </div></td>
                              <td><div align="center">
                                <input name="cpassword" type="password" id="cpassword" />
                              </div></td>
                            </tr>
                            <tr>
                              <td><div align="center">Phone Number </div></td>
                              <td><input name="pnumber" type="text" id="pnumber" /></td>
                              <td>&nbsp;</td>
                              <td><div align="center">Mobile Number </div></td>
                              <td><div align="center">
                                <input name="mnumber" type="text" id="mnumber" />
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td valign="bottom">How Do you know about us
                                <select name="youknow" id="youknow">
                                  <option selected="selected">None</option>
                                  <option>Yell.com</option>
                                  <option>Facebook</option>
                                  <option>Words of Mouth</option>
                                  <option>Wholesomeman </option>
                                  <option>Googgle </option>
                                </select></td>
                              <td colspan="2" valign="top">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5" bgcolor="#5E338C"><div align="center" class="myh1"><strong>RESIDENT</strong> <span class="style11">please enter your post code </span></div></td>
                            </tr>
                            <tr>
                              <td colspan="5"><div align="center">
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
                              <td height="21" colspan="5"><div align="center">
                                <div id="SPLSearchArea" />            
                              </div></td>
                            </tr>
                            <tr>
                              <td height="21" colspan="5"><div align="center">
                                <table width="500" border="0">
                                  <tr>
                                    <td width="4%">&nbsp;</td>
                                    <td width="5%">Company</td>
                                    <td colspan="5"><input type=text name=company id=company size=45 readonly></td>
                                    <td width="91%">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td colspan="4">&nbsp;</td>
                                    <td width="9%">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td colspan="4">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>ADD 1</td>
                                    <td><input type=text name=line1 id=line1 size=45 readonly></td>
                                    <td>&nbsp;</td>
                                    <td colspan="3">ADD 2</td>
                                    <td><input type=text name=line2 id=line2 size=45 readonly></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>ADD 3 </td>
                                    <td><input type=text name=line3 id=line3 size=45 readonly></td>
                                    <td>&nbsp;</td>
                                    <td colspan="3">Town</td>
                                    <td><input type=text name=town id=town size=45 readonly></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>County</td>
                                    <td width="9%"><input type=text name=county id=county size=45 readonly></td>
                                    <td width="4%"><div align="center"></div></td>
                                    <td colspan="3">Country</td>
                                    <td><input type=text name=country id=country size=45 readonly></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td colspan="4">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td colspan="3">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div></td>
                            </tr>
                            <tr bgcolor="#5E338C">
                              <td colspan="5"><div align="center" class="myh1">TERMS AND CONDITION </div></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><label>
                                <div align="right"></div>
                                </label></td>
                              <td colspan="4"><p align="left">
                                <input type="checkbox" name="checkbox" value="checkbox" />
                                I Have read and accepted the <a href="terms &amp; condition.php">terms and conditions</a> and your information will be<br />
                                &nbsp;held securely with our data protection policy</p></td>
                              </tr>
                            <tr>
                              <td colspan="5"><div align="center">
                                <label></label>
                                <p>
                                  <label> </label>
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
                </form></td>
              </tr>
            </table></td>
          </tr>
          </table>
      </td>
      </tr>
    
    </table>
  <blockquote>&nbsp;</blockquote>
</div>
    
</body>
</html>