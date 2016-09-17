
		</div> <!--end row--------->
		
	
	
	</div><!--end container--------->
	
	<footer>
      <p>&copy;Copyright <?php echo date('Y'); ?>, All Rights Reserved <a href="http://www.computing24x7.co.uk">COMPUTING24X7 LTD</a></p>
    </footer>
	
	</section><!--end section--------->
	
	<script src="js/jquery.tablesorter.js"></script>
	  <script>
    $(function(){
      $('#sort-table').tablesorter({
        sortList:[[0,0], [1,0]]
      });
    });
    </script>

   <script>
      var $rows = $('table tr');
      $('.search-form').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function() {
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          return !~text.indexOf(val);
        }).hide();
      });
    </script>
	
	<script>
	$('#example').popover(options)
	</script>
	
		<!------------------Table Formatting---------------------------------------------->
	 <script>
	$(document).ready(function()
	{
	$("tr:odd").css({"background-color": "#ebfafa","color": "#000000"});
	$("tr:even").css({"background-color": "#ffcccc","color": "#000000"});
});
	 </script>
		  