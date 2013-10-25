<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
<?php 
	if (isset($_GET['g']) && $_GET['g']=="miha") {
		if (isset($_POST['submit'])) {
			$ime_priimek = $_POST['ime_priimek'];
			$spol = $_POST['spol'];
			$razred = $_POST['razred'];
			$slika = $_POST['slika'];
			$query = "INSERT INTO uporabniki (ime_priimek, spol, razred, slika)";
			$query .= " VALUES ('". $ime_priimek ."','". $spol ."','". $razred ."','". $slika ."')";
			$sql = mysqli_query($con, $query) OR die("ERROR");
			echo '<div class="alert alert-success uspesno-dodana animated fadeOut">Uporabnik uspešno dodan!</div>';
		} else {
			echo '<div class="alert alert-warning uspesno-dodana animated fadeOut">Uporabnik ni bil dodan!</div>';
		}

		echo '
		<div class="col-lg-8">
			<div class="panel panel-primary">
			  <div class="panel-heading">Dodaj uporabnika</div>
			  <div class="panel-body">
			  	<form role="form" action="admin.php?g=miha" method="POST" accept-charset="utf-8">
				  <div class="form-group">
				    <label for="ime_priimek">Ime in priimek:</label>
				    <input type="text" name="ime_priimek" class="form-control" id="ime_priimek" placeholder="Andrej Novak">
				  </div>
				  <div class="form-group">
				    <label for="spol">Spol:</label>
				    <input type="text" name="spol" class="form-control" id="spol" placeholder="Moški">
				  </div>
				  <div class="form-group">
				    <label for="razred">Razred:</label>
				    <input type="text" name="razred" class="form-control" id="razred" placeholder="2. Mb">
				  </div>
				  <div class="form-group">
				    <label for="slika">Slika:</label>
				    <input type="text" name="slika" class="form-control" id="slika" placeholder="https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-ash3/1391614_10200902760433385_105742999_n.jpg">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit">
			  	</form>
			  </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Uporabniki</div>
			  <div class="panel-body">
			  <ul class="uporabniki">';
		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			echo '<li clas="col-lg-12">';
			echo '<div class="col-lg-2"><img src="' . $uporabnik['slika'] . '"></div>';
			echo '<div class="col-lg-10">'. $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] . '<a href="uredi_uporabnika.php?id=' . $uporabnik['id'] . '"><div class="btn btn-primary btn-xs pull-right">Uredi</div></a></div>';
			echo '</li>';
		}

			 echo '</ul>
			 	</div>
			</div>
		</div>

		';
	} else {
		echo "<h1>Nimaš dostopa, luzer.</h1>";
	}
	?>

	</div>
</div>


<?php include 'includes/footer.php'; ?>

