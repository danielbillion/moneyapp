
<?php  include "admin_p.php";  
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
			$.post("n2uk_cp.php", {sv: ""+srv+""}, function(data){
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
			$.post("n2uk_pro_main.php", {mon: ""+pps+""}, function(data){
				if(data.length >0) {
					
					
				$('#cal').show();
					$('#call').html(data);
					
						
				}
			});
		}
	} // lookup
	
	
	
	
		<?php
 include "conn2.php";
		
?>
	
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title> SEND MONEY:AGENT</title>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

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
<div align="center"><span style="color: #600; font-size: 13px; font-weight: bold;"> <span style="color: #00F">STEP 1==) </span>ENTER SENDER NAME INTO SEARCH & CLICK TO CHOOSE  <span style="color: #00F">STEP 2==) </span>CHOOSE & SELECT   RECEIVER <span style="color: #00F">STEP 3</span>==) ENTER AMOUNT <span style="color: #00F">STEP 4</span>==) CONFIRM&nbsp;</span>
  <p><strong>Naija2UK Money Transfer
  </strong>
  <table width="818" height="387" border="1"    bgcolor="#CCCCFF" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td> </td>
    <tr>
      <td><strong><span style="colour: red; font-size:18px; color: #0000FF;">N2UK MONEY TRANSFER<strong></span><span style="margin-left:18em; colour: red; font-size:12px; color: #F00;">* Marked fields are compulsory</span></strong></td>
   
      <tr>
      <td><div align="center"><table width="750" height="358"    border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
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
          <td width="404"><div align="center"><strong>ADDRESS</strong></div></td>
          </tr>
        <tr>
          <td colspan="2" rowspan="2"><textarea cols="50" name="sv" type="text" id="sv" placeholder=" NAME /  PHONE NUMBERS"  onFocus="this.value=''" onBlur="fill();" onKeyUp="lookup(this.value);"  
          size="40"/> <?php if(isset($_GET['fname'])) echo $_GET['fname']."". $_GET['lname']; ?> </textarea>&nbsp;</td>
          <td><textarea name="address" cols="50" readonly id="address"> <?php if(isset($_GET['address'])) echo strtoupper($_GET['address']); ?>
              </textarea></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
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
            <option>New Receiver?</option>
            <?php
 
 if(isset($_GET['fname']) && isset($_GET['lname'])){
			 
			 
			$lname=trim($_GET['lname']);
			$fname=trim($_GET['fname']);
			$custid=trim($_GET['custid']);
		
				$sender=$fname." ".$lname;
				 
				$query3="SELECT * FROM trans2_receiver WHERE custid = '$custid' ";$queryr=mysqli_query($db,$query3);
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


$rec=$r_fname2." ".$r_lname2;
 
$query4="SELECT * FROM trans2_receiver WHERE b_lname = '$r_lname2' && b_fname='$r_fname2'";$queryrs=mysqli_query($db,$query4);
while($rowrs=mysqli_fetch_assoc($queryrs))

{ $b_abank=strtoupper($rowrs['nbank']);$b_pbank=strtoupper($rowrs['b_pbank']); $r_actno=$rowrs['nbankno'];$r_actname=$rowrs['act_name'];
 $r_phone=$rowrs['b_phone'];$_SESSION['idtype']=$rowrs['b_idtype'];$r_uk_abank=strtoupper($rowrs['b_abank']);$r_uk_actno=strtoupper($rowrs['b_actno']);
 
 
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
              <td width="342"><strong><span style="color: #00F">RECIEVER FIRST NAME</span></strong></td>
              <td width="402"><strong style="color: #00F">RECEIVER LAST NAME</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="r_fname" type="text"  placeholder="  RECEIVER FIRST NAME"
            value="<?php if(isset($r_fname2)){ echo $r_fname2;} if(isset($_GET['fname'])){ echo $_GET['fname'];}  ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>  />
            
            
            </td>
              <td><input name="r_lname" type="text"  placeholder="RECEIVER LAST NAME" 
            value="<?php if(isset($r_lname2)){ echo $r_lname2;} if(isset($_GET['lname'])){ echo $_GET['lname'];}  ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/>&nbsp;</td>
              </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong style="color: #00F">RECEIVER PHONE </strong></td>
              <td><strong style="color: #00F">TRANSFER OPTION</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="r_phone" type="text" placeholder=" RECEIVER PHONE NUMBER" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>  
            value="<?php if(isset($r_phone)){ echo $r_phone;}if(isset($_GET['r_phone'])){ echo $_GET['r_phone'];}  ?> " size="40"/></td>
              <td>
              
              
             
            
            <?php if((!isset($_POST['rec'])) ){  echo "<input name='r_transfer' type='text' readonly placeholder='RECEIVER TRANSFER OPTION' 
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
              <td><strong style="color: #00F">RECEIVER BANK- NIG</strong></td>
              <td><strong style="color: #00F">RECEIVER ACCT NO-- ACCOUNT NAME-NIG</strong></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
              
              
             
        <?php if((!isset($_POST['rec'])) ){  echo "<input name='r_bank' type='text' placeholder='RECEIVER BANK' size='40' readonly>";}  
	 
 if((isset($_POST['rec'])) && ($_POST['rec']!=="New Receiver?")){  echo "<input name='r_bank' type='text' placeholder='RECEIVER BANK' size='40' readonly value='" ;}
	   if(isset($r_bank)){ echo $r_bank;   echo "'>";} if(isset($_GET['nbank'])){ echo $_GET['nbank'];}  
				
	 			if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "<select name='r_bank' id='r_bank'>  <option></option>";
		 $check = mysql_query("SELECT * FROM trans2_bank WHERE status='nb'ORDER BY bank ") or die('Query failed: ' . mysql_error());
					while($row=mysql_fetch_array($check)){$bank=$row['bank'];echo"<option>"; echo $bank; echo"</option>";	}
		
		} ?>
              
            
					        
					        
				          </select>
            
            </td>
              <td><input name="r_actno" type="text" class="mainbar" placeholder="RECEIVER ACCOUNT NUMBER" 
            value="<?php if(isset($r_actno)){ echo $r_actno;} if(isset($_GET['nbankno'])){ echo $_GET['nbankno'];} ?> " size="20" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/>&nbsp;
                <input name="r_actname" type="text" class="mainbar" placeholder="RECEIVER ACCOUNT NAME" 
            value="<?php if(isset($r_actname)){ echo $r_actname;} if(isset($_GET['act_name'])){ echo $_GET['act_name'];} ?> " size="20" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/></td>
              </tr>
            <tr>
              <td colspan="3"></td>
              </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong style="color: #00F">RECEIVER BANK- UK</strong></td>
              <td><strong style="color: #00F">RECEIVER ACCOUNT NO / SORT CODE-UK</strong></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><?php if((!isset($_POST['rec'])) ){  echo "<input name='r_uk_abank' type='text' placeholder='RECEIVER UK BANK' size='40' readonly>";}  
	 
 if((isset($_POST['rec'])) && ($_POST['rec']!=="New Receiver?")){  echo "<input name='r_uk_abank' type='text' placeholder='RECEIVER UK BANK' size='40' readonly value='" ;}
	   if(isset($r_uk_abank)){ echo $r_uk_abank;   echo "'>";} if(isset($_GET['r_uk_abank'])){ echo $_GET['r_uk_abank']; echo "'>";} 
				
	 			if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "<select name='r_uk_abank' id='r_uk_abank'>  <option></option>";
		 $check = mysql_query("SELECT * FROM trans2_bank WHERE status='b'ORDER BY bank ") or die('Query failed: ' . mysql_error());
					while($row=mysql_fetch_array($check)){$bank=$row['bank'];echo"<option>"; echo $bank; echo"</option>";	}
		
		} ?></td>
              <td><input name="r_uk_actno" type="text" class="mainbar" placeholder="RECEIVER ACCOUNT NUMBER" 
            value="<?php if(isset($r_uk_actno)){ echo $r_uk_actno;} if(isset($_GET['r_uk_actno'])){ echo $_GET['r_uk_actno']; }  ?> " size="40" <?php if((!isset($_POST['rec'])) ){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']!=="New Receiver?")){ echo "readonly";} if((isset($_POST['rec'])) &&($_POST['rec']=="New Receiver?")){ echo "";} ?>/></td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td colspan="3"><div class="rule">  </div>&nbsp;</td>
        </tr>
        <tr>
          <td width="15">&nbsp;</td>
          <td width="336"><strong>AMOUNT TO SEND (&pound;)<span style="color: #F00"><strong>*</strong></span></strong></td>
          <td><input name="mon" type="text"  placeholder="AMOUNT TO SEND" onFocus="this.value=''" onBlur="fill();" onKeyUp="lookcal(this.value);" size="20" /></td>
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
          <td rowspan="5">&nbsp;</td>
          <td><strong>AMOUNT TO SEND:</strong></td>
          <td rowspan="6">
            <div  class="rbl" id="call"></div>
            <strong>
            <?php
		  	$result = mysql_query('SELECT id,bou,sold FROM  trans2_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	
		while ($row = mysql_fetch_assoc($result)) {
		  $bou= $row['bou']; $sold= $row['sold']; $bou=number_format(($bou),2); $sold=number_format(($sold),2); }
		  

?>
            </strong></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>AMOUNT</strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><strong>BOU RATE</strong></td>
          <td><strong>&#8358;</strong>
            <input name="bou" type="text"  placeholder="BOU RATE" value="<?php echo $bou ; ?>"  size="20" readonly /></td>
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
          <td><strong>SOLD RATE</strong></td>
          <td><strong>&#8358;
            <input name="sold" type="text"  placeholder="BOU RATE" value="<?php echo $sold; ?>"  size="20" readonly />
          </strong></td>
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
          <td><strong>TRANSFER CODE</strong></td>
          <td><strong><?php echo $tcode; ?></strong></td>
          </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><div align="center">
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


<?php 
$link = include "conn.php";include "time.php";
/*
$test =(rand(100,10000));
$email= ($_SESSION['email']);
$date=date("Y-m-d");
									
									

$nbank = ($_GET['nbank']);			
$custid = ($_GET['custid']);
$r_fname = ($_GET['r_fname']);
$r_lname = ($_GET['r_lname']);
$act_name = ($_GET['act_name']);
$email= $_SESSION['email'];
$r_name=  ($_GET['r_fname']). ($_GET['r_lname']) ;

// Processing customer/sender details based on customer id custid 

 $check = mysql_query("SELECT * FROM  trans2_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM  trans2_customer WHERE custid = '$custid' ORDER BY fname  ")or die(mysql_error());
 $checkr = mysql_query("SELECT * FROM trans2_receiver WHERE b_fname = '$r_fname' && b_lname = '$r_lname'  ")or die(mysql_error());
 $num=0;
$table_array = mysql_fetch_array($check);

if(isset($table_array) && $table_array[0] != "") {
while($row=mysql_fetch_array($check0)){

$c_name=$row['fname']." ". $row['lname'];
$c_email=$row['email'];
$_SESSION['']=$row['pnumber'];
$s_phone=$row['pnumber'];
$s_mphone=$row['mnumber'];
$addressc=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];

}
while($row=mysql_fetch_array($checkr)){

$r_transfer=$row['b_transfer'];$r_transfer2=$row['b_transfer'];$r_phone=$row['b_phone'];
$nbankno=$row['nbankno'];$nbank=$row['nbank'];


if ($r_transfer=="Pick Up"){
	$r_bank=$row['b_pbank'];$r_idtype=$row['b_idtype'];$r_actno="None";
	}
	
	else {
	$r_bank=$row['b_abank'];$r_actno=$row['b_actno'];$r_idtype="None";
	}
}
}
*/
?> 




<?php 
/***************************************************************************************************************************************************** */
$email= ($_SESSION['email']);
$date=date("Y-m-d");
												
											
include "transfer_code.php";
include "code_proc.php";
include "time.php";
								
								//$dtime=date('Y-m-d H:i:s');
if (isset($_POST['calculate']) && $_POST['mon']!=="" && $_POST['sv']!=="" )
	
	{
		if($_POST['mon']==0 ) {{$msg = ' Empty field <br />';}
	}
	
			
		
	$mon=$_POST['mon'];
}
	
	 if (isset($_POST['calculate']) && ($_POST['mon']!==""))
	  
	  {
		  
	 $result = mysql_query('SELECT id,bou,sold FROM  trans2_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
			
	
			while ($row = mysql_fetch_assoc($result)) {
			  //echo $row['messageid'];
			  $bou= $row['bou']; $sold= $row['sold']; $bou=number_format(($bou),2); $sold=number_format(($sold),2); }
			  
			  	$c_name=trim($_POST['sv']);
			 	$custid=$_GET['custid'];
				$s_phone=trim($_GET['s_phone']);
				$address=  trim($_POST['address']) ;
				
			  	$r_name=  trim(($_POST['r_fname']). ($_POST['r_lname'])) ;
				$r_fname= trim($_POST['r_fname']) ;$r_lname=trim( $_POST['r_lname'] );
			 	$r_phone=  trim(($_POST['r_phone'])) ;
			  	$nbankno=trim($_POST['r_actno']);
				$nbank=trim($_POST['r_bank']);
				$r_actname=trim($_POST['r_actname']);
				$r_uk_abank=trim($_POST['r_uk_abank']);
				$r_uk_actno=trim($_POST['r_uk_actno']);
				$r_idtype="-";
				$r_transfer=trim($_POST['r_transfer']);
				
				
			  
			  
			  	$bou=$_POST['bou'];$sold=$_POST['sold'];
			   	
				$mon =($_POST['mon']);
				$m_n=($mon);
				$m_p=($mon/$bou);
				$mar=($bou-$sold);	
				$pro=($mar*$m_p);
				$status="PENDING";
				
				
				
				$checkre= mysql_query("SELECT * FROM trans2_receiver WHERE  `b_fname` LIKE '$r_fname%'
				 AND `b_lname` LIKE '$r_lname%'  ")or die(mysql_error());
		
	 			$rers= mysql_num_rows($checkre);		
				
		 if($rers==0)
		{
	mysql_query("INSERT INTO trans2 
		(date,custid,s_phone,r_phone,s_name,r_name,status,tcode,amt_n,amt_p,bou_r,sold_r,margin,
		profit,bank_info,bank_n,r_transfer,address,banknig,id_type,act_name,nbankno)
			
	
		 VALUES ('$dtime','$custid', '$s_phone','$r_phone', '$c_name','$r_name','$status','$tcode','$m_n',
		 '$m_p','$bou','$sold','$mar','$pro','$r_uk_abank','$r_uk_actno',
		 '$r_transfer','$address','$nbank','$r_idtype','$r_actname','$nbankno') ") or die(mysql_error());
		 
		 
		 mysql_query("INSERT INTO trans2_receiver(custid,cust_name,b_fname,b_lname,
															b_phone,b_idtype,b_transfer,b_pbank,b_abank,b_actno,date,nbank,act_name,nbankno)
													
				VALUES ('$custid','$c_name','$r_fname','$r_lname','$r_phone','$r_idtype','$r_transfer',
					'$b_pbank', '$r_uk_abank','$r_uk_actno','$dtime', '$nbank','$r_actname','$nbankno' )") or die(mysql_error());
					
					
	 
		
		 echo" <script type='text/javascript'>
	 
		 {
		 window.alert('New Data Entry Successful ')
		window.location='n2uk_report.php';
		 }
		</script> ";
			
		}
		
		
		
			 if($rers > 0)
		{
	mysql_query("INSERT INTO trans2 
		(date,custid,s_phone,r_phone,s_name,r_name,status,tcode,amt_n,amt_p,bou_r,sold_r,margin,
		profit,bank_info,bank_n,r_transfer,address,banknig,id_type,act_name,nbankno)
			
	
		 VALUES ('$dtime','$custid', '$s_phone','$r_phone', '$c_name','$r_name','$status','$tcode','$m_n',
		 '$m_p','$bou','$sold','$mar','$pro','$r_uk_abank','$r_uk_actno',
		 '$r_transfer','$address','$nbank','$r_idtype','$r_actname','$nbankno') ") or die(mysql_error());
		 
		  mysql_query("UPDATE trans2_receiver SET b_transfer='$r_transfer', b_abank='$r_uk_abank', b_pbank='$b_pbank', b_phone='$r_phone',b_actno='$r_uk_actno',b_idtype='$r_idtype' ,nbank='$nbank',act_name='$r_actname' ,nbankno='$nbankno' WHERE b_fname='$r_fname' && b_lname='$r_lname' ") or die(mysql_error());
		 
		
		 
		 
	 
		 echo" <script type='text/javascript'>
	 
		 {
		 window.alert('New Data Entry Successful ')
		window.location='n2uk_report.php';
		 }
		</script> ";
			
		}
	  }
	
	
		
						 

?>