<?php include 'includes/header.php'; ?>
<?php 


 ?>

	<div class="page-header">
		<h1>Changelog <small></small></h1>
	</div>
	<ul class="changelog">
		<?php 
			$query = mysqli_query($con, "SELECT * FROM changelog ORDER BY id DESC");
			while ($changelog = mysqli_fetch_assoc($query)) {
				echo '<li>';
				echo '<p><b>' . $changelog['datum'] .'</b></p>';
				echo $changelog['vsebina'];
				echo "</li>";
			}
		?>	
	</ul>


<?php include 'includes/footer.php'; ?>
