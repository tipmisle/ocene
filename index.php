<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			$predmeti = ['slo', 'mat', 'nubp', 'vos', 'npa', 'msa', 'soc', 'anj', 'oos', 'fiz', 'sap', 'npap'];
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1">';
			echo '<img class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-8 ime"><h2>' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</h2></div>';
			echo '</div>';
			echo '
				<table class="table table-condensed">
				        <thead>
				          <tr>
				            <th>' . $uporabnik['ime_priimek'] . '</th>
				            <th>1. konferenca</th>
				            <th>2. konferenca</th>
				            <th>Povprečje</th>
				          </tr>
				        </thead>
				        <tbody>';
			foreach($predmeti as $imepredmeta) {

			 $ocene = mysqli_query($con, "SELECT * FROM ocene WHERE predmet='". $imepredmeta ."' AND uporabnik_id='". $uporabnik['id'] . "'");
				while ($ocena = mysqli_fetch_assoc($ocene)) {
				echo '<tr>
			            <td>' . $imepredmeta. '</td>
			            <td>'. $ocena['ocena'] .'</td>
			            <td>Otto</td>
			            <td>@mdo</td>
			          </tr>';
			      }
			}
			echo '</tbody>
		      </table>';
		}
		 ?>

	</div>
</div>

<?php include 'includes/footer.php'; ?>