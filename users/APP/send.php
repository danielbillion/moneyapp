
<?php  session_start();
include "conn2.php";include "conn.php";include "agent_er.php";	include "time.php";include "info.php";include "transfer_code.php";
 
// $_SESSION['sendern']="";
?>

<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
<script type="text/javascript">
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
	
	
	
	
		<?php
 include "conn2.php";
// $_SESSION['sendern']="";
			
		
				 if (isset($_POST['calculate']) && empty($_POST['rec']) && !empty($_POST['mon']) && !empty($_POST['sv'] )) 
				 {
				if(( $_POST['r_fname'])!==" ")
		// Calculate based on credit ordebit system	
{
			if ($ecredit==1){						
							$mon = $_POST['mon'];

								$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
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
			
			
			if ($ecredit==0){$mon = $_POST['mon'];

								$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
							while($ag_cr=mysql_fetch_array($check_credit)){$ag_cred=$ag_cr['credit'];}
						 if ( isset($mon) ){ 
						 
						 $ncredit="";
						 mysql_query("UPDATE agent SET credit = '$ncredit' WHERE email ='$email' ");  
								$msg="<strong>Transaction Successful!</strong>";
								
								echo"<script type='text/javascript'>
								 { window.alert('Transaction Successful ')window.location='agent_trans_receipt.php';}
								</script> ";include "agent_trans_confirm.php";
						  }else {$msg="<strong>Please the contact manager </strong>";}}	
					// for Debt
					
					
								
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
</head><body>   <form method="post" name="form" action="" >
<div align="center">
  <table width="818" height="387" border="1"   bgcolor="#DBDBDB"align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td><strong><span style=" colour: red; font-size:18px; color: #000000;">MONEY TRANSFER<strong></span><span style="margin-left:18em; colour: red; font-size:12px; color: #F00;">* Marked fields are compulsory</span></strong></td>
   
      <tr>
      <td><div align="center"><table width="750" height="358"    border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><div class="error"> <?php   if(isset($error)){ echo $error;} if(isset($_GET['error'])){echo $_GET['error'];} if(isset($msg)){echo $msg;}?> </div>
  </td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2"><span style="color: #F00"><strong>*</strong></span><strong >SEARCH FOR SENDER</strong></td>
          <td width="475"><div align="center"><strong>ADDRESS</strong></div></td>
          </tr>
        <tr>
          <td colspan="2"><input name="sv" type="text" id="sv" placeholder=" NAME /  PHONE NUMBERS"  onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);"  
         value=" <?php if(isset($_GET['fname'])) echo $_GET['fname']."". $_GET['lname']; ?>" size="40"/>&nbsp;</td>
          <td><div align="center">
            <textarea cols="50" id="address" readonly="readonly"> <?php if(isset($_GET['address'])) echo strtoupper($_GET['address']); ?>
              </textarea>            
            &nbsp;</div></td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3">
            
            
            <div align="center" class="rb" id="rb" style="display: none;"></div>
            <div align="center" class="rbl" id="rbl"></div>
            
            &nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><strong>RECEIVER</strong>
            </td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"> <span style="color: #F00"><strong>*</strong></span>
            <select class="lf"  name="rec" placeholder="RECEIPIENT" />
          
            <option></option>
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
$email='as';

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

//echo"<option>"; echo strtoupper($r_fname2." ".$r_lname2); echo"</option>";
}	
}


// Get return value from AJAx& JQUERY of cp

		

 ?>
            <input class="shout-btn2"  type="submit" name="tr" value="SELECT" id="tr" /></td>
        </tr>
        <tr>
          <td colspan="3"><div class="rule">  </div></td>
          </tr>
        <tr>
          <td colspan="3"><table width="755" height="27" border="0"  bgcolor="#C9D3A3" cellpadding="0" cellspacing="0">
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
              <td><input name="r_fname" type="text" readonly="readonly" placeholder="  RECEIVER FIRST NAME"
            value="<?php if(isset($r_fname2)){ echo $r_fname2;}  ?> " size="40"/></td>
              <td><input name="r_lname" type="text" readonly="readonly" placeholder="RECEIVER LAST NAME" 
            value="<?php if(isset($r_lname2)){ echo $r_lname2;} ?> " size="40"/>&nbsp;</td>
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
              <td><input name="r_phone" type="text" readonly="readonly" placeholder=" RECEIVER BANK" 
            value="<?php if(isset($r_phone)){ echo $r_phone;} ?> " size="40"/></td>
              <td><input name="r_transfer" type="text" readonly="readonly" placeholder="RECEIVER TRANSFER OPTION" 
            value="<?php if(isset($r_transfer)){ echo $r_transfer;} ?> " size="40"/>&nbsp;</td>
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
              <td><input name="r_bank" type="text" readonly="readonly" placeholder=" RECEIVER BANK" 
            value="<?php if(isset($r_bank)){ echo $r_bank;} ?> " size="40"/></td>
              <td><input name="r_actno" type="text" class="mainbar" placeholder="RECEIVER ACCOUNT NUMBER" 
            value="<?php if(isset($r_actno)){ echo $r_actno;} ?> " size="40" readonly="readonly"/>&nbsp;</td>
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
          <td colspan="3"><div class="rule">  </div>&nbsp;</td>
        </tr>
        <tr>
          <td width="14">&nbsp;</td>
          <td width="266"><strong>AMOUNT TO SEND (&pound;)<span style="color: #F00"><strong>*</strong></span></strong></td>
          <td><input name="mon" type="text"  placeholder="AMOUNT TO SENDR" onfocus="this.value=''" onblur="fill();" onkeyup="lookcal(this.value);" size="40" /></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span style="color:black"><strong>AMOUNT TO SEND:</strong></span></td>
          <td rowspan="8">
            <div  class="rbl" id="call"></div>
          </td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span style="color:black"><strong>COMMISSION:</strong></span></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span style="color:black"><strong>TOTAL  AMOUNT: </strong></span></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span style="color:black"><strong>AMOUNT TO COLLECT</strong></span><strong>:</strong></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><strong>EXCHANGE RATE</strong></td>
          <td><strong>&pound;1=&#8358;<?php include "agent_er_show.php"; ?> 
          </strong>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><strong>TRANSFER CODE</strong></td>
          <td><strong><?php echo $tcode; ?></strong></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><div align="center">
            <input name="calculate"  type="submit" class="shout-btn2" id="calculate" value="CONFIRM" />
            &nbsp;</div></td>
        
          </tr>
      </table> 
        </div></td>
    </tr>
    
  </table>
</div>
</form></body>
</html>