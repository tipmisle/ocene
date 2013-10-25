<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
<?php 

 ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Admin <small>plošča</small></h1>
			</div>
			<div class="col-lg-8">
				<div class="panel panel-primary">
				    <div class="panel-heading">
				      <h3 class="panel-title">Glavne nastavitve</h3>
				    </div>
				    <div class="panel-body">
						<form action="cadmin.php" method="post" role="form">
						  <div class="form-group">
						    <label for="ime">Ime spletne aplikacije: </label>
						    <input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime; ?>" placeholder="<?php echo $ime; ?>">
						  </div>
						  <div class="form-group">
						    <label for="footer">Tekst v nogi: </label>
						    <textarea  class="form-control" id="footer" name="footer" placeholder="<?php echo $footer; ?>"><?php echo $footer; ?></textarea>
						  </div>
						  <div class="form-group">
						    <label for="tekmovalec1">Tekmovalec št. 1</label>
						    <input type="text" class="form-control" name="tekmovalec1" id="tekmovalec1" value="<?php echo $tekmovalec1; ?>" placeholder="<?php echo $tekmovalec1; ?>">
						  </div>
						  <div class="form-group">
						    <label for="tekmovalec2">Tekmovalec št. 2</label>
						    <input type="text" class="form-control" name="tekmovalec2" id="tekmovalec2" value="<?php echo $tekmovalec2; ?>" placeholder="<?php echo $tekmovalec2; ?>">
						  </div>
						  <label>Predmeti: </label>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">1. </span>
						    <input type="text" class="form-control" id="predmet1" name="predmet1" value="<?php echo $predmet1; ?>" placeholder="<?php echo $predmet1; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">2. </span>
						    <input type="text" class="form-control" id="predmet2" name="predmet2" value="<?php echo $predmet2; ?>" placeholder="<?php echo $predmet2; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">3. </span>
						    <input type="text" class="form-control" id="predmet3" name="predmet3" value="<?php echo $predmet3; ?>" placeholder="<?php echo $predmet3; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">4. </span>
						    <input type="text" class="form-control" id="predmet4" name="predmet4" value="<?php echo $predmet4; ?>" placeholder="<?php echo $predmet4; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">5. </span>
						    <input type="text" class="form-control" id="predmet5" name="predmet5" value="<?php echo $predmet5; ?>" placeholder="<?php echo $predmet5; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">6. </span>
						    <input type="text" class="form-control" id="predmet6" name="predmet6" value="<?php echo $predmet6; ?>" placeholder="<?php echo $predmet6; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">7. </span>
						    <input type="text" class="form-control" id="predmet7" name="predmet7" value="<?php echo $predmet7; ?>" placeholder="<?php echo $predmet7; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">8. </span>
						    <input type="text" class="form-control" id="predmet8" name="predmet8" value="<?php echo $predmet8; ?>" placeholder="<?php echo $predmet8; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">9. </span>
						    <input type="text" class="form-control" id="predmet9" name="predmet9" value="<?php echo $predmet9; ?>" placeholder="<?php echo $predmet9; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">10. </span>
						    <input type="text" class="form-control" id="predmet10" name="predmet10" value="<?php echo $predmet10; ?>" placeholder="<?php echo $predmet10; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">11. </span>
						    <input type="text" class="form-control" id="predmet11" name="predmet11" value="<?php echo $predmet11; ?>" placeholder="<?php echo $predmet11; ?>">
						  </div>
						  <div class="input-group col-lg-12" style="margin-bottom: 10px;">
							<span class="input-group-addon">12. </span>
						    <input type="text" class="form-control" id="predmet12" name="predmet12" value="<?php echo $predmet12; ?>" placeholder="<?php echo $predmet12; ?>">
						  </div>
						  <button type="submit" name="submit" class="btn btn-primary">Potrdi</button>
						</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<?php 
if (isset($_POST['submit']))
{
	$sql="UPDATE `nastavitve` SET ime='".$_POST['ime']."', footer='".$_POST['footer']."', tekmovalec1='".$_POST['tekmovalec1']."', tekmovalec2='".$_POST['tekmovalec2']."', predmet1='".$_POST['predmet1']."', predmet2='".$_POST['predmet2']."', predmet3='".$_POST['predmet3']."', predmet4='".$_POST['predmet4']."', predmet5='".$_POST['predmet5']."', predmet6='".$_POST['predmet6']."', predmet7='".$_POST['predmet7']."', predmet8='".$_POST['predmet8']."', predmet9='".$_POST['predmet9']."', predmet10='".$_POST['predmet10']."', predmet11='".$_POST['predmet11']."', predmet12='".$_POST['predmet12']."'";

		if (!mysqli_query($link,$sql))
		  {
		  die('Error: ' . mysqli_error($link));
		  }
		  echo "<meta HTTP-EQUIV='REFRESH' content='0; url=cadmin.php'>";
		mysqli_close($link);


}


	 ?>
<?php include 'includes/footer-root.php'; ?>