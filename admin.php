<?php include 'includes/header.php'; ?>
<?php 
	if (isset($_post['submit'])) {
		$ime_priimek = $_post['ime_priimek'];
		$spol = $_post['spol'];
		$razred = $_post['razred'];
		$slika = $_post['slika'];
		$sql = mysqli_query($con, "INSERT INTO uporabniki (ime_priimek, spol, razred, slika) VALUES ('". $ime_priimek ."' , '". $spol ."' , '". $razred ."' , '". $slika ."' , )");
		echo "Dodan";
	} else {
		echo "Ni dodan";
	}
 ?>
<div class="container main">
	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-primary">
			  <div class="panel-heading">Dodaj uporabnika</div>
			  <div class="panel-body">
			  	<form role="form" action="admin.php?g=miha" method="post" accept-charset="utf-8">
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
				  <button class="btn btn-primary" name="submit" type="submit">Dodaj</button>
			  	</form>
			  </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Uporabniki</div>
			  <div class="panel-body">
			  </div>
			</div>
		</div>
	</div>
</div>


<?php include 'includes/footer.php'; ?>