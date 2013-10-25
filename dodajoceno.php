<?php include 'includes/header.php'; ?>


<div class="container main">
	<div class="row">
<?php 
	if (isset($_GET['predmet'])) {
		$predmet = $_GET['predmet'];
		$ocena = $_GET['ocena'];
		$sql = mysqli_query($con, "INSERT INTO ocene (ocena, predmet, uporabnik_id) VALUES ('$_GET[ocena]', '$_GET[predmet]', '$_GET[uporabnik]')");
		echo "<h3>Ocena dodana</h3>";
		header("Location: index.php");
	} else {
		echo "ni dodano";
	}
 ?>

	</div>
</div>

 <?php include 'includes/footer.php'; ?>
