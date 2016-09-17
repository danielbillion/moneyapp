<?php 
include "conn.php";
							
if(isset($_POST['mon']))
{
						$mon = $_POST['mon'];		  /* EVALUATION FROM TABLE COMMISSION & % BTW AGENT & BUSINESS*/
						$email=$_SESSION['email'];
						
						include"agent_er.php";
				
				//      extract  info for special commission for agent
								$checkagcd = mysql_query("SELECT * FROM agent WHERE email='$email'") or die('Query failed: ' . mysql_error());
							while($ccg = mysql_fetch_array($checkagcd)){$vala=$ccg['coma'];$valb=$ccg['comb'];}
								
								//find commission allocation based on the table of agent commission	
								$id=trim($_SESSION['id2']);
								$checkIfExist=mysql_query("SELECT status FROM `agent_cr` WHERE status='$id' ");
								$checkIfResultExist = mysql_num_rows($checkIfExist);
										if($checkIfResultExist>0){
											$checkot2 = mysql_query("SELECT * FROM  `agent_cr` WHERE (`to` >='$mon' AND  `from` <='$mon') AND status='$id'")
											or die( "<b>Error:</b> Something went wrong, could not edit link status.");
											
										}
										else{
											$checkot2 = mysql_query("SELECT * FROM  `agent_cr` WHERE (`to` >='$mon' AND  `from` <='$mon') AND status='' ") or
											die( "<b>Error:</b> Something went wrong, could not edit link status.");
											
										}
							//find commission allocation based on the table of agent commission
							
									
								
							while($rowot2=mysql_fetch_array($checkot2))
							{
								// splitting up btw agent & business tf/commission	
								//tf val
										$tf= $rowot2['value']; $email= $_SESSION['email'];
										if($tf >1){$tf= $rowot2['value']; }	if($tf < 1){$tf= $mon*$rowot2['value'];}
							if(isset($tf) || $tf!==""){
								
					// NO special setting for agent commission rate
					if ($vala=="" && $valb=="") {$ar= $rowot2['pa'];$br=100-$rowot2['pa'];}
					
					// special setting for agent range
					if ($vala!=="" && $valb!==""){$ar=$vala;$br=$valb;	}
					
							}				 
					/*Commission division & computation  */
			
						$lc=($mon * $er ); $ap=($mon + $tf);   
						$_SESSION['tf']= $tf;$_SESSION['er']=$er;
						$com_a=$ar/100 * $tf; $com_d=$br/100 * $tf;
							
								
						
							}
						
						
													if(!isset($tf) || $tf==""){ echo " Administrator is yet to set range and commssion for this amount";}
								
}







