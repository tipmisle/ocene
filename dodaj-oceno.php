 <?php include 'includes/header.php'; ?>


<div class="container main">
	<div class="row">
		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			$predmeti = ['slo', 'mat', 'nubp', 'vos', 'npa', 'msa', 'soc', 'anj', 'oos', 'fiz', 'sap', 'npap'];
			echo '<div class="col-lg-6 dodaj-oceno">';
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1">';
			echo '<img class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-8 ime"><h2>' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</h2></div>';
			echo '</div>';
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
					<input type="hidden" name="uporabnik" value="' . $uporabnik['id'] . '">
					<button type="submit" class="btn btn-primary">Dodaj</button>
			 	</form>
			 ';
			 echo '<div class="pull-left col-lg-3 dosedanje">';
			 echo "<b>Dosedanje ocene</b>";
			 echo "<ul>";
			 $ocene = mysqli_query($con, "SELECT * FROM ocene WHERE predmet='". $imepredmeta ."' AND uporabnik_id='". $uporabnik['id'] . "'");
				while ($ocena = mysqli_fetch_assoc($ocene)) {
					echo "<li>" . $ocena['ocena'] . ", </li>";
				}
			echo "</ul>";

			 echo "</div>";
			 echo "</div>";
			}
			echo '</div>';
		}
		 ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>