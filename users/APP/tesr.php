<?php 
require_once('calendar/classes/tc_calendar.php');
?><script language="javascript" src="calendar/calendar.js"></script>



<form id="form1" name="form1" method="post" action="">
  <label>
  <input type="submit" name="Submit" value="Submit" />
  </label>
</form>
 <?php
				//if( $_SERVER['REQUEST_METHOD'] == 'POST' 
				
				 $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));$myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1912, 2010); $myCalendar->dateAllow('1912-01-01', '2010-03-01'); $myCalendar->writeScript(); 
						//$dob = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : ""; 	
													 {$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";}

								
								if (isset($_POST['Submit'])){
								
								 
								 echo $theDate ;}
								 ?>