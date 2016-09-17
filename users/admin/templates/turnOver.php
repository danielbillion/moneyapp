<?php include 'includes/header.php' ?>

	<!--- Col-md-9-->
	<div class="col-md-9">
	
		<section id="turnover">
				<div class="panel panel-default">
			<div class="panel-heading">
				<h2> TURN OVER</h2>
			</div>
			
			<div class="panel-body">
				<?php include ('includes/navAC.php'); ?>			
				
		</div>
			
			<table id="sort-table" class="table table-striped table-bordered tablesorter">
				<thead>
					<tr>
								<th>Year </th>
								<th>Month <i class=""></i></th>
								<th>No Trans</th>
								<th>Total Sent &pound; <i class=""></i></th>
								<th>C_B</th>
								<th>C-ag</th>
								<th>Total Col</th>	
					</tr>
				</thead>
				
				
					<tbody>
										<?php foreach($result as $result): ?>
									<tr>
										<td> <?php echo $result->year ; ?></td>
										
										<td> <?php 
										$dateObj= DateTime::createFromFormat('!m', $result->month);
													$monthName = $dateObj->format('F'); 
										echo $monthName; ?></td>
										<td> <?php echo $result->counted ; ?></td>
										<td> <?php echo number_format(($result->amtsend),2) ; ?></td>
										<td> <?php echo number_format(( $result->coma),2) ; ?></td>
										<td> <?php echo number_format(( $result->comd),2) ; ?></td>
										<td> <?php echo number_format(($result->total_amount),2) ; ?></td>
									</tr>
								</tbody>
									<?php endforeach; ?>
			</table>
			
		</div>
		</section>
		
		
	</div>


<?php include 'includes/footer.php' ?>


