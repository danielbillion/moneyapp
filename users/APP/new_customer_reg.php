<?php include "index_H.php" ?>
<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>

<script>
function exit()
{
var x=confirm("Are you sure you want to quit?")
if (x)
	window.location="index.php"
	
	}s
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="act.css" type="text/css" rel="stylesheet" />  
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
.style25 {font-size: 12px;
	font-weight: bold;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style32 {	color: #333366;
	font-size: 10.5px;
}
.style33 {	color: #333366;
	font-size: 11px;
	font-weight: bold;
}
.style34 {
	color: #0066FF;
	font-weight: bold;
	font-size: large;
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
<span class="style34">Daphkkoy Money Transafer</span>
<div align="center">
  <p><a href="index.php">Home</a></p>
  <table width="778" height="365" border="3" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      		<td width="746"><form action="" method="post" name="form1" id="form1">
        <div align="center">
          <table width="696" height="247" border="0">
              <tr bgcolor="#9900FF">
                <td width="690" nowrap="nowrap" bgcolor="#5E338C">
                  <p align="left" class="myh1">NEW CUSTOMER REGISTRATION </p>
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
                        <td width="140" rowspan="2"><label>
                          <label></label>
                          <div align="left">Title                          </div>
                          <div align="left">First Name </div>
                        </label></td>
                        <td width="160"><label>
                          <div align="center">
                            <label>
                            <div align="left">
                              <select name="select">
                                <option selected="selected">MR</option>
                                <option>MRS</option>
                                <option>MISS</option>
</select>
                            </div>
                            </label>
                          </div>
                        </label></td>
                        <td colspan="2" rowspan="2"><div align="center">Last / SurnameName</div></td>
                        <td width="216" rowspan="2"><label>
                          <div align="center">
                            <input name="lname" type="text" id="lname" value="<?php echo isset($_POST['lname']) ? ucfirst($_POST['lname']): '' ?>"/>
                          </div>
                        </label></td>
                      </tr>
                      <tr>
                        <td><input name="fname" type="text" id="fname" value="<?php echo isset($_POST['fname']) ? ucfirst($_POST['fname']): '' ?>" /></td>
                      </tr>
                      <tr>
                        <td><div align="left">Middle Name </div></td>
                        <td><div align="left">
                          <input name="mname" type="text" id="mname" value="<?php echo isset($_POST['mname']) ? ucfirst($_POST['mname']): '' ?>"/>
                        </div></td>
                        <td width="122"><div align="center">Date of Birth</div>
                          <div align="right"></div></td>
                        <td colspan="2"><div align="center">
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
															
															http://www.daphkkoy.com/verify.php?email='.$email.'&hash='.$hash.'
															
															'; // Our message above including the link
															
															$headers = 'From:admin@daphkkoy.com' . "\r\n"; // Set from headers
															mail($to, $subject, $message, $headers); // Send our email
															
															
														
															 
															 
															 {$smsg = ' Congratulations! Your account has been created, <br /> please verify it by clicking
															
															  the activation link that has been sent to your email.';}
															  
															  
															  
echo" <script type='text/javascript'>
 {
 window.alert('Congratulations! Your account has been created, please verify it by clicking the activation link that has been sent to your email ')
window.location='index.php';
 }
</script> ";
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
                        <td colspan="5">		<div align="center">
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
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><div align="center">Email Address </div></td>
                        <td><label>
                          <input name="email" type="text" id="email" value="<?php echo isset($_POST['email']) ? ($_POST['email']): '' ?>"/>
                        </label></td>
                        <td colspan="2"><div align="center" class="style9">Password</div></td>
                        <td><div align="center">
                          <input name="password" type="password" id="password" />
                        </div></td>
                      </tr>
                     
					  <tr>
                        <td><div align="center">Confirm Email </div></td>
                        <td><input name="cemail" type="text" id="cemail" value="<?php echo isset($_POST['cemail']) ? ($_POST['cemail']): '' ?>"/></td>
                        <td colspan="2"><div align="center">Confirm Password </div></td>
                        <td><div align="center">
                          <input name="cpassword" type="password" id="cpassword" />
                        </div></td>
                      </tr>
                      <tr>
                        <td><div align="center">Phone Number </div></td>
                        <td><input name="pnumber" type="text" id="pnumber" value="<?php echo isset($_POST['pnumber']) ? ucfirst($_POST['pnumber']): '' ?>"/></td>
                        <td colspan="2"><div align="center">Mobile Number </div></td>
                        <td><div align="center">
                          <input name="mnumber" type="text" id="mnumber" value="<?php echo isset($_POST['mnumber']) ? ucfirst($_POST['mnumber']): '' ?>"  />
                        </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
         
		                <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2">How Do you know about us</td>
                        <td colspan="3">
                        <select name="youknow" id="youknow" value="<?php echo isset($_POST['youknow']) ? ucfirst($_POST['youknow']): '' ?>">
                                <option selected="selected">None</option>
                                <option>Yell.com</option>
                                <option>Facebook</option>
                                 <option>Words of Mouth</option>
                                  <option>Wholesomeman </option>
                                  <option>Googgle </option>
                                  
</select>
                        &nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5" bgcolor="#5E338C"><div align="center" class="myh1"><strong>RESIDENT</strong> <span class="style11">please enter your post code </span></div></td>
                      </tr>
                      <tr>
                        <td colspan="5">
                          <div align="center">
                            <label>
                            <input type=text name=postcode id=postcode value="<?php echo isset($_POST['postcode']) ? ucfirst($_POST['postcode']): '' ?>">
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
                        <td height="21" colspan="5"><div align="center"><div id="SPLSearchArea" /></div></td>
                      </tr>
                      <tr>
                        <td height="21" colspan="5"><div align="center">
                          <table width="500" border="0">
                            <tr>
                              <td width="83">Company</td>
                              <td width="380"><label>
                                <input type=text name=company id=company size=45 readonly value="<?php echo isset($_POST['company']) ? ucfirst($_POST['company']): '' ?>">
                              </label></td>
                            </tr>
                            <tr>
                              <td>Address 1 </td>
                              <td><input type=text name=line1 id=line1 size=45 readonly value="<?php echo isset($_POST['line1']) ? ucfirst($_POST['line1']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address 2 </td>
                              <td><input type=text name=line2 id=line2 size=45 readonly value="<?php echo isset($_POST['line2']) ? ucfirst($_POST['line2']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Address 3 </td>
                              <td><input type=text name=line3 id=line3 size=45 readonly value="<?php echo isset($_POST['line3']) ? ucfirst($_POST['line3']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Town</td>
                              <td><input type=text name=town id=town size=45 readonly value="<?php echo isset($_POST['town']) ? ucfirst($_POST['town']): '' ?>"></td>
                            </tr>
                            <tr>
                              <td>Country</td>
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
                        <td colspan="5"><div align="center" class="myh1">TERMS AND CONDITION </div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td colspan="4">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>                          <label>
                          <div align="right">
                            <input type="checkbox" name="checkbox" value="checkbox" />
                          </div>
                        </label></td>
                        <td colspan="4"><p>Have read and accepted the <a href="terms &amp; condition.php">terms and conditions</a> and your information will be<br />
  &nbsp;held securely with our data protection policy</p></td>
                      </tr>
                      <tr>
                        <td colspan="5"><div align="center">
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

<?php include "index_F.php" ?>