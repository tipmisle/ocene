<?php include 'includes/header-root.php' ?>
<?php include 'includes/menu.php'; ?>
<?php 
	$resultt = mysqli_query($link,"SELECT * FROM josip");
	$num_rows = mysqli_num_rows($resultt);


	$result = mysqli_query($link,"SELECT avg(mat)  as `mat`, avg(slo)  as `slo`, avg(nubp)  as `nubp`, avg(vos)  as `vos`, avg(npa)  as `npa`, avg(msa)  as `msa`, avg(soc)  as `soc`, avg(anj)  as `anj`, avg(oos)  as `oos`, avg(fiz)  as `fiz`, avg(sap)  as `sap`, avg(npap)  as `npap` FROM " . $josip . "");
	while($row = mysqli_fetch_array($result))
		{
		$a = array($row['slo'], $row['mat'], $row['nubp'], $row['vos'], $row['npa'], $row['msa'], $row['soc'], $row['anj'], $row['oos'], $row['fiz'], $row['sap'], $row['npap']);
		$povprecjejosip = (array_sum($a) / 12);

		}
 ?>

 <?php 
	$resultt = mysqli_query($link,"SELECT * FROM frend");
	$num_rows = mysqli_num_rows($resultt);


	$result = mysqli_query($link,"SELECT avg(mat)  as `mat`, avg(slo)  as `slo`, avg(nubp)  as `nubp`, avg(vos)  as `vos`, avg(npa)  as `npa`, avg(msa)  as `msa`, avg(soc)  as `soc`, avg(anj)  as `anj`, avg(oos)  as `oos`, avg(fiz)  as `fiz`, avg(sap)  as `sap`, avg(npap)  as `npap` FROM frend");
	while($row = mysqli_fetch_array($result))
		{
		$a = array($row['slo'], $row['mat'], $row['nubp'], $row['vos'], $row['npa'], $row['msa'], $row['soc'], $row['anj'], $row['oos'], $row['fiz'], $row['sap'], $row['npap']);
		$povprecjefrend = (array_sum($a) / 12);;

		}
  ?>
	<div class="container main">
		<div class="row">
			<div class="page-header">
			  <h1>Povprečje <small>vseh ocen skupaj</small></h1>
			</div>
			  <div class="col-lg-12">
			  	<div class="alert alert-danger animated flash">
			  		<a class="close" data-dismiss="alert" href="#" aria-hidden="true">x</a>
			  		<p><n>Prikazuje pravilno le, če je pri vsakem predmetu dodana le ena ocena.</n></p>
			  	</div>
			  </div>
			<div class="col-lg-12 povprecje">
			<?php 
								$resultt = mysqli_query($link,"SELECT * FROM josip");
								$num_rows = mysqli_num_rows($resultt);


								$result = mysqli_query($link,"SELECT avg(mat)  as `mat`, avg(slo)  as `slo`, avg(nubp)  as `nubp`, avg(vos)  as `vos`, avg(npa)  as `npa`, avg(msa)  as `msa`, avg(soc)  as `soc`, avg(anj)  as `anj`, avg(oos)  as `oos`, avg(fiz)  as `fiz`, avg(sap)  as `sap`, avg(npap)  as `npap` FROM " . $josip . "");
			 ?>
				<div 
					data-toggle="popover" 
					data-placement="bottom" 
					data-content="
					 <?php
					 echo "Skupaj ocen: " . $num_rows;
					  ?>
					" 
					data-original-title="Podatki"
					class="panel panel-default col-lg-4 povp povp-josip animated fadeInRight <?php if ($povprecjefrend > $povprecjejosip) { echo 'vec'; } elseif ($povprecjefrend == $povprecjejosip) { echo 'izenaceno'; } else { echo 'manj'; } ?>" 
					style="padding: 0;">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center">Josip Rajković</h3>
				  </div>
					  <div class="panel-body">
						    <?php 
									echo  "<p class='text-center'><b>" . round($povprecjejosip) . "</b></p>";


						    ?>           
				    </div>
				</div>
				<div class="col-lg-4 animated tada">
					<h2 class="text-center" style="margin-top: 30px;">VS</h2>
				</div>
			<?php 
								$resultt = mysqli_query($link,"SELECT * FROM frend");
								$num_rows = mysqli_num_rows($resultt);


								$result = mysqli_query($link,"SELECT avg(mat)  as `mat`, avg(slo)  as `slo`, avg(nubp)  as `nubp`, avg(vos)  as `vos`, avg(npa)  as `npa`, avg(msa)  as `msa`, avg(soc)  as `soc`, avg(anj)  as `anj`, avg(oos)  as `oos`, avg(fiz)  as `fiz`, avg(sap)  as `sap`, avg(npap)  as `npap` FROM  frend");
			 ?>
				<div 
					data-toggle="popover" 
					data-placement="bottom" 
					data-content="
					 <?php
					 echo "Skupaj ocen: " . $num_rows;
					  ?>
					" 
					data-original-title="Podatki"
					class="panel panel-default col-lg-4 povp povp-frend animated fadeInLeft <?php if ($povprecjefrend > $povprecjejosip) { echo 'manj'; } elseif ($povprecjefrend == $povprecjejosip) { echo 'izenaceno'; } else { echo 'vec'; } ?>" 
					style="padding: 0;">
				  <div class="panel-heading">
				    <h3 class="panel-title text-center">Marcel Petrovič</h3>
				  </div>
					  <div class="panel-body">
						    <?php 
									echo  "<p class='text-center'><b>" . $povprecjefrend . "</b></p>";


						    ?>           
				    </div>
				</div>

			  </div>
		</div>
	</div>

<?php include 'includes/footer-root.php'; ?>
<script type="text/javascript">
$('.povp-josip').hover(function() {
	$('.povp-josip').popover('toggle');
});

$('.povp-frend').hover(function() {
	$('.povp-frend').popover('toggle');
});

</script>