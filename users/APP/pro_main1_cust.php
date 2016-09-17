<?php session_start();
include "conn.php";
							
if(isset($_POST['mon']))
{
						$mon = $_POST['mon'];		  /* EVALUATION FROM TABLE COMMISSION & % BTW AGENT & BUSINESS*/
						$email=$_SESSION['email'];
						include"agent_er.php";
							
								$checkot2 = mysql_query("SELECT * FROM  `cust_cr` WHERE `to` >='$mon' AND  `from` <='$mon' ") or
								 die( "<b>Error:</b> Something went wrong, could not edit link status."); 	
								
							while($rowot2=mysql_fetch_array($checkot2))
							{
								// splitting up btw agent & business tf/commission	
								//tf val
										$tf= $rowot2['value']; $email= $_SESSION['email'];
										if($tf >1){$tf= $rowot2['value']; }	if($tf < 1){$tf= $mon*$rowot2['value'];}
							if(isset($tf) || $tf!==""){
								
					// NO special setting for agent commission rate
					$ar= $rowot2['pa'];$br=100-$rowot2['pa'];
					
							}				 
					/*Commission division & computation  */
			
						$lc=($mon * $er ); $ap=($mon + $tf);   
						$_SESSION['tf']= $tf;$_SESSION['er']=$er;
						$com_a=$ar/100 * $tf; $com_d=$br/100 * $tf;
							
								
						
							}
						
						
													if(!isset($tf) || $tf==""){ echo " Administrator is yet to set range and commssion for this amount";}
								
}







