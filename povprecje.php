<?php include 'includes/header.php'; ?>
<?php 
	if (isset($_GET['dodana'])) {
		echo '
		<div class="alert alert-success uspesno-dodana animated">Ocena uspešno dodana!</div>
		';
	} else {
	}

 ?>


			<div class="page-header">
			  <h1>Povprečje <small>vseh ocen skupaj</small></h1>
			</div>

		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {


			echo '<div class="col-lg-6">';
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1 slika">';
			echo '<img class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-11 ime"><h2><a href="profil.php?id=' . $uporabnik['id'] . '">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</a></h2></div>';
			echo '<div class="col-lg-5">';
			$resulte = mysqli_query($con, "SELECT ROUND(AVG(ocena), 1) as `povprecje` FROM ocene WHERE uporabnik_id='". $uporabnik['id'] ."'");
				while ($ocena = mysqli_fetch_assoc($resulte)) {
					echo '<p>Celoletno povprečje: <b>' . $ocena['povprecje'] .'</b></p>';
				}
			echo '</div>';
			echo '</div>';
		      echo "</div>";
		}
		 ?>



<?php include 'includes/footer.php'; ?>
