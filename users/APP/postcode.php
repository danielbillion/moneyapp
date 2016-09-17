<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head><form action="" method="post" name="form1" id="form1">

<body> 







<?php
						
						//include $_SERVER['http://ws1.postcodesoftware.co.uk/lookup.asmx/getAddress?account='] . '/includes/header.php';
						
		// <input type=submit value="Lookup Address" onClick= "javascript:SPLGetAddressData(document.getElementById('postcode').value)">
	
	if (isset($_POST['postcode']))
	{
	
		$account = "1733"; // Insert your account name here
		$password = "puvuny60"; // Insert your password here
		
		// include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
		
		
		$URL = "http://ws1.postcodesoftware.co.uk/lookup.asmx/getAddress?account=" . $account . "&password=" . $password . "&postcode=" . $_POST[		"postcode"];
	
	
		$xml = simplexml_load_file(str_replace(' ','', $URL)); // Removes unnecessary spaces
		
		If ($xml->ErrorNumber <> 0) // If an error has occured show message
		{
			print "<span class=\"text\">" . $xml->ErrorMessage . "</span>";
			echo "<p><span class=\"h3\">Postcode&nbsp;</span> <input class=\"text\" name=\"postcode\" type=\"text\">\n";
		echo "<input class=\"submit\" id=\"Postcode Search\" type=\"submit\" value=\"Postcode Search\">\n";
		}
		else
		{
	
			$chunks = spliti (";", $xml->PremiseData); // Splits up premise data
			
			print "<table>\n<tr>\n<td class=\"h3\">Address</td>\n<td>\n<select class=\"text\" name=\"address\" style=\"width:300px\">\n";
			foreach ($chunks as $v)
			
			{
				
				if ($v <> "")
				
				{
					list($organisation, $building , $number) = split('[|]', $v); // Splits premises into organisation, building and number
					echo "<option value=\"$Town\">";
					if ($organisation <> "")echo $organisation . ", ";
					if ($building <> "")echo str_replace("/",", ",$building) . ", ";
					if ($number <> "")echo $number . " ";
					print $xml->Address1;
					print "</option>\n";		
				}
			
			}
			
			print "</select>\n</td>\n</tr>";
			
			If ($xml->Address2<> "") 
			{
				echo "<tr>\n";
				echo "<td></td><td><input class=\"text\" style=\"width:300px\" type=\"text\" value=\"$xml->Address2\"></td>\n";
				echo "</tr>\n";
			}
			
			If ($xml->Address3 <> "") 
			{
				echo "<tr>\n";
				echo "<td></td><td><input class=\"text\" style=\"width:300px\" type=\"text\" value=\"$xml->Address3\"></td>\n";
				echo "</tr>\n";
			}
			If ($xml->Address4 <> "") 
			{
				echo "<tr>\n";
				echo "<td></td><td><input class=\"text\" style=\"width:300px\" type=\"text\" value=\"$xml->Address4\"></td>\n";
				echo "</tr>\n";
			}
			
			echo "<tr>\n";
			echo "<td class=\"h3\">Town</td><td><input class=\"text\" style=\"width:300px\" type=\"text\" value=\"$xml->Town\"></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class=\"h3\">County</td><td><input class=\"text\" style=\"width:300px\" type=\"text\" value=\"$xml->County\"></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td class=\"h3\">Postcode</td><td><input class=\"text\" name=\"postcode\" style=\"width:250px\" type=\"text\" value=\"$xml->				Postcode\">&nbsp;<input class=\"submit\"  id=\"Postcode Search\" type=\"submit\" value=\"Postcode Search\"></td>\n";
			echo "</tr>\n";
			echo "</table>";
			
			//$_SESSION['er']=$er;			  
			//$_SESSION['s_title']=$_POST['s_title'];
			
			$mystreet= $xml->Address1;
					echo "$mystreet";
					//echo "</option value>\n";
					
			
			
			
		}		
		
	
	}
	else // If postcode has not been entered
	{
		
		echo "<span class=\"h3\">&nbsp;</span> <input class=\"text\" name=\"postcode\" type=\"text\">\n";
		echo "<input class=\"submit\" id=\"Postcode Search\" type=\"submit\" value=\"Postcode Search\">\n";
	}

?>
</form>
</body>
</body>
</html>
