<?php session_start();

$kcom=$_SESSION['letter3']."-com";
$server=$_SESSION['server'];
$pass=$_SESSION['pass'];
$user=$_SESSION['user'];
$db=$_SESSION['db'];

mysql_connect("$server", "$user", "$pass") or die(mysql_error()); 

 mysql_select_db("$db") or die(mysql_error());
 
    
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());

// These functions setup the headers:


function setExcelContentType() {
    if(headers_sent())
        return false;

    header('Content-type: application/vnd.ms-excel');
    return true;
}

function setDownloadAsHeader($filename) {
    if(headers_sent())
        return false;

    header('Content-disposition: attachment; filename=' . $filename);
    return true;
}
// This one sends a CSV to a stream using a mysql result

function csvFromResult($stream, $result, $showColumnHeaders = true) {
    if($showColumnHeaders) {
        $columnHeaders = array();
        $nfields = mysql_num_fields($result);
        for($i = 0; $i < $nfields; $i++) {
            $field = mysql_fetch_field($result, $i);
            $columnHeaders[] = $field->name;
        }
        fputcsv($stream, $columnHeaders);
    }

    $nrows = 0;
    while($row = mysql_fetch_row($result)) {
        fputcsv($stream, $row);
        $nrows++;
    }

    return $nrows;
}

// This one uses the above function to write a CSV to a file, given by $filename

function csvFileFromResult($filename, $result, $showColumnHeaders = true) {
    $fp = fopen($filename, 'w');
    $rc = csvFromResult($fp, $result, $showColumnHeaders);
    fclose($fp);
    return $rc;
}

// And this is where the magic happens ;)

function csvToExcelDownloadFromResult($result, $showColumnHeaders = true, $asFilename = 'data.csv') {
    setExcelContentType();
    setDownloadAsHeader($asFilename);
    return csvFileFromResult('php://output', $result, $showColumnHeaders);
}

// For example:

//$result = mysql_query("SELECT foo, bar, shazbot FROM baz WHERE boo = 'foo'");


if (isset($_GET['clat'])){

$tableName="download_agent_clear_trans" ;
mysql_query("DROP TABLE IF EXISTS `$db`.`$tableName`") or die(mysql_error());

//Create a New table
mysql_query("CREATE TABLE IF NOT EXISTS `$tableName` (
  `id` int(11) NOT NULL AUTO_INCREMENT, `Date` Date NOT NULL, `Receipt_No` varchar(60) NOT NULL, `Sender` varchar(60) NOT NULL,
  `Receiver` varchar(60) NOT NULL,`Transfer_Mode` varchar(62) NOT NULL,  `Amount_Sending` double NOT NULL,`Local_Pay_N` double NOT NULL,
`Comm` double NOT NULL,`Agent_Com` double NOT NULL,`Total_Paying` double NOT NULL,`status` varchar(56) NOT NULL,
  PRIMARY KEY (`id`),KEY `date` (`date`),KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ");
// Transfer new request of transaction to the new created table database


$checksa0 = mysql_query('SELECT * FROM busy ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
while($bchecksa=mysql_fetch_array($checksa0)){$bs_mtls = $bchecksa['mtls'];}

if(($bs_mtls=='1')){				
mysql_query ( "INSERT $tableName(id,Date,Receipt_No,Sender,Receiver,Transfer_Mode,Amount_sending,Local_Pay_N,Comm,Agent_Com,Total_Paying,status)

SELECT id,date,receiptno,sender_name,r_name,r_transfer,amt_send,amt_local,com_d,com_a,total,status FROM agent_cust_transaction WHERE `amt_send` <= $bs_mtl AND status='PAID'ORDER BY DATE DESC");

}

if(($bs_mtls=='0')){				
mysql_query ( "INSERT $tableName(id,Date,Receipt_No,Sender,Receiver,Transfer_Mode,Amount_sending,Local_Pay_N,Comm,Agent_Com,Total_Paying,status)

SELECT id,date,receiptno,sender_name,r_name,r_transfer,amt_send,amt_local,com_d,com_a,total,status FROM agent_cust_transaction WHERE status='PAID'ORDER BY DATE DESC");

}


$result = mysql_query("SELECT * FROM $tableName") or die('Query failed: ' . mysql_error());}





if (isset($_GET['clct'])){

$tableName="download_cust_clear_trans" ;
mysql_query("DROP TABLE IF EXISTS `$db`.`$tableName`") or die(mysql_error());

//Create a New table
mysql_query("CREATE TABLE IF NOT EXISTS `$tableName` (
  `id` int(11) NOT NULL AUTO_INCREMENT, `Date` Date NOT NULL, `Receipt_No` varchar(60) NOT NULL, `Sender` varchar(60) NOT NULL,
  `Receiver` varchar(60) NOT NULL,`Transfer_Mode` varchar(62) NOT NULL,  `Amount_Sending` double NOT NULL,`Local_Pay_N` double NOT NULL,
`Comm` double NOT NULL,`Med_Com` double NOT NULL,`Total_Paying` double NOT NULL,`status` varchar(56) NOT NULL,
  PRIMARY KEY (`id`),KEY `date` (`date`),KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ");
// Transfer new request of transaction to the new created table database				



$checksa0 = mysql_query('SELECT * FROM busy ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
while($bchecksa=mysql_fetch_array($checksa0)){$bs_mtls = $bchecksa['mtls'];}

if(($bs_mtls=='1')){	
mysql_query ( "INSERT $tableName(id,Date,Receipt_No,Sender,Receiver,Transfer_Mode,Amount_sending,Local_Pay_N,Comm,Med_Com,Total_Paying,status)

SELECT id,date,receiptno,sender_name,r_name,r_transfer,amt_send,amt_local,com_d,com_a,total,status FROM cust_transaction WHERE `amt_send` <= $bs_mtl AND status='PAID'ORDER BY DATE DESC");}


if(($bs_mtls=='0')){	
mysql_query ( "INSERT $tableName(id,Date,Receipt_No,Sender,Receiver,Transfer_Mode,Amount_sending,Local_Pay_N,Comm,Med_Com,Total_Paying,status)

SELECT id,date,receiptno,sender_name,r_name,r_transfer,amt_send,amt_local,com_d,com_a,total,status FROM cust_transaction WHERE status='PAID'ORDER BY DATE DESC");}


$result = mysql_query("SELECT * FROM $tableName") or die('Query failed: ' . mysql_error());}







if (isset($_GET['dac'])){$check0 = mysql_query("SELECT * FROM agent ")or die(mysql_error());


$tableName="download_ag_com" ;mysql_query("DROP TABLE IF EXISTS `$db`.`$tableName`") or die(mysql_error());


//Create a New table
mysql_query("CREATE TABLE IF NOT EXISTS `$tableName` (
  `No` int(11) NOT NULL AUTO_INCREMENT,`Agent` varchar(60) NOT NULL,`Date_Reg` date NOT NULL,
  `Emails` varchar(60) NOT NULL,`No_Trans` varchar(60) NOT NULL, `Comission_Agent` varchar(60) NOT NULL,
  `Comission_Business` varchar(60) NOT NULL,PRIMARY KEY (`No`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 "); 
 
 
while($row=mysql_fetch_array($check0)){
$a_email=$row['email'];$date_reg=$row['date_reg'];$c_email=$row['email'];

$check1 = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email = '$a_email'  ")or die(mysql_error());
$total_cust_com_a=0;$total_cust_com_d=0;$numtra=0;
while($sa = mysql_fetch_array($check1))
{
$total_cust_com_a = $total_cust_com_a + $sa['com_a'];$total_cust_com_d = $total_cust_com_d + $sa['com_d'];$numtra = $numtra + 1;
}

$agent=strtolower($row['lname']."  ".$row['fname']);$email_d=strtolower($row['email']);

mysql_query("INSERT INTO $tableName (Agent,Date_Reg,Emails,No_Trans,Comission_Agent,Comission_Business)

 VALUES ('$agent','$date_reg', '$email_d', '$numtra', '$total_cust_com_a','$total_cust_com_d') ") or die(mysql_error());

}
$result = mysql_query("SELECT * FROM $tableName") or die('Query failed: ' . mysql_error());


}


if (isset($_GET['dcc'])){$checkdcc = mysql_query("SELECT * FROM new_customer ")or die(mysql_error());


$tableName="download_cust_com" ;mysql_query("DROP TABLE IF EXISTS `$db`.`$tableName`") or die(mysql_error());


//Create a New table
mysql_query("CREATE TABLE IF NOT EXISTS `$tableName` (
  `No` int(11) NOT NULL AUTO_INCREMENT,`Customer` varchar(60) NOT NULL,`Date_Reg` date NOT NULL,
  `Emails` varchar(60) NOT NULL,`No_Trans` varchar(60) NOT NULL, `Comission_Med` varchar(60) NOT NULL,
  `Comission_Business` varchar(60) NOT NULL,PRIMARY KEY (`No`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 "); 
 
 
while($row=mysql_fetch_array($checkdcc)){
$a_email=$row['email'];$date_reg=$row['date_reg'];$c_email=$row['email'];

$check1 = mysql_query("SELECT * FROM cust_transaction WHERE sender_email = '$a_email'  ")or die(mysql_error());
$total_cust_com_a=0;$total_cust_com_d=0;$numtra=0;
while($sa = mysql_fetch_array($check1))
{
$total_cust_com_a = $total_cust_com_a + $sa['com_a'];$total_cust_com_d = $total_cust_com_d + $sa['com_d'];$numtra = $numtra + 1;
}

$agent=strtolower($row['lname']."  ".$row['fname']);$email_d=strtolower($row['email']);

mysql_query("INSERT INTO $tableName (Customer,Date_Reg,Emails,No_Trans,Comission_Med,Comission_Business)

 VALUES ('$agent','$date_reg', '$email_d', '$numtra', '$total_cust_com_a','$total_cust_com_d') ") or die(mysql_error());

}
$result = mysql_query("SELECT * FROM $tableName") or die('Query failed: ' . mysql_error());


}






//$result =mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
//csvToExcelDownloadFromResult($result);
csvToExcelDownloadFromResult($result);















?>










































