$(document).ready(function(){
	//Show loader image
	
	
	
	
	//Delete Contact
	$(document).on('submit','#deleteContact', function(){
	
		
		
		//Post data from form
		$.post("delete_contact.php", $(this).serialize())
			.done(function(data){
				console.log(data);			
				Show_homepage();
			});
			return false;
	});
	
});

function Show_homepage(){
	console.log('Showing Contacts...');
	setTimeout("$('.tableview').load('inbox.php',function(){})",1);
}