 
 <?php
require_once('calendar/classes/tc_calendar.php');
?>
 <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td nowrap>Date 2 :</td>
                  <td><script language="javascript">
						<!--
						function myChanged(v){
							alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
						}
						//-->
						</script>
                    <?php
					  $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(1960, 2015);
					  $myCalendar->dateAllow('2010-01-01', '2015-03-01');
					  //$myCalendar->setHeight(350);
					  //$myCalendar->autoSubmit(true, "form1");
					  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
					  $myCalendar->setOnChange("myChanged('test')");
					  //$myCalendar->rtl = true;
					  $myCalendar->writeScript();
					  ?></td>
                  <td><input type="button" name="button" id="button" value="Check the value" onClick="javascript:alert(this.form.date1.value);"></td>
                </tr>
              </table>