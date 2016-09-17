<?php session_start();
include "conn.php";
							
if(isset($_POST['mon']) && is_numeric($_POST['mon']))
{
						$mon = $_POST['mon'];		  /* EVALUATION FROM TABLE COMMISSION & % BTW AGENT & BUSINESS*/
						$email=$_SESSION['email'];
						include"cust_er.php";
				//      extract  
								
											
								$checkot2 = mysql_query("SELECT * FROM  `cust_cr` WHERE `to` >='$mon' AND  `from` <='$mon' ") or
								 die( "<b>Error:</b> Something went wrong, could not edit link status."); 	
								
							while($rowot2=mysql_fetch_array($checkot2))
							{
								
										$tf= $rowot2['value']; $email= $_SESSION['email'];
										if($tf >1){$tf= $rowot2['value']; }	if($tf < 1){$tf= $mon*$rowot2['value'];}
							if(isset($tf) || $tf!==""){
								
					// NO special setting for agent commission rate
				$ar= $rowot2['pa'];$br=100-$rowot2['pa'];
					
					
							}				 
					/*Commission division & computation  */
			
						$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; 
						$_SESSION['tf']= $tf;$_SESSION['er']=$er;
						$com_a=$ar/100 * $tf;$_SESSION['com_a']= $com_a; $com_d=$br/100 * $tf;$_SESSION['com_d']= $com_d;
							$tf2=number_format($tf,2);	$ap2=number_format($ap,2);	$lc2=number_format($lc,2);	$mon2=number_format($mon,2);	
						
								echo "<td>
								 <div style='color:black'><strong>£$mon2 </div>
								<BR/><BR/>
								<div style='color:black'>£$tf2 </div>
								<BR/><BR/>
								<div style='color:black'>£$ap2  </div>
								<BR/><BR/>
								<div style='color:black'>N$lc2  </div>
								<BR/><BR/>
							
								
								
								</td>";
						
						
							}
						
						
													if(!isset($tf) || $tf==""){ echo " Administrator is yet to set range and commssion for this amount";}
								
}










if(isset($_POST['amount']))
{
						$mon = $_POST['amount'];		  /* EVALUATION FROM TABLE COMMISSION & % BTW AGENT & BUSINESS*/
						

				//      extract  info for special commission for agent
								
								
											
								$checkot2 = mysql_query("SELECT * FROM  `agent_cr` WHERE `to` >='$mon' AND  `from` <='$mon' ") or
								 die( "<b>Error:</b> Something went wrong, could not edit link status."); 	
								
							while($rowot2=mysql_fetch_array($checkot2))
							{
								
										$tf= $rowot2['value']; $email= $_SESSION['email'];
										if($tf >1){$tf= $rowot2['value']; }	if($tf < 1){$tf= $mon*$rowot2['value'];}
							if(isset($tf) || $tf!==""){
								
					// NO special setting for agent commission rate
					$ar= $rowot2['pa'];$br=100-$rowot2['pa'];
					
					// special setting for agent range
					
					
							}				 
					/*Commission division & computation  */
			
						$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; 
						$_SESSION['tf']= $tf;$_SESSION['er']=$er;
						$com_a=$ar/100 * $tf;$_SESSION['com_a']= $com_a; $com_d=$br/100 * $tf;$_SESSION['com_d']= $com_d;
								
						
						
							}
						
						
													if(!isset($tf) || $tf==""){ echo " Administrator is yet to set range and commssion for this amount";}
								
}
                        ?>