

<?php  include "agent_p.php";
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
					 				
				//Processing Amount
				
				include "agent_er_show";
				include "pro_main1.php";

				if(( $_POST['r_fname'])!==" ")

		// Calculate based on credit ordebit system	
{
			if ($ecredit==1){						
							$mon = $_POST['mon'];

								$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
							while($ag_cr=mysql_fetch_array($check_credit)){$ag_cred=$ag_cr['credit'];}
						 if ( $ag_cred >= $ap ){ 
						 
						 include "agent_trans_confirm.php";$ncredit=$ag_cred- $ap;
						 mysql_query("UPDATE agent SET credit = '$ncredit' WHERE email ='$email' ");  
								$msg="<strong>Transaction Successful!</strong>";
								
								echo"<script type='text/javascript'>
								 { window.alert('Transaction Successful ')window.location='agent_trans_receipt.php.php';}
								</script> ";
						  }else {$msg="<strong>Insufficient credit,Please the contact manager </strong>";}
				 
								}
			
			
			if ($ecredit==0){include "agent_trans_confirm.php";$msg="<strong>Transaction Successful!</strong>";	}
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
</head><body>
<body><br />
<div class="button"><a href="agent_page.php">Home</a> </div>
<span style="margin-left:17em; color:blue;"><strong> 1.) ENTER SENDER NAME & CLICK  2.) SELECT & CHOOSE  RECEIVER  3.) ENTER AMOUNT 4.) CONFIRM</strong> </span>
<div id="container2">
<header><br/> <div style="color:red; font-size:18px; font-family:"><strong> SEND MONEY <span style="margin-left:18em;colour: red;font-size:12px;">* Marked fields are compulsory</span></strong></div><br /></header>
<div id="out">

</div>
<div id="input">


<div class="error"> <?php   if(isset($error)){ echo $error;} if(isset($_GET['error'])){echo $_GET['error'];} if(isset($msg)){echo $msg;}?> </div>



<form method="post" name="form" action="" >
<div style="color:black"><STRONG>SENDER</STRONG><span style="margin-left:22em;"><STRONG>ADDRESS </STRONG></span></div><br/>

<div style="margin-left:3em; color: #0000;">
        
       * <input type="text" id="sv" name="sv"  readonly="readonly" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);" placeholder=" RECEIVER FIRST NAME"  
         value=" <?php if(isset($_GET['fname'])) echo $_GET['fname']."". $_GET['lname'];  ?>"/> 
        
        <span style="margin-left:5em;">
        <input type="text" id="address" size="50" value=" <?php if(isset($_GET['address'])) echo strtoupper($_GET['address']); ?>"   />
        </span>

</div>

<span class="tab2">

	<div align="center" class="rb" id="rb" style="display: none;"></div>
      <div align="center" class="rbl" id="rbl"></div>
      

<div style="color:black"> <strong>RECEIVER</strong></div>
<span style="margin-left:3em"><select class="lf"  name="rec" placeholder="RECEIPIENT" /></span>
<option></option>

 
 
 <?php
 
 // Processing receiver into menu list based on GET value
if(isset($_POST['tr'])){
 include "conn2.php"; 
$email='as';

 $_POST['sender']=$sender;
 $rec= mysql_real_escape_string($_POST['rec']); 
 

 $r_fname2 = substr($rec, 0, strpos($rec, " "));
 $r_lname2=str_replace($r_fname2, ' ', $rec);
 
$r_lname2=trim($r_lname2);

$r_fname2=trim($r_fname2);
$rec=$r_fname2." ".$r_lname2;
 
$query4="SELECT * FROM agent_cust_receiver WHERE b_lname = '$r_lname2' && b_fname='$r_fname2'";$queryrs=mysqli_query($db,$query4);
while($rowrs=mysqli_fetch_assoc($queryrs)){ $b_abank=strtoupper($rowrs['b_abank']);$b_pbank=strtoupper($rowrs['b_pbank']); $r_actno=$rowrs['b_actno'];
 $r_phone=$rowrs['b_phone'];$_SESSION['idtype']=$rowrs['b_idtype'];
 
if($r_actno==""){ $r_transfer="Pick Up"; $r_bank=$b_pbank;} if($r_actno!==""){ $r_transfer="Bank Account";$r_bank=$b_abank;}
echo"<option>"; echo strtoupper($r_fname2." ".$r_lname2); echo"</option>";
}	
}


// Get return value from AJAx& JQUERY of cp

		if(isset($_GET['fname']) && isset($_GET['lname'])){
			 
			 
			$lname=trim($_GET['lname']);
			$fname=trim($_GET['fname']);

		
				$sender=$fname." ".$lname;
				 
				$query3="SELECT * FROM agent_cust_receiver WHERE c_name = '$sender'";$queryr=mysqli_query($db,$query3);
				while($rowr=mysqli_fetch_assoc($queryr)){ $r_fname=$rowr['b_fname']; $r_lname=$rowr['b_lname'];
				echo"<option>"; echo strtoupper($r_fname." ".$r_lname); echo"</option>";

}}

 ?>
 




<span class="tab" style="color:#F00"><input class="shout-btn2"  type="submit" name="tr" value="SELECT" id="tr" />*</span>


<div class="rule">  </div>
<div class="rectangle-box"><br/>

        <div style="color:black"><strong>RECEIVER  FIRST NAME<span style="margin-left:15em">RECEIVER LAST NAME</span> <strong></div><br/>
            <span style="margin-left:3em"><input type="text" name="r_fname" placeholder=" RECEIVER FIRST NAME"
            value="<?php if(isset($r_fname2)){ echo $r_fname2;}  ?> "/></span>
            <span class="tab"><input type="text" name="r_lname" placeholder="RECEIVER LAST NAME" 
            value="<?php if(isset($r_lname2)){ echo $r_lname2;} ?> "/></span>
            
             <div style="color:black"><strong>RECEIVER PHONE <span style="margin-left:19em">TRANSFER OPTION</span></strong></div><br/>
            <span style="margin-left:3em"><input type="text" name="r_phone" placeholder=" RECEIVER BANK" 
            value="<?php if(isset($r_phone)){ echo $r_phone;} ?> "/></span>
            <span class="tab"><input type="text" name="r_transfer" placeholder="RECEIVER TRANSFER OPTION" 
            value="<?php if(isset($r_transfer)){ echo $r_transfer;} ?> "/></span>
            
        <div style="color:black"><strong>RECEIVER BANK <span style="margin-left:19em">RECEIVER ACCOUNT NUMBER</span></strong></div><br/>
            <span style="margin-left:3em"><input type="text" name="r_bank" placeholder=" RECEIVER BANK" 
            value="<?php if(isset($r_bank)){ echo $r_bank;} ?> "/></span>
            <span class="tab"><input type="text" name="r_actno" placeholder="RECEIVER ACCOUNT NUMBER" 
            value="<?php if(isset($r_actno)){ echo $r_actno;} ?> "/></span>
            
      </div>

<div id="out"> </div><div id="input">


<div class="rule">  </div>
<br/><div style="margin-left:3em;color:black "><strong>AMOUNT TO SEND:</strong> </div><br/>
<div style="margin-left:3em; color:#ff00">*<input type="text" name="mon" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookcal(this.value);"  placeholder="AMOUNT TO SENDR" /></div>
<table width="663" height="200" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
   
    <td width="70">
   		
      </td>
    <hr />
    <td width="190"><br/>
     <div style="color:black"><strong>AMOUNT TO SEND: </div>
    <BR/><BR/>
    <div style="color:black">COMMISSION: </div>
    <BR/><BR/>
    <div style="color:black">TOTAL  AMOUNT:  </div>
    <BR/><BR/>
    <div style="color:black">AMOUNT TO COLLECT:  </div>
   
    
    <td width="150">
   		<div align="center" class="rb" id="cal" style="display: none;"></div>
      <div align="center" class="rbl" id="call"></div>
      </td>
    
    
    
    </td>
    <td width="120">&nbsp;</td>
  </tr>
</table>
 
 
 <hr />
 
 <BR/><BR/>
    <div style="color:black;margin-left:6em"><strong>EXCHANGE RATE:</strong> <span style="margin-left:11em;"> &pound;1=&#8358;<?php include "agent_er_show.php"; ?> </span> </div><BR/>   <BR/><BR/>
    <div style="color:black;margin-left:6em"><strong>TRANSFER CODE:<span style="margin-left:11em;"> <?php echo $tcode; ?></span> </strong> </div><BR/>
<span style="margin-left:30em"><input name="calculate"  type="submit" class="shout-btn2" id="calculate" value="CONFIRM" /></span>
<br/>



</table>




</form>
</div>
</div>
<br /><br />	
<div style=" margin-left:9em; color:#F00"> Please note: Any Amount exceeding &pound650 will require uploading your <br/> Identification in compliance with the Financial Conduct Authority</div>

</body>
</html>



