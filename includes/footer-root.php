	<div class="container">
		<div class="row">
			<footer>
					<p>Copyrights by Miha Vidakovič</p>
			</footer>
		</div>
	</div>

	<script src="includes/js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="includes/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script src='includes/js/nprogress.js'></script>
	<script type="text/javascript" charset="utf-8">
NProgress.start();
NProgress.set(0.4);
//Increment 
var interval = setInterval(function() { NProgress.inc(); }, 1000);
$(document).ready(function(){
    NProgress.done();
    clearInterval(interval);
});

	</script>

</body>
</html>