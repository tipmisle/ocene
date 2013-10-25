	<meta charset="utf-8">

<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>

	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1><i class="glyphicon glyphicon-plus"></i> Dodaj oceno <small>Josip Rajković</small></h1>
			</div>
			<section id="slovenscina" class="ocene col-lg-12">
				<h3>SLO</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-slo-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `slo` FROM `josip` WHERE slo IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['slo'] . ", </li>";
					  echo "</ul>";
					  }


					  ?>
				</div>
			</section>
			<hr />
			<section id="matematika" class="ocene col-lg-12">
				<h3>MAT</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-mat-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `mat` FROM `josip` WHERE mat IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['mat'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="nubp" class="ocene col-lg-12">
				<h3>NUBp</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-nubp-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `nubp` FROM `josip` WHERE nubp IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['nubp'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="vos" class="ocene col-lg-12">
				<h3>VOS</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-vos-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `vos` FROM `josip` WHERE vos IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['vos'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="npa" class="ocene col-lg-12">
				<h3>NPA</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-npa-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `npa` FROM `josip` WHERE npa IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['npa'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="msa" class="ocene col-lg-12">
				<h3>MSA</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-msa-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `msa` FROM `josip` WHERE msa IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['msa'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="soc" class="ocene col-lg-12">
				<h3>SOC</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-soc-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `soc` FROM `josip` WHERE soc IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['soc'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="anj" class="ocene col-lg-12">
				<h3>ANJ</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-anj-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `anj` FROM `josip` WHERE anj IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['anj'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="oos" class="ocene col-lg-12">
				<h3>OOS</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-oos-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `oos` FROM `josip` WHERE oos IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['oos'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="fiz" class="ocene col-lg-12">
				<h3>FIZ</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-fiz-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `fiz` FROM `josip` WHERE fiz IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['fiz'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="sap" class="ocene col-lg-12">
				<h3>SAP</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-sap-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `sap` FROM `josip` WHERE sap IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['sap'] . ", </li>";
					  echo "</ul>";
					  }

					  ?>
				</div>
			</section>
			<section id="npap" class="ocene col-lg-12">
				<h3>NPAp</h3> 
				<form class="dodaj col-lg-6" action="includes/dodaj-oceno-npap-josip.php" method="post" accept-charset="utf-8">
					<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id=1"" value="1" > 1
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="2" value="2" >  2
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="3" value="3" >  3
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="4" value="4" >  4
					  </label>
					  <label class="btn btn-danger">
					    <input type="radio" name="ocenaa" id="5" value="5" >  5
					  </label>
					</div>
					<button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
				</form>
				<div class="col-lg-6 col-xs-12 dosedanje">
					<h4>Dosedanje ocene:</h4>
					<?php


					$result = mysqli_query($link,"SELECT `npap` FROM `josip` WHERE npap IS NOT NULL");

					while($row = mysqli_fetch_array($result))
					  {
					  echo "<ul>";
					  echo "<li>" . $row['npap'] . ", </li>";
					  echo "</ul>";
					  }

					  mysqli_close($link);
					  ?>
				</div>
			</section>
		</div>
	</div>

<?php include 'includes/footer-root.php' ?>
