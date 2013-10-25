<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>

<?php 

	if ( isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($link, "UPDATE ideje SET sprejeto=1  WHERE id='".$_GET['id']."'");
		echo "<h3>Označeno kot urejeno!</h3>";
		header('Location: ideje.php');
	}

 ?>
<?php include 'includes/footer-root.php'; ?>
