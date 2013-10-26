<?php include 'includes/header.php'; ?>
<?php 
	if (isset($_GET['dodana'])) {
		echo '
		<div class="alert alert-success uspesno-dodana animated">Ocena uspešno dodana!</div>
		';
	} else {
	}

 ?>

<div class="container main">
	<div class="row">
			<div class="page-header">
			  <h1>Povprečje <small>vseh ocen skupaj</small></h1>
			</div>

		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {


			echo '<div class="col-lg-6">';
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1">';
			echo '<img width="100%" class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-11 ime"><h2><a href="profil.php?id=' . $uporabnik['id'] . '">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</a></h2></div>';
			echo '<div class="col-lg-12">';
			$resulte = mysqli_query($con, "SELECT ROUND(AVG(ocena), 1) as `povprecje` FROM ocene WHERE uporabnik_id='". $uporabnik['id'] ."'");
				while ($ocena = mysqli_fetch_assoc($resulte)) {
					echo '<p>Celoletno povprečje: ' . $ocena['povprecje'] .'</p>';
				}
			echo '</div>';
			echo '</div>';
		      echo "</div>";
		}
		 ?>

	</div>
</div>

<?php include 'includes/footer.php'; ?>
 <script  type="text/javascript">
$( document ).ready(function() {
	$(".alert").addClass("fadeIn").delay(2500).queue(function(next){
	    $(this).addClass("fadeOut");
	    next();
	});
});
 </script>
