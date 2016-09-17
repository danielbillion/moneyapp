<?php

$total_amtp=0;$total_t=0;$total_lc=0;$total_ag=0;$total_comc=0;


  echo $email;
while($row=mysql_fetch_array($check)){



$r_name=$row['r_name'];
$r_phone=$row['r_phone'];
$r_transfer=$row['r_transfer'];
$r_bank=$row['r_bank'];
$r_actno=$row['r_actno'];
$r_amtsend= number_format($row['amt_send'],2);
$r_amtlocal= number_format($row['amt_local'],2);
$r_commission=  number_format($row['commission'],2);
$r_total= number_format($row['total'],2);
$sender= $row['sender_name'];
$receiptno= $row['receiptno'];
$s_phone= $row['s_phone'];
$sdate= $row['date'];
$sender_email=$row['sender_email'];
$senderd=$row['address'];
$postcode=$row['postcode'];
$town=$row['town'];
$county=$row['county'];
$country=$row['country'];
$rate=$row['exchange_rate'];
$dtime=$row['dtime'];
$r_idtype=$row['r_idtype'];





	
	//echo $sender_email;


	
$start_from= $start_from+1;
echo "</td><td align='center'>";echo $start_from;

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['receiptno'];


$sender_name=$row['sender_name'];
$r_name=$row['r_name'];
$r_name2=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name2, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));

echo "</td><td align='center'>";echo $row['r_transfer'];
echo "</td><td align='center'>";echo number_format($row['amt_send'],2);
echo "</td><td align='center'>";echo number_format($row['amt_local'],2);
echo "</td><td align='center'>";echo number_format($row['com_d'],2);
echo "</td><td align='center'>";echo number_format($row['com_a'],2);
echo "</td><td align='center'>";echo number_format($row['total'],2);
echo "</td><td align='center'>";echo $row['status'];

$ts=str_replace(' ', '',($row['status']));

if ( $ts== "Pending") {

echo "</td><td>";echo "<strong><a href='agent_trans_receipt_edit.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> Edit  </a></strong>";

}

if ( $ts== "UNPAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> ---  </a></strong>";

}


if ( $ts== "SUSPENDED") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> ---  </a></strong>";

}

if ( $row['status']== "PAID") {

echo "</td><td>";echo "<strong><a href='#?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'></a></strong>";

}

echo "</td><td>";echo "<strong><a href='agent_trans_receipt.php?r_name=$r_name & r_phone=$r_phone & sender_email=$sender_email & r_idtype=$r_idtype & senderd=$senderd & town=$town & county=$county & country=$country & postcode=$postcode & rate=$rate & senderd=$senderd & sdate=$sdate & dtime=$dtime & s_phone=$s_phone & r_transfer=$r_transfer &r_bank=$r_bank &r_actno=$r_actno & r_amtsend= $r_amtsend & r_amtlocal= $r_amtlocal & r_commission= $r_commission & r_total=$r_total & sender=$sender & receiptno=$receiptno'> View  </a></strong>";



$total_amtp = $total_amtp + $row['amt_send'];
$total_lc = $total_lc + $row['amt_local'];
$total_comc = $total_comc + $row['com_d'];
$total_ag = $total_ag + $row['com_a'];
$total_t = $total_t + $row['total'];


echo "</td></tr>";

}

echo "</td><td colspan='6' align='center'>";echo "<strong> Total (Till Date) GBP</strong>";
echo "</td><td align='center'>";echo number_format($total_amtp,2) ;
echo "</td><td align='center'>";echo "" ;
echo "</td><td align='center'>"; echo number_format($total_comc,2);
echo "</td><td align='center'>"; echo number_format($total_ag,2);

echo "</td><td align='center'>"; echo number_format($total_t,2);
echo "</td><td align='center'>";

echo "</table>";


?>