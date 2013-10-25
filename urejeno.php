<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
<script src="includes/ckeditor/ckeditor.js"></script>

<?php 

	if ( isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($link, "UPDATE bugreport SET urejeno=1  WHERE id='".$_GET['id']."'");
		echo "<h3>Označeno kot urejeno!</h3>";
		header('Location: bugreport.php');
	}

 ?>
<?php include 'includes/footer-root.php'; ?>
<script>
    CKEDITOR.replace( 'novavsebina' );
</script>
