

<?php 
// Database variables
$host = "localhost"; //database location
$user = ""; //database username
$pass = ""; //database password
$db_name = ""; //database name

// PayPal settings
$paypal_email = 'user@domain.com';
$return_url = 'http://domain.com/payment-successful.html';
$cancel_url = 'http://domain.com/payment-cancelled.html';
$notify_url = 'http://domain.com/payments.php';

$item_name = 'Test Item';
$item_amount = 5.00;

// Include Functions
include("functions.php");

// Check if paypal request or response


if (!isset($_POST["txn_id"]) &amp;amp;amp;amp;amp;amp;&amp;amp;amp;amp;amp;amp; !isset($_POST["txn_type"])){
    $querystring = '';
 
    // Firstly Append paypal account to querystring
    $querystring .= "?business=".urlencode($paypal_email)."&amp;amp;amp;amp;amp;amp;";
 
    // Append amount&amp;amp;amp;amp;amp;amp; currency (£) to quersytring so it cannot be edited in html
 
    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
    $querystring .= "item_name=".urlencode($item_name)."&amp;amp;amp;amp;amp;amp;";
    $querystring .= "amount=".urlencode($item_amount)."&amp;amp;amp;amp;amp;amp;";
 
    //loop for posted values and append to querystring
    foreach($_POST as $key =&amp;amp;amp;amp;amp;gt; $value) {
        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&amp;amp;amp;amp;amp;amp;";
    }
 
    // Append paypal return addresses
    $querystring .= "return=".urlencode(stripslashes($return_url))."&amp;amp;amp;amp;amp;amp;";
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&amp;amp;amp;amp;amp;amp;";
    $querystring .= "notify_url=".urlencode($notify_url);
 
    // Append querystring with custom field
    //$querystring .= "&amp;amp;amp;amp;amp;amp;custom=".USERID;
 
    // Redirect to paypal IPN
    header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
    exit();
} else {
   // Response from PayPal
}


include "payment_response.php";

?>