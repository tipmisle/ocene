<?php include 'header.php' ?>
<?php include 'menu.php' ?>
<div class="container">
	<div class="row">
		<?php 


		$sql="DELETE FROM frend WHERE npa=('$_POST[ocenaa]') ORDER BY id LIMIT 1";


		if (!mysqli_query($link,$sql))
		  {
		  die('Error: ' . mysqli_error($link));
		  }

		  	
		  	echo "<h3>Ocena odstranjena</h3>";
		  	echo "<meta HTTP-EQUIV='REFRESH' content='0; url=/ocene/index.php'>";


		mysqli_close($link);


		 ?>
	</div>
</div>