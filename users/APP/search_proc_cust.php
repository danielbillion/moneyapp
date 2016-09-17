<?php 
$del_ct="del_ct";
$total_t=0;$total_amtp=0;$total_lc=0;$total_ag=0;$total_com=0;
if(!isset($start_from)){$start_from=0;}

while($row=mysql_fetch_array($check)){


if(isset($start_from)){$start_from= $start_from+1;echo "</td><td align='center'>";echo $start_from;}

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
$date= $row['date'];
$s_email=$row['sender_email'];
$r_idtype= $row['r_idtype'];
$sdate= $row['date'];
$rate=$row['exchange_rate'];
$sender= $row['sender_name'];
$sender_email=$row['sender_email'];
$dtime= $row['dtime'];
$status=($row['status']);
$adp=($row['comp']);
//$senderd=$row['address'];


  $numtr=0;
 /****** countint no of tran of d agent ****/ 
 $checkp = mysql_query("SELECT * FROM cust_transaction WHERE sender_email='$s_email' && status='PAID' ")or die(mysql_error());
while($rows=mysql_fetch_array($checkp)){$numtr=$numtr +1;}



echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];
echo "</td><td align='center'>";echo "-";
echo "</td><td align='center'>";echo strtolower($row['sender_name']);
echo "</td><td align='center'>";echo strtolower($row['r_name']);
echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo $row['amt_send'];
echo "</td><td align='center'>";echo $row['amt_local'];
echo "</td><td align='center'>";echo $row['commission']/2;
echo "</td><td align='center'>";echo $row['commission']/2;
echo "</td><td align='center'>";echo $row['total']; /*


} */

$ts=str_replace(' ', '',($row['status']));

if( $ts=="SUSPENDED"){echo "</td><td align='center'>";echo "Suspended";}
if( $ts=="Pending"){echo "</td><td align='center'>";echo "Pending";}
if( $ts=="PAID"){echo "</td><td align='center'>";echo "PAID";}


/*
echo "</td><td>";echo "<em><a href='admin_cust_task.php?r_name=$r_name & s_fname=$s_fname & r_transfer=$r_transfer & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & com_a= $com_a & com_d=$com_d & r_total=$r_total & receiptno=$receiptno  & s_email= $s_email & date=$date & numtr=$numtr'> Tsk	</a></em>"; */

echo "</td><td>";echo "<strong><a href='admin_cust_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & dtime=$dtime & r_idtype=$r_idtype   &  rate=$rate  & sdate=$sdate  & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno & date=$date  & del_ct=$del_ct & status=$status & s_fname=$s_fname & adp=$adp'> View  </a></strong>";

$total_amtp = $total_amtp + $row['amt_send'];$total_lc = $total_lc + $row['amt_local'];$total_com = $total_com + $row['commission'];$total_ag = $total_ag + $row['com_a'];
$total_t = $total_t + $row['total'];

echo "</td></tr>";
echo "</td></tr>";




}

echo "</td><td colspan='7' align='center'>";echo "<strong> Total (Till Date) GBP</strong>";
echo "</td><td align='center'>";echo $total_amtp ;
echo "</td><td align='center'>";echo "" ;
echo "</td><td align='center'>"; echo $total_com/2;
echo "</td><td align='center'>";echo $total_com/2;
echo "</td><td align='center'>"; echo $total_t;
echo "</td><td align='center'>";

echo "</table>";



?>