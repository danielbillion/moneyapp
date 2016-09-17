








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style2.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="adnew_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>  <?php if (isset($name1)){ echo $name1;} ?></title>

<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css">
<style type="text/css">
<!--
body {
	background-color: #FFF;
	margin-left: 0px;	
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size: 14px;
}
.style1 {
	color: #FFFFFF;
	font-size: 12px;
}

a:link {
	text-decoration: none;
	color: #F00;
}
a:visited {
	text-decoration: none;
	color: #906;
}
a:hover {
	text-decoration: none;
	color: #00F;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
.style10 {
	font-size: x-large;
	font-weight: bold;
	font-family: Georgia, 'Times New Roman', Times, serif;
	color: #F00;
}
.style17 {
	font-size: 16px;
	font-weight: bold;
	font-family: Georgia, 'Times New Roman', Times, serif;
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
._css3m1 {display:none}
._css3m1 {display:none}
.style12 {color: #FFFFFF; font-size: 10px; }
-->
</style>
</head>

<body>



<div align="center">
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
  
  <script language="javascript" type="text/javascript">
    function toggleMe(val)
    {
	
    var b_actno = document.getElementById('b_actno');
    var b_abank = document.getElementById('b_abank');
	 var b_pbank = document.getElementById('b_pbank');
	 var b_idtype = document.getElementById('b_idtype');
    if(val=='Pick Up')
    {
    b_actno.style.display = "none";
    b_abank.style.display = "none";
	b_pbank.style.display = "block";
	b_idtype.style.display = "block";
	
    }
    else
    {
    b_actno.style.display = "block";
    b_abank.style.display = "block";
	b_pbank.style.display = "none";
	b_idtype.style.display = "none";
	
    }
    }
    </script>
  
  
  <?php 
require_once('calendar/classes/tc_calendar.php');
?>
  <script language="javascript" src="calendar/calendar.js"></script>
  <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
  
  <?php 

 include "conn.php";  

 
?>
  
  <?php
	if(isset($_GET['c_name']) && !empty($_GET['c_name']) AND isset($_GET['c_email']) && !empty($_GET['c_email']) )
{

	// Verify data
	$c_name = ($_GET['c_name']); // Set email variable
	$c_email = ($_GET['c_email']); // Set email variable

	//$_SESSION['r_fname']= $r_fname;
	
	//echo "<strong>Account holder: </strong>";
	//echo $_SESSION['email'];

//$_SESSION['r_actno']= "None";
	
	}
	
	
	
	
	?>
  <table width="1017" border="2"  bordercolor="#0000FF" cellspacing="0" cellpadding="0">
    <tr>
      <td width="1011"><table width="1014" height="94" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
        <tr bgcolor="#339933">
          <th width="290" rowspan="3" valign="top" bgcolor="#FFFFFF" scope="row"><p><span class="style10"><img src="img_logo.php" width="28" height="54"  /><span style="font-size: x-large">
		  <?php 
		if (isset($name1)){ echo $name1;}
		
		?>
        </span></span></p></th>
          <th width="402" height="8" rowspan="3" bgcolor="#FFFFFF" scope="row"><p class="he" style="font-size: 18px; color: #030;">WELCOME
            <?php 	
				   if(isset($title)){
				   
				 $title=  strtoupper($_SESSION['title']);
				
	echo "$title";} ?>
            <?php 	
				   if(isset($_SESSION['sfname_ad'])){
				   
				  $use=  strtoupper($_SESSION['sfname_ad']);
				
	echo "$use";} ?>
            !</p>
            <p class="style12" style="font-weight: bold; color: #030;">ADMINISTRATOR 2</p></th>
          <th width="322" bgcolor="#FFFFFF" scope="row"> <div align="center"><span class="style20" style="color: #030">&nbsp;</span><u><span style="font-size: 12px; font-weight: bold; color: #00F;">Last login</span></u> <span class="style20" style="color: #00F">
            <?php 	
				   if(isset( $_SESSION['date'])){
				   
				  $use=  strtoupper( $_SESSION['date']);
				
	echo "$use";} ?>
          </span></div></th>
        </tr>
        <tr bgcolor="#339933">
          <th height="19" bgcolor="#FFFFFF" scope="row"><span class="style20"><a href="companys details_a.php"  style="font-size: 10px; color: #300; font-weight: bold;"> </a></span></th>
        </tr>
        <tr bgcolor="#339933">
          <th height="18" bgcolor="#FFFFFF" class="style20" style="color: #00F" scope="row">&nbsp;</th>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="center">	
  <div align="center">
    <table width="1017" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1017" height="19" align="center"><ul id="css3menu1" class="topmenu">
          <li class="topfirst"><a href="admin_page.php" style="height:32px;line-height:32px;"><img src="adnew_files/css3menu1/home1.png" alt=""/>Home</a></li>
          <?php
		 
		 if(($bsize !=="Customer")){
         echo  "<li class='topmenu'><a href='#' style='height:32px;line-height:32px;'><span><img src='adnew_files/css3menu1/service1.png' alt=''/>Agents</span></a>
            <ul>
              <li><a href='admin_agent.php'>Agents Menu</a></li>
              <li><a href='admin_agents_trans_status.php'>Pending Payment</a></li>
			    <li><a href='admin_agents_transaction_general _report.php'>Transactions</a></li>
			  <li><a href='admin_lv2.php'>Manager</a></li>
              
             
             
            </ul>
          </li>";
		  
		 }
          
          ?>
      
          
         
          
         
          <li class="topmenu"><a href="#" style="height:32px;line-height:32px;"><span><img src="adnew_files/css3menu1/info1.png" alt=""/>Transactions</span></a>
            <ul>
             <?php   if(($bsize !=="Customer")){echo"  <li><a href='admin_agents_trans_status.php'>Pending Payment- Agent</a></li>";} ?>
            <?php   if(($bsize !=="Customer")){echo"  <li><a href='admin_custs_trans_status.php'>Pending Payment- Customer</a></li>";} ?>
              <?php   if(($bsize !=="Customer")){echo"  <li><a href='admin_agents_transaction_general _report.php'>Agent Transactions</a></li>";} ?>
              <?php  if(($bsize !=="Agent")){echo " <li><a href='admin_custs_transaction_general _report.php'>Customer Transactions</a></li>";} ?>
              <li><a href="admin_search.php">Search Transactions</a></li>
              
              
            
              
              
              <li><a href="Admin_setbank.php">Office Bank</a></li>
              <li><a href="#">Cancelled</a>
                <ul>
                  
                 <?php  if(($bsize !=="Customer")){echo "  <li><a href='admin_agents_transaction_general _report_cancel.php'>Cancelled Agent Transactions</a></li>";} ?>
                 <?php  if(($bsize !=="Agent")){echo "  <li><a href='admin_custs_transaction_general _report_cancel.php'>Cancelled Customer Transactions</a></li>";} ?>
                  
                </ul>
                
                </li>
            </ul>
          </li>
          
          <li class="topmenu"><a href="#" style="height:32px;line-height:32px;"><span><img src="adnew_files/css3menu1/samples2.png" alt=""/>Site Ops</span></a>
            <ul>
              <li><a href="todays_rate.php">Today's Rate</a></li>
              <li><a href="admin_verified.php">Uploaded ID / Address</a></li>
              
              <li><a href="admin_bank.php">Bank</a></li>
              <li><a href="admin_password.php">Modify Password</a></li>
              
              
            </ul>
          </li>
          
             <li class="topmenu"><a href="#" style="height:32px;line-height:32px;"><span>N2UK</span></a>
            <ul>
              <li><a href="n2uk_cust_list.php">New Deal</a></li>
              <li><a href="n2uk_report.php">Transaction Report</a></li>
              <li><a href="n2uk_new_customer.php">New Customer Entry</a></li>
              <li><a href="n2uk_cust_list.php">Customer View / Receiver Setup</a></li>
               <li><a href="n2uk_rate.php">Bou / Sold Rate</a></li>
               <li><a href="n2uk_bank.php">Receiver Bank</a></li>
              <li><a href="n2uk_search.php">Search Deal</a></li>
               <?php   if ($_SESSION['level']=="1" || $_SESSION['level']=="2"){echo" <li><a href='n2uk_turn.php'>Turnover N2UK</a></li>";} ?>
              
          
            </ul>
          </li>	
          
          
          
          
          
           <li class="toplast"><a href="#" style="height:32px;line-height:32px;">Bals</a>
            
            <ul>
             <?php   if(($bsize !=="Customer")){echo" <li><a href='admin_debtor.php'>Agent Bal</a></li>";} ?>
              <?php  if(($bsize !=="Agent")){echo "<li><a href='admin_cust_diary.php'>Customer Bal</a></li>";} ?>
               <?php  if(($bsize !=="Customer")){echo "<li><a href='admin_trans_clear.php'>Cleared Com / Trans</a></li>";} ?>
             
               
            </ul>
            
            
           </li>
          
          <li class="toplast"><a href="admin_help.php" style="height:32px;line-height:32px;">Help</a></li>
          <li class="toplast"><a href="logout.php" style="height:32px;line-height:32px;">Log Out</a></li>
          <?php if(isset($_SESSION['level'])){if ($_SESSION['level']== "1"){echo "<li class='topmenu'>
				<div align='center'><a href='agent_page.php' style='height:32px;line-height:32px;'>Switch</a></div> </li>";   }} ?>
          
        </ul></td>
        </tr>
      <tr>
        <td height="40" align="center">&nbsp;</td>
      </tr>
      </table>
  </div>
  <p>&nbsp;	</p>
</div>
</body>
</html>









