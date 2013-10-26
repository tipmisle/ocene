<?php include 'includes/header.php'; ?>

<div class="container main">
	<div class="row">
<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = mysqli_query($con, "SELECT * FROM uporabniki WHERE id='$id'");
        $uporabnik = mysqli_fetch_array($sql);

        echo '
            <div class="col-lg-8">
                <div class="panel panel-default">
                  <div class="panel-body">
                        <div class="col-lg-3 no-padding"><img width="100%" src="' . $uporabnik['slika'] . '"></div>
                        <div class="col-lg-9">
                            <p><b>Ime</b>: &nbsp;' . $uporabnik['ime_priimek'] . '</p>
                            <p><b>Sol</b>: &nbsp;' . $uporabnik['spol'] . '</p>
                            <p><b>Razred</b>: &nbsp;' . $uporabnik['razred'] . '</p>
                        </div>
                  </div>
                </div>
            </div>
        ';
          echo '
              <div class="col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading">Uporabniki</div>
        <div class="panel-body">
        <ul class="uporabniki">';
    $result = mysqli_query($con, "SELECT * FROM uporabniki");
    while ($uporabnik = mysqli_fetch_assoc($result)) {
      echo '<li clas="col-lg-12">';
      echo '<div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"><img width="100%" src="' . $uporabnik['slika'] . '"></div>';
      echo '<div class="col-lg-10 col-md-11 col-sm-11 col-xs-11"><a href="profil.php?id=' . $uporabnik['id'] . '">' . $uporabnik['ime_priimek'] . ', ' . $uporabnik['razred'] . '</a></div>';
      echo '</li>';
    }

       echo '</ul>
        </div>
      </div>
    </div>

    ';
        echo '
        <div class="col-lg-8">
          <div class="panel panel-default">
          <div class="panel-heading">Dodaj komentar (<b>Anonimno</b>)</div>
          <div class="panel-body">
            <form role="form" action="dodaj-komentar.php?id='. $id . '" method="POST" class="col-lg-12">
              <div class="form-group">
                <textarea class="form-control" name="vsebina" placeholder="Vsebina komentarja..."></textarea>
                <input type="hidden" name="uporabnik" value="' . $id . '">
                <input type="hidden" name="datum" value="">
                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Dodaj</button>
              </div>
            </form>
           </div>
         </div>
         </div>

        <div class="col-lg-8">
          <div class="panel panel-default">
          <div class="panel-heading">Vsi komentarji</div>
            <div class="panel-body">
              ';
              $query = mysqli_query($con, "SELECT * FROM komentarji WHERE  uporabnikid='" . $_GET['id'] . "' ORDER BY datum");
              while ($komentar = mysqli_fetch_array($query)) {
                $idkomentar = $komentar['id'];
              echo '
                <div class="komentar col-lg-12">
                  ';
                  if (isset($_GET['g']) && $_GET['g']=="miha") {
                            echo $izbrisikomentar = '<a href="izbrisi_komentar.php?id=' . $idkomentar . '"><button class="btn btn-danger btn-xs pull-right">Izbriši</button></a>';
                  } else {
                    echo "";
                  }
                  echo '
                  <p class="pull-left"><b>' . $komentar['datum'] . '</b>: &nbsp;</p>
                  <p>' . $komentar['vsebina'] . '</p>
                </div>
            ';
              }
              echo '
             </div>
          </div>
        </div>
          ';
    } else {
        echo "non";
    }

 ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>