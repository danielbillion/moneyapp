
<?php include('includes/header.php'); ?>
			
			
			 
			
		
		
		
          <div class="col-md-9">
		  
			<div class="row">
					<div class="col-md-7">
								<ol class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Search</li>
								</ol>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					   <section id="search">
					   
						   <div class="jumbotron">
							
						  <form name="search" method="POST" class="form-group" action="#">
							  <h4 style="color:#191970;">Search Transaction By: <small style="font-weight:bold;color:red;">Please choose</small></h4></br>
									
									 <input class="form-control" name="value" type="text" placeholder="Tranfer code / Phone No / Sender First Name or Last Name"  id="value" >
									</br>
							  <div class="form-group form-inline">
									
									<div class="">
									<label class="radio-inline">
									  <input type="radio" name="queryTable" id="today" value="today"> Today
									</label>
									<label class="radio-inline">
									  <input type="radio" name="queryTable" id="transferCode" value="transferCode"> Transfer Code
									</label>
									<label class="radio-inline">
									  <input type="radio" name="queryTable" id="cFristLastname" value="cFristLastname"> Sender First or Last Name
									</label>
									
									<label class="radio-inline">
									  <input type="radio" name="queryTable" id="phoneNo" value="phoneNo"> Phone No
									</label>
									</br></br>	
									
									<label class="">	
									  <input type="radio" name="queryTable"  value="date" maxlength="20"> Date
									</label>
									
									
									<div class="form-group input-group">
									 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input name="date1" type="text" placeholder="Date From" class="form-control"  id="date1" >
									</div>
									<div class="form-group input-group">
									 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input name="date2" type="text" placeholder="Date To" class="form-control"  id="date2" >
									</div><br></br>
								</div>
							  <p><input name="Submit" value="Submit" type="submit" id="Submit" class="btn btn-primary btn-lg pull-right"  ></p>
							</form>
						</div>
							</div>
					  </section>
					</div>
				</div>
						<span style="float:right;"><?php echo $pages; ?>
								 <?php echo $items; ?></span>
								
								<nav style="float:right;">
								 <ul class="pagination">
								<?php echo $pagin;?>
								</ul>
								</nav>
					
					
						
						<div class="row">
							<div class="col-md-9">
				   
						
					   <table id="sort-table" class="table table-striped table-bordered tablesorter">
						  <thead>
						  <tr>
						<th>No </th>
						<th>Date <i class="glyphicon glyphicon-chevron-down"></i></th>
						<th>Tcode  </th>
						<th>Sender <i class="glyphicon glyphicon-chevron-down"></i></th>
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
						 <?php $x=0; 
						 $tamt_send=0;$tamt_local=0;$tcom_a=0;$tcom_d=0; $tTotal=0;
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
							<td><a href="receipt.php?transId=<?php echo urlFormat($result->id); ?>" class="btn btn-info btn-lg"><i class="fa fa-print" aria-hidden="true"></i><?php  echo " Receipt";?></a></td>		
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

   
  </body>
</html>
 <?php include('includes/footer.php'); ?>