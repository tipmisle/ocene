 <?php include 'includes/header.php'; ?>


<div class="container main">
	<div class="row">
		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($row = mysqli_fetch_assoc($result)) {
			$predmeti = ['slo', 'mat', 'nubp', 'vos', 'npa', 'msa', 'soc', 'anj', 'oos', 'fiz', 'sap', 'npap'];
			echo '<div class="col-lg-6 dodaj-oceno">';
			echo $row['ime_priimek'];
			foreach($predmeti as $imepredmeta) {
				echo '<div class="dodaj">';
			 echo '
			 <div class="col-lg-12"><h3 class="naslov">' . $imepredmeta . '</h3></div>
			 	<form role="form" class="col-lg-8" method="get" action="dodajoceno.php?predmet="'. $imepredmeta .'">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-primary">
					    <input type="radio" name="ocena" value="1"> 1
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="ocena" value="2"> 2
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="ocena" value="3"> 3
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="ocena" value="4"> 4
					  </label>
					  <label class="btn btn-primary">
					    <input type="radio" name="ocena" value="5"> 5
					  </label>
					</div>
					<input type="hidden" name="predmet" value="'. $imepredmeta .'">
					<input type="hidden" name="uporabnik" value="1">
					<button type="submit" class="btn btn-primary">Dodaj</button>
			 	</form>
			 ';
			 echo '<div class="pull-left col-lg-3 dosedanje">';
			 echo "<b>Dosedanje ocene</b>";
			 $ocene = mysqli_query($con, "SELECT * FROM ocene WHERE predmet='". $imepredmeta ."'");
				while ($row = mysqli_fetch_assoc($ocene)) {
					echo "<ul>";
					echo "<li>" . $row['ocena'] . "</li>";
					echo "</ul>";
				}

			 echo "</div>";
			 echo "</div>";
			}
			echo '</div>';
		}
		 ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>