
<?php session_start();

			//Extracting the url
			function url(){
			  return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER['REQUEST_URI']
			  );
			}

include "info.php";
$email_ad=$_SESSION['email_ad'];
$passt=$_SESSION['passt'];
$level=$_SESSION['level'];
$webt=$_SESSION['web1'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out
$filem =url();
$os=time();

$file2 = substr($filem, ($pos = strpos($filem, '?')) !== false ? $pos + 0 : 0);
$file=str_replace($file2, '', $filem);
$file = basename($file);
if($file==""){$file = basename($filem);}

$type=$_SESSION['type'];
$name=$_SESSION['s_fname'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out

		include "conn.php";include "time.php";
		mysql_query("INSERT INTO view_page2(name,type,email,date,datetime,page,level,password,website,changes,operation)
		VALUE('$name','$type','$email_ad','$date','$dtime','$filem','$level','$passt','$webt','$file','$os')");


	 	if ((time()-$_SESSION['timestamp']>$idletime) || (!isset($email_ad)) || ($_SESSION['web1']!==$web1  ) || ($_SESSION['log_type']!=="customer") ) {

					if (!file_exists('agent_login.php.php')) 
						{
					session_unset();session_destroy();
					echo" <script type='text/javascript'>{location='../agent_login.php.php';}</script> ";

						}
							 
		
					if (file_exists('agent_login.php.php')) 
						{ 
						
						session_unset();session_destroy();
					echo" <script type='text/javascript'>{location='agent_login.php.php';}</script> ";
						 }
	 
	 
		}

				



?>


<?php include "conn2.php";

$querycs = $db->query("SELECT * FROM new_customer WHERE email='$email_ad' LIMIT 5");
		
				if($querycs) {
					while ($resultst = $querycs ->fetch_object()) {
						
						$_SESSION['fname']=$resultst->fname;
						$_SESSION['lname']=$resultst->lname;
						$agcid=$resultst->id;
						$c_email=$resultst->email;
						$_SESSION['address']=$resultst->address;
						$town=$resultst->town;
						$county=$resultst->county;
						$country=$resultst->country;
						$postcode=$resultst->postcode;
						$s_phone=$resultst->mnumber;
						$_SESSION['s_phone']=$resultst->mnumber;
						$sender=$_SESSION['fname']." ".$_SESSION['lname'];
						
					}}
					//echo $_SESSION['address'];

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="adnew_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title> <?php if (isset($name1)){ echo $name1;} ?> </title>
<link href="" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../Kunzleltd.com/nav.css" />
<style type="text/css">
<!--
body {
	background-color: #CCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	text-align: center;
}

a:link {
	text-decoration: none;
	color: #600;
}
a:visited {
	text-decoration: none;
	color: #906;
}
a:hover {
	text-decoration: none;
	color: #030;
}
a:active {
	text-decoration: none;
	color: #00F;
}
.style10 {
	font-size: large;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #F00;
}
.style12 {color: #FFFFFF; font-size: 10px; }
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
.he {
	color: #00F;
}
.ion {
	color: #000;
}
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


/*
 // Connects to your Database 

 include "conn.php";  

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 
	$email = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM agent WHERE email = '$email' ")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 


 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: agent_login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: agent_login.php"); 

 } 





$title=  $_SESSION['title'];
$use=  $_SESSION['s_fname'];


*/
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
  <table width="962" border="2" bordercolor="#fbe1ff" cellspacing="0" cellpadding="0">
    <tr>
      <td width="956"><table width="959" height="94" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
        <tr bgcolor="#339933">
          <th width="290" rowspan="4" valign="top" bgcolor="#FFFFFF" scope="row"><p><span class="style10"><img src="img_logo.php" width="28" height="54"  /><span style="font-size: x-large"><?php 
		if (isset($name1)){ echo $name1;}
		
		?></span></span></p></th>
          <th width="402" height="8" rowspan="4" bgcolor="#FFFFFF" scope="row"><p class="he" style="font-size: 18px; color: #030;">WELCOME
            <?php 	
				   if(isset($_SESSION['title'])){
				   
				 $title=  strtoupper($_SESSION['title']);
				
	echo "$title";} ?>
            <?php 	
				   if(isset($_SESSION['s_fname'])){
				   
				  $use=  strtoupper($_SESSION['s_fname']);
				
	echo "$use";} ?>
            !</p>
            <p class="style12" style="font-weight: bold; color: #030;">CUSTOMER/ ID: 
              <?php 	
				   if(isset($_SESSION['id'])){
				   
				  $id=  $_SESSION['id'];
				
	echo "$id";} ?>
            </p></th>
          <th width="267" bgcolor="#FFFFFF" scope="row"> <div align="center"><span class="style20" style="color: #030">&nbsp;</span><u><span style="font-size: 12px; font-weight: bold; color: #00F;">Last login</span></u> <span class="style20" style="color: #00F">
            <?php 	
				   if(isset( $_SESSION['date'])){
				   
				  $use=  strtoupper( $_SESSION['date']);
				
	echo "$use";} ?>
          </span></div></th>
        </tr>
        <tr bgcolor="#339933">
          <th height="9" bgcolor="#FFFFFF" scope="row"><span class="style20"><a href="companys details_c.php" style="font-size: 10px; color: #300; font-weight: bold;"></a></span></th>
        </tr>
        <tr bgcolor="#339933">
          <th height="10" bgcolor="#FFFFFF" scope="row"><a href="companys details_c.php" style="font-size: 10px; color: #300; font-weight: bold;">Bank Details</a></th>
        </tr>
        <tr bgcolor="#339933">
          <th height="18" bgcolor="#FFFFFF" class="style20" style="color: #00F" scope="row"><a href="customer_help.php">Key words</a></th>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="center">	
  <table width="1061" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1061" height="19" align="center"><ul id="css3menu1" class="topmenu">
            <li class="topfirst"><a href="customer_page.php" style="height:32px;line-height:32px;"><img src="adnew_files/css3menu1/home1.png" alt=""/>HOME</a></li>
           
             
            <li class="topmenu"><a href="cust_receiver.php" style="height:32px;line-height:32px;"><span>CREATE RECEIPIENT</span></a></li>
              <li class="topmenu"><a href="cust_send.php" style="height:32px;line-height:32px;"><span>SEND MONEY</span></a></li>
            
             <li class="topmenu"><a href="receivers_list.php" style="height:32px;line-height:32px;"><span>RECEIPIENT LIST</span></a></li>
            
             <li class="topmenu"><a href="cust_trans_report.php" style="height:32px;line-height:32px;"><span><img src="adnew_files/css3menu1/service.png" alt=""/>PREVIOUS TRANSACTIONS</span></a>
            
            <li class="topmenu"><a href="cust_change_password.php" style="height:32px;line-height:32px;"><span><img src="adnew_files/css3menu1/samples2.png" alt=""/>MODIFY PASSWORD</span></a>
              
            </li>
            
            <li class="topmenu"><a href="cust_edit.php" style="height:32px;line-height:32px;"><span><img src="adnew_files/css3menu1/samples2.png" alt=""/>EDIT PROFILE</span></a>
              
            </li>
            <li class="toplast"><a href="customer_help.php" style="height:32px;line-height:32px;">KEYWORDS</a></li>
            
<li class="toplast"><a href="logout.php" style="height:32px;line-height:32px;"><img src="adnew_files/css3menu1/register1.png" alt=""/>LOGOUT</a></li>	
            
                        <li class="toplast"><a href="#" style="height:32px;line-height:32px;">RATE &pound;1=&#8358;
                <?php
				$email=$_SESSION['email'];

 include "conn.php"; 

		$check = mysql_query("SELECT * FROM new_customer WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
while($row=mysql_fetch_array($check)){
$rs=$row['agrs'];

;}

if( $rs=="N"){
	$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
    while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate'];
  
  
   }  
   echo $er ; 
                 
                     
                        
	}
	
else {
	if( $rs=="R1"){
	$result = mysql_query('SELECT id,rate1 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate1']; }
  
  echo $er ;
	}
	
	if( $rs=="R2"){
	$result = mysql_query('SELECT id,rate2 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate2']; }
  echo $er ;
	}
	
	
	
	}
				
				
				
				 ?>.00	</a></li>
                        
                        

                        
            
          </ul></td>
        </tr>
        <tr>
          <td height="19" align="center">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;	</p>
</div>
</body>
</html>









