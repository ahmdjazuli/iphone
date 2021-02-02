<?php require('header.php'); require('tgl_indo.php');error_reporting(0); require('koneksi.php'); 
  $idhp = $_GET['idhp'];
  $query = mysqli_query($kon, "SELECT * FROM datahp WHERE idhp = '$idhp'");
  $data = mysqli_fetch_array($query);
?>
<section id="Banner">
  <div class="logo">
    <img src="<?= $data['foto'] ?>" width="300px" style="margin-top: -100px; border-radius: 10px; border-style: double; border-color: black;">
  </div>
  <div class="blacksection">
    <h1><?= $data['nama'] ?></h1>
  </div>
</section>
<a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
<section id="Services">
  <div class="container">
    <h2>Spesifikasi</h2>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Rilis</h3>
          <b><?= tgl_indo($data['rilis']) ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Layar</h3>
          <b><?= $data['layar'] ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Chipset</h3>
          <b><?= $data['chipset'] ?></b>
        </div>
      </div>
    </div> <!-- akhir row -->
    <br><br>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>RAM</h3>
          <b><?= $data['ram'] ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Memori Internal</h3>
          <b><?= $data['internal'] ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Memori Eksternal</h3>
          <b><?= $data['eksternal'] ?></b>
        </div>
      </div>
    </div> <!-- akhir row -->
    <br><br>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Kamera</h3>
          <b><?= $data['kamera'] ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Baterai</h3>
          <b><?= $data['baterai'] ?></b>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <h3>Harga(stok yang tersedia)</h3>
          <b>Rp. <?= number_format($data['harga'],0,'.','.').' ('.$data['jumlah'].')'; ?></b>
        </div>
      </div>
    </div> <!-- akhir row -->
  </div>
</section>
 <div class="copyright"><p>Risa Asfia 18.71.0030</p>
</div>
</body>
</html>