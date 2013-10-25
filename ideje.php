<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Ideje <small><a href="dodaj-idejo.php" title="dodaj"><div class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Dodaj</div></a></small></h1>
			</div>


			<ul class="ideje">
					<?php

						$results = mysqli_query($link, "SELECT * FROM ideje ORDER BY id DESC");

						while ($row = mysqli_fetch_array($results)) {
							if ($row['sprejeto'] == 0) {
								echo "<li>";
							} elseif ($row['sprejeto'] == 1) {
								echo "<li class='sprejeto'>";
							}
							echo "<small>" . $row['date'] . " <a href='sprejeto.php?id=" . $row['id'] . "'><div class='btn btn-xs btn-info'>Označi kot sprejeto</div></a> </small>";
							echo $row['vsebina'];
							echo "</li>";
						}
					?>
			</ul>

		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>