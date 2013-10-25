<?php include 'includes/header-root.php' ?>
<script src="includes/ckeditor/ckeditor.js"></script>
<?php include 'includes/menu.php'; ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Ideje <small></small></h1>
			</div>
			<form role="form" action="includes/dodaj-idejo.php" method="post" accept-charset="utf-8">
				<textarea name="vsebina"></textarea>
				<button type="submit" style="margin-top: 20px" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Dodaj</button>
			</form>	
		</div>
	</div>
<?php include 'includes/footer-root.php'; ?>
<script>
    CKEDITOR.replace( 'vsebina' );
</script>
