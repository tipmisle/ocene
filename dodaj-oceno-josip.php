 <?php include 'includes/header.php'; ?>


<div class="container main">
	<div class="row">
		<?php 

		$predmeti = ['slo', 'ang', 'zgo'];
		foreach($predmeti as $imepredmeta) {
		 echo '
		 	<form role="form" method="get" action="dodajoceno.php?predmet="'. $imepredmeta .'">
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-primary">
				    <input type="radio" name="ocena" value="1"> 1
				  </label>
				  <label class="btn btn-primary">
				    <input type="radio" name="ocena" value="2"> 2
				  </label>
				  <label class="btn btn-primary">
				    <input type="radio" name="ocena" value="3"> 3
				  </label>
				  <label class="btn btn-primary">
				    <input type="radio" name="ocena" value="4"> 4
				  </label>
				  <label class="btn btn-primary">
				    <input type="radio" name="ocena" value="5"> 5
				  </label>
				</div>
				<input type="hidden" name="'. $imepredmeta .'" value="">
				<button type="submit" class="btn btn-primary">Dodaj</button>
		 	</form>
		 ';
		}

		 ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>