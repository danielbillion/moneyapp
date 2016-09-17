<?php

include "conn.php";
$checksa0 = mysql_query('SELECT * FROM busy ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
while($bchecksa=mysql_fetch_array($checksa0)){
	
$name1 = $bchecksa['name1'];
$name2 = ($bchecksa['name2']);
$slogan1 = ($bchecksa['slogan1']);
$slogan2 = ($bchecksa['slogan2']);
$emailbs = ($bchecksa['email']);
$email2 = ($bchecksa['email2']);
$tel = ($bchecksa['tel1']);
$tel2 = ($bchecksa['tel2']);
$tel3 = ($bchecksa['tel3']);
$web1 = ($bchecksa['web1']);
$web2 = ($bchecksa['web2']);
$fax = ($bchecksa['fax']);
$bsize = ($bchecksa['size']);
//$address = ($bchecksa['address']);
$addressbs = ($bchecksa['address']);
$br = ($bchecksa['br']);
$brc = ($bchecksa['brc']);
$postcodebs = ($bchecksa['postcode']);
$country = ($bchecksa['country']);
$ecredit = ($bchecksa['ecredit']);
$ecal = ($bchecksa['ecal']);
$code = ($bchecksa['code']);
$letter1 = substr($name1, 0,1);
$letter2 = substr($name1, 0,2);
$letter3 = substr($name1, 0,4);

$bs_dtl = $bchecksa['dtl'];
$bs_dtls = $bchecksa['dtls'];
$bs_mtl = $bchecksa['mtl'];
$bs_mtls = $bchecksa['mtls'];
$bs_vdtl = $bchecksa['vdtl'];
$etpr = $bchecksa['etp'];
$rt_p = $bchecksa['rt'];
$so_p = $bchecksa['so'];
$actpaypal= $bchecksa['paypal_status'];
$paypal_email= $bchecksa['paypal_email'];
$paypal_limit= $bchecksa['paypal_ipn'];
$actsms= $bchecksa['sms_status'];
$sms_email= $bchecksa['sms_email'];
$sms_hash= $bchecksa['sms_hash'];

 }

?>