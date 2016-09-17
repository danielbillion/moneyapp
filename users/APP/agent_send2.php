
<?php  include "agent_p.php";
include "conn2.php";include "conn.php";include "agent_er.php";	include "time.php";include "info.php";include "transfer_code.php";
 
// $_SESSION['sendern']="";
?>

<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">

function sel(val)
    {
		var mon2 = document.getElementById('mon2');
		var mon = document.getElementById('mon');
		var chosen = "";
	
		var radios = document.forms["form"].elements["montype"];
		for(var i = 0, max = radios.length; i < max; i++) {
			radios[i].onclick = function() {
				
				if(document.form.montype.value=='naira'){
					 mon.style.display = "none";  mon2.style.display = "block";
										}
					
					if(document.form.montype.value=='pound'){
					 mon2.style.display = "none";  mon.style.display = "block";
					}
				
   			}}

		mon2.style.display = "none";
		
		}




	function lookup(srv) {
		if(srv.length == 0) {
			// Hide the suggestion box.
			$('#rb').hide();
		} else {
			$.post("cp.php", {sv: ""+srv+""}, function(data){
				if(data.length >0) {
					
					
				$('#rb').show();
					$('#rbl').html(data);
					
						
				}
			});
		}
	} // lookup
	
	
	
	
	function lookcal(pps) {
		if(pps.length == 0) {
			// Hide the suggestion box.
			$('#cal').hide();
		} else {
			$.post("pro_main2.php", {mon: ""+pps+""}, function(data){
				if(data.length >0) {
					
					
				$('#cal').show();
					$('#call').html(data);
					
						
				}
			});
		}
	} // lookup
	
		function lookcal2(pps) {
		if(pps.length == 0) {
			// Hide the suggestion box.
			$('#cal').hide();
		} else {
			$.post("pro_main2.php", {mon2: ""+pps+""}, function(data){
				if(data.length >0) {
					
					
				$('#cal').show();
					$('#call').html(data);
					
						
				}
			});
		}
	} // lookup
	
	
	
	//<script language="javascript" type="text/javascript">
    
	
	
	
		<?php
 include "conn2.php";
// $_SESSION['sendern']="";
			
		
				 if (isset($_POST['calculate']) && empty($_POST['rec']) && ((!empty($_POST['mon'])) || 
				 (!empty($_POST['mon2']))  ) && !empty($_POST['sv'] )) 
	{
					 if($_POST['mon']==""){$_POST['mon']=$_POST['mon2']/ $er;}
					 					 				
				//Processing Amount
				
				include "agent_er_show";
				include "pro_main1.php";

				if(( $_POST['r_fname'])!==" ")
		// Calculate based on credit or debit system	
		{
	
		
		function calculate()
		{
					include "agent_er.php";	include "time.php";include "info.php";
					include "transfer_code.php";include "pro_main1.php";include "agent_er_show";
	
	
			if ($ecredit==1){						
							$mon = $_POST['mon'];

								$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") 
								or die('Query failed: ' . mysql_error());
							while($ag_cr=mysql_fetch_array($check_credit)){$ag_cred=$ag_cr['credit'];}
						 if ( $ag_cred >= $mon ){ 
						 
						 $ncredit=$ag_cred- $ap;
						 mysql_query("UPDATE agent SET credit = '$ncredit' WHERE email ='$email' ");  
								$msg="<strong>Transaction Successful!</strong>";
								
								echo"<script type='text/javascript'>
								 { window.alert('Transaction Successful ')window.location='agent_trans_receipt.php';}
								</script> ";include "agent_trans_confirm.php";
						  }else {$msg="<strong>Insufficient credit,Please the contact manager </strong>";}
				 
							}
			
			
			if ($ecredit==0)
			{$mon = $_POST['mon'];

								$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or
								 die('Query failed: ' . mysql_error());
								 
							while($ag_cr=mysql_fetch_array($check_credit)){$ag_cred=$ag_cr['credit'];}
						 if ( isset($mon) ){ 
						 
						 $ncredit="";
						 mysql_query("UPDATE agent SET credit = '$ncredit' WHERE email ='$email' ");  
								$msg="<strong>Transaction Successful!</strong>";
								
								echo"<script type='text/javascript'>
								 { window.alert('Transaction Successful ')window.location='agent_trans_receipt.php';}
								</script> ";include "agent_trans_confirm.php";
						  }else {$msg="<strong>Please the contact manager </strong>";}
			}	
					// for Debt
					
					
		}
		// test ability to transact
	 if( $agt_status == -1){$msg="Please Contact the administrator; Your account is currently restricted";}
 
 		// Evaluating transaction limit & id upload for trans limit
 			else { if (($bs_dtls==1)){
			
						$mon = $_POST['mon'];
			
					if($cust_id_sta==0)// Assumed the value is set by agent for all customer  at its agent database
						{
						if(isset($_GET['c_email']))
							{$c_email=$_GET['c_email'];}
							if(isset($_POST['c_email'])){$c_email=$_POST['c_email'];}
							
							 $check_name = mysql_query("SELECT * FROM agent_new_customer WHERE email = '$c_email' ")or 
							 die(mysql_error());
							 
							 while($rowr2=mysql_fetch_array($check_name)){ $c_size=$rowr2['proofid_size'];}
							
								
								if( $mon < $bs_dtl){$y=calculate();}
								
								
							
								else 
								{ 
											if(($c_size > 0) && ($mon > $bs_dtl)){$y=calculate(); echo $c_size;}
									
								
											else{$msg="You need to Upload an ID before this Transaction can be process";}
								}
						}
						
					else{
					$y=calculate();
							
						}
					
				}
					
			else{
				$y=calculate();
				}
			
 
 
	}
								
	}

	}
			
?>
	
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title> SEND MONEY:AGENT</title>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link rel="stylesheet" href="css/style.css" type="text/css"/> 

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #F00;
}
</style>
</head><body onLoad="sel(this.value)">   <form method="post" name="form" action="" >
<div align="center"><span style="color: #600; font-size: 13px; font-weight: bold;"> <span style="color: #00F">STEP 1==) </span>ENTER SENDER NAME INTO SEARCH & CLICK TO CHOOSE  <span style="color: #00F">STEP 2==) </span>CHOOSE & SELECT   RECEIVER <span style="color: #00F">STEP 3</span>==) ENTER AMOUNT <span style="color: #00F">STEP 4</span>==) CONFIRM&nbsp;</span>
  <p>
  <table width="818" height="387" border="1"   bgcolor="#DBDBDB"align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td> </td>
    <tr>
      <td><strong><span style=" colour: red; font-size:18px; color: #000000;">MONEY TRANSFER<strong></span><span style="margin-left:18em; colour: red; font-size:12px; color: #F00;">* Marked fields are compulsory</span></strong></td>
   
      <tr>
      <td><div align="center"><table width="750" height="358"    border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="4"><div class="error"> <?php   if(isset($error)){ echo $error;} if(isset($_GET['error'])){echo $_GET['error'];} if(isset($msg)){echo $msg;}?> </div>
  </td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><span style="color: #F00"><strong>*</strong></span><strong >SEARCH FOR SENDER</strong></td>
          <td width="475"><div align="center"><strong>ADDRESS</strong></div></td>
          </tr>
        <tr>
          <td colspan="3"><input name="sv" type="text" id="sv" placeholder=" NAME /  PHONE NUMBERS"  onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);"  
         value=" <?php if(isset($_GET['fname'])) echo $_GET['fname']."". $_GET['lname']; ?>" size="40"/>&nbsp;</td>
          <td><div align="center">
            <textarea cols="50" id="address" readonly> <?php if(isset($_GET['address'])) echo strtoupper($_GET['address']); ?>
              </textarea>            
            &nbsp;</div></td>
          </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
          </tr>
        <tr>
          <td colspan="4">
            
            
            <div align="center" class="rb" id="rb" style="display: none;"></div>
            <div align="center" class="rbl" id="rbl"></div>
            
            &nbsp;</td>
          </tr>
        <tr>
          <td colspan="4"><strong>RECEIVER</strong>
            </td>
          </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"> <span style="color: #F00"><strong>*</strong></span>
            <select class="lf"  name="rec" placeholder="RECEIPIENT" />
          <option></option>
            <option>New Receiver?</option>
            <?php
 
 if(isset($_GET['fname']) && isset($_GET['lname'])){
			 
			 
			$lname=trim($_GET['lname']);
			$fname=trim($_GET['fname']);
			$c_email=trim($_GET['c_email']);
		
				$sender=$fname." ".$lname;
				 
				$query3="SELECT * FROM agent_cust_receiver WHERE agent_cust_email = '$c_email' ";$queryr=mysqli_query($db,$query3);
				while($rowr=mysqli_fetch_assoc($queryr)){ $r_fname=$rowr['b_fname']; $r_lname=$rowr['b_lname'];
				echo"<option>"; echo strtoupper($r_fname."-".$r_lname); echo"</option>";

}}
 
 // Processing receiver into menu list based on GET value
if(isset($_POST['tr'])){
 include "conn2.php"; 
//$email='as';

if(($_POST['rec']!=="New Receiver?")){


 $_POST['sender']=$sender;
 $rec= mysql_real_escape_string($_POST['rec']); 
 

 $r_fname2 = substr($rec, 0, strpos($rec, "-"));

 $r_lname2=str_replace($r_fname2, '', $rec);
 $r_lname2=str_replace('-', '',$r_lname2);
 $r_lname2 = ltrim($r_lname2);
 
//$r_lname2=str_replace(' ', '',$r_lname2);
//$r_fname2=str_replace(' ', '',$r_fname2);



$rec=$r_fname2." ".$r_lname2;
 
$query4="SELECT * FROM agent_cust_receiver WHERE b_lname = '$r_lname2' && b_fname='$r_fname2'";$queryrs=mysqli_query($db,$query4);
while($rowrs=mysqli_fetch_assoc($queryrs))

{ $b_abank=strtoupper($rowrs['b_abank']);$b_pbank=strtoupper($rowrs['b_pbank']); $r_actno=$rowrs['b_actno'];
 $r_phone=$rowrs['b_phone'];$_SESSION['idtype']=$rowrs['b_idtype'];
 
if($r_actno==""){ $r_transfer="Pick Up"; $r_bank=$b_pbank;} 
if($r_actno!==""){ $r_transfer="Bank Account";$r_bank=$b_abank;}

}	}

if(($_POST['rec']=="New Receiver?")){
	
	
	
	
	}

}


		

 ?>
            <input class="shout-btn2"  type="submit" name="tr" value="SELECT" id="tr" /></td>
        </tr>
        <tr>
          <td colspan="4"><div class="rule">  </div></td>
          </tr>
        <tr>
          <td colspan="4"><table width="755" height="27" border="0"  bgcolor="#C9D3A3" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="11">&nbsp;</td>
              <td width="327"><strong><span style="color: black">RECIEVER FIRST NAME</span></strong></td>
              <td width="417"><strong>RECEIVER LAST NAME</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="r_fname" type="text"  placeholder="  RECEIVER FIRST NAME"
            value="<?php if(isset($r_fname2)){ echo $r_fname2;} else { if(isset($_GET['r_fname'])){ echo $_GET['r_fname'];}}  ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>  />
            
            
            </td>
              <td><input name="r_lname" type="text"  placeholder="RECEIVER LAST NAME" 
            value="<?php if(isset($r_lname2)){ echo $r_lname2;} else { if(isset($_GET['r_lname'])){ echo $_GET['r_lname'];}} ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/>&nbsp;</td>
              </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>RECEIVER PHONE </strong></td>
              <td><strong>TRANSFER OPTION</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="r_phone" type="text" placeholder=" RECEIVER PHONE NUMBERo" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>  
            value="<?php if(isset($r_phone)){ echo $r_phone;} else { if(isset($_GET['r_phone'])){ echo $_GET['r_phone'];}} ?> " size="40"/></td>
              <td>
              
              
             
            
            <?php
			
			 if((isset($_GET['r_transfer'])) ){  $rtr= $_GET['r_transfer'];} else $rtr="";  
			
			 if((!isset($_POST['rec'])) ){ 
			 
			  echo "<input name='r_transfer'  value='$rtr' type='text' value='$rtr' readonly placeholder='RECEIVER TRANSFER OPTION' 
             size='40'/>";}  
	 
 if((isset($_POST['rec'])) && ($_POST['rec']!=="New Receiver?")){  echo "<input name='r_transfer' type='text' placeholder='RECEIVER TRANSFER OPTION' size='40' readonly value='" ;}
	   if(isset($r_transfer)){ echo $r_transfer;   echo "'>";} 
				
	 			if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "<select name='r_transfer' id='r_transfer'>  <option></option><option>Pick Up</option><option>Bank Account</option>";
			}
		
		 ?>
            
            
            &nbsp;</td>
              </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>RECEIVER BANK</strong></td>
              <td><strong>RECEIVER ACCOUNT NUMBER</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
              
              
             
        <?php
		  
		if((isset($_GET['r_bank'])) ){  $rba=$_GET['r_bank']; } else {$rba="";}
		 if((!isset($_POST['rec'])) ){ echo "<input name='r_bank' type='text' placeholder='RECEIVER BANK' value='$rba'size='40'  readonly>";}  
	 
 if((isset($_POST['rec'])) && ($_POST['rec']!=="New Receiver?")){  echo "<input name='r_bank' type='text' placeholder='RECEIVER BANK' size='40' readonly value='" ;}
	   if(isset($r_bank)){ echo $r_bank;   echo "'>";} 
				
	 			if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "<select name='r_bank' id='r_bank'>  <option></option>";
		 $check = mysql_query("SELECT * FROM bank WHERE status='b'ORDER BY bank ") or die('Query failed: ' . mysql_error());
					while($row=mysql_fetch_array($check)){$bank=$row['bank'];echo"<option>"; echo $bank; echo"</option>";	}
		
		} ?>
              
            
					        
					        
				          </select>
            
            </td>
              <td><input name="r_actno" type="text" class="mainbar" placeholder="RECEIVER ACCOUNT NUMBER" 
            value="<?php if(isset($r_actno)){ echo $r_actno;} else { if(isset($_GET['r_actno'])){ echo $_GET['r_actno'];}} ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/>&nbsp;</td>
              </tr>
            <tr>
              <td colspan="3"></td>
              </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td colspan="4"><div class="rule">  </div>&nbsp;</td>
        </tr>
        <tr>
          <td width="14">&nbsp;</td>
          <td width="176"><strong>AMOUNT TO SEND          <span style="color: #F00">          <strong>*</strong></span></strong></td>
          <td width="90"><strong>
            <input type="radio" name="montype" value="naira"  />
&#8358;<span style="color: #F00">
<input name="montype" type="radio" value="pound" checked="checked"   />
</span>&pound;</strong></td>
          <td>
          <input name="mon" id="mon" type="text"  placeholder="AMOUNT TO SEND &pound;" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookcal(this.value);" size="40" />
         <input name="mon2" id="mon2" type="text"  placeholder="AMOUNT TO SEND &#8358;" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookcal2(this.value);" size="40" />
          
          </td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><strong>AMOUNT TO SEND:</strong></td>
          <td rowspan="12">
            <div  class="rbl" id="call"></div>
          </td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><strong>COMMISSION:</strong></td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><strong>TOTAL  AMOUNT: </strong></td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><span style="color:black"><strong>AMOUNT TO COLLECT</strong></span><strong>:</strong></td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><strong>EXCHANGE RATE</strong></td>
          <td><strong>&pound;1=&#8358;<?php include "agent_er_show.php"; ?> 
          </strong>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4"><div align="center">
            <input name="calculate"  type="submit" class="shout-btn2" id="calculate" value="SEND MONEY" />
            
            
            &nbsp;</div></td>
        
          </tr>
      </table> 
        </div></td>
    </tr>
    
  </table>
  <div style=" margin-left:9em; color:#F00"> Please note: Any Amount exceeding &amp;pound650 will require uploading your <br/>
    Identification in compliance with the Financial Conduct Authority</div>
  <p>&nbsp;</p>
</div>
</form></body>
</html>