<?php include ('includes/header.php')?>
<div class="col-md-9">
<!---pagination header -->
			<?php include("includes/paging_header.php");?>
			
<!--Search Start here---->
			<div class="well well-default">
				<form name="form1" method="post" action="">
					<div class="row">
						<div class="col-md-10">
											<div class="row">
									<div class="col-md-9 ">
										<div class="form-group input-group">
											<span class="input-group-addon">Search BY</span>
											<input class="form-control" type="text" name="query" placeholder="Transfer code / Phone No / First Name, Last Name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">	
										<strong>
												<label class="radio-inline">
													<input type="radio" value="" ><strong>Today</strong>
												</label>
												
												<label class="radio-inline">
													<input type="radio" value="" ><strong>Transfer Code</strong>
												</label>				
												
												<label class="radio-inline">
													<input type="radio" value="" ><strong>First Name / Last Name</strong>
												</label>				
												
												<label class="radio-inline">
													<input type="radio" value="" ><strong>Phone No</strong>
												</label>
											</strong>
									</div>
								</div>
								<br/>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group input-group">
												<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> Date</span>
												<input class="form-control" type="text"  id="date1"  name="date1"  placeholder="FROM">
										</div>
									</div>
									
												<div class="col-md-5">
										<div class="form-group input-group">
												<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> Date</span>
												<input class="form-control" type="text"  id="date2"  name="date2" placeholder="TO">
										</div>
									</div>

									
								</div>
						</div>
						<div class="col-md-2"><br/><br/>
							<input type="submit" value="submit" class="btn btn-primary btn-lg">
						</div>
					</div>
				</form>
			</div>
<!--Search ends here---->

<!--Table Result---->
		<div class="row">
			
<!---member type navaigation -->	
				<?php include ('includes/navAC.php'); ?>
				
				
					<h3>Transactions</h3>
			
				
					<table id="sort-table" class="table table-striped table-bordered tablesorter">
						<thead>
							<tr>
								<th><strong>No</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Tcode</strong></th>
								<th><strong>Sender</th>
								<th><strong>Receiver</strong></th>
								<th><strong>Amt</strong></th>
								<th><strong>Local</strong></th>
								<th><strong>Total</strong></th>
								<th><strong>Status</strong></th>
								<th><strong>Receipt</strong></th>
								<th><strong>Edit</strong></th>
								<th><strong>Note</strong></th>
								<th><strong>Del</strong></th>
							</tr>
						</thead>
						<tbody>
							<?php $x=0; 
						 $tamt_send=0;$tamt_local=0;$tcom_a=0;$tcom_d=0; $tTotal=0;
						 foreach($dataResult as $result): ?>
						<tr>
							<td><?php  echo $x=$x+1;?></td>
							<td><?php  echo $result->date;?></td>
							<td><?php  echo firstCap($result->receiptno);?></td>
							<td><?php  echo firstCap($result->sender_name);?></td>
							<td><?php  echo firstCap($result->r_name);?></td>
							<td><?php  echo number_format($result->amt_send, 2);?></td>
							<td><?php  echo number_format($result->amt_local, 2);?></td>							
							<td><?php  echo number_format($result->total,2);?></td>
							<td><?php  echo $result->status;?></td>
							<td><a href="receipt.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i><?php  echo " Receipt";?></a></td>								
							<?php // Edit Option  start here ********************************************************* ?>
							<td> <a href="editTrans.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a></td>
							<td><a href="receipt.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-default"><i class="fa fa-bell" aria-hidden="true"></i>Note</a></td>
							
							<td><a href="receipt.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Del</a></td>
						
							<?php
										$tamt_send=$tamt_send + $result->amt_send;
										$tamt_local=$tamt_local+ $result->amt_local;										
										$tTotal=$tTotal + $result->total;										
							?>		
							
						  </tr>
						  <?php endforeach; ?>
						</tbody>
							<tr>
										<td colspan="5"><strong>Total</td>
											<td><strong>&pound;<?php echo number_format($tamt_send,2); ?></strong></td>
											<td><strong>&#8358;<?php echo number_format($tamt_local,2); ?></strong></td>											
											<td><strong>&pound;<?php echo number_format($tTotal,2); ?></strong></td>
										</strong>
							</tr>
					</table>
<!---pagination footer -->
				<?php include("includes/paging_footer.php");?>
				
			
		</div>
</div>

<?php include ('includes/footer.php') ?>