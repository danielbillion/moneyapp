<?php 

$prot=0;$bout=0;$soldt=0;$mart=0;$at=0;$amtpt=0;

if(!isset($start_from)){$start_from=0;}
while($row=mysql_fetch_array($check)){


$custid=$row['custid'];
$tcode=$row['tcode'];
$date=$row['date'];
$sender=$row['s_name'];
$r_name=$row['r_name'];
$amtn=number_format( $row['amt_n'],2);
$amtp=number_format( $row['amt_p'],2);
$bou=number_format( $row['bou_r'],2);
$sold=number_format( $row['sold_r'],2);	
$margin=number_format( $row['margin'],2);
$profit=number_format( $row['profit'],2);
$bankn= $row['bank_n'];
$bankna= $row['bank_info'];
$status= $row['status'];
$r_phone= $row['r_phone'];
$banki= $row['banknig'];
$r_transfer= $row['r_transfer'];
$r_idtype= $row['id_type'];
$r_actname= $row['act_name'];
$nbankno= $row['nbankno'];

 
if(isset($start_from)){$start_from= $start_from+1;echo "</td><td align='center'>";echo $start_from;}

echo "</td><td align='center'>";echo $row['date'];
echo "</td><td align='center'>";echo $row['custid'];
echo "</td><td align='center'>";echo $row['tcode'];
	$sender_name=$row['s_name'];
	
$r_name=$row['r_name'];

$sender_name = substr($sender_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($sender_name));
$r_name2 = substr($r_name, 0, 10) . '..';echo "</td><td align='center'>";echo ucfirst (strtolower($r_name2));
$r_name = ucfirst (strtolower($r_name));
echo "</td><td align='center'>";echo number_format( $row['amt_n'],2);
echo "</td><td align='center'>";echo number_format($row['amt_p'],2);
echo "</td><td align='center'>";echo number_format($row['bou_r'],2);
echo "</td><td align='center'>";echo $row['sold_r'];
echo "</td><td align='center'>";echo $row['margin'];
echo "</td><td align='center'>";echo number_format($row['profit'],2);
echo "</td><td align='center'>";echo $row['bank_n'];
echo "</td><td align='center'>";echo $row['bank_info'];
echo "</td><td align='center'>";echo $row['banknig'];

$ts=($row['status']);

if( $ts=="SUSPENDED"){echo "</td><td align='center'>";echo "Sus";}
if( $ts=="PENDING"){echo "</td><td align='center'>";echo "<input name='checkbox' type='checkbox' id='checkbox' readonly='readonly'/>";}
if( $ts=="PAID"){echo "</td><td align='center'>";echo "<input name='checkbox2' type='checkbox' id='checkbox2'  checked='checked' readonly='readonly'/>";}

echo "</td><td>";echo "<strong><a href='n2uk_trans_receipt.php?custid=$custid & tcode=$tcode & date=$date & sender=$sender & r_name=$r_name & r_actname=$r_actname & amtn=$amtn & amtp=$amtp &
bou=$bou & sold=$sold & margin=$margin & profit=$profit & bankn=$bankn & banki=$banki & bankna=$bankna & status=$status &  r_phone=$r_phone  & r_transfer=$r_transfer & r_idtype=$r_idtype & nbankno=$nbankno'> View  </a></strong>";



//echo "</td><td>";echo "<strong><a href='admin_zero_com.php?ag_email=$age_email & receiptno=$receiptno'> 0-Com  </a></strong>";

$prot = $prot + $row['profit'];$mart = $mart + $row['margin'];$amtpt = $amtpt + $row['amt_p'];$bout = $bout + $row['bou_r'];$soldt = $soldt + $row['sold_r'];
$at = $at + $amtn;

echo "</td></tr>";

}


echo "</td><td colspan='6' align='center'>";echo "<strong> Total (Till Date) £ </strong>";



//$result = mysql_query($check1);




echo "</td><td align='center'>";echo number_format($at,2) ;	
echo "</td><td align='center'>";echo number_format($amtpt,2) ;
/********** COMMISSION FOR DAPHKKOY ***************************/

echo "</td><td align='center'>"; echo number_format($bout,2);

/********** COMMISSION FOR agent ***************************/

echo "</td><td align='center'>"; echo number_format($soldt,2);
echo "</td><td align='center' >"; echo number_format($mart,2);
echo "</td><td align='center' >"; echo number_format($prot,2);
echo "</td><td align='center' colspan='3'>";

echo "</table>";



?>