
<?php include('includes/header.php'); ?>
			
				
					 
			

          <div class="col-md-9">
			  <div class="row">
			  
			  
					<div class="col-md-4">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"> Previous Transaction</li>
						</ol>
					</div>
					
					<div class="col-md-5">
						<?php echo $pages; ?>
								 <?php echo $items; ?>
					</div>
					
					
				</div>
			  <div class="row">
						<div class="col-md-9">
								<nav>
								 <ul class="pagination">
								<?php echo $pagin;?>
								</ul>
								</nav>
						</div>
				</div>
			<div class="row">
					<div class="col-md-9">
							   <table id="sort-table" class="table table-striped table-bordered tablesorter">
								  <thead>
								  <tr>
								<th>No </th>
								<th>Date <i class=""></i></th>
								<th>Tcode  </th>
								<th>Sender <i class=""></i></th>
								<th>Receiver </th>
								<th>Amt</th>
								<th>Local Pay</th>
								<th>C_B</th>
								<th>C-ag</th>
								<th>Total</th>
								<th>Status</th>
								<th>--</th>
								<th>--</th>
								</tr>
								<thead>
								<tbody>
								
								 <?php $x=0;$tamt_send=0;$tamt_local=0;$tcom_a=0;$tcom_d=0; $tTotal=0;
								 foreach($trans_result as $result): ?>
								<tr>
									<td><?php  echo $x=$x+1;?></td>
									<td><?php  echo $result->date;?></td>
									<td><?php  echo firstCap($result->receiptno);?></td>
									<td><?php  echo firstCap($result->sender_name);?></td>
									<td><?php  echo firstCap($result->r_name);?></td>
									<td><?php  echo number_format($result->amt_send, 2);?></td>
									<td><?php  echo number_format($result->amt_local, 2);?></td>
									<td><?php  echo number_format($result->com_a,2);?></td>
									<td><?php  echo number_format($result->com_d,2);?></td>
									<td><?php  echo number_format($result->total,2);?></td>
									<td><?php  echo $result->status;?></td>
									<!---Sum Here----->
									<?php
										$tamt_send=$tamt_send + $result->amt_send;
										$tamt_local=$tamt_local+ $result->amt_local;
										$tcom_a=$tcom_a + $result->com_a;
										$tcom_d=$tcom_d + $result->com_d;
										$tTotal=$tTotal + $result->total;
										
									?>
									
									<?php // Edit Option  start here ********************************************************* ?>
									<td> <a href="editTrans.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-warning">Edit</a></td>
								
									<td><a href="receipt.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-info btn-lg"><i class="fa fa-print" aria-hidden="true"></i><?php  echo " Receipt";?></a></td>		
									
								  </tr>

								  
								  <?php endforeach; ?>

								  </tbody>
								  <tr>
										<td colspan="5"><strong>Total</td>
											<td><strong>&pound;<?php echo number_format($tamt_send,2); ?></strong></td>
											<td><strong>&#8358;<?php echo number_format($tamt_local,2); ?></strong></td>
											<td><strong>&pound;<?php echo number_format($tcom_a,2); ?></strong></td>
											<td><strong>&pound;<?php echo number_format($tcom_d,2); ?></strong></td>
											<td><strong>&pound;<?php echo number_format($tTotal,2); ?></strong></td>
										</strong>
								  </tr>
								</table>
								
								
								
							<?php // Pagination start here ********************************************************* ?>
								 <div style="text-align:center;"><?php echo $pages; ?>
								 <?php echo $items; ?></div>
								
								<nav style="text-align:center;">
								 <ul class="pagination">
								<?php echo $pagin;?>
								</ul>
								</nav>
							<hr>

							  
							  </div>
					</div>
				</div>
        </div>
      </div>

    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
