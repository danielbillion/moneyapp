

<?php  session_start();
include "conn2.php";include "conn.php";include "cust_er.php";	include "time.php";include "info.php";include "transfer_code.php";
 
$email_ad=mysql_real_escape_string($_SESSION['email_ad']);
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
			$.post("pro_main2_cust.php", {mon: ""+pps+""}, function(data){
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
			
			
			
				$r_transfer=($_SESSION['r_transfer']);
								$test =(rand(100,10000000));
								
								include "transfer_code.php";
								include "code_proc.php";
								
								//$tcode= (('tfc' . $test));
								$email= ($_SESSION['email']);
								
								// processing amout
								include "pro_main1_cust.php";
								
								
								//sender detailsa
									$date=date("Y-m-d");
									$s_fname=( strtolower($_SESSION['s_fname']));
									$s_phone=($_SESSION['s_phone']);
									$status=("Pending");
									
									// Receiver									
									$r_transfer=$_POST['r_transfer'];
									$r_name=$_POST['r_fname']." ".$_POST['r_lname'] ;
									 $r_phone=$_POST['r_phone'];
									 $r_bank=$_POST['r_bank'];
									$r_actno=($_POST['r_actno']);
									$r_idtype= ($_SESSION['idtype']);
									
									include "time.php";
									
									//$dtime=date('Y-m-d H:i:s');
				 				// $r_bank=($_SESSION['r_bank']);
									 //$r_idtype= ($_SESSION['r_idtype']);
									 
									 
		
		mysql_query("INSERT INTO cust_transaction (date,receiptno,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,dtime,clear)

 VALUES ('$date','$tcode', '$email', '$s_fname', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno','$dtime','uc') ") or die(mysql_error());



$c_name=$s_fname;
 $s_fname="None"; 

	
	
	include "email_msg.php";





$r_name=$r_name;
$r_phone=$r_phone;
$r_transfer=$r_transfer;
$r_bank=$row['r_bank'];
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
	
	
								include "email_msg.php";
					
					
					 if ( isset($mon) ){ 
					 
						 echo"<script type='text/javascript'>
								 { window.alert('Transaction Successful ')window.location='agent_trans_receipt.php';}
								</script> ";
						
								echo"<script type='text/javascript'>
								 { location='cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptn';}
								</script> ";
								
								
						  }
					
					
									
			
			
	
else {$msg="<strong>Please the contact manager </strong>";}

			
					
					
								
}
								
}
?>
	
	
	
	
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title> SEND MONEY:CUSTOMER</title>
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
<div class="button"><a href="customer_page.php">Home</a> </div>
<span style="margin-left:17em; color:blue;"><strong> 1.) CHOOSE & SELECT    RECEIVER  2.) ENTER AMOUNT 3.) CONFIRM</strong> </span>
<div id="">
<header><br/> <div style="color:blue; font-size:18px; font-family:"><strong> SEND MONEY <span style="margin-left:18em;colour: red;font-size:12px;">* Marked fields are compulsory</span></strong></div><br /></header>
<div id="out">

</div>
<div id="input">


<div class="error"> <?php   if(isset($error)){ echo $error;} if(isset($_GET['error'])){echo $_GET['error'];} if(isset($msg)){echo $msg;}?> </div>



<form method="post" name="form" action="" >
<div style="color:black"><STRONG>SENDER</STRONG><span style="margin-left:22em;"><STRONG>ADDRESS </STRONG></span></div><br/>

<div style="margin-left:3em; color: #0000;">
        
       * <input type="text" id="sv" name="sv" readonly  value=" <?php if(isset($_SESSION['s_fname'])){ $use=  strtoupper($_SESSION['s_fname']);echo "$use";} ?>"/> 
				   
         
				   
				 
				
	
        
        <span style="margin-left:5em;">
        <input type="text" id="address" size="50" value=" <?php if(isset($_SESSION['address'])) echo strtoupper($_SESSION['address']); ?>"   />
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
 
$query4="SELECT * FROM receiver WHERE b_lname = '$r_lname2' && b_fname='$r_fname2'";$queryrs=mysqli_query($db,$query4);
while($rowrs=mysqli_fetch_assoc($queryrs)){ $b_abank=strtoupper($rowrs['b_abank']);$b_pbank=strtoupper($rowrs['b_pbank']); $r_actno=$rowrs['b_actno'];
 $r_phone=$rowrs['b_phone'];$_SESSION['idtype']=$rowrs['b_idtype'];
 
if($r_actno==""){ $r_transfer="Pick Up"; $r_bank=$b_pbank;} if($r_actno!==""){ $r_transfer="Bank Account";$r_bank=$b_abank;}
echo"<option>"; echo strtoupper($r_fname2." ".$r_lname2); echo"</option>";
}	
}


// Get return value from AJAx& JQUERY of cp

		if(isset($_SESSION['fname']) && isset($_SESSION['lname'])){
			 
			 
			$lname=trim($_SESSION['lname']);
			$fname=trim($_SESSION['fname']);

		
				$sender=$fname." ".$lname;
				 
				$query3="SELECT * FROM  receiver WHERE sender_email = '$email_ad'";$queryr=mysqli_query($db,$query3);
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


