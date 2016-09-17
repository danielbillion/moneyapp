


<script>
function addLoadEvent(func) {  
      var oldonload = window.onload;  
      if (typeof window.onload != 'function') {  
        window.onload = func;  
      } else {  
        window.onload = function() {  
          if (oldonload) {  
            oldonload();  
          }  
          func();  
        }  
      }  
    }  

   addLoadEvent(function() {  
document.getElementById('lbltipAddedComment').innerHTML = 'your tip has been submitted!';

    });  
</script>

<label id="lbltipAddedComment">test</label>