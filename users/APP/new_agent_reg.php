<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>
 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
 <script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
 

<?php  include "login.php"; ?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>


<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

.about {
  margin: 70px auto 40px;
  padding: 8px;
  width: 260px;
  font: 10px/18px 'Lucida Grande', Arial, sans-serif;
  color: #666;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.25);
  background: #eee;
  background: rgba(250, 250, 250, 0.8);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
}
.about a {
  color: #333;
  text-decoration: none;
  border-radius: 2px;
  -webkit-transition: background 0.1s;
  -moz-transition: background 0.1s;
  -o-transition: background 0.1s;
  transition: background 0.1s;
}
.about a:hover {
  text-decoration: none;
  background: #fafafa;
  background: rgba(255, 255, 255, 0.7);
}

.about-links {
  height: 30px;
}
.about-links > a {
  float: left;
  width: 50%;
  line-height: 30px;
  font-size: 12px;
}

.about-author {
  margin-top: 5px;
}
.about-author > a {
  padding: 1px 3px;
  margin: 0 -1px;
}

/*
 * Copyright (c) 2012-2013 Thibaut Courouble
 * http://www.cssflow.com
 *
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 */
body {
  font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}

.container {
  margin: 80px auto;
  width: 990px;
}

.login {
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 990;
  background: white;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 4px;
}
.login h1 {
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
.login p {
  margin: 20px 0 0;
}
.login p:first-child {
  margin-top: 0;
}
.login input[type=text], .login input[type=password] {
  width: 278px;
}
.login p.remember_me {
  float: left;
  line-height: 31px;
}
.login p.remember_me label {
  font-size: 12px;
  color: #777;
  cursor: pointer;
}
.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}
.login p.submit {
  text-align: right;
}

.login-help {
  margin: 20px 0;
  font-size: 11px;
  color: white;
  text-align: center;
  text-shadow: 0 1px #2a85a1;
}
.login-help a {
  color: #cce7fa;
  text-decoration: none;
}
.login-help a:hover {
  text-decoration: underline;
}

:-moz-placeholder {
  color: #c9c9c9 !important;
  font-size: 13px;
}

::-webkit-input-placeholder {
  color: #ccc;
  font-size: 13px;
}

input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}

input[type=text], input[type=password] select {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}

select {
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}


input[type=text]:focus, input[type=password]:focus, select:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}


input[type=submit] {
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}
input[type=submit]:active {
  background: #cde5ef;
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
  line-height: 34px;
}


</style>








  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title> Login Form|<?php if (isset($name1)){ echo $name1;} ?></title>
  
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Registration - <?php if (isset($name1)){ echo $name1;} ?></h1>
      <form action="" method="post" name="form1" id="form1">
                      <div align="center">
                        <table width="436" height="247" border="0">
                          <tr valign="top" bgcolor="#9900FF">
                            <td width="430" nowrap="nowrap" bgcolor="#FFFFFF" ><p align="left" class="style12" style="font-weight: bold; color: #F00; font-size: 14px;"> </p>
                            
                              <div align="center" class="style4">
                                <div align="left"></div>
                              </div></td>
                          </tr>
                          <tr>
                            <td height="167"><div align="center">
                              <table width="500" border="0">
                                <tr>
                                  <td colspan="4"><div align="center"></div></td>
                                </tr>
                                <tr>
                                  <td colspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="109"><label>
                                    <span id="as"  style="color: #006;">Title</span>
                                    <div align="left"></div></td>
                                  <td width="241"><label> </label></td>
                                  <td colspan="2"><span style="color: #006;">Last Name
                                      <label></label>
                                  </span></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><select name="select" class="validate-subject required input_field" value="<?php echo isset($_POST['select']) ? ucfirst($_POST['select']): '' ?>">
                                    <option selected="selected">MR</option>
                                    <option>MRS</option>
                                    <option>MISS</option>
                                  </select></td>
                                  <td colspan="2"><input name="lname" type="text" class="required input_field" id="lname" value="<?php echo isset($_POST['lname']) ? ucfirst($_POST['lname']): '' ?>" size="35"/></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td width="88"><span style="color: #006;">Middle </span></td>
                                  <td width="244">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">First Name </td>
                                  <td colspan="2"  style="color: #006;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><input name="fname" type="text" class="required input_field" maxlength="40" id="fname" size=35 value="<?php echo isset($_POST['fname']) ? ucfirst($_POST['fname']): '' ?>" /></td>
                                  <td colspan="2"><input name="mname" type="text" class="validate-subject required input_field" id="mname" size="35" value="<?php echo isset($_POST['mname']) ? ucfirst($_POST['mname']): '' ?>" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">&nbsp;</td>
                                  <td colspan="2"  style="color: #006;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><div align="center"></div></td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4"><span style="color: #006;">Date of Birth</span></td>
                                </tr>
                                <tr>
                                  <td colspan="4"><?php
						if (isset($_POST['Submit'])){
								
								
								
								 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}
								 
						
														
														include "conn.php";  
														$check = mysql_query("SELECT * FROM agent 
														WHERE email = '".$_POST['email']."'")or die(mysql_error());
														
														$check_c = mysql_query("SELECT * FROM new_customer 
														WHERE email = '".$_POST['email']."'")or die(mysql_error());
														
														
														$check2 = mysql_num_rows($check);
														$check2c = mysql_num_rows($check_c);
														
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
														$act_type=mysql_escape_string($_POST['act_type']);
														$dob=isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 
														$address=$_POST['company'] .' '. $_POST['line1'] .' '. $_POST['line2'] .'
														 '. $_POST['line3'] .' '. $_POST['town'] .' '.
														 $_POST['county']. ' '.$_POST['country'] ;	
														 $hash = md5( rand(0,1000) );
														  // Generate random 32 character hash and assign it to a local variable. 
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
														| empty($_POST['cpassword'])| empty($_POST['mnumber']) |
														 empty($_POST['pnumber'])|
														 empty($_POST['postcode']))
														{$nmsg = 'Please fill all required
														 fields and click postcode search button for address<br />';}
												
												if(!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['email'])&&
										  			!empty($_POST['cemail'])&& !empty($_POST['password'])&& 
										  			!empty($_POST['cpassword'])&& !empty($_POST['mnumber']) &&
											 		!empty($_POST['pnumber'])&& !empty($_POST['postcode'])&&
													
											 		!empty($_POST['line1']))
														
															{ if ($_POST['password'] != $_POST['cpassword']){ 
															$pmsg = 'Password didnt match.';}
															
															 //Mis-match email?
															else if ($_POST['email'] != $_POST['cemail']) {$emsg =
															 'Email didnt match.';}
															
															//check for email existence in the database
															else if  (($check2 != 0) && ($act_type=='Agent') || 
															($check2c != 0) && ($act_type=='Customer') )  { $amsg = 'Sorry,
															 the Email '.$_POST['email'].' is already in use.';}

 															

															 //email check
															 				 else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
																	 $email)){$msg = 'The email you have entered is invalid, please try again.'; }
																
																//check for Agreement	 
															else if (!isset($_POST['checkbox']))	{ $amsg = 
															'You need to agree to our terms and conditions.';}	 
													
															else
																{
																$_SESSION['fname']= $_POST['fname'];
																$_SESSION['lname']= $_POST['lname'];
																$_SESSION['mname']= $_POST['mname'];
																$_SESSION['email']= $_POST['email'];
																$_SESSION['mnumber']= $_POST['mnumber'];
																$_SESSION['password']=$_POST['password'];
																$_SESSION['address']=isset($_REQUEST["date1"]) ? 
																$_REQUEST["date1"] : ""; 
															
																	$password = md5($password);
																	
																	if (!get_magic_quotes_gpc()) {$password = addslashes($password);}
								
				
															

															include "conn.php"; 
																	$agrs="N";	
																	$type= $act_type;
																	if($act_type=='agent'){
							
								mysql_query("INSERT INTO agent (fname,lname,mname,email,password,mnumber,pnumber,dob,address,
								postcode,type,hash,date_reg,title,company,line1,line2,line3,town,county,country,youknow,agrs,level)
		
								VALUES('$fname','$lname','$mname','$email','$password','$mnumber','$pnumber','$dob','$address','$postcode','$type','$hash',
							'$reg_date','$title','$company','$line1','$line2','$line3','$town','$county','$country','$youknow','$agrs','0'
																		 )") or die(mysql_error());
																		 
																		 
																 {$smsg = ' Congratulations! Your account has been created.';}
															  
															  
										echo" <script type='text/javascript'>
											 { window.alert('Congratulations! You now need Administrator Confirmation to Activate with your email Account ')
										window.location='/../moneyapp/users/login.php';		//agent location for login
										 	}
										</script> ";		 
																	}
																																		
																	if($act_type=='Customer'){
									
									include "info.php";
								
								mysql_query("INSERT INTO new_customer (fname,lname,mname,email,password,
								mnumber,pnumber,dob,address,
								postcode,hash,date_reg,title,company,line1,line2,line3,
								town,county,country,youknow,agrs,level)
		
								VALUES('$fname','$lname','$mname','$email',
								'$password','$mnumber','$pnumber','$dob','$address','$postcode','$hash',
							'$reg_date','$title','$company','$line1','$line2',
							'$line3','$town','$county','$country','$youknow','$agrs','0'
																		 )") or die(mysql_error());
																		 
																		 
								 
									$email_link="https://".$web1."/moneyapp/users/APP/verify.php?email=$email"."&hash=$hash";
									
								
																
										
															
															
															
															
															   

					$emailbs=strtolower($emailbs);
					$name1=ucfirst($name1);
					$headers = 'From:'.$emailbs ; // Set from headers ;
					$cleanedFrom=$emailbs;
					$rt=date("Y-m-d H:i:s");
					
					$newtime = date('h:i:A', strtotime($rt));
					 $newDate = date('j  F  Y', strtotime($rt));
					
								$to =  $email; 
								$subject =  "Signup | Verification"; 
								$headers = "From: " . $cleanedFrom . "\r\n";
								$headers .= "Reply-To: ". strip_tags($cleanedFrom) . "\r\n";
								$headers .= "MIME-Version: 1.0\r\n";
								$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
					
						$message = '<html><body>';
						$message.="<div align='center'>";
						$message.=" <table width='666' border='0' cellpadding='4' cellspacing='4'>
									<tr bgcolor='#9999FF'>
									  <td colspan='2'><div align='center' style='color: #FFF'><strong>SignUp
									   Verification- $name1</strong></div></td>
										</tr>
									   <tr>
								  <td colspan='2'><p>Thank you for signing up.Please Click on the link below to activate your account.
								  <p/></td>
								</tr>
								<tr>
								  <td>Email</td>
								  <td>$email</td>
								</tr>
							   <tr>
								  <td>Password</td>
								  <td>********</td>
								</tr>
								
								 <tr>
								  <td colspan='2'>$email_link;</td>
								</tr>
								<tr>
								  <td colspan='2'>&nbsp;</td>
																</tr>
												  </table>";
								$message.="</div>";
									 $to      = "$email";
								
								$sent = mail($to, $subject, $message, $headers) ; 
 
 
 					  		
														
															 
															 
										 {$smsg = ' Congratulations! Your account has been created.';}
															  
															  
										echo" <script type='text/javascript'>
											 { window.alert('Congratulations! You now need to Activate with your email Account ')
										window.location='/../moneyapp/users/login.php';
										 	}
										</script> ";
															
															  }
		
															}

															}}
							
								
						 
						 $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1912, 2010); $myCalendar->dateAllow('1912-01-01', '2010-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 	
						
							?></td>
                                </tr>
                                <tr>
                                  <td colspan="4"><div align="center"><span style="color:white">
                                    <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="500" border="0" bgcolor="#FFFF33"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';

    } 
	if(isset($emsg)){  // Check if $msg is not empty  
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="500" border="0"  bgcolor="#FFFF33"><tr><th  scope="row">'.$emsg.'</th> </tr></table>';

    } 
	
	
	if(isset($pmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="500" border="0" bgcolor="#FFFF33"><tr><th  scope="row">'.$pmsg.'</th> </tr></table>';
    }
	
	
	if(isset($nmsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="500" border="0"  bgcolor=" bgcolor="#FFFF33"><tr><th  scope="row">'.$nmsg.'</th> </tr></table>';
    }
	
	if(isset($smsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="500" border="0" bgcolor="#FFFF33"><tr><th  scope="row">'.$smsg.'</th> </tr></table>';
    }
	
	if(isset($amsg)){  // Check if $msg is not empty  
        
	
	echo '<table width="500" border="0" bgcolor="#FFFF33"><tr><th  scope="row">'.$amsg.'</th> </tr></table>';
    }
	 
?>
                                  </span></div></td>
                                </tr>
                                <tr bgcolor="#5E338C">
                                  <td colspan="4" bgcolor="#FFFFFF" >&nbsp;</td>
                                </tr>
                                <tr bgcolor="#5E338C">
                                  <td colspan="4" bgcolor="#FFFFFF" ><div align="center" class="style12">
                                    <div align="left"><strong style="font-size: 14px; color: #F00;">CONTACT INFORMATION </strong>
                                      <hr />
                                    </div>
                                  </div></td>
                                </tr>
                                <tr>
                                  <td colspan="2">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">Phone Number </td>
                                  <td colspan="2"  style="color: #006;"><span >Mobile Number</span></td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;"><input name="pnumber" type="text" class="validate-subject required input_field" id="pnumber" value="<?php echo isset($_POST['pnumber']) ? ucfirst($_POST['pnumber']): '' ?>" size="35" maxlength="11"/></td>
                                  <td colspan="2"  style="color: #006;"><input name="mnumber" type="text" class="validate-subject required input_field" id="mnumber" value="<?php echo isset($_POST['mnumber']) ? ucfirst($_POST['mnumber']): '' ?>" size="35" maxlength="11"  /></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><div align="center"></div></td>
                                  <td colspan="2"><div align="center"></div></td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">Email Address</td>
                                  <td colspan="2"  style="color: #006;">Confirm Email </td>
                                </tr>
                                <tr>
                                  <td colspan="2"><input name="email" type="text" class="validate-subject required input_field" id="email" size=35 value="<?php echo isset($_POST['email']) ? ($_POST['email']): '' ?>"/></td>
                                  <td colspan="2"><input name="cemail" type="text" id="cemail" class="validate-subject required input_field" size=35 value="<?php echo isset($_POST['cemail']) ? ($_POST['cemail']): '' ?>" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">Password</td>
                                  <td colspan="2"><div align="center" style="color: #000000">
                                    <div align="left">Confirm Password </div>
                                  </div></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><input name="password" type="password" class="validate-subject required input_field" id="password" size="35" /></td>
                                  <td colspan="2"><input name="cpassword" type="password" class="validate-subject required input_field" id="cpassword" size="35" /></td>
                                </tr>
                                <tr>
                                  <td colspan="2">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"  style="color: #006;">How did you get to know us</td>
                                  <td colspan="2">Account Type</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><select name="youknow" id="youknow" class="validate-subject required input_field" value="<?php echo isset($_POST['youknow']) ? ucfirst($_POST['youknow']): '' ?>">
                                    <option selected="selected"></option>
                                    <option>Word of Mouth</option>
                                    <option>Salesman</option>
                                    <option>Google</option>
                                    <option>Twitter </option>
                                  </select></td>
                                  <td colspan="2"><select name="act_type" id="act_type" class="validate-subject required input_field" value="<?php echo isset($_POST['youknow']) ? ucfirst($_POST['youknow']): '' ?>">
                                    <option selected="selected">Customer</option>
                                    <option>agent</option>
                                  
                                  </select></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4" ><div align="left"><span class="myh1"><span class="style13"><strong style="font-size: 14px; color: #F00;">ADDRESS</strong> <span class="style11">please enter your only your post code </span></span></span>
                                    <hr />
                                  </div></td>
                                </tr>
                               
                                <tr>
                                  <td colspan="2">
                                   
                                    <input type=text name=postcode class="validate-subject required input_field" id=postcode value="<?php echo isset($_POST['postcode']) ? ucfirst($_POST['postcode']): '' ?>" /></td><td colspan="2">
                                    <input type=button value="Postcode Search" class="submit_btn float_l" onClick="Javascript:SPLGetAddressData(document.getElementById('postcode').value)" /></td>
                                </tr>
                                <tr>
                                  <td height="21" colspan="4"><div align="center">
                                    <div id="SPLSearchArea" />          
                                  </div></td>
                                </tr>
                                <tr>
                                  <td height="21" colspan="4"><div align="center">
                                    <table width="749" border="0">
                                      <tr>
                                        <td width="151"  style="color: #006;">Company</td>
                                        <td width="588"><label>
                                          <input type=text name=company class="validate-subject required input_field" id=company size=45 readonly  value="<?php echo isset($_POST['company']) ? ucfirst($_POST['company']): '' ?>">
                                        </label></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">Address Line 1 </td>
                                        <td  style="color: #006;"><input type=text name=line1 class="validate-subject required input_field" id=line1 size=45 readonly value="<?php echo isset($_POST['line1']) ? ucfirst($_POST['line1']): '' ?>"></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">Address Line 2 </td>
                                        <td><input type=text name=line2 class="validate-subject required input_field" id=line2 size=45 readonly value="<?php echo isset($_POST['line2']) ? ucfirst($_POST['line2']): '' ?>"></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">Address Line 3 </td>
                                        <td><input type=text name=line3 class="validate-subject required input_field" id=line3 size=45 readonly value="<?php echo isset($_POST['line3']) ? ucfirst($_POST['line3']): '' ?>"></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">Town</td>
                                        <td><input type=text name=town id=town class="validate-subject required input_field" size=45 readonly value="<?php echo isset($_POST['town']) ? ucfirst($_POST['town']): '' ?>"></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">County</td>
                                        <td><input type=text name=county class="validate-subject required input_field" id=county size=45 readonly value="<?php echo isset($_POST['county']) ? ucfirst($_POST['county']): '' ?>"></td>
                                      </tr>
                                      <tr>
                                        <td  style="color: #006;">Country</td>
                                        <td><input type=text name=country class="validate-subject required input_field" id=country size=45 readonly value="<?php echo isset($_POST['country']) ? ucfirst($_POST['country']): '' ?>"></td>
                                      </tr>
                                    </table>
                                  </div></td>
                                </tr>
                                <tr bgcolor="#5E338C">
                                  <td colspan="4" bgcolor="#FFFFFF" >&nbsp;</td>
                                </tr>
                                <tr bgcolor="#5E338C">
                                  <td colspan="4" bgcolor="#FFFFFF" ><div align="center" class="style12">
                                    <div align="left"><span style="font-size: 12px"><strong style="font-size: 14px; color: red;">TERMS AND CONDITION </strong></span>
                                      <hr />
                                    </div>
                                  </div></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="3">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4"></label>
                                    <span style="color:#000">
                                      <input type="checkbox" name="checkbox" value="checkbox" />
                                      Have you read and accepted the <a href="../../terms&amp;condition.php">terms and conditions?</a> and your information will be held securely with our data protection policy</span></td>
                                </tr>
                                <tr>
                                  <td colspan="4"><div align="center">
                                    <label></label>
                                    <p>
                                      <label> </label>
                                      <label>
                                        <input type="submit" class="submit_btn float_l"  name="Submit" value="Submit" />
                                      </label>
                                      <input type="button" class="submit_btn float_l" name="Exit" value="Exit" onClick="exit()" />
                                    </p>
                                  </div></td>
                                </tr>
                              </table>
                            </div></td>
                          </tr>
                        </table>
                      </div>
                    </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="agent_forgot_password.php">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="new_agent_reg.php">Register</a>
      <a href="/../../../index.php" >Home</a>
    </p>
    <p class="about-author">
      &copy; 2010&ndash;2015<a href="http://www.ictprofessionals.co.uk" target="_blank">Ictprofessionals</a> -
      <a href="http://www.ictprofessionals.co.uk" target="_blank">Ictprofessionals World Limited</a><br>
      </a>
  </section>
</body>
</html>
