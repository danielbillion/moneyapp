<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">
        label
        {
            width: 4em;
            float: left;
            text-align: right;
            margin-right: 0.5em;
            display: block;
        }
        
        .submit input
        {
            margin-left: 4.5em;
        }
    </style>
    <title>teachmephp</title>
</head>
<body>

 <?php

// Make sure the form was submitted
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    // Clean all the fields
    $doornumber = clean($_POST['doornumber'],true);
    $address = clean($_POST['address'],true);
    $postcode = clean($_POST['postcode'],true);
    $date = clean($_POST['date'],true);
    
    // Build our query
    $query = mysql_query("INSERT INTO `address` (`doornumber`,`streetname`,`postcode`,`date`) VALUES ('{$doornumber}','{$address}','{$postcode}','{$date}')");
    if( !$query )
    {
        trigger_error('MySQL Error: '.mysql_error(),E_USER_ERROR);
    }
    
    echo 'Thanks! Your house was submitted!';
}

// Generic clean function - ALWAYS filter user input,
// especially for database storage
function clean($data,$db = false)
{
    if( $db == true )
    {
        return clean(mysql_escape_string($data));
    }
    else
    {
        return trim(stripslashes(strip_tags($data)));
    }
}

?>

 <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
    <p>
        <label for="doornumber">Door number:</label><input type="text" name="doornumber" id="doornumber" />
    </p>
    <p>
        <label for="address">Address:</label><input type="text" name="address" id="address" />
    </p>
    <p>
        <label for="postcode">Post Code:</label><input type="text" name="postcode" id="postcode" />
    </p>
    <p>
        <label for="date">Date:</label><input type="text" name="date" id="date" />
    </p>
    <p class="submit">
        <input type="submit" value="Add House" />
    </p>
</form>

</body>
</html>