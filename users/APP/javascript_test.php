<p>It's then up to the person who triggered the method whether to then   continue with the printing or not. That's good because I can see a ton   of problems with printers not being turned on and huge, huge files being   set to print.</p>
<p>So, how to you set up the code? Well, try this first and then look at the code</p>
<SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print" onClick="window.print()"></form>');
}
</script>