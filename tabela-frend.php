			<div class="table-responsive frend col-lg-6 col-md-6 animated fadeInLeft">
			  <table class="table table-hover table-bordered">
		          <thead>
		            <tr>
		              <th>Marcel Petrovič</th>
		              <th>1. konferenca</th>
		              <th>2. konferenca</th>
		              <th>Povprečje</th>
		            </tr>
		          </thead>
		          <tbody>
		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT ".$predmet1." FROM frend");
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
		              <td><?php echo $predmet1; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet1; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT ".$predmet1." FROM " . $frend . " WHERE ".$predmet1." IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['slo'] . '">' . $row['slo'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT slo FROM " . $frend . " WHERE slo IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT slo FROM " . $frend . " WHERE slo IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(slo), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>














		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT mat FROM frend");
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
		              <td><?php echo $predmet2; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet2; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `mat` FROM " . $frend . " WHERE mat IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['mat'] . '">' . $row['mat'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT mat FROM " . $frend . " WHERE mat IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT mat FROM " . $frend . " WHERE mat IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(mat), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>


















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT nubp FROM frend");
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
		              <td><?php echo $predmet3; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet3; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `nubp` FROM " . $frend . " WHERE nubp IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['nubp'] . '">' . $row['nubp'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT nubp FROM " . $frend . " WHERE nubp IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT nubp FROM " . $frend . " WHERE nubp IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(nubp), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>



















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT vos FROM frend");
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
		              <td><?php echo $predmet4; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet4; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `vos` FROM " . $frend . " WHERE vos IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['vos'] . '">' . $row['vos'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT vos FROM " . $frend . " WHERE vos IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT vos FROM " . $frend . " WHERE vos IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(vos), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>










		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT npa FROM frend");
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
		              <td><?php echo $predmet5; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet5; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `npa` FROM " . $frend . " WHERE npa IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['npa'] . '">' . $row['npa'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT npa FROM " . $frend . " WHERE npa IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT npa FROM " . $frend . " WHERE npa IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(npa), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>










		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT msa FROM frend");
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
		              <td><?php echo $predmet6; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet6; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `msa` FROM " . $frend . " WHERE msa IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['msa'] . '">' . $row['msa'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT msa FROM " . $frend . " WHERE msa IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT msa FROM " . $frend . " WHERE msa IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(msa), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT soc FROM frend");
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
		              <td><?php echo $predmet7; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet7; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `soc` FROM " . $frend . " WHERE soc IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['soc'] . '">' . $row['soc'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT soc FROM " . $frend . " WHERE soc IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT soc FROM " . $frend . " WHERE soc IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(soc), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT anj FROM frend");
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
		              <td><?php echo $predmet8; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet8; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `anj` FROM " . $frend . " WHERE anj IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['anj'] . '">' . $row['anj'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT anj FROM " . $frend . " WHERE anj IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT anj FROM " . $frend . " WHERE anj IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(anj), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>












		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT oos FROM frend");
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
		              <td><?php echo $predmet9; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet9; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `oos` FROM " . $frend . " WHERE oos IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['oos'] . '">' . $row['oos'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT oos FROM " . $frend . " WHERE oos IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT oos FROM " . $frend . " WHERE oos IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(oos), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>

















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT fiz FROM frend");
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
		              <td><?php echo $predmet10; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet10; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `fiz` FROM " . $frend . " WHERE fiz IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['fiz'] . '">' . $row['fiz'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT fiz FROM " . $frend . " WHERE fiz IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT fiz FROM " . $frend . " WHERE fiz IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(fiz), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>




















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT sap FROM frend");
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
		              <td><?php echo $predmet11; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet11; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `sap` FROM " . $frend . " WHERE sap IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['sap'] . '">' . $row['sap'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT sap FROM " . $frend . " WHERE sap IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT sap FROM " . $frend . " WHERE sap IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(sap), 2)  as `povprecje` FROM " . $frend . "");

						while($row = mysqli_fetch_array($result))
						  {
						  echo $row['povprecje'];
						  }
		               ?>
		              </h4></td>
		            </tr>


















		            <tr 
		              <?php 
		              $result = mysqli_query($link,"SELECT npap FROM frend");
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
		              <td><?php echo $predmet12; ?></td>
		              <td><p class="pull-left">
		              <form action="includes/odstrani-oceno-<?php echo $predmet11; ?>-frend.php" method="post" accept-charset="utf-8">
			              <div class="btn-group" data-toggle="buttons">
						<?php


						$result = mysqli_query($link,"SELECT `npap` FROM " . $frend . " WHERE npap IS NOT NULL");

						while($row = mysqli_fetch_array($result))
						  {
						  	echo '<label class="btn btn-info">';
						  	echo '<input type="radio" name="ocenaa" value="' . $row['npap'] . '">' . $row['npap'] .  '';
						  	echo "</label>";
						  }


						  ?>
						  </div>
			                <?php
    $allmails = mysqli_query($link,"SELECT npap FROM " . $frend . " WHERE npap IS NOT NULL");
    $num_rows = mysqli_num_rows($allmails);
    $result = mysqli_query($link,"SELECT npap FROM " . $frend . " WHERE npap IS NOT NULL");

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
						$result = mysqli_query($link,"SELECT ROUND(avg(npap), 2)  as `povprecje` FROM " . $frend . "");

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