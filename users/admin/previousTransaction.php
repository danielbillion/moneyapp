<?php 
require_once('../config/init.php');
$template=new Template('templates/previousTransaction.php');
$user=new User;
$transaction=new Transaction;

//navigation either for agent,customer,agent customer
	if(isset($_GET['type'])){
		$type=$_GET['type'];
//select table-shorthand if for  either a,c,ac 
		$table = $_GET['type'] == 'a' ? 'agent_cust_transaction' : 'cust_transaction';
	
	}else{
		$table='agent_cust_transaction';		
	}
// ends here

//table pagination requires $table query from above	
$page_table="SELECT * FROM $table";	
$pages = new Paginator($page_table,9,array(15,3,6,9,12,25,50,100,250,'All'));
		$start=$pages->limit_start;
		$end=$pages->limit_end;
//ends here


//fetch table result for view		
$table_query="SELECT t.*, (SELECT SUM(total) FROM $table) as totalValue FROM $table t ORDER BY date DESC LIMIT $start,$end";
$template->dataResult=$transaction->transaction($table_query);

//pagination value for the template/view
$template->pagin= $pages->display_pages();														//quick menu
$template->pages=$pages->display_jump_menu(); 
$template->items=$pages->display_items_per_page();	//quick menu
		
echo $template;


?>