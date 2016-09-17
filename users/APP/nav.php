
<div align="center">
  <table width="660" border="1" cellspacing="0" cellpadding="0">
    <tr style="font-weight: bold; color: #00F;">
     
     
     <?php
	 
	 $rs_result = mysql_query($sql);
		$row = mysql_fetch_row($rs_result);
		$total_records = $row[0];
		$total_pages = ceil($total_records / $nr);
		
		
		
		if (!isset($_GET['page'])){$_GET['page']=1;}
		 echo "<td width='163'>Page $_GET[page]  of $total_pages  </td>";
		 
		if (isset($_GET['page']) && $_GET['page'] >=2 ){ $np =$_GET['page']; $pp=$np - 1 ;	$np=$np +1 ;
		  echo "<td  style='color:#0000' width='100'> <a href='$fl?page=1 '>&lt;&lt;First Page</a></td>";
		  echo "<td width='91'><a href='$fl?page=".$pp." '>&lt; Previous</a></td>";
	  }
	  
	  
	   else {$np=2; }
	   
	     if ( $_GET['page'] < $total_pages ){
			 
      echo "<td width='62'><a href='$fl?page=".$np." '>Next &gt;</a> </td>";}
	
			 if ( $_GET['page'] <=$total_pages ){
      echo "<td width='170'> <a href='$fl?page=".$total_pages ." '>Last Page&gt;&gt;</a> </td>";}
     
     
	 ?>
      </tr>
    </table>
</div>
