<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php 
	$sql="UPDATE nastavitve (ime, footer, tekmovalec1, tekmovalec2, predmet1, predmet2, predmet3, predmet4, predmet5, predmet6, predmet7, predmet8, predmet9, predmet10, predmet11, predmet12) VALUES ($_POST[ime]', $_POST[footer]', $_POST[tekmovalec1]', $_POST[tekmovalec2]', $_POST[predmet1]', $_POST[predmet2]', $_POST[predmet3]', $_POST[predmet4]', $_POST[predmet5]', $_POST[predmet6]', $_POST[predmet7]', $_POST[predmet8]', $_POST[predmet9]', $_POST[predmet10]', $_POST[predemt11]', $_POST[predmet12]')";

		if (!mysqli_query($link,$sql))
		  {
		  die('Error: ' . mysqli_error($link));
		  }
		  echo "<meta HTTP-EQUIV='REFRESH' content='0; url=/cadmin.php'>";
		mysqli_close($link);

 ?>

 <?php include 'footer.php'; ?>
