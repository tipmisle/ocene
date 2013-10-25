	<nav class="navbar navbar-default navbar-fixed-top animated fadeInDownBig" role="navigation">
		<div class="container">
			<div class"row">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="index.php"><b><?php echo $ime; ?></b></a>
			  </div>

			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav">
			      <li class=""><a href="index.php">Ocene</a></li>
			      <li class=""><a href="povprecje.php">Povprečje skupaj</a></li>
			    </ul>
			    <form class="navbar-right" style="margin: 7px 0 0 5px;" role="search">
					<div class="btn-group">
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
					   <i class="glyphicon glyphicon-plus-sign"></i> Dodaj <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					    <li><a href="josip-dodaj.php">Josip Rajković</a></li>
					    <li><a href="frend-dodaj.php">Marcel Petrovič</a></li>
					  </ul>
					</div>
			    </form>
			    <form class="navbar-right" style="margin: 7px 0 0 0px;" role="search">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					    <i class="glyphicon glyphicon-tree-deciduous"></i> <b>Dodatno</b> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu">
					      <li class=""><a href="changelog.php"><b>Changelog</b></a></li>
					      <li class=""><a href="bugreport.php"><b>Bugreport</b></a></li>
					      <li class=""><a href="ideje.php"><b>Ideje</b></a></li>
					  </ul>
					</div>
			    </form>
			  </div><!-- /.navbar-collapse -->
			</div>
	  </div>
	</nav>
	<div style="width: 100%; height: 70px; float: left;"></div>