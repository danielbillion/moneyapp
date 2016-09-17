<?php session_start();
include "info.php";
 $newtime = date('h:i:A', strtotime($$dtime));
 $newDate = date('j  F  Y', strtotime($date));
							



$message = '<html><body>';
	
    $message .="<div align='center'>";
      $message .="<table width='801' height='481' border='1' align='center' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>";$message .="<tr>
          		<th width='797' height='479' scope='row'><div align='center'>";
            	$message .="<table width='743' height='873' border='0' cellpadding='0' cellspacing='0'>";$message .="<tr>
                <th height='49' colspan='6' style='font-size: 22px' scope='row'><img src='img_logo.php' width='28' height='54'  />
				".$_SESSION['name2']."</th>
         </tr>";$message .="<tr>
                <th height='23' scope='row'>&nbsp;</th>
                <th colspan='4' scope='row'><span class='style2' style='font-size: 20px; color: #000;'>RECEIPT OF TRANSACTION </span></th>
                <th width='183' scope='row'>&nbsp;</th>
         
		  </tr>";$message .="<tr><th height='23' colspan='6' class='style13' scope='row'>".$addressbs."
                </span>&nbsp;</br><span class='style5'>Phone:". $tel. $tel2."&nbsp; Email:".$emailbs. $web1."</span></th>
         </tr>";$message .="<tr>
                <th height='23' colspan='6' scope='row'><strong><span class='style14'></span></span></strong></th>
          </tr>";$message .="<tr>
                <th height='40' scope='row'>&nbsp;</th> <td class='style10'><div align='right' class='style12'></div></td>
                <td colspan='3' class='style10'><div align='center' class='style12' style='font-size: 13px'>
                  <div align='right'><span class='style12' style='font-size: 13px'><span class='style12' style='font-size: 13px'>
                    
                    ".$newDate."</span> </span></div> </div></td> <td class='style10'><div align='center'> ".$newtime."  </div></td>
                 	 
              
                
             </tr>";$message .="<tr>
                <th scope='row'>&nbsp;</th>
                <td colspan='5' class='style10'><div align='right'></div></td>
            </tr>";$message .="<tr>
                <th scope='row'></th>
                <td colspan='5' class='style10'><div align='left'></div></td>
            </tr>";$message .="<tr>
                <th width='149' height='29' style='font-size: 14px' scope='row'><div align='left' class='style12'>
                  <div align='center' style='font-size: 18px'><u>SENDER </u></div>
                </div></th>
                <td colspan='4' class='style10' style='font-size: 14px'><div align='center' class='style13'>
                    <div align='left' class='style12'></div>
                </div></td>
                <td class='style10' style='font-size: 14px'><div align='center' style='font-size: 18px'><u>RECEIVER </u></div></td>
           </tr>";$message .="<tr>
                <th height='47' style='font-size: 14px' scope='row'><div align='left' class='style12'>SENDER NAME:</div></th>
                <td class='style10' style='font-size: 14px'><div align='left'><span class='style12'>"
                  .$c_name."</span></div></td>
                <td width='77' class='style10' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td width='114' class='style10' style='font-size: 14px'><span class='style12'>NAME:</span></td>
                <td class='style10' style='font-size: 14px'><div align='left'></div></td>
                <td class='style10' style='font-size: 14px'>". $r_name."</td>
          </tr>";$message .="<tr>
                <th rowspan='2' valign='top' class='style12' style='font-size: 14px' scope='row'><p align='left' class='style12'>RESIDENCE:</p></th>
                <td width='180' rowspan='2' class='style12' style='font-size: 14px'><div align='left'>
                  ". $senderd. "</div><div align='center' class='style12'> <div align='left'>             
                    </div> </div></td>
                 
                <td height='27' valign='top' class='style12' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td height='27' valign='top' class='style12' style='font-size: 14px'>PHONE NUMBER:</td>
                <td height='27' valign='top' class='style12' style='font-size: 14px'><div align='left'></div></td>
    	<td height='27' valign='top' class='style12' style='font-size: 14px'>".$r_phone."</td>				
        </tr>";$message .="<tr>
                <td height='28' valign='top' class='style12' style='font-size: 14px'><div align='right' class='style12'></div></td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'>DESTINATION:</td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'><div align='left'></div></td>
                <td height='28' valign='top' class='style12' style='font-size: 14px'>NIGERIA</td>
         </tr>";$message .="<tr>
                <th class='style12' style='font-size: 14px' scope='row'><div align='left' class='style12'>POST CODE:</div></th>
                <td class='style12' style='font-size: 14px'>". $postcode."</td>
				
                <td height='35' colspan='3' class='style12' style='font-size: 14px'><div align='right'></div></td>
                <td class='style12' style='font-size: 14px'><div align='center'></div></td>
        </tr>";$message .="<tr>
                <th height='32' style='font-size: 14px' scope='row'><div align='left' class='style12'>COUNTRY;</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                  <div align='left'>UNITED KINGDOM</div></div></td>
                
                <td colspan='3' class='style10' style='font-size: 14px'><div align='center'></div></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
         </tr>";$message .="<tr>
                <th height='35' style='font-size: 14px' scope='row'><div align='left' class='style12'>PHONE NUMBER;</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'><span class='style12' style='font-size: 14px'>
                  ".$s_phone. $s_mphone." </span></div></td>
                <td colspan='3' class='style10' style='font-size: 14px'><div align='right'></div></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
         </tr>";$message .="<tr>
                <th height='24' colspan='6' style='font-size: 14px' scope='row'><hr /></th>
         </tr>";$message .="<tr>
                <th height='24' style='font-size: 14px' scope='row'><div align='left' class='style12'></div></th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
                <th colspan='2' style='font-size: 14px' scope='row'><div align='left' class='style12'>
                 <div align='left'><u style='font-size: 18px'>TRANSACTIONS</u></div>
                </div>                  <div align='left' class='style12'></div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'></div></td>
                <td colspan='3' class='style10' style='font-size: 14px'><span class='style12'>
                <u style='font-size: 18px; font-weight: bold;'>MODE OF PAYMENT</span></td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left' class='style12'>SENDING:</div></th>
                <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                    <span class='style7'>&pound; </span>
                    ".$mon.".00</div></td>
                <td class='style10' style='font-size: 14px'><p align='center'>&nbsp;</p></td>
                <td colspan='3' class='style10' style='font-size: 14px'><span class='style12'>TODAY'S RATE: &pound;1= &#8358;
                    ".$er."</span></td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left' class='style12'>NAIRA EQUIVALENCE:</div></th>
                <td class='style10' style='font-size: 14px'><span class='style12'>&#8358; 
                  ". $lc."</span></td>
                <td class='style10' style='font-size: 14px'><div align='center'></div></td>
                <td class='style10' style='font-size: 14px'><span class='style12'>BANK PAYING:</span></td>
                <td class='style10' style='font-size: 14px'>&nbsp;</td>
                <td class='style10' style='font-size: 14px'><span class='style10' style='font-size: 14px'><span class='style12'>
                  ".$r_bank."
                </span></span></td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
               <th style='font-size: 14px' scope='row'><div align='left' class='style12'>COMMISSION:</div></th>
               <td class='style10' style='font-size: 14px'><div align='left' class='style12'>
                     <span class='style7'>&pound;</span>".$tf.".00</div></td>
               <td class='style10' style='font-size: 14px'><div align='center' class='style12'></div></td>
               <td class='style10' style='font-size: 14px'><span class='style12'>TRANSFER MODE:</span></td>
               <td class='style10' style='font-size: 14px'>&nbsp;</td>
               <td class='style10' style='font-size: 14px'><span class='style12'>
                 ".$r_transfer."</span></td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
        </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left'><span class='style12'>TOTAL PAYMENT:</span></div></th>
                <td class='style13' style='font-size: 14px'><span class='style12'><span class='style7'>&pound; </span>
                    ".$ap.".00</span></td>
                <td class='style13' style='font-size: 14px'><div align='center' class='style12'></div></td>
                <td colspan='2' class='style13' style='font-size: 14px'><span class='style12'>MODE OF IDENTITY:</span></td>
                <td class='style13' style='font-size: 14px'><span class='style13' style='font-size: 14px'>
                  ".$r_idtype."</span></td>
			
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
         </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'><div align='left'><span class='style12'>TRANSFER CODE</span>;</div></th>
                <td class='style13' style='font-size: 14px'><span class='style12'>
                  ".$tcode."
                </span></td>
                <td class='style13' style='font-size: 14px'><div align='center' class='style12'></div></td>
                <td colspan='2' class='style13' style='font-size: 14px'><span class='style12'>ACCOUNT NUMBER:</span></td>
                <td class='style13' style='font-size: 14px'><span class='style12'>
                  ".$r_actno."</span></td>
          
          
          
          </tr>";$message .="<tr>
                <th style='font-size: 14px' scope='row'>&nbsp;</th>
                <td colspan='5' class='style13' style='font-size: 14px'>&nbsp;</td>
          </tr>";$message .="";$message .="<tr>
                <th height='18' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='18' colspan='5' style='font-size: 14px' scope='row'>&nbsp;</th>
           </tr>";$message .="<tr>
                <th height='18' colspan='6' scope='row'><div align='left' class='style12'></div></th>
           </tr>";$message .="<tr>
                <th height='18' scope='row'>&nbsp;
				</th>
                <th height='18' scope='row'>&nbsp;</th>
                <th height='18' colspan='3' scope='row'>&nbsp;</th>
                <th height='18' scope='row'>&nbsp;</th>
            </tr>";$message .="<tr>
                <th height='19' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='19' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th height='19' colspan='2' style='font-size: 14px' scope='row'>&nbsp;</th>
                <th width='40' height='19' scope='row'>&nbsp;</th>
                <th height='19' scope='row'>&nbsp;</th>
             
             </tr>";$message .="<tr>
                <th height='37' scope='row'>&nbsp;</th>
                <th height='37' colspan='5' scope='row'>&nbsp;</th>
              </tr>";
              
            $message .="</table></div></th></tr>";
        
        
      $message .="</table>";
	  
	   $message .="</br></br>";
	    $message .="DISCLAIMER
The information contained in this message is confidential and solely intended for the individual or entity to whom it is addressed, or authorised to receive it. If you are not the intended recipient, please do not read, you are hereby notified that any disclosure of this communication, copying, distribution or taking action in reliance of the contents of this information is strictly prohibited and may be unlawful. If you received this mail in error, kindly inform the sender and delete the mail. Thank you for your kind gesture.";
      
  $message .= "</body></html>";

?>