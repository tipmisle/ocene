<?php include 'includes/header.php'; ?>


<?php  
        if (isset($_POST['dodaj'])) {
			$query = "INSERT INTO changelog (vsebina, datum)";
			$query .= " VALUES ('" . $_POST['novavsebina'] . "', '".date('Y-m-d H:i:s')."')";
			$sql = mysqli_query($con, $query) OR die("ERROR");
			header("Location: admin.php?g=miha&dodan=true");
		} 


	if (isset($_GET['g']) && $_GET['g']=="miha") {
		if (isset($_GET['dodan']) && $_GET['dodan']=="true") {
			echo '<div class="alert alert-success uspesno-dodana animated ">Vnos uspešno dodan!</div>';
		}
		if (isset($_GET['userdodan']) && $_GET['userdodan']=="true") {
			echo '<div class="alert alert-success uspesno-dodana animated ">Uporabnik uspešno dodan!</div>';
		} 
		if (isset($_POST['submit'])) {
			$ime_priimek = $_POST['ime_priimek'];
			$spol = $_POST['spol'];
			$razred = $_POST['razred'];
			$slika = $_POST['slika'];
			$query = "INSERT INTO uporabniki (ime_priimek, spol, razred, slika)";
			$query .= " VALUES ('". $ime_priimek ."','". $spol ."','". $razred ."','". $slika ."')";
			$sql = mysqli_query($con, $query) OR die("ERROR");
			header("Location: admin.php?g=miha&userdodan=true");
		} else {
		}
		echo '<div class="col-lg-4 pull-right">';
		echo '
		<div class="vsi-uporabniki">
			<div class="panel panel-default">
			  <div class="panel-heading">Uporabniki</div>
			  <div class="panel-body">
			  <ul class="uporabniki">';
		$result = mysqli_query($con, "SELECT * FROM uporabniki");
		while ($uporabnik = mysqli_fetch_assoc($result)) {
			echo '<li clas="col-lg-12">';
			echo '<div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"><img width="100%" src="' . $uporabnik['slika'] . '"></div>';
			echo '<div class="col-lg-10 col-md-11 col-sm-11 col-xs-11"><a href="profil.php?id=' . $uporabnik['id'] . '">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] . '</a><a href="uredi_uporabnika.php?id=' . $uporabnik['id'] . '"><div class="btn btn-primary btn-xs pull-right">Uredi</div></a></div>';
			echo '</li>';
		}

			 echo '</ul>
			 	</div>
			</div>
		</div>
		';
		echo '
		<div class="vse-negativne">
			<div class="panel panel-danger">
			  <div class="panel-heading">Negativne ocene</div>
			  <div class="panel-body">
			  <p>Vsaj 1 negativno oceno imajo: </p><br />
			  <ul class="uporabniki">
			  ';
		$resultt = mysqli_query($con, "SELECT DISTINCT ocena, uporabnik_id FROM ocene WHERE ocena='1'");
		while ($negativna = mysqli_fetch_assoc($resultt)) {
			$uporabnikid = $negativna['uporabnik_id'];
			 $result = mysqli_query($con, "SELECT * FROM uporabniki WHERE id='" . $negativna['uporabnik_id'] . "'");
			 while ($uporabniknegativen = mysqli_fetch_assoc($result)) {
			 	$uporabnik = $uporabniknegativen['ime_priimek'];
			echo '<li clas="col-lg-12">';
			echo '<div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"><img width="100%" src="' . $uporabniknegativen['slika'] . '"></div>';
			echo '<div class="col-lg-10 col-md-11 col-sm-11 col-xs-11"><a href="profil.php?id=' . $uporabniknegativen['id'] . '">' . $uporabnik . ', ' . $uporabniknegativen['razred'] . '</a>';
			echo '</li>';
			 }
		}

			 echo '</ul>
			 	</div>
			</div>
		</div>
		';

		echo '</div>'; // ZAKLJUČI col-lg-4
		echo '<div class="col-lg-8">';
		echo '
		<div class="dodaj-uporabnika">
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
		';
		echo '
		<div class="dodaj-v-changelog">
			<div class="panel panel-default">
				<div class="panel-heading">
					Dodaj v changelog
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="admin.php?g=miha">
						<div class="form-group">
							<textarea  class="form-control" name="novavsebina"></textarea>
							<input type="hidden" name="datum" value="">
							<button style="margin-top: 10px;" name="dodaj" type="submit" class="btn-primary btn">Dodaj</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		';
		echo '</div>'; // ZAKLJUČI col-lg-8

	} else {
		echo "<h1>Nimaš dostopa, luzer.</h1>";
	}
	?>


<?php include 'includes/footer.php'; ?>
<script src="includes/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'novavsebina' );
</script>
