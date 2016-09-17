<footer>
      <p>Copyright 2016, All Rights Reserved</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
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
	
		  
	
	