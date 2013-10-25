<?php include 'includes/header.php'; ?>
<?php 
	if (isset($_GET['dodana'])) {
		echo '
		<div class="alert alert-success uspesno-dodana animated fadeOut">Ocena uspešno dodana!</div>
		';
	} else {
		echo "ni dodano";
	}

 ?>
<div class="container main">
	<div class="row">
		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			$predmeti = ['slo', 'mat', 'nubp', 'vos', 'npa', 'msa', 'soc', 'anj', 'oos', 'fiz', 'sap', 'npap'];
			echo '<div class="col-lg-6">';
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1">';
			echo '<img class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-11 ime"><h2>' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</h2></div>';
			echo '</div>';
			echo '
				<table class="table table-bordered table-hover">
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

			
				echo '<tr>
			            <td class="predmet">' . $imepredmeta. '</td>';
			    echo '<td>';
 $ocene = mysqli_query($con, "SELECT * FROM ocene WHERE predmet='". $imepredmeta ."' AND uporabnik_id='". $uporabnik['id'] . "'");
				while ($ocena = mysqli_fetch_assoc($ocene)) {
			    echo $ocena['ocena'] . ", ";
			      }
			 	echo '</td>';
			 	echo '<td></td>';
			 	echo '<td>';
				$ocene = mysqli_query($con,"SELECT ROUND(AVG(ocena), 2) as `povprecje` FROM ocene WHERE predmet = '". $imepredmeta . "' AND uporabnik_id='". $uporabnik['id'] . "'");
				while ($ocena = mysqli_fetch_assoc($ocene)) {
			    echo $ocena['povprecje'];
			      }

			 	echo '</td>';
			 	echo '</tr>';
			}
			echo '</tbody>
		      </table>
		      ';
		      echo "</div>";
		}
		 ?>

	</div>
</div>

<?php include 'includes/footer.php'; ?>