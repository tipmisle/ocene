<?php include 'header.php' ?>
<?php include 'menu.php' ?>
<div class="container">
	<div class="row">
		<?php 


		$sql="INSERT INTO `frend`(`npa`) VALUES('$_POST[ocenaa]')";

		if (('$_POST[ocenaa]')=="") {
			echo "hehehehe";
		}

		if (!mysqli_query($link,$sql))
		  {
		  die('Error: ' . mysqli_error($link));
		  }

			$ocena = $_POST['ocenaa'];  
			if ($ocena == "1") {          
			    echo '<h3>Ocena dodana! :/</h3>';      
			}
			else {
			    echo '<h3>Ocena dodana! :)))</h3>';
			} 
		  	
		  	echo "<meta HTTP-EQUIV='REFRESH' content='0; url=/ocene/frend-dodaj.php'>";

		mysqli_close($link);


		 ?>
	</div>
</div>