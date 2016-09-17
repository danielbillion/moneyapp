
// JavaScript Document

function toggle_visibility(myV){

 if (myV == 1) {
               document.getElementById('showform').style.display = 'none';  
			   document.getElementById('showform2').style.display = 'block';
			     $("#BenPhoneID").jqTransform();
         } 
		 
		 else if (myV == 2){
               document.getElementById('showform').style.display = 'block';
			   document.getElementById('showform2').style.display = 'none';
         }
		 }

function toggle_visibility2(){

 if (document.getElementById('BenPhoneID').value == 'Other') {
               
			   document.getElementById('BenID2').style.display = 'block';
         } 
		 
		 else {
               
			   document.getElementById('BenID2').style.display = 'none';
         }
		 }

function isInt(myNum) {
         // get the modulus: if it's 0, then it's an integer
         var myMod = myNum % 1;

         if (myMod == 0) {
                 return true;
         } else {
                 return false;
         }
}

function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}