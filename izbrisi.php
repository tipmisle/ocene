<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
<script src="includes/ckeditor/ckeditor.js"></script>

<?php 

	if ( isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($link, "DELETE FROM changelog WHERE id='".$_GET['id']."'");
		$row = mysqli_fetch_array($sql);
		header('Location: changelog.php');
	}


 ?>
<?php include 'includes/footer-root.php'; ?>
