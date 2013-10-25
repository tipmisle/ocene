<?php include 'includes/header.php'; ?>


<div class="container main">
	<div class="row">
<?php 
	if (isset($_GET['predmet'])) {
		$predmet = $_GET['predmet'];
		$ocena = $_GET['ocena'];
		$sql = mysqli_query($con, "INSERT INTO ocene (ocena, predmet) VALUES ('$_GET[ocena]', '$_GET[predmet]')");
		echo "dodano";
	} else {
		echo "ni dodano";
	}
 ?>

	</div>
</div>

 <?php include 'includes/footer.php'; ?>
