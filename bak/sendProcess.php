<?php
require "config/init.php";
		$template=new Template('templates/sendMoney.php');
		$trans= new Transaction;
		$template->rate=$trans->todaysrate();
		$senders=new Senders;
		$receivers=new Receiver;
		$sendMOney=new sendMoney;
		
			//populate result for receiver using ajax jquery
	if(isset($_POST['get_receiver'])){
		$value=$_POST['get_receiver'];
		$agid=getUser()['user_id'];
		$sReceivers=explode(' ',$value);
		//explode ajax return value into fname,middle & last name
			$fName=trim($sReceivers['0']);
			$mName=trim($sReceivers['2']);
			$lName=trim($sReceivers['1']);
			$receivers=$receivers->receiversAgentList($fName,$mName,$lName,$agid);
			
			echo "<option>".'Please Choose A Receiver'."</option><option>".'Setup Receiver'."</option>";
			foreach($receivers as $receivers){
				echo "<option>". $receivers->b_fname. " ".$receivers->b_lname."</option>";
			}
	}
	//insert  result into textbox based on result from the database for receiver using ajax jquery
	if(isset($_POST['recValue'])){
		$value=explode(' ',$_POST['recValue']);
		$arr = array();
		$arr['rFName'] = $value[0];
		$arr['rLName'] =$value[1];
		
		$rFName= $value[0];$rLName= $value[1];
		if(($arr['rFName']!=="Setup") )  {
			$reList=$receivers->relist($rFName,$rLName);
				foreach($reList as $reList){
					$arr['type']="";
					$arr['rPhone']=$reList->b_phone;
					$arr['rBank']=$reList->bank;
					$arr['rActno']=$reList->b_actno;
					$arr['tOption']="<option selected>".$reList->b_transfer."</option>";
					}
		}
			else{
				if(($value[0]=='Setup') ) {
						$arr['rFName'] = "";
						$arr['rLName'] ="";
						$arr['rPhone']="";
						$arr['rPhone']="";
						$arr['rBank']="";
						$arr['rActno']="";
						$arr['type']="Setup";
				$arr['tOption']="<option selected>".'Bank Account'."</option><option>".'Pick Up'."</option>";}
			}
		
		
		header('Content-Type: application/json');
			echo json_encode($arr);
			exit();
	}
	
	if(isset($_POST['exval'])){
		$value=$_POST['exval'];
		$myop=$_POST['myoption'];
		$result=array();
				if($myop=='pounds'){		//check for commission datatype:numeric or float
					$com=comValue($value)['val'];
						if(!is_float($com + 0)){
							$com=$com;
						}
						else{
							$com=$com * $value;	
						}
					$result['commission']=number_format($com,2);	
					$result['tAmount']=number_format(($value + $com),2);
					$result['lAmount']= number_format((todaysrate() * $value),2) ;
					$result['eRate']=number_format((todaysrate()),2);
				}
		
				else{
					$valPounds=$value/todaysrate();
					$com=comValue($valPounds)['val'];
						if(!is_float($com + 0)){
							$com=$com;
						}
						else{
							$com=$com * $value;	
						}
					
					$result['commission']=number_format($com,2);
					$result['tAmount']=number_format(($valPounds + $com),2);
					$result['lAmount']= number_format(($value),2) ;
					$result['eRate']=number_format((todaysrate()),2);
				}
			
		header("Content-Type:application/json");
		echo json_encode($result);
		
	}
	
	

?>