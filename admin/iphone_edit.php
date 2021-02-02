<?php require('header.php'); ?>
<?php 
  $idhp = $_GET['idhp'];
  $query = mysqli_query($kon, "SELECT * FROM datahp WHERE idhp = '$idhp'");
  $data = mysqli_fetch_array($query);
?>
<section style="background-color: pink; padding: 50px">
  <div class="container">
    <h2>Ubah Data iPhone</h2><br>
    <div class="card">
        <!-- /.card-header -->
        <form method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
              <label>Nama dan Rilis</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>">
                </div>
                  <input type="date" name="rilis" class="form-control" value="<?= $data['rilis'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Layar dan Chipset</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="layar" class="form-control" value="<?= $data['layar'] ?>">
                </div>
                  <input type="text" name="chipset" class="form-control" value="<?= $data['chipset'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>RAM dan Memori</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="ram" class="form-control" value="<?= $data['ram'] ?>">
                </div>
                  <input type="text" name="internal" class="form-control" value="<?= $data['internal'] ?>">
                  <input type="text" name="eksternal" class="form-control" value="<?= $data['eksternal'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Kamera, Baterai, Harga dan Jumlah</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="kamera" class="form-control" value="<?= $data['kamera'] ?>">
                  <input type="text" name="baterai" class="form-control" value="<?= $data['baterai'] ?>">
                </div>
                  <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>">
                  <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Foto Sebelumnya dan Ganti Foto</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <div class="text-center">
                    <img src="../<?= $data['foto'] ?>" width="200px">
                  </div>
                  <input type="hidden" name="fotoLama" value="<?= $data['foto'] ?>">
                </div>
                  <input type="file" name="foto" class="form-control"><br>
              </div>
            </div>
        </div>
          <div class="card-footer">
            <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
          </div>
        </div>
        </form>
        <!-- /.card-body -->
      </div>
  </div>
</section> 

 <div class="copyright"><p>Risa Asfia 18.71.0030</p>
</div>
</body>
</html>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $nama       = $_REQUEST['nama'];
    $rilis      = $_REQUEST['rilis'];
    $layar      = $_REQUEST['layar'];
    $chipset    = $_REQUEST['chipset'];
    $ram        = $_REQUEST['ram'];
    $internal   = $_REQUEST['internal'];
    $eksternal  = $_REQUEST['eksternal'];
    $kamera     = $_REQUEST['kamera'];
    $baterai    = $_REQUEST['baterai'];
    $harga      = $_REQUEST['harga'];
    $jumlah     = $_REQUEST['jumlah'];

    $foto      = $_FILES['foto']['error'];
    $fotoLama  = $_REQUEST['fotoLama'];
    $namafile  = $_FILES['foto']['tmp_name'];
    $lokasi    = "images/".$_FILES['foto']['name'];

    if($foto){
      $ubah =  mysqli_query($kon,"UPDATE datahp SET nama = '$nama', rilis = '$rilis', layar = '$layar', chipset = '$chipset', ram = '$ram', internal = '$internal', eksternal = '$eksternal', kamera = '$kamera', baterai = '$baterai', harga = '$harga', jumlah = '$jumlah', foto = '$fotoLama' WHERE idhp = '$idhp'");
    }else if(!$foto){
      unlink("../".$fotoLama);
      move_uploaded_file($namafile, '../'.$lokasi);
      $ubah =  mysqli_query($kon,"UPDATE datahp SET nama = '$nama', rilis = '$rilis', layar = '$layar', chipset = '$chipset', ram = '$ram', internal = '$internal', eksternal = '$eksternal', kamera = '$kamera', baterai = '$baterai', harga = '$harga', jumlah = '$jumlah', foto = '$lokasi' WHERE idhp = '$idhp'");
    }

    if($ubah){
      ?> <script>window.location = 'iphone.php';alert('berhasil disimpan')</script> <?php
    }else{
      ?> <script>window.location = 'iphone.php';alert('gagal disimpan')</script> <?php
    }
  }
 ?>