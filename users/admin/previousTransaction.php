<?php 
require_once('../config/init.php');
$template=new Template('templates/previousTransaction.php');
$user=new User;
$transaction=new Transaction;

//navigation either for agent,customer,agent customer
	
//select table-shorthand if for  either a,c,ac 
		$table = isset($_GET['type'])?($_GET['type']=='a'?'agent_cust_transaction':'cust_transaction'):"agent_cust_transaction";	
	

//payment/delete
		if(isset($_POST['Pay'])){
			$required=array();
			$Pay=$_POST['tid'];
			$value="transId=".$Pay;
			$_SESSION['pay']=$Pay;
		redirectValue('payStatus.php','Transaction Amendmnet','success',$value);
						
		}
	
	
// user_id is set
//post
		if(isset($_POST['submit'])){
			$required=array();
			$required['option']=$_POST['option'];
			$required['date1']=$_POST['date1'];
			$required['date2']=$_POST['date2'];
			$required['entry']=$_POST['entry'];							
		}
	if(isset($_GET['Id'])){
		$typeField = $table== 'agent_cust_transaction' ? 'agid' : 'cid';
//post on GET
			if(isset($_POST['submit'])){
				$queryReturn=$transaction->searchOption($required);
				
				$field=$queryReturn['field'];
				$value=$queryReturn['value'];
				$relation=$queryReturn['relation'];
				
				$table=$table." WHERE ".$field.$relation.$value." && ".$typeField."=".$_GET['Id'];
			}
	//get with get options
			else{
				$opValue=isset($_GET['opType'])?trim($_GET['opType']):"";
				$op=($opValue!=="")?"&& status="."'".$opValue."'":"";
				$table=$table.' WHERE '.$typeField."=".$_GET['Id'].$op ;
			}
	}
	else{
		if(isset($_POST['submit'])){
				$queryReturn=$transaction->searchOption($required);
				$table=$table.'WHERE '.$queryReturn;
		}
		
		else{
			$table=$table;
		}
	}
	

//table pagination requires $table query from above	
$page_table="SELECT * FROM $table";	
$pages = new Paginator($page_table,9,array(15,3,6,9,12,25,50,100,250,'All'));
		$start=$pages->limit_start;
		$end=$pages->limit_end;
//ends here


		
$table=$table;
//fetch table result for view		
$table_query="SELECT * FROM $table  ORDER BY date DESC LIMIT $start,$end";
$template->dataResult=$transaction->transaction($table_query);

//pagination value for the template/view
$template->pagin= $pages->display_pages();														//quick menu
$template->pages=$pages->display_jump_menu(); 
$template->items=$pages->display_items_per_page();	//quick menu
		
echo $template;


?>