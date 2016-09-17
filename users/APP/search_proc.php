<style>

.shout-btn2{
						padding:1px;
						margin-bottom:5px;
						width:80%;
						margin:1 auto;
						color: #FFFFFF;
						background: #06C;
						font-size:15px;	
						cursor:pointer;
						-webkit-border-radius: 10px;
						border-radius:10px;
						}
</style>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<?php 

$total_t=0;$total_amtp=0;$total_lc=0;$total_ag=0;$total_comd=0;
/*echo "</tr></td><td  colspan='3' align='center'>";echo"<input type='submit' class='shout-btn2' value='Modify Pay Status' name='payt'/>";
echo "</tr>"; */

if(!isset($start_from)){$start_from=0;}
while($row=mysql_fetch_array($check)){


$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$s_phone=$row['s_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= $row['amt_send'];
$r_amtlocal= $row['amt_local'];
$r_commission=  $row['commission'];
$r_total= $row['total'];
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_fname= $row['sender_name'];
 $com_a=$row['com_a'];
 $com_d= $row['com_d'];
$agent=$row['agent_name'];
$date= $row['date'];
$receiptno= $row['receiptno'];
$val= $row['receiptno'];
$age_email= $row['agent_email'];
   $numtr=0;
$sender_email=$row['sender_email'];
  $r_idtype=$row['r_idtype'];
  $rate=$row['exchange_rate'];
$sdate= $row['date'];
$dtime=$row['dtime'];
$senderd=$row['address'];
$status=($row['status']);
$adp=($row['comp']);
$note=($row['note']);

 
   
 /****** countint no of tran of d agent ****/ 
// $checkp = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email='$age_email' && status='PAID' ")or die(mysql_error());
//while($rows=mysql_fetch_array($checkp)){$numtr=$numtr +1;}
/* ***** end ****/ 

$check_ag = mysql_query("SELECT * FROM agent WHERE email = '".$age_email."'  ")or die(mysql_error());
while($row_ag=mysql_fetch_array($check_ag)){ $name_age= $row_ag['fname']."  ". $row_ag['lname'];}
$del_agt="del_agt";


if(isset($start_from))
{$start_from= $start_from+1;echo "</td><td align='center'>";echo "<input name=ck[] type='checkbox' id=ck[] value='$val' />", $start_from;}




echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
if (isset($name_age)){ echo "</td><td align='center'>";echo strtolower($name_age);} if (!isset($name_age)){ echo "</td><td align='center'>";echo strtolower("");}
$sender_name=$row['sender_name'];
$r_name=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));
$r_name = ucfirst (strtolower($r_name));

$r_bank2 = substr($r_bank, 0, 5) . '-';echo "</td><td align='center'>";echo ucfirst (strtolower($r_bank2)), $r_actno;
echo "</td><td align='center'>";echo number_format($row['amt_send'],2);
echo "</td><td align='center'>";echo number_format($row['amt_local'],2);
echo "</td><td align='center'>";echo $row['com_d'];
echo "</td><td align='center'>";echo $row['com_a'];
echo "</td><td align='center'>";echo number_format($row['total'],2);

$ts=str_replace(' ', '',($row['status']));

if( $ts=="SUSPENDED"){echo "</td><td align='center'>";echo "Suspended";}
if( $ts=="Pending"){echo "</td><td align='center'>";echo "Pending";}
if( $ts=="PAID"){echo "</td><td align='center'>";echo "PAID";}

if($note==""){echo "</td><td>";echo "<a href='admin_trans_note.php?receiptno=$receiptno & note=$note'> N- </a>";}
if($note!==""){echo "</td><td>";echo "<strong><a href='admin_trans_note.php?receiptno=$receiptno & note=$note'>  <span style='color: #F00'>N- </span></a></strong>";}

echo "</td><td>";echo "<strong><a href='admin_agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & age_email=$age_email & sender_email=$sender_email & senderd=$senderd  & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & s_fname=$s_fname & agent=$agent & com_a= $com_a & com_d=$com_d & date=$date  & del_agt=$del_agt & status=$status & r_idtype=$r_idtype & adp=$adp & note=$note'> - R</a></strong>";




//echo "</td><td>";echo "<strong><a href='admin_zero_com.php?ag_email=$age_email & receiptno=$receiptno'> 0-Com  </a></strong>";

$total_amtp = $total_amtp + $row['amt_send'];$total_lc = $total_lc + $row['amt_local'];$total_comd = $total_comd + $row['com_d'];$total_ag = $total_ag + $row['com_a'];
$total_t = $total_t + $row['total'];

echo "</td></tr>";

}

echo "</td><td colspan='3' align='center'>";echo"<input type='submit' class='shout-btn2' value='Modify Pay Status' name='payt'/>";
echo "</td><td colspan='4' align='center'>";echo "<strong> Total (Till Date) GBP </strong>";



//$result = mysql_query($check1);




echo "</td><td align='center'>";echo number_format($total_amtp,2) ;
echo "</td><td align='center'>";echo "" ;
/********** COMMISSION FOR DAPHKKOY ***************************/

echo "</td><td align='center'>"; echo number_format($total_comd,2);

/********** COMMISSION FOR agent ***************************/

echo "</td><td align='center'>"; echo number_format($total_ag,2);
echo "</td><td align='center' >"; echo number_format($total_t,2);
echo "</td><td align='center' colspan='3'>";

echo "</table>";

if(isset($_POST['payt']) && !empty($_POST['ck']) ){
	$paytm=$_POST['ck'];
	
	$sumtv=0;
	foreach($paytm as $re){
	$check_stv = mysql_query("SELECT * FROM agent_cust_transaction WHERE receiptno = '$re'  ")or die(mysql_error());
	while($row_stv=mysql_fetch_array($check_stv)){ $sumtv= $sumtv + $row_stv['total'];}
		}
	$_SESSION['paytm']=$_POST['ck'];;
	echo" <script type='text/javascript'> {window.location='admin_pay_agent.php?paytm=$paytm & sumtv=$sumtv ' }</script> ";
					 
					
						}

?>

</form>	