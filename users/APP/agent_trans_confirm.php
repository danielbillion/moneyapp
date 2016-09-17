  <?php
							  
						//Sender	 
								$email= ($_SESSION['email']);
								$c_email= ($_GET['c_email']);
								$senderd= ($_GET['address']);
								$postcode = ($_GET['postcode']);
								$town = ($_GET['town']);
								$county = ($_GET['county']);
								$country = ($_GET['country']);
								$c_name= $_GET['sender'];
								$s_fname= $c_name;
								$s_phone= ($_GET['s_phone']);
								
						//Processing Amount
								//include "pro_main1.php";
								$er=trim($er);
								 
							// Receiver									
									$r_transfer=$_POST['r_transfer'];
									$b_fname=trim($_POST['r_fname']);
									$b_lname=trim($_POST['r_lname']);
									$r_name=$b_fname." ".$b_lname ;
									 $r_phone=$_POST['r_phone'];
									 $r_bank=$_POST['r_bank'];
									$r_actno=($_POST['r_actno']);
									if(isset($_SESSION['idtype'])){	$r_idtype= "None";}
									 if(!isset($_SESSION['idtype'])){	$r_idtype= ($_SESSION['idtype']);}
									//$r_idtype= ($_SESSION['idtype']);
									
									
									
									$ag_ps=("np");
									$status=("Pending");
									//$date=date("Y-m-d");
									//Processsing Agent Name
									
							   		$check5 = mysql_query("SELECT * FROM agent ")or die(mysql_error());
									 $check_name = mysql_query("SELECT * FROM agent WHERE email = '$email' ")
									 or die(mysql_error());
									 $table_array = mysql_fetch_array($check5);
									 
									 if(isset($table_array) && $table_array[0] != "") {

									while($row=mysql_fetch_array($check_name))
									{  $agent_name=$row['fname']."  ". $ag_cred=$row['credit'];;}}
									 
			// Check if there is any need to add into agent customer receiver  or update exisiting information					 
		$checkre= mysql_query("SELECT * FROM agent_cust_receiver 
		WHERE  `agent_cust_email`='$c_email' && `b_fname` LIKE '$b_fname%' && (`b_lname`  LIKE '$b_lname%')  ")
		or die(mysql_error());
	 	
		$rers= mysql_num_rows($checkre);	
	
			 if($rers=='0')
				{	mysql_query("INSERT INTO agent_cust_receiver
				(agent_cust_email,agent_email,c_name,b_fname,b_lname,b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date)
													
				VALUES ('$c_email','$email','$c_name','$b_fname','$b_lname','$r_phone','$r_idtype','$r_transfer',
															 '$r_bank', '$r_bank','$r_actno','$date' )") or die(mysql_error());}
											
	
			 if($rers=='1')
				{	mysql_query("UPDATE agent_cust_receiver SET b_transfer='$r_transfer', b_abank='$r_bank',
				 b_pbank='$r_bank', b_phone='$r_phone',b_actno='$r_actno',b_idtype='$r_idtype'
				  WHERE b_fname='$b_fname' && b_lname='$b_lname' ") 
				or die(mysql_error());}
			
			
						
						$r_phone=$r_phone;
											$r_transfer=$r_transfer;
											$r_actno=$r_actno;
											$r_amtsend= number_format($mon);
											$r_amtlocal= number_format($lc);
											$r_commission=  number_format($tf);
											$r_total= number_format($ap);
											$sender= $c_name;
											$receiptno= $tcode;
											$s_phone= $s_phone;
											$sdate= $date;
											$sender_email=$c_email;
											$senderd=$senderd;
											$postcode=$postcode;
											$town=$town;
											$county=$ccounty;
											$country=$country;
											$rate=$er;
											$dtime=$dtime;
											$r_idtype=$r_idtype;
						
						
						echo"<script type='text/javascript'>
								 { location='agent_trans_commit.php?date=$date & tcode=$tcode & email=$email & c_email=$c_email & c_name=$c_name & s_phone=$s_phone & r_name=$r_name & r_phone=$r_phone & r_transfer=$r_transfer & r_bank=$r_bank & r_idtype=$r_idtype & mon=$mon & ap=$ap & lc=$lc & tf=$tf &com_a=$com_a &com_d=$com_d & status= $status & er= $er & r_actno= $r_actno & agent_name=$agent_name & ag_ps=$ag_ps & dtime=$dtime & senderd=$senderd & postcode=$postcode & town=$town & county=$county & country=$country & uc=uc & r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno ';}
								</script> ";
								 
	
					
					
												  
							  
				  ?>