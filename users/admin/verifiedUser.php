<?php
require_once( "/../config/init.php");
$user=new User;
$template=new Template('templates/verifiedUser.php');
$user=new User;

//here for navi either for agent,customer,agent customer
if(isset($_GET['type'])){
	$type=$_GET['type'];
	//shorthand if for selecting which table to use for either a,c,ac
	$table = ($_GET['type'] == 'ac' ? 'agent_new_customer' : ($_GET['type'] == 'a' ? 'agent' : 'new_customer'));
}else{
	$table='agent';		
}
//nav ends here

//table pagination requires $table query from above	
$page_table="SELECT * FROM $table";	
$pages = new Paginator($page_table,9,array(15,3,6,9,12,25,50,100,250,'All'));
		$start=$pages->limit_start;
		$end=$pages->limit_end;
//ends here
		
$table_query="SELECT proofid_size,proofad_size,id,fname,mname,lname FROM $table ORDER BY fname DESC LIMIT $start,$end";
$template->dataResult=$user->findIdStatus($table_query);

//pagination value for the template/view
$template->pagin= $pages->display_pages();														//quick menu
$template->pages=$pages->display_jump_menu(); 
$template->items=$pages->display_items_per_page();	//quick menu
		
		
echo $template;


?>