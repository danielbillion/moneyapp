<?php 

$total_t=0;$total_amtp=0;$total_lc=0;$total_ag=0;$total_comd=0;

$cla=0;$cl1=0;
if(!isset($start_from)){$start_from=0;}
while($row2=mysql_fetch_array($checkct)){


$r_name=$row2['r_name'];
$r_phone=$row2['r_phone'];
$s_phone=$row2['s_phone'];
$r_transfer=$row2['r_transfer'];
$r_bank=$row2['r_bank'];
$r_actno=$row2['r_actno'];
$r_amtsend= $row2['amt_send'];
$r_amtlocal= $row2['amt_local'];
$r_commission=  $row2['commission'];
$r_total= $row2['total'];
$sender= $row2['sender_name'];
$receiptno= $row2['receiptno'];
$s_fname= $row2['sender_name'];
 $com_a=$row2['com_a'];
 $com_d= $row2['com_d'];
$agent=$row2['agent_name'];
$date= $row2['date'];
$receiptno= $row2['receiptno'];
$age_email= $row2['agent_email'];
   $numtr=0;
$sender_email=$row2['sender_email'];
  $r_idtype=$row2['r_idtype'];
  $rate=$row2['exchange_rate'];
$sdate= $row2['date'];
$dtime=$row2['dtime'];

$status=($row2['status']);

 
   
 /****** countint no of tran of d agent ****/ 
// $checkp = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email='$age_email' && status='PAID' ")or die(mysql_error());
//while($row2s=mysql_fetch_array($checkp)){$numtr=$numtr +1;}
/* ***** end ****/ 

$check_ag = mysql_query("SELECT * FROM agent WHERE email = '".$age_email."'  ")or die(mysql_error());
while($row2_ag=mysql_fetch_array($check_ag)){ $name_age= $row2_ag['fname']."  ". $row2_ag['lname'];}
$del_agt="del_agt";
if(isset($start_from)){$start_from= $start_from+1;echo "</td><td align='center'>";echo $start_from;}
echo "</td><td align='center'>";echo $row2['dtime'];
echo "</td><td align='center'>";echo $row2['receiptno'];
if (isset($name_age)){ echo "</td><td align='center'>";echo strtolower($name_age);} if (!isset($name_age)){ echo "</td><td align='center'>";echo strtolower("");}
$sender_name=$row2['sender_name'];
$r_name=$row2['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));
$r_name = ucfirst (strtolower($r_name));
echo "</td><td align='center'>";echo $row2['r_transfer'];
echo "</td><td align='center'>";echo number_format($row2['amt_send'],2);
echo "</td><td align='center'>";echo number_format($row2['amt_local'],2);
echo "</td><td align='center'>";echo $row2['com_d'];
echo "</td><td align='center'>";echo $row2['com_a'];
echo "</td><td align='center'>";echo number_format($row2['total'],2);
echo "</td><td align='center'>";echo $row2['js'];
echo "</td><td align='center'>";echo $row2['status'];
$total_amtp = $total_amtp + $row2['amt_send'];$total_lc = $total_lc + $row2['amt_local'];$total_comd = $total_comd + $row2['com_d'];$total_ag = $total_ag + $row2['com_a'];
$total_t = $total_t + $row2['total'];
echo "</td></tr>";

}

while($rcla=mysql_fetch_array($checkcla)){
	$cla=$cla + $rcla['total'];
	}
	
	echo $rcla['total'];
while($rcl1=mysql_fetch_array($checkcl1)){
	$cl1=$cl1 + $rcl1['total'];
	
	}

echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) GBP </strong>";echo "CLA=",number_format($cla,2);;echo ",  ";echo "CL1=",number_format($cl1,2);


echo "</td><td align='center'>";echo number_format($total_amtp,2) ;
echo "</td><td align='center'>";echo "" ;
/********** COMMISSION FOR DAPHKKOY ***************************/

echo "</td><td align='center'>"; echo number_format($total_comd,2);

/********** COMMISSION FOR agent ***************************/

echo "</td><td align='center'>"; echo number_format($total_ag,2);
echo "</td><td align='center' >"; echo number_format($total_t,2);
echo "</td><td align='center' colspan='3'>";


echo "</table>";



?>