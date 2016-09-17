<?php 
 // Connects to your Database 
 include "conn.php";   
 
$quey1="select * from transaction_agent";

$result=mysql_query($quey1) or die(mysql_error());


?>

<table border=1 style="background-color:#F0F8FF;" align="center" >

<caption><EM>General transaction Preview</EM></caption>

<tr>
<th>Date</th>

<th>Ref No</th>

<th>Transaction Type</th>

<th>Agent</th>

<th>Sender F.NAme</th>

<th>Sender L.Name</th>

<th>Beneficiary F.Name</th>

<th>Beneficiary L.Name</th>
<th>Amount Sent</th>
<th>Local(N)</th>
<th>Amount(£)</th>
<th>Commission Daph</th>
<th>Commission agent</th>
<th>Bank</th>
<th>Account No</th>

</tr>

<?php

while($row=mysql_fetch_array($result)){
echo "</td><td>";echo $row['date'];
echo "</td><td>";echo $row['ref'];
echo "</td><td>";echo $row['trans_type'];
echo "</td><td>";echo $row['agent'];
echo "</td><td>";echo $row['s_fn'];
echo "</td><td>";echo $row['s_ln'];
echo "</td><td>";echo $row['b_fn'];
echo "</td><td>";echo $row['b_ln'];
echo "</td><td>";echo $row['amt_snd'];
echo "</td><td>";echo $row['lp'];
echo "</td><td>";echo $row['ap'];
echo "</td><td>";echo $row['com_dph'];
echo "</td><td>";echo $row['com_ag'];
echo "</td><td>";echo $row['bank'];
echo "</td><td>";echo $row['b_acn'];
echo "</td></tr>";

}

echo "</table>";

?>


