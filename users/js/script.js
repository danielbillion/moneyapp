$(document).ready(function(){
				
	
				
	// date picker section
				$('#pbank').hide(); //hide pick up bank on load as default
				$('#modeId').hide(); //hide id type option on load as default

				 $('#date1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				
				$('#date2').datepicker({
                    format: "yyyy-mm-dd"
                });   	
				  
				  
				$(function(){
				  $('#sort-table').tablesorter({
					sortList:[[0,0], [1,0]]
				  });
				});
	// Edit Transaction view and hide of Account no and idtype
			// start by hiding naira textbox
					 $('#transferMode').load(transferchoice);
				  $('#transferMode').on('change',transferchoice);
				  
				
				  
				 
});

								$.myload = function () {
									$("#output").load("se.php?value=" + this.value);
								}
								$('select[name=xxx]').on('change', $.myload);

				function transferchoice(){
				
				 
							  if ( this.value == 'Pick Up')
							  //.....................^.......
							  {
								$("#actno").hide();
								$("#modeId").show();
								$("#pbank").show();
								$("#abank").hide();
							  }
							 if ( this.value == 'Bank Account')
							  {
								$("#modeId").hide();
								$("#actno").show();
								$("#pbank").hide();
								$("#abank").show();
							  }
					
						}