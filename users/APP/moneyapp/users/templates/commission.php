
<?php include('includes/header.php'); ?>
			
				
					 
			

          <div class="col-md-9">
			  <div class="row">
			  
			  
					<div class="col-md-4">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Commission</li>
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
					
						<div class="col-md-9 ">
							   <table id="sort-table" class="table table-striped tablesorter">
								  <thead>
								  <tr>
								<th>No </th>
								<th>Sender Name <i class="caret"></i></th>
								<th>Transactions</th>
								<th>Business Commission <i class="caret"></i></th>
								<th>Your Commission  </th>
								
								
								</tr>
								<thead>
								<tbody>
								 <?php $x=0; foreach($trans_result as $result): ?>
								<tr>
									<td><?php  echo $x=$x+1;?></td>
									<td><?php  echo firstCap($result->fname. " ". $result->lname);?></td>
									<td><a href="prevTrans.php?custId=<?php echo urlFormat($result->id); ?>" class="btn btn-primary"><?php  echo firstCap($result->countTrans);?></a></td>
									<td><?php  echo number_format(($result->totalCom_b),2);?></td>	
									<td><?php  echo number_format(($result->totalCom_a),2);?></td>	
															
									
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
