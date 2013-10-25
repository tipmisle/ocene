<?php 
	$resultt = mysqli_query($link,"SELECT * FROM josip");
	$num_rows = mysqli_num_rows($resu
	$result = mysqli_query($link,"SELECT avg(mat)  as `mat`, avg(slo)  as `slo`, avg(nubp)  as `nubp`, avg(vos)  as `vos`, avg(npa)  as `npa`, avg(msa)  as `msa`, avg(soc)  as `soc`, avg(anj)  as `anj`, avg(oos)  as `oos`, avg(fiz)  as `fiz`, avg(sap)  as `sap`, avg(npap)  as `npap` FROM " . $josip . "");
	while($row = mysqli_fetch_array($result))
		{
			echo "Vse ocene: " . $num_rows ;
		$a = array($row['slo'], $row['mat'], $row['nubp'], $row['vos'], $row['npa'], $row['msa'], $row['soc'], $row['anj'], $row['oos'], $row['fiz'], $row['sap'], $row['npap']);
		echo  "<p class='text-center'><b>" . (array_sum($a) / $num_rows) . "</b>";
		}

 ?>
Vse ocene:  &nbsp;&nbsp;&nbsp;&nbsp;