<?php include ('includes/header.php');?>

<div class="col-md-9">

	<div class="row"><br>
		<div class="well well-lg">
			<?php  $avater="noavatar.jpg"; foreach($dataResult as $result): ?>
			<div class="row">
				<div class="col-md-5">
					<img src="<?php echo BASE_URI; ?>img/agent/photo/<?php  echo $result->myPhoto_name!==NULL?$result->myPhoto_name:$avater;?>" width="120" height="120" alt="..." class="img-thumbnail">
					<h7>Status:<?php  echo $result->active==1?"Active":"Suspended";?></h7>
					<h7>Type:Agent</h7>
				</div>	
				<div class="col-md-7	">
					<div class="row">
						
						<div class="col-md-8">
							<h6> <?php echo strtoupper($result->fname)." ".  strtoupper($result->mname)." ".  strtoupper($result->lname);?></h6>
							<h7><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo ($result->email);?> </h7>
							<h7><i class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo ($result->dob);?> </h7>
							<h7><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; &nbsp;<?php echo ($result->pnumber); echo ", ".($result->mnumber);?></h7>
							<h7><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;  <?php echo ($result->address);?></h7>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
<!--Transactions--->
		<h3>Transaction</h3>
		<div class="well">
			<div class="row">
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><?php echo $result->countId; ?></h7>
						<div class="image">
							<strong>Customers</strong>:<i class="fa fa-users fa-2x" aria-hidden="true"></i>
						</div>
						<a href="memberCustomer.php?Id=<?php echo $result->id; ?>" class="btn btn-primary btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><?php echo $result->totalTrans; ?></h7>
						<div class="image">
							<strong>Transactions</strong>:<i class="fa fa-money fa-2x" aria-hidden="true"></i>
						</div>
						<a href="previousTransaction.php?Id=<?php echo $result->id; ?>" class="btn btn-info btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><?php echo $result->transPending. "/"."&#8358;". number_format($result->localPending,2) ; ?></h7>
						<div class="image">
							<strong>Pending Transactions</strong>:<i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
						</div>
						<a href="previousTransaction.php?opType=Pending && Id=<?php echo $result->id; ?>" class="btn btn-danger btn-lg ">View</a>
					</div>
				</div>
			</div>
		</div>
		
<!--Pay it, Commission, %commision--->
		<h3>Commissions</h3>
		<div class="well">
			<div class="row">
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><?php echo $result->payCom; ?></h7>
						<div class="image">
							<strong>Pay Commission</strong>:<i class="fa fa-money fa-2x" aria-hidden="true"></i>
						</div>
						<a href="" class="btn btn-primary btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-sort-amount-asc fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>Manage Commission/Rates</strong>
						</div>
						<a href="" class="btn btn-info btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><?php echo $result->coma==""?"Default":$result->coma."/".$result->comb;  ?></h7>
						<div class="image">
							<strong>Commission Split</strong>:<i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
						</div>
						<a href="" class="btn btn-danger btn-lg ">View</a>
					</div>
				</div>
			</div>
		</div>
		
<!--General-Delete/status/Edit--->
		<h3>Delete / Status / Edit</h3>
		<div class="well">
			<div class="row">
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><h7>Status:<?php  echo $result->active==1?"Active":"Suspended";?></h7></h7>
						<div class="image">
							<strong>Change Status </strong>:<i class="fa fa-power-off fa-2x" aria-hidden="true"></i>
						</div>
						<a href="" class="btn btn-primary btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-trash fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>Delete</strong>
						</div>
						<a href="" class="btn btn-info btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>Modify</strong>
						</div>
						<a href="" class="btn btn-danger btn-lg ">View</a>
					</div>
				</div>
			</div>
		</div>
		
<!--Other=View Activites, Monthly Turn Over--->
		<h3>Activites & Monthly Turn-Over</h3>
		<div class="well">
			<div class="row">
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-tasks fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>View Activities</strong>
						</div>
						<a href="" class="btn btn-primary btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-calendar fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>Montkly Turn-Over</strong>
						</div>
						<a href="" class="btn btn-info btn-lg">View</a>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="memberProfile">
						<h7><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></h7>
						<div class="image">
							<strong>Send Email</strong>
						</div>
						<a href="" class="btn btn-danger btn-lg ">View</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endforeach; ?>