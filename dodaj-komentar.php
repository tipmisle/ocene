<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
<?php 
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $vsebina = $_POST['vsebina'];
          $uporabnikid = $_POST['uporabnik'];
		  $sql = mysqli_query($con, "INSERT INTO komentarji (uporabnikid, vsebina, datum) VALUES ('$_POST[uporabnik]', '$_POST[vsebina]', '".date('Y-m-d H:i:s')."')");
		  header("Location: profil.php?id=". $id . "&dodan=true");
  		} else {
        	echo "ni dodan";
        }

 ?>
 </div>
</div>
<?php include 'includes/footer.php'; ?>