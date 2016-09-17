<?php //echo $upd; ?>
<?php //echo $dbf; ?>
<?php include('includes/header.php'); ?>
          <div class="col-md-9">
		  <section id="notice"><div class="well well-lg">
		  <i class="glyphicon glyphicon-dashboard"></i> 
		  <span class="label label-info pull-left">Last Login:12-03-2016 08:12</span>
		  <span class="label label-info pull-right">Bank Details</span>
		  </section>
           
            <h3>Latest Transactions</h3>
			
            <table class="table table-striped">
			<thead>
			<tr row="row">
			<th>No</th>
			<th>Tcode</th>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Local Pay</th>
			<th>C_B</th>
			<th>C-ag</th>
			<th>Total</th>
			<th>Status</th>
			</tr>
			<thead>
             <?php $x=0; foreach($trans_result as $result): ?>
				 
				 
			
			   <tr>
                <td><?php  echo $x=$x+1;?></td>
				<td><?php  echo firstCap($result->receiptno);?></td>
				<td><?php  echo firstCap($result->sender_name);?></td>
				<td><?php  echo firstCap($result->r_name);?></td>
				<td><?php  echo $result->amt_local;?></td>
				<td><?php  echo $result->com_a;?></td>
				<td><?php  echo $result->com_d;?></td>
				<td><?php  echo $result->total;?></td>
				<td><?php  echo $result->status;?></td>
                
              </tr>
			  <?php endforeach; ?>
             
             
            </table>
            <a class="btn btn-default" href="pages.html">View All Pages</a>
            <hr>

            <h3><?php if(getUser()['type']=='agent'){ echo "Latest Customers"; }
			
			else { echo "Latest Receiver";} ?></h3>
            <table class="table table-striped">
			<tr>
                <th><?php ?></th>
                <th>No</th>
                <th>Name</th>
				 <th>Mobile</th
              </tr>
			  <?php if(getUser()['type']=='agent'): ?>
			<?php $x=0; foreach($customers as $customer): ?>
              <tr>
                <td><?php echo $x=$x+1; ?></td>
                <td><?php echo firstCap($customer->fname). "-" . firstCap($customer->lname); ?></td>
               <td><?php echo $customer->mnumber; ?></td>
              </tr>
              <?php endforeach; ?>
              <?php endif; ?>
			  
			  
			  <?php if(getUser()['type']=='customer'): ?>
			<?php $x=0; foreach($customers as $customer): ?>
              <tr>
                <td><?php echo $x=$x+1; ?></td>
                <td><?php echo firstCap($customer->b_fname). "-" . firstCap($customer->b_lname); ?></td>
               <td><?php echo $customer->b_phone; ?></td>
              </tr>
              <?php endforeach; ?>
              <?php endif; ?>
            </table>
            <a class="btn btn-default" href="users.html">View All Users</a>
          </div>
        </div>
      </div>

    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
