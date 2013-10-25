			<div class="table-responsive josip col-lg-6 col-md-6 animated fadeInRight">
			  <table class="table table-hover table-bordered">
		          <thead>
		            <tr>
		              <th>Josip Rajković</th>
		              <th>1. konferenca</th>
		              <th>2. konferenca</th>
		              <th>Povprečje</th>
		            </tr>
		          </thead>
		          <tbody>
		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT slo FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['slo'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>SLO</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-slo-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `slo` FROM " . $josip . " WHERE slo IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['slo'] . '">' . $row['slo'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT slo FROM " . $josip . " WHERE slo IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT slo FROM " . $josip . " WHERE slo IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(slo), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>














		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT mat FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['mat'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>MAT</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-mat-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `mat` FROM " . $josip . " WHERE mat IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['mat'] . '">' . $row['mat'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT mat FROM " . $josip . " WHERE mat IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT mat FROM " . $josip . " WHERE mat IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(mat), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>


















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT nubp FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['nubp'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>NUBp</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-nubp-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `nubp` FROM " . $josip . " WHERE nubp IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['nubp'] . '">' . $row['nubp'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT nubp FROM " . $josip . " WHERE nubp IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT nubp FROM " . $josip . " WHERE nubp IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(nubp), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>



















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT vos FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['vos'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>VOS</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-vos-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `vos` FROM " . $josip . " WHERE vos IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['vos'] . '">' . $row['vos'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT vos FROM " . $josip . " WHERE vos IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT vos FROM " . $josip . " WHERE vos IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(vos), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>










		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT npa FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['npa'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>NPA</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-npa-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `npa` FROM " . $josip . " WHERE npa IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['npa'] . '">' . $row['npa'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT npa FROM " . $josip . " WHERE npa IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT npa FROM " . $josip . " WHERE npa IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(npa), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>










		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT msa FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['msa'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>MSA</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-msa-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `msa` FROM " . $josip . " WHERE msa IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['msa'] . '">' . $row['msa'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT msa FROM " . $josip . " WHERE msa IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT msa FROM " . $josip . " WHERE msa IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(msa), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT soc FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['soc'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>SOC</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-soc-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `soc` FROM " . $josip . " WHERE soc IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['soc'] . '">' . $row['soc'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT soc FROM " . $josip . " WHERE soc IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT soc FROM " . $josip . " WHERE soc IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(soc), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT anj FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['anj'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>ANJ</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-anj-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `anj` FROM " . $josip . " WHERE anj IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['anj'] . '">' . $row['anj'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT anj FROM " . $josip . " WHERE anj IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT anj FROM " . $josip . " WHERE anj IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(anj), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>












		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT oos FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['oos'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }
		               ?>
		            >
		              <td>OOS</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-oos-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `oos` FROM " . $josip . " WHERE oos IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['oos'] . '">' . $row['oos'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT oos FROM " . $josip . " WHERE oos IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT oos FROM " . $josip . " WHERE oos IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(oos), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>

















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT fiz FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['fiz'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>FIZ</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-fiz-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `fiz` FROM " . $josip . " WHERE fiz IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['fiz'] . '">' . $row['fiz'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT fiz FROM " . $josip . " WHERE fiz IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT fiz FROM " . $josip . " WHERE fiz IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(fiz), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>




















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT sap FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['sap'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }

		               ?>
		            >
		              <td>SAP</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-sap-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `sap` FROM " . $josip . " WHERE sap IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['sap'] . '">' . $row['sap'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT sap FROM " . $josip . " WHERE sap IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT sap FROM " . $josip . " WHERE sap IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(sap), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>


















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT npap FROM josip");
						while($row = mysqli_fetch_array($result))
						  {
						  	$ocena = $row['npap'];
						  	if ($ocena == 5) {
						  		echo 'class="warning"';
						  	} elseif ($ocena == 1) {
						  		echo 'class="danger"';
						  	}

						  }
		               ?>
		            >
		              <td>NPAp</td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-npap-josip.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `npap` FROM " . $josip . " WHERE npap IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['npap'] . '">' . $row['npap'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT npap FROM " . $josip . " WHERE npap IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT npap FROM " . $josip . " WHERE npap IS NOT NULL");

			                    if ($num_rows == 0) {
			                        echo '

			                        ';
			                    } else {
			                        echo '
						  <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Odstrani</button>

			                        ';
			                    }
			                ?>

						  </form>
		              </p> 
<!-- 		              <p class="pull-right"><b><u>4</u></b></p>
 -->		              </td>
		              <td><p class="pull-left"></p> 
<!-- 		              <p class="pull-right"><b><u>2</u></b></p>
 -->		              </td>
		              <td><h4 class="text-center">
		              <?php 
						$result = mysqli_query($link,"SELECT ROUND(avg(npap), 2)  as `povprecje` FROM " . $josip . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>
		          </tbody>

		        </table>
		    </div>