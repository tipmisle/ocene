<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
<script src="includes/ckeditor/ckeditor.js"></script>

<?php 

	if ( isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($link, "SELECT * FROM changelog WHERE id='".$_GET['id']."'");
		$row = mysqli_fetch_array($sql);
	}
	if ( isset($_POST['novavsebina'])) {
		$novavsebina = $_POST['novavsebina'];
		$id = $_POST['id'];
		$sql = mysqli_query($link, "UPDATE changelog SET vsebina = '" . $novavsebina . "' WHERE id='".$_POST['id']."' AND date='".$_POST['date']."'"
);
		header('Location: changelog.php');

	}

 ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Changelog <small>Urejanje</small></h1>
			</div>
			<form role="form" action="uredi.php" method="post" accept-charset="utf-8">
				<textarea name="novavsebina"><?php echo $row['vsebina']; ?></textarea>
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
				<input type="date" name="date" value="<?php echo $row['date']; ?>" placeholder="">
				<button type="submit" style="margin-top: 20px" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
			</form>	
		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>
<script>
    CKEDITOR.replace( 'novavsebina' );
</script>
