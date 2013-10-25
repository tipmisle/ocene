<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php 
	$sql="INSERT INTO changelog (date, vsebina) VALUES ('".date('Y-m-d H:i:s')."', '$_POST[vsebina]')";

		if (!mysqli_query($link,$sql))
		  {
		  die('Error: ' . mysqli_error($link));
		  }
		  echo "lolol";
		  echo "<meta HTTP-EQUIV='REFRESH' content='0; url=/ocene/changelog.php'>";
		mysqli_close($link);

 ?>

 <?php include 'footer.php'; ?>
