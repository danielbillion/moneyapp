<?php   include "admin_p.php"?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="me_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>  <?php if (isset($name1)){ echo $name1;} ?> </title>
<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #CCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #90C;
}
a:visited {
	text-decoration: none;
	color: #99F;
}
a:hover {
	text-decoration: none;
	color: #00F;
}
a:active {
	text-decoration: none;
	color: #9CC;
}
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
.style17 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFF33;
}
.style19 {
	color: #FFFFFF;
	font-size: 9px;
}
.style20 {
	font-size: 9.5px;
	color: #FFFFFF;
}
ag {
	color: #F00;
}
rt {
	color: #F00;
}
.nw {
	color: #F00;
}
.style13 {color: #330000; font-weight: bold; }
.style14 {	font-size: 9px;
	font-style: italic;
	font-weight: bold;
	color: #00FF00;
}
.style15 {	color: #FF0000;
	font-size: 10px;
}
.style171 {color: #0000FF}
.style191 {color: #660033}
.style201 {	font-size: 12px;
	font-style: italic;
}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 12px; }
.style9 {color: #000000}
.style11 {	color: #FFFFFF;
	font-size: 12px;
}
.style11 {	color: #FFFFFF;
	font-size: 18px;
}
.style2 {	font-size: 11px;
	font-style: italic;
	font-weight: bold;
}
.style16 {	color: #CCCCCC;
	font-size: 12px;
}
.style21 {	font-size: 18px;
	color: #FFFFFF;
}
.style3 {color: #FF0000}
.style41 {	font-size: 13px;
	color: #0000FF;
}
.style6 {font-size: 11px}
.style7 {font-size: 12px}
.style8 {font-size: 14px}
-->
</style>
</head>

<body>



<STYLE type="text/css">
 /* List of address */
.SPLAddressListSt{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    margin-top: 0;
    margin-bottom: 0;
    width: 80mm;}
/* Line under the list box when address found */
.SPLAddressListStBottomLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* Line if nothing is found */
.SPLAddressListStErrorLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;
    }
/* License information line */
/* Shown only for "Internal" Licenses, not Web Use */
 .SPLAddressListLicenseLine{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    text-align: center
    margin-top: 0;
    margin-bottom: 0;
    }
 </STYLE>
											
	
                      
                      
<table border=1 style='background-color: #C8DDDA' align='center' cellpadding='0' cellspacing='0' >

<caption><EM><strong><u> <?php echo strtoupper($_GET['ag_name']); ?></u>: Cleared Oustanding  CT=Clear type, CLA= cleared all, CL1=Single clear </strong></EM></caption><p>

<tr >
<th>No</th>
<th>D-T Cleared</th>
<th>Transfer Code</th>
<th>Agent</th>
<th>Sender </th>
<th>Receiver </th>
<th>Transfer-M</th>
<th>Amt-P/£ </th>
<th>Lcl-P/N  </th>
<th>Cm_ <?php include "info.php"; echo $letter1 ?>(£  </th>
<th>A-Co/£</th>
<th>Total/£</th>

<th>CT</th>
<th>Status</th>
<th></th>
<th></th>
</tr>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<?php 

  

if($level==1 || $level==2){$ac='admin_pay_agent.php';$cc="admin_pay_agent.php";} if ($level==3){$ac="#"; $cc="#";}

$nt=0;
$ts1= date("y-m-d");
$time = strtotime($ts1);
$ts2  =date('Y-m-d', strtotime('-7 days'));

$link = include "conn.php";
 include "conn.php"; if (isset($_GET["page"])) { $page  = $_GET["page"];  $num=$_GET['num']; } else { $page=1; $num=0; };
$start_from = "0";
$ag_name=$_GET['ag_name'];
$admn=$ag_name;
  
 $check = mysql_query("SELECT * FROM agent_cust_transaction") or die('Query failed: ' . mysql_error());
 
 include "info.php";
if(($bs_mtls=='1')){
 $check3 = mysql_query("SELECT * FROM clear_trans WHERE `amt_send` <= $bs_mtl AND cla ='$ag_name' && type='' && adst='' ")or die(mysql_error());
 $checkcla=  mysql_query("SELECT * FROM clear_trans WHERE `amt_send` <= $bs_mtl AND  cla ='$ag_name' && type='' && adst='' && (js='CLA' ) ")or die(mysql_error());
	
$checkcl1=  mysql_query("SELECT * FROM clear_trans WHERE `amt_send` <= $bs_mtl AND  cla ='$ag_name' && type='' && adst='' && ( js='CL1' ) ")or die(mysql_error());
 }
 
 if(($bs_mtls=='0')){
 $check3 = mysql_query("SELECT * FROM clear_trans WHERE cla ='$ag_name' && type='' && adst='' ")or die(mysql_error());
 
 $checkcla=  mysql_query("SELECT * FROM clear_trans WHERE cla ='$ag_name' && type='' && adst='' && (js='CLA' ) ")or die(mysql_error());
	
$checkcl1=  mysql_query("SELECT * FROM clear_trans WHERE cla ='$ag_name' && type='' && adst='' && ( js='CL1' ) ")or die(mysql_error());
 }



$total_t=0;$total_amtp=0;$total_lc=0;$total_ag=0;$total_comd=0;

$cla=0;$cl1=0;
if(!isset($start_from)){$start_from=0;}
while($row2=mysql_fetch_array($check3)){


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
$val= $row2['receiptno'];
$status=($row2['status']);

 
   
 /****** countint no of tran of d agent ****/ 
// $checkp = mysql_query("SELECT * FROM agent_cust_transaction WHERE agent_email='$age_email' && status='PAID' ")or die(mysql_error());
//while($row2s=mysql_fetch_array($checkp)){$numtr=$numtr +1;}
/* ***** end ****/ 

$check_ag = mysql_query("SELECT * FROM agent WHERE email = '".$age_email."'  ")or die(mysql_error());
while($row2_ag=mysql_fetch_array($check_ag)){ $name_age= $row2_ag['fname']."  ". $row2_ag['lname'];}
$del_agt="del_agt";
if(isset($start_from)){$start_from= $start_from+1;echo "</td><td align='center'>";

echo "<input name=ck[] type='checkbox' id=ck[] value='$val' />",$start_from;}
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
if($level==1 || $level==2){
echo "</td><td align='center'>";echo "<a href='$ac?receiptno=$receiptno & admn=$admn & age_email=$age_email & r_amtsend=$r_amtsend & adapp=adapp'>Appv</a>";}
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
	if($level==1 || $level==2){
echo "</td><td colspan='2' align='left'>";echo"<input type='submit' value='Approve' name='Approve'/>";}
echo "</td><td colspan='5' align='center'>";echo "<strong> Total (Till Date) GBP </strong>";echo "CLA=",number_format($cla,2);;echo ",  ";echo "CL1=",number_format($cl1,2);


echo "</td><td align='center'>";echo number_format($total_amtp,2) ;
echo "</td><td align='center'>";echo "" ;
/********** COMMISSION FOR Business ***************************/

echo "</td><td align='center'>"; echo number_format($total_comd,2);

/********** COMMISSION FOR agent ***************************/

echo "</td><td align='center'>"; echo number_format($total_ag,2);
echo "</td><td align='center' >"; echo number_format($total_t,2);
echo "</td><td align='center' colspan='3'>";


echo "</table>";

	if(isset($_POST['Approve'])){
	$tadap=$_POST['ck'];
	$_SESSION['tadap']=$_POST['ck'];
	$_SESSION['admn']=$admn;
	echo" <script type='text/javascript'> {window.location='admin_pay_agent.php?tadap=$tadap' }</script> ";
					 
					
						}																									

?>

<?php  
    if(isset($msg)){  // Check if $msg is not empty  
       echo '<br> <br>';
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="gray" align="center"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
                      
                      
                      
                      
&nbsp;</td>
                    </tr>
                    </table>
<p>&nbsp;
                  
                  
                  
                  
                  </p></th>
                </tr>
</table>
  </blockquote></form>
</div>  
<p>&nbsp;</p>




</body>
</html>
