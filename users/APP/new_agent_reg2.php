
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
.style12 {color: #FF0000; font-weight: bold; }
.style13 {color: #FF0000}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style8 {color: #5E338C; font-weight: bold; }
.style9 {color: #000000}
#as {	text-align: center;
}
#form1 div table tr td div table {
	text-align: left;
}
#form1 div table tr td div table tr td div table {
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
            <td style="width:219px;"><table width="639" height="365" border="1" cellpadding="0" cellspacing="0" bordercolor="#5E338C">
              <tr>
                <td width="721"><form action="" method="post" name="form1" id="form1">
                  <div align="center">
                    <table width="604" height="247" border="0">
                      <tr bgcolor="#9900FF">
                        <td width="598" nowrap="nowrap" bgcolor="#CCCCCC"><p align="left" class="style12">NEW AGENT REGISTRATION </p>
                          <hr />
                          <div align="center" class="style4">
                            <div align="left"></div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="167"><div align="center">
                          <table width="628" border="0">
                            <tr>
                              <td colspan="5"><div align="center"><span class="style8">YOUR IDENTIFICATION </span></div></td>
                            </tr>
                            <tr>
                              <td>Title</td>
                              <td><div align="left"></div></td>
                              <td>&nbsp;</td>
                              <td width="135">&nbsp;</td>
                              <td width="189">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><select name="select">
                                <option selected="selected">MR</option>
                                <option>MRS</option>
                                <option>MISS</option>
                              </select></td>
                              <td>&nbsp;</td>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="21">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Last Name</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>First Name </td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><input name="lname" type="text" id="lname" /></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td colspan="2"><input name="fname" type="text" id="fname" size=35 /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="left">Middle Name </div></td>
                              <td>&nbsp;</td>
                              <td><div align="right"></div></td>
                              <td colspan="2">Date of Birth</td>
                              </tr>
                            <tr>
                              <td width="125" colspan="2"><label>
                                <input name="mname" type="text" id="mname" size=35 />
<div align="left"></div></td>
                              <td width="161"><label>
                                <div align="center"></div>
                                </label></td>
                              <td colspan="2" rowspan="2"><div align="center">
                                <?php
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
						if (isset($_POST['Submit'])){
								
								
								
								 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
								 
						
						//echo $theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														
														include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
														$check = mysql_query("SELECT * FROM agent WHERE email = '".$_POST['email']."'")or die(mysql_error());
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
											 			empty($_POST['cemail'])| empty($_POST['password'])| empty($_POST['line1'])
														| empty($_POST['cpassword'])| empty($_POST['mnumber']) | empty($_POST['pnumber'])| empty($_POST['postcode']))
														{$nmsg = 'Please fill all required fields and click postcode search button for address<br />';}
												
												if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['email'])&&
										  			!empty($_POST['cemail'])&& !empty($_POST['password'])&& 
										  			!empty($_POST['cpassword'])&& !empty($_POST['mnumber']) &&
											 		!empty($_POST['pnumber'])&& !empty($_POST['postcode'])&&
													
											 		!empty($_POST['line1']))
														
															{ if ($_POST['password'] != $_POST['cpassword']){ $pmsg = 'Password didnt match.';}
															
															 
															else if ($_POST['email'] != $_POST['cemail']) {$emsg = 'Email didnt match.';}
															
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
																$_SESSION['password']=$_POST['password'];
																$_SESSION['address']=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
															
																	$password = md5($password);
																	
																	if (!get_magic_quotes_gpc()) {$password = addslashes($password);}
								
				
															
															include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
															
																	$type= "agent";	
																		$agrs="N";	
							
								mysql_query("INSERT INTO agent (fname,lname,mname,email,password,mnumber,pnumber,dob,address,postcode,type,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs)
		
															VALUES ('$fname','$lname','$mname','$email','$password','$mnumber',
															 '$pnumber', '$dob','$address','$postcode','$type','$hash','$reg_date','$title','$company','$line1','$line2','$line3','$town','$county','$country','$youknow','$agrs'
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
                                </div>
                                <label>
                                <div align="center"></div>
                                </label></td>
                              </tr>
                            <tr>
                              <td width="125" colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><div align="left"></div></td>
                              <td><div align="center"></div></td>
                              <td><div align="center"></div>
                                <div align="right"></div></td>
                              <td><div align="center"></div></td>
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
                              <td colspan="5" bgcolor="#CCCCCC"><div align="center" class="style12">
                                <div align="left"><strong>CONTACT INFORMATION </strong>
                                  <hr />
                                </div>
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="left">Email Address </div></td>
                              <td colspan="2">&nbsp;</td>
                              <td><div align="center" class="style9">Mobile Number</div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><input name="email" type="text" id="email" size=35/></td>
                              <td>&nbsp;</td>
                              <td><input name="mnumber" type="text" id="mnumber" /></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><div align="center"></div></td>
                              <td>&nbsp;</td>
                              <td><div align="center"></div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="left">Confirm Email </div></td>
                              <td colspan="2">&nbsp;</td>
                              <td><div align="center">Phone Number </div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><input name="cemail" type="text" id="cemail" size=35 /></td>
                              <td>&nbsp;</td>
                              <td><input name="pnumber" type="text" id="pnumber" /></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="left">Password</div></td>
                              <td colspan="2">&nbsp;</td>
                              <td><div align="center">Confirm Password </div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2"><input name="password" type="password" id="password" /></td>
                              <td>&nbsp;</td>
                              <td><input name="cpassword" type="password" id="cpassword" /></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5">How do you know about us</td>
                              </tr>
                            <tr>
                              <td colspan="2"><select name="youknow" id="youknow">
                                <option selected="selected">None</option>
                                <option>Yell.com</option>
                                <option>Facebook</option>
                                <option>Words of Mouth</option>
                                <option>Wholesomeman </option>
                                <option>Googgle </option>
                              </select></td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5" bgcolor="#CCCCCC"><div align="left"><span class="myh1"><span class="style13"><strong>RESIDENT</strong> <span class="style11">please enter your post code </span></span></span>
                                <hr />
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="5" bgcolor="#CCCCCC"><div align="center" class="myh1"></div></td>
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
                                    <td width="83">Company</td>
                                    <td width="380">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=company id=company size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>Address 1 </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=line1 id=line1 size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>Address 2 </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=line2 id=line2 size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>Address 3 </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=line3 id=line3 size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>Town</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=town id=town size=45 readonly></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>County</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=county id=county size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>Country</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><input type=text name=country id=country size=45 readonly ></td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                              </div></td>
                            </tr>
                            <tr bgcolor="#5E338C">
                              <td colspan="5" bgcolor="#CCCCCC"><div align="center" class="style12">
                                <div align="left">TERMS AND CONDITION
                                  <hr />
                                </div>
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                              <td colspan="3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="5"><label>
                                <div align="right"></div>
                                </label>                                <p>
                                  <input type="checkbox" name="checkbox" value="checkbox" />
                                  I Have read and accepted the <a href="terms &amp; condition.php">terms and conditions</a> and your information will beheld securely with our data protection policy<br />
                                  &nbsp;</p></td>
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