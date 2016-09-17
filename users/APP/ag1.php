
   	  <form method="post" action="'.$_SERVER['PHP_SELF'].'">
  	  <input type="text" name="z1" size="5"> 
  	  <select name="act">
  	   <option value="add">[ + ]</option>

  	   <option value="sub">[ - ]</option>
  	   <option value="div">[ / ]</option>
  	   <option value="mul">[ * ]</option>
  	   <option value="pro">[ % ]</option>
  	  </select>
  	  <input type="text" name="z2" size="5"> 
  	  <input type="submit" name="doit" value="calculate">
  	 </form>
	 
	 
	 
	  <p>
	    <?PHP
  	 if(!$_POST['act'])
  	 {
  	  echo '
  	
  	 ';
  	 }else{
  	  if($_POST['act'] == 'add')
  	  {
  	   $calc = ($_POST['z1']+$_POST['z2']);
  	   $op = '+';
  	  }
  	  if($_POST['act'] == 'sub')
  	  {
  	   $calc = ($_POST['z1']-$_POST['z2']);
  	   $op = '-';
  	  }
  	  if($_POST['act'] == 'div')
  	  {
  	   $calc = ($_POST['z1']/$_POST['z2']);
  	   $op = '/';
  	  }
  	  if($_POST['act'] == 'mul')
  	  {
  	   $calc = ($_POST['z1']*$_POST['z2']);
  	   $op = '*';
  	  }
  	  if($_POST['act'] == 'pro')
  	  {
  	   $calc = (($_POST['z2']*$_POST['z1'])/100);
  	   $op = '% of';
  	  }
  	  echo $_POST['z1'].' '.$op.' '.$_POST['z2'].' = '.$calc;
  	 }
  	 ?>
</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  