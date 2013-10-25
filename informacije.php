<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Changelog <small><a href="dodaj" title="dodaj"><div class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-plus"></i> Dodaj</div></a></small></h1>
			</div>


			<ul class="changelog">
					<?php
						$results = mysqli_query($link, "SELECT * FROM josip, frend");

						while ($row = mysqli_fetch_array($results)) {
							echo "<li>";
							echo "<small>" . $row['mat'] . "</small>";
							echo "</li>";
						}
					?>
			</ul>

		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>