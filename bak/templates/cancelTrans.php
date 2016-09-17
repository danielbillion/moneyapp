
<?php include('includes/header.php'); ?>
			
				
					 
			

          <div class="col-md-9">
			  <div class="row">
			  
			  
					<div class="col-md-4">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"> Cancelled Transaction</li>
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
							   <table id="sort-table" class="table table-striped tablesorter">
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
								</tr>
								<thead>
								<tbody>
								 <?php $x=0; foreach($trans_result as $result): ?>
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
									
									
									<?php // Edit Option  start here ********************************************************* ?>
									<td> <a href="editTrans.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-warning">Edit</a></td>
								
											
									
								  </tr>
								  <?php endforeach; ?>
								  </tbody>
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
