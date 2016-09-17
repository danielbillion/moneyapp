


<?php 
require ('config/init.php');

$template=new Template('templates/turnover.php');
$transaction=new Transaction;
$sender=new Senders;
$user_id=getUser()['user_id'];
$nmonth=100;
//select table based on account type
	
	if(getUser()['type']=='agent'){$table="agent_cust_transaction"; $field="agid";}
	else{
		
		$table="cust_transaction"; $field="cid";
	}

$query="SELECT
    YEAR(date) as year,
    MONTH(date) AS month,
    SUM(total) AS total_amount,
	 SUM(amt_send) AS amtsend,
	  SUM(com_a) AS comd,
	   SUM(com_d) AS coma,
	COUNT(amt_send) AS counted
	
FROM $table
WHERE $field = '$user_id' && (status = ' Pending' || status = 'Pending' || status='PAID')&& date
    BETWEEN DATE(NOW()) - INTERVAL (DAY(NOW()) - 1) DAY - INTERVAL $nmonth MONTH
    AND NOW()
GROUP BY YEAR(date), MONTH(date)
ORDER BY YEAR(date), MONTH(date)";

$template->result=$transaction->agentCusttrans($query);			
echo $template;

?>