<?php


session_start();

 include "conn.php"; 
 include "info.php";

$_SESSION['timestamp']=time();

/* initialising session server configuration setting  */

$_SESSION['server']=$server;
$_SESSION['pass']=$pass;
$_SESSION['user']=$user;
$_SESSION['db']=$db;

/* initialising business system setting  */

$_SESSION['name1']=$name1;
$_SESSION['name2']=$name2;
//$_SESSION['address']=$address;
$_SESSION['tel']=$tel;
$_SESSION['tel2']=$tel2;
$_SESSION['emailbs']=$emailbs;
$_SESSION['email2']=$email2;
$_SESSION['web1']=$web1;
$_SESSION['ecredit']=$ecredit;
$_SESSION['ecal']=$ecal;
$_SESSION['web2']=$web2;
$_SESSION['letter1']=$letter1;
$_SESSION['letter2']=$letter2;
$_SESSION['letter3']=$letter3;


/* initialising business system setting  */

 if (isset($_POST['Login'])) { // if form has been submitted

$_POST['password']=mysql_escape_string($_POST['password']);
$_POST['email']=mysql_escape_string($_POST['email']);
$email_check= $_POST['email']=mysql_escape_string($_POST['email']);

 // makes sure they filled it in
																	 
			 if(!$_POST['email'] | !$_POST['password']) {
				{$msg = ' Empty field <br />';}
		
			}

 	// checks it against the database
						$email_check= $_POST['email'];
			if (!get_magic_quotes_gpc()) {
				//c  bbv$_POST['email'] = addslashes($_POST['email']);
			}

				$check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_POST['email']."'")or die(mysql_error());
				$checkc_email = mysql_query("SELECT * FROM agent WHERE email = '".$_POST['email']."'")or die(mysql_error());


				$result_email = mysql_query('SELECT id,email,date,log_type FROM last_login ORDER BY id DESC LIMIT 1') 
				or die('Invalid query: ' . mysql_error());
				//print values to screen
				while ($row = mysql_fetch_assoc($result_email)) { $_SESSION['date'] = $row['date'];}



				$getll_email = mysql_query("SELECT date FROM last_login WHERE email = '$email_check' ")/* Last Login Initialisation */
 				or die( "<b>Error:</b> Something went wrong, could not edit link status.");
				
				list($lastlogin) = mysql_fetch_row($getll_email);
				$_SESSION['date'] = $lastlogin;

						 //Gives error if user dosen't exist4

				 $check2_email = mysql_num_rows($check_email);

			if ($check2_email == 0) {

				{$msg = 'That user does not exist in our database...';} 

 				}
				
				
			while($info_email = mysql_fetch_array( $check_email )) 	

 			{

								$_POST['password'] = stripslashes($_POST['password']);
								$_SESSION['id']=$code."1100".$info_email['id'];
								$_SESSION['id2']=$info_email['id'];
								$lname=$info_email['lname'];
								$fname=$info_email['fname'];


								$_SESSION['s_fname']=$info_email['fname']."  ".$info_email['lname'];
								$_SESSION['agfname']=$info_email['fname']."  ".$info_email['lname'];
								$_SESSION['sfname_ad']=$info_email['fname']."  ".$info_email['lname'];
								$_SESSION['title']=$info_email['title'];


					/*********** *******************Test for admin  & agent type************************************************************** */

							if ($info_email['type']== "admin"){
							
							 $_SESSION['type']=$info_email['type'];
							 $_SESSION['level']=$info_email['level'];
							  $level=$info_email['level'];
							 $_SESSION['log_type']="admin";
							 $log_type="admin";
							 }

							if ($info_email['type']== "agent"){
								$_SESSION['log_type']="agent";
								 $_SESSION['type']="agent";
								 $_SESSION['level']=0;
								$log_type="agent"; }

				/*********** *******************New for Time & date Login ************************************************************** */
	
							include "time.php";
							$time=time("H:i:s");
						
							$check3_email = mysql_query("SELECT * FROM last_login WHERE email = '$email_check'")or die(mysql_error());
							$check4_email = mysql_num_rows($check3_email);
							
							if ($check4_email == 0) {
							mysql_query("INSERT INTO last_login(email,log_type,fname,lname,date,time) VALUES ('$email_check','$log_type','$fname','$lname','$dtime','$time' )"); }

			/*********** *******************New for Time & date Login ************************************************************** */
							 //gives error if the password is wrong

		
							$info_email['password'] = stripslashes($info_email['password']);
							$_POST['password'] = md5($_POST['password']);
							$passt = md5($_POST['password']);
	
							if ($_POST['password'] != $info_email['password']) {
								{$msg = 'Incorrect password, please try again.';} break;
							}
	


					else 
								
								 { 
								  
							 $checkc_login = mysql_query("SELECT id,email,operation,page FROM view_page  WHERE email ='$email_check' 
							ORDER BY id DESC LIMIT 1") 
							or die('Invalid query: ' . mysql_error());
							$num_login = mysql_num_rows($checkc_login);
							//print values to screen
							if ($num_login > 0) {
							while ($rowlp = mysql_fetch_assoc($checkc_login)) {
							 $pages= $rowlp['page'];
							 $opt = $rowlp['operation']; $op = time()- $opt; }
							 
								  }
							 if ($num_login == 0) {
								 $op =0; 
								 
								  }
						 
		
							
									
								  
								  
								  
								  /*Direct To agent Page */
								 if($log_type=="agent"){
									  
									 while($status_test = mysql_fetch_array( $checkc_email ))  {$check_status=$status_test['active']; }
									if ($check_status == 0) {$msg = 'This accout is inactive. Please contact administrator <br />';}
									
									else{ 
									   
								 //include "time.php";
								 include "time.php";$time=time("H:i:s");$log_type="admin";
																$updatelog_email = mysql_query("UPDATE last_login SET date = '$dtime' WHERE email = '$email_check' ") or
								 die( "<b>Error:</b> Something went wrong, could not edit link status.");
									  
									$_SESSION['passt'] = $passt;  
									$_SESSION['email'] = $_POST['email'];
									$_SESSION['email_ad'] = $_POST['email'];
									
									if (!file_exists('login.php')) {  
														if($op>2000 || $op == 0 ){
															 echo" <script type='text/javascript'>{location='app/agent_page.php';}</script> ";}
															 if( $op > 0 && $op  < 2000 ){
															 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
														 	break;
									
																	}
                     

									if (file_exists('login.php')) { 
															if($op>2000 || $op == 0 ){
															 echo" <script type='text/javascript'>{location='agent_page.php';}</script> ";}
															 if( $op > 0 && $op  < 2000 ){
															 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
														 	break;
									
									  								}
										
									
 									  break; 
									  // header('Location: agent_page.php '); 
 									} 
	 							 }
	  /* Direct to Adminstration Page */
  
  								 if($level=="1" || $level=="2" ){
	   
												while($status_test = mysql_fetch_array( $checkc_email ))  {$check_status=$status_test['active']; }
							
								
												if ($check_status == 0) {$msg = 'This accout is inactive. Please contact administrator <br />';}
												
												else{ 
												 include "time.php";$time=time("H:i:s");$log_type="admin";
							   
												 //include "time.php":
																					
													$updatelog_email = mysql_query("UPDATE last_login SET date = '$dtime' WHERE email = '$email_check' ") 
													or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
													 $_SESSION['passt'] = $passt;
													$_SESSION['email'] = $_POST['email'];
													$_SESSION['email_ad'] = $_POST['email'];
													
													if (!file_exists('login.php')) {  
														if($op>2000  || $op == 0){
															 echo" <script type='text/javascript'>{location='app/admin_page.php';}</script> ";}
															 if( $op > 0 && $op  < 2000 ){
															 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
														 break;	}
														 
														 
													if (file_exists('login.php')) {  
																if($op > 2000  || $op == 0){
																 echo" <script type='text/javascript'>{location='admin_page.php';}</script> ";}
																 if(  $op > 0 && $op  < 2000 ){
																 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
																break;	}
						 
                     

												
  													} 


	   
	   
	   
	  							 }
								 
								 
								 
								 
								 
								 
								 
								  /* Direct to Admin level 2e */
  
  								 if($level=="3"){
	   
												while($status_test = mysql_fetch_array( $checkc_email ))  {$check_status=$status_test['active']; }
							
								
												if ($check_status == 0) {$msg = 'This accout is inactive. Please contact administrator <br />';}
												
												else{ 
												 include "time.php";$time=time("H:i:s");$log_type="admin 2";
							   
												 //include "time.php":
																					
													$updatelog_email = mysql_query("UPDATE last_login SET date = '$dtime' WHERE email = '$email_check' ") 
													or die( "<b>Error:</b> Something went wrong, could not edit link status.");
							   
													 $_SESSION['passt'] = $passt;
													$_SESSION['email'] = $_POST['email'];
													$_SESSION['email_ad'] = $_POST['email'];
													
													if (!file_exists('login.php')) { 
													
													if($op>2000  || $op == 0){
															 echo" <script ='text/javascript'>{location='app/admin_page2.php';}</script> ";}
															 if( $op > 0 && $op  < 2000 ){
															 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
														 	break;
													
													
														}
                     

													if (file_exists('login.php')) {
														
														if($op>2000  || $op == 0){
															 echo" <script type='text/javascript'>{location='admin_page2.php';}</script> ";}
															 if( $op > 0 && $op  < 2000 ){
															 echo" <script type='text/javascript'>{location='$pages';}</script> ";}
														 	break;
														
														  }
													
	 											 // header('Location: agent_page.php '); 

  													} 


	   
	   
	   
	  							 }
  				 }

 } 

}


// if they are not logged in 

 

?>