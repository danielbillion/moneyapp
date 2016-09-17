<?php
							
if(isset($_POST['mon']))
{
						$mon = $_POST['mon'];		  /* EVALUATION FROM TABLE COMMISSION & % BTW AGENT & BUSINESS*/
						$email=$_SESSION['email'];

				//      extract  info for special commission for agent
								$checkagcd = mysql_query("SELECT * FROM agent WHERE email='$email'") or die('Query failed: ' . mysql_error());
							while($ccg = mysql_fetch_array($checkagcd)){$vala=$ccg['coma'];$valb=$ccg['comb'];}
								
											
								$checkot2 = mysql_query("SELECT * FROM  `agent_cr` WHERE `to` >='$mon' AND  `from` <='$mon' ") or
								 die( "<b>Error:</b> Something went wrong, could not edit link status."); 	
								
							while($rowot2=mysql_fetch_array($checkot2))
							{
								
										$tf= $rowot2['value']; $email= $_SESSION['email'];
										if($tf >1){$tf= $rowot2['value']; }	if($tf < 1){$tf= $mon*$rowot2['value'];}
							if(isset($tf) || $tf!==""){
								
					// NO special setting for agent commission rate
					if ($vala=="" && $valb=="") {$ar= $rowot2['pa'];$br=100-$rowot2['pa'];}
					
					// special setting for agent range
					if ($vala!=="" && $valb!==""){$ar=$vala;$br=$valb;	}
					
							}				 
					/*Commission division & computation  */
			
						$lc=($mon * $er ); $ap=($mon + $tf); $_SESSION['amount']= $mon; $_SESSION['lc']= $lc; $_SESSION['ap']= $ap; 
						$_SESSION['tf']= $tf;$_SESSION['er']=$er;
						$com_a=$ar/100 * $tf;$_SESSION['com_a']= $com_a; $com_d=$br/100 * $tf;$_SESSION['com_d']= $com_d;
								
						echo nl2br("Summary");echo nl2br("<hr>"); echo "  Amount to be Sent  (&pound;):"; echo ($mon);echo "<p></p>";
						echo "  Amount you are Paying  (&pound;):"; echo ($mon + $tf);echo "<p></p>"; echo "Commission:  ";echo $tf;echo "<p></p>";
						echo " Local Payment (Naira):"; echo ($mon * $er);echo "<p></p>"; 
						
						
						echo "<table width='153' border='0' align='center' bgcolor='#FFFFFF'><tr>
						<td><div align='center' class='style8'><a href='agent_cust_trans_confirmation.php?address=$address & postcode=$postcode &
						 town=$town & county=$county & country=$country  & s_phone=$s_phone & 
						 s_mphone=$s_mphone & c_name=$c_name & c_email=$c_email' target='' class='style9 style4'><strong>Send Now</strong></a>
						 </div></td> </tr>	</table>";
						
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