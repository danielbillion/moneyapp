<?php

##################################################################
#You need to open an account which will send you a data key, goto:
#http://www.PostcodeLite.co.uk/A2CustomerAccount/WebAccountCreateFromReseller.aspx?r=&id=4

//$datakey = "W_373B48CD1BC7422989CE9D697589DE";
$datakey ="W_F819B0B302E343B0AF66B753A226F2";

//$datakey ="W_A6230489980D4F748B25D9CF4C80B5";
############	######################################################
# see http://www.postcodelite.com/Software/AjaxASPFull/AJAXFull_PHP.htm
# for explanation for code 
##################################################################

$simplyserver = "http://www.PostcodeLite.co.uk/xmlservice";
$usernameID = "";
$postcode = "";
$XMLData = "";
$data ="";

##############################################################################
# When using an INTERNAL License (used in company by your employees), each user MUST be identified, so use cookie 
# Not doing this is in breach of our End User License agreement
# If turned off then redirect to page explaining the restriction
# For web use the following code does nothing, the following section can be removed
######################### Identify User START #################################
if (substr($datakey, 0, 2) == "I_")
{
	# Internal KEY requires a User ID, so need a cookie, if turned off then terminate search 
	
	$usernameID="Not Set";
	@$usernameID = $_COOKIE['usernameID'];
	if ($usernameID == "")
	{
		@$IsSetCookieFlag = $_GET['set'];
		if ($IsSetCookieFlag != 'yes') { 
		      // Set cookie 
		      	#This will be unique enough, for 30 users! since any more will use System License
			$usernameID =date("ymd_gis",time());
			setcookie("usernameID",$usernameID,time()+(60*60*24*7));

		      // Reload page 
		      $postcode = $_GET['postcode'];
		      header ("Location: SPLGetFullAddressStep1.php?set=yes&postcode=".$postcode);
		} else { 
		      // Check if cookie exists 
		      if (!empty($_COOKIE['usernameID'])) { 
			$usernameID = $_COOKIE['usernameID'];
		     } else { 
			$CannotIdentifyUser="True";
		     } 
		} 	
	}
}
else
{
	# Web use KEY does not require a User ID 
	$usernameID ="";
}
########################## Identify User END #############################


################################################
#So Get Data from SPL Web server:

header('Expires: Wed, 23 Dec 1980 00:30:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Content-Type: text/xml');

$postcode = $_GET['postcode'];
$postcode = str_replace(" ", "", $postcode);
$XMLService = $simplyserver."/InlineComboSearch.aspx?datakey=".$datakey."&postcode=".$postcode."&username=".$usernameID."&AppID=36";

#Set to 1 to show License status
$XMLService = $XMLService."&showlic=0";

#Set No lines in combo
$XMLService = $XMLService."&lines=8";

#Future use
$XMLService = $XMLService."&style=1";

#Message at bottom of combo
#Set to nothing to remove
$XMLService = $XMLService."&text=Please%20Select%20Address";

#get XML
$DataToSend = file_get_contents($XMLService);

#return XML
echo $DataToSend;

?>