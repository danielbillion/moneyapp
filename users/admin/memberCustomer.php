<?php 
require_once('../config/init.php');
$template=new Template('templates/memberCustomer.php');
$user=new User;
//finding result of member customers from the database
$id=isset($_GET['Id'])?$_GET['Id']:"";

$tablep="SELECT * FROM agent_new_customer WHERE agid=$id";

//table pagination requires $table query from above	
$pages = new Paginator($tablep,9,array(15,3,6,9,12,25,50,100,250,'All'));
		$start=$pages->limit_start;
		$end=$pages->limit_end;
//ends here
$table="$tablep ORDER BY fname DESC LIMIT $start,$end";
$template->dataResult=$user->memberCustomer($table);

//pagination value for the template/view
$template->pagin= $pages->display_pages();														//quick menu
$template->pages=$pages->display_jump_menu(); 
$template->items=$pages->display_items_per_page();	//quick menu
		
echo $template;

?>