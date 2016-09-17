	
<?php include 'includes/header.php'; ?>
	  

 
  <script>
  
	
	 function fetch_receiver(val){
		$.ajax({
			type:'post',
			url:'sendProcess.php',
			data:{
				get_receiver:val
			},	
			success:function(response){
				document.getElementById("receivers").innerHTML=response;
				//$("[name='receivers']").val('response');
				
			}
		}); 
	}
	
	
  
	 function Sreceiver(val_r){
		$.ajax({
    type: "POST",
    url: "sendProcess.php",
    data: 'recValue=' + val_r,
    dataType: "json", 
    success: function (data) {
        
		$('#rFName').val(data['rFName']);
		$('#rLName').val(data['rLName']);
		$('#rBank').val(data['rBank']);
		$('#rActno').val(data['rActno']);
		$('#rPhone').val(data['rPhone']);
		document.getElementById("tOption").innerHTML=data['tOption'];
		if(data['type']!=='Setup'){
		$("#rFName").attr("readonly","readonly");
		$("#rLName").attr("readonly","readonly");
		$("#rActno").attr("readonly","readonly");
		$("#rPhone").attr("readonly","readonly");
		$("#rBank").attr("readonly","readonly");
		$("#tOption").attr("readonly","readonly");
		}
		if(data['type']=='Setup'){
		$("#rFName").removeAttr("readonly");
		$("#rLName").removeAttr("readonly");
		$("#rActno").removeAttr("readonly");
		$("#rPhone").removeAttr("readonly");
		$("#rBank").removeAttr("readonly");
		$("#tOption").removeAttr("readonly");
		}
		
		
    }
});
	}
	
			
			function onld(){
				
				$("#commission").val(0);
				$("#tAmount").val(0);
				$("#lAmount").val(0);
				$("#eRate").val(0);
				
			}
	
	function findval(val){
		if(val.length==0){
			
			$("#commission").val(0);
				$("#tAmount").val(0);
				$("#lAmount").val(0);
				$("#eRate").val(0);
		}
		else{
			
	/*	
		$.post("sendProcess.php",{myoption:""+$("[name='option']:checked").val()+"",exval:""+val+""},function(data){
			console.log(data);
			$("#commission").val(data['commission']);
				$("#tAmount").val(data['tAmount']);
				$("#lAmount").val(data['lAmount']);
				$("#eRate").val(data['eRate']);
			
		}) 
		*/
			$.ajax({
			type:'post',
			url:'sendProcess.php',
			data:{
				myoption:""+$("[name='option']:checked").val()+"",exval:val
			},	
			 dataType: "json",
			success:function(data){
				console.log(data);
			$("#commission").val(data['commission']);
				$("#tAmount").val(data['tAmount']);
				$("#lAmount").val(data['lAmount']);
				$("#eRate").val(data['eRate']);
				
			}
			
		});
		
		
	}
}

	
	
  </script>

<body onload="onld();">
<div class="col-md-9">

	<div class="panel panel-default">
		<div class="panel-heading">
		<div id="output1"></div>
			<h4>Send Money<i class="glyphicon glyphicon-send"></i></h4>
		</div>
		<div class="panel-body">
			<form name="form" method="post" action="">
			<?php if(getUser()['type']=='agent'): ?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
						<label><span class="essential">*</span>Sender</label>
						<select name="senders"  id="senders" class="form-control" onchange="fetch_receiver(this.value);" placeholder="Senders" onclick="insert(this.value);" >
						
						<?php if(isset($senderName)){
							echo "<option selected >". $senderName."</option>";
							}
							?>
						<option >Please Select Sender</option>
						
						<?php foreach($senders as $senders):?>
						<option onclick="insert(this.value);"><?php echo $senders->fname." ".$senders->lname." ".$senders->mname;?>
						</option>
						<?php endforeach; ?>	
						</select>
						</div>
					</div>
					
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
						<label><span class="essential">*</span>Select Receiver</label>
						<select name="receivers" id="receivers" onchange="Sreceiver(this.value);" class="form-control" placeholder="Sender Name">
						<?php if(isset($receiverName)){ echo "<option selected>".$receiverName."</option>";} ?>
						
						<?php if(getUser()['type']=='customer'):?>
						<option >Setup Receiver / Please Select</option>
							<?php foreach($senders as $senders):?>
						<option><?php echo $senders->b_fname." ".$senders->b_lname ; ?></option>
						<?php endforeach; ?>
							
						<?php endif; ?>
						</select>
						</div>		
								
					</div>
				</div>
					<div class="well">
						<div class="row">
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>First Name</label>
								<input name="rFName" id="rFName" type="text" class="form-control" readonly
								value="<?php if(isset($rFName)){ echo $rFName; } ?>" placeholder="Sender Name">
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>Last Name</label>
								<input name="rLName" id="rLName" type="text" class="form-control" readonly  placeholder="Sender Name" 
								value="<?php if(isset($rLName)){ echo $rLName; } ?>" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>Receiver phone</label>
								<input name="rPhone" id="rPhone" type="text" class="form-control" readonly
								value="<?php if(isset($rPhone)){ echo $rPhone; } ?>" placeholder="Sender Name">
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>Transfer Option</label>
								<select id="tOption" name="tOption"  class="form-control" readonly placeholder="Transfer Option">
								<?php if(isset($tOption)){ echo "<option selected>".$tOption."</option>"; } ?>
								
								</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>Receiver Bank</label>
								<input name="rBank" id="rBank" type="text" readonly class="form-control" 
									value="<?php if(isset($rBank)){ echo $rBank; } ?>" placeholder="Sender Name">
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="form-group form-group-sm">
								<label>Receiver Acct No</label>
								<input id="rActno" name="rActno" type="text" readonly  class="form-control"
								value="<?php if(isset($rActno)){ echo $rActno; } ?>" placeholder="Sender Name">
								</div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-3">
						<div class="form-group">
						<label>Naira &#8358;</label>
						<input name="option" id="option" value="naira"  type="radio" >
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label>Pounds &pound;</label>
						<input name="option" id="option" value="pounds"  type="radio" checked >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="form-group form-group-sm">
						<label><span class="essential">*</span>Amount To Send</label>
						<input name="amount" id="amount" onKeyUp="findval(this.value);" type="text" class="form-control" placeholder="Enter Amount">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="form-group form-group-sm">
						<label>Commission</label>
						<input name="commission" id="commission" type="text" class="form-control" placeholder="Commission" readonly>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="form-group form-group-sm">
						<label>Total Amount</label>
						<input name="tAmount" id="tAmount" type="text" class="form-control" placeholder="Total Amount" readonly>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="form-group form-group-sm">
						<label>Amount To Collect</label>
						<input name="lAmount" id="lAmount"  type="text" class="form-control" placeholder="Amount To Collect" readonly>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="form-group form-group-sm">
						<label>Exchange Rate</label>
						<input name="eRate" id="eRate" type="text" class="form-control" placeholder="Exchange Rate" readonly>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-md-4 col-md-offset-5">
						<div class="form-group form-group-sm">
						
						<input name="submit" type="submit" class="btn btn-primary" >
						</div>
					</div>
				</div>
				
			</form>
		</div>
		
		</div>

	</div>

</div>
    <?php include('includes/footer.php'); ?>
  </body>
</html>
