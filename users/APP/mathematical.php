


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="test drm.php" method="post" name="form1" id="form1">
  Enter first number 
  <label>
  <input name="number1" type="text" id="number1" />
  </label>
  <p>Enter second number  
    <label>
    <input name="number2" type="text" id="number2" />
    </label>
  </p>
  <p>&nbsp;</p>
  <p>Choose Operation</p>
  <p>
  <label>
  <input name="op" type="radio" value="add" checked="checked" />
  </label>
  Addition</p>
  <p>
     <label>
     <input name="op" type="radio" value="sub" />
     </label>
    Subtraction </p>
  <p>
    <label>
    <input name="op" type="radio" value="mul" />
    </label>
  Multiplicationm</p>
  <p>
    <label>
    <input name="op" type="radio" value="div" />
    </label>
  Division</p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
  </p>
  <p>&nbsp; </p>
  
  <?php
   if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
    // Clean all the fields
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
	
  if (isset($_POST['Submit'])) {
$op = $_POST['op'];


print $op; print "&nbsp;&nbsp;";
}
  //if(isset($op)) {
//$op = ''; 
//if(!$op){
if ( $op == "add" ) {
  echo "$number1 + $number2 = "; print "&nbsp;&nbsp;"; 
  echo $number1 + $number2;
}

if ( $op == "sub" ) {
  echo "$number1 - $number2 = ";
  echo $number1 - $number2;
}

if ( $op == "mul" ) {
  print  "<table><tr><td> $number1 * $number2 =
  echo $number1 * $number2;
  </td></tr></table> ";
}

if ( $op == "div" ) {
  echo "$number1 / $number2 = ";
  echo $number1 / $number2;
}

}

?>
</form>






<p>&nbsp;</p>
</body>
</html>
