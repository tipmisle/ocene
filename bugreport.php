<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Bugreport <small><a href="dodaj-bugreport.php" title="dodaj"><div class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Dodaj</div></a></small></h1>
			</div>


			<ul class="bugreport">
					<?php

						$results = mysqli_query($link, "SELECT * FROM bugreport ORDER BY id DESC");

						while ($row = mysqli_fetch_array($results)) {
							if ($row['urejeno'] == 0) {
								echo "<li>";
							} elseif ($row['urejeno'] == 1) {
								echo "<li class='urejeno'>";
							}
							echo "<small>" . $row['date'] . " <a href='urejeno.php?id=" . $row['id'] . "'><div class='btn btn-xs btn-info'>Označi kot urejeno</div></a> </small>";
							echo $row['vsebina'];
							echo "</li>";
						}
					?>
			</ul>

		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>