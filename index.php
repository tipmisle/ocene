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
		<?php 

		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			$predmeti = ['slo', 'mat', 'nubp', 'vos', 'npa', 'msa', 'soc', 'anj', 'oos', 'fiz', 'sap', 'npap'];
			echo '<div class="col-lg-6">';
			echo '<div class="o-uporabniku col-lg-12">';
			echo '<div class="col-lg-1">';
			echo '<img width="100%" class="pull-left" src="' . $uporabnik['slika'] . '">';
			echo '</div>';
			echo '<div class="col-lg-11 col-md-11 ime"><h2><a data-toggle="modal" href="#myModal">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</a></h2></div>';
			echo '</div>';
			echo'
				 <div id="myModal" class="modal fade">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] .'</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="col-lg-5">
					        <img width="100%" src="' . $uporabnik['slika'] . '">
				      	</div>
				      	<div class="col-lg-7">
					        <p><b>Razred</b>: ' . $uporabnik['razred'] .'</p>
					        <p><b>Spol</b>: ' . $uporabnik['spol'] .'</p>
				      	</div>
				      	<div style="width: 100%; float: left; height: 350px"></div>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			';
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
 <script  type="text/javascript">
$( document ).ready(function() {
	$(".alert").addClass("fadeIn").delay(2500).queue(function(next){
	    $(this).addClass("fadeOut");
	    next();
	});
});
 </script>
