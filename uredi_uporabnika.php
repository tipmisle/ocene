<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($con, "SELECT * FROM uporabniki WHERE id='" . $_GET['id'] . "'");
		$uporabnik = mysqli_fetch_array($sql);
			if (isset($_POST['submit'])) {
			$ime_priimek = $_POST['ime_priimek'];
			$spol = $_POST['spol'];
			$razred = $_POST['razred'];
			$slika = $_POST['slika'];
			$id = $_POST['id'];
			$query = "UPDATE uporabniki WHERE id='" . $_GET['id'] . "' SET ime_priimek='" . $ime_priimek . "', spol='" . $spol . "', razred='" . $razred . "', slika='" . $slika . "'";
			$sql = mysqli_query($con, $query) OR die("ERROR");
		}

		echo '
		<div class="col-lg-8">
			<div class="panel panel-primary">
			  <div class="panel-heading">Uredi uporabnika <b>' . $uporabnik['ime_priimek'] . '</b></div>
			  <div class="panel-body">
			  	<form role="form" action="admin.php?g=miha" method="POST" accept-charset="utf-8">
				  <div class="form-group">
				    <label for="ime_priimek">Ime in priimek:</label>
				    <input type="text" name="ime_priimek" class="form-control" id="ime_priimek" value="' . $uporabnik['ime_priimek'] . '" placeholder="' . $uporabnik['ime_priimek'] . '">
				  </div>
				  <div class="form-group">
				    <label for="spol">Spol:</label>
				    <input type="text" name="spol" class="form-control" id="spol" value="' . $uporabnik['spol'] . '" placeholder="' . $uporabnik['spol'] . '">
				  </div>
				  <div class="form-group">
				    <label for="razred">Razred:</label>
				    <input type="text" name="razred" class="form-control" id="razred" value="' . $uporabnik['razred'] . '" placeholder="' . $uporabnik['razred'] . '">
				  </div>
				  <div class="form-group">
				    <label for="slika">Slika:</label>
				    <input type="text" name="slika" class="form-control" id="slika" value="' . $uporabnik['slika'] . '" placeholder="' . $uporabnik['slika'] . '">
				  </div>
				  <input type="hidden" name="id" value="' . $uporabnik['id'] . '">
				  <input type="submit" class="btn btn-primary" name="submit">
			  	</form>
			  </div>
			</div>
		</div>

		';
	} else {
		echo "non";
	}

 ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>