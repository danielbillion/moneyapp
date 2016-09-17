<?php
//require_once('visitors_connections.php');//the file with connection code and functions


if (!isset($_COOKIE['ID_my_site']) )

 {

//$tags = get_meta_tags('http://www.daphkkoy.biz/');



//echo $tags['author'];       // name
//echo $tags['keywords'];     // php documentation
//echo $tags['description'];  // a php manual
 

//get the required datasss
$visitor_page="index";

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function getBrowserType () {
if (!empty($_SERVER['HTTP_USER_AGENT'])) 
{ 
   $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT']; 
}
else if (!empty($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) 
{ 
   $HTTP_USER_AGENT = $HTTP_SERVER_VARS['HTTP_USER_AGENT']; 
} 
else if (!isset($HTTP_USER_AGENT)) 
{ 
   $HTTP_USER_AGENT = ''; 
} 
if (preg_match('/Opera(| )([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[2]; 
   $browser_agent = 'opera'; 
} 
else if (preg_match('/MSIE ([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[1]; 
   $browser_agent = 'ie'; 
} 
else if (preg_match('/OmniWeb([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[1]; 
   $browser_agent = 'omniweb'; 
} 
else if (preg_match('/Netscape([0-9]{1})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[1]; 
   $browser_agent = 'netscape';
} 
else if (preg_match('/Mozilla([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[1]; 
   $browser_agent = 'mozilla'; 
} 
else if (preg_match('/Konqueror([0-9].[0-9]{1,2})/', $HTTP_USER_AGENT, $log_version)) 
{ 
   $browser_version = $log_version[1]; 
   $browser_agent = 'konqueror'; 
} 
else 
{ 
   $browser_version = 0; 
   $browser_agent = 'other'; 
}
return $browser_agent;
}








$visitor_ip = getRealIpAddr();

//$visitor_ip = GetHostByName($REMOTE_ADDR);

if(isset($_SERVER['HTTP_REFERER'])) {
	    $visitor_page = $_SERVER['HTTP_REFERER'];
	}

$visitor_browser = getBrowserType();
$visitor_hour = date("h");
$visitor_minute = date("i");
$visitor_day = date("d");
$visitor_month = date("m");
$visitor_year = date("Y");
$visitor_refferer =getRealIpAddr();
//$visited_page = $_SERVER['HTTP_REFERER'];
$visitor_date= date('Y-m-d H:i:s');



include "conn.php"; mysql_select_db("daphkkoy_com") or die(mysql_error()); 
 $check = mysql_query("SELECT * FROM visitors_table ")or die(mysql_error());
 $check2 = mysql_query("SELECT * FROM visitors_table WHERE visitor_ip = '$visitor_ip' ORDER BY id DESC LIMIT 1")or die(mysql_error());
 $check_t = mysql_num_rows($check2);
 $freq=0;

 if ($check_t == 0) {
 
 $expire=time()+60*60*24; 												
 setcookie('ID_my_site', $visitor_ip, $expire); 

$sql = "INSERT INTO visitors_table (visitor_ip, visitor_browser, visitor_date,
 visitor_refferer, visitor_page,frequency) VALUES ('$visitor_ip', '$visitor_browser', '$visitor_date','$visitor_refferer', '$visitor_page','1')";
$result = mysql_query($sql) or trigger_error(mysql_error(),E_USER_ERROR);
 				}
				
				
 else
{
while($sa = mysql_fetch_array($check2))
{

$freq=$sa['frequency'];
}

$freq=$freq + 1 ;

$expire=time()+60*60*24; 												
setcookie('ID_my_site', $visitor_ip, $expire); 

mysql_query("UPDATE visitors_table SET frequency='$freq',visitor_browser='$visitor_browser',visitor_date='$visitor_date',visitor_refferer='$visitor_refferer', visitor_page='$visitor_page' WHERE visitor_ip = '$visitor_ip'") or die( "<b>Error:</b> Something went wrong, could not edit link status."); 

}

}

//write the required data to database
//mysql_select_db($database_visitors, $visitors);
?>