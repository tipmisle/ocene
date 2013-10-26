<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
<?php 
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
		  $sql = mysqli_query($con, "DELETE FROM komentarji WHERE id='$_GET[id]'");
		  header("Location: admin.php?g=miha");
  		} else {
        	echo "ni dodan";
        }

 ?>
 </div>
</div>
<?php include 'includes/footer.php'; ?>