<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Changelog <small><a href="dodaj-changelog.php" title="dodaj"><div class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Dodaj</div></a></small></h1>
			</div>


			<ul class="changelog">
					<?php

						$results = mysqli_query($link, "SELECT * FROM changelog ORDER BY id DESC");

						while ($row = mysqli_fetch_array($results)) {
							echo "<li>";
							echo "<small>" . $row['date'] . " <a href='uredi.php?id=" . $row['id'] . "'><div class='btn btn-xs btn-info'>Uredi</div></a>  <a href='izbrisi.php?id=" . $row['id'] . "'><div class='btn btn-xs btn-danger'>Izbriši</div></a></small>";
							echo $row['vsebina'];
							echo "</li>";
						}
					?>
			</ul>

		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>