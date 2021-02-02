<?php require('header.php'); ?>
<section style="background-color: pink; padding: 50px">
  <div class="container">
    <h2>Tambah Data iPhone</h2><br>
    <div class="card">
        <!-- /.card-header -->
        <form method="POST">
        <div class="card-body">
            <div class="form-group">
              <label>Nama dan Rilis</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="nama" class="form-control" placeholder="nama">
                </div>
                  <input type="date" name="rilis" class="form-control" placeholder="rilis">
              </div>
            </div>
            <div class="form-group">
              <label>Layar dan Chipset</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="layar" class="form-control" placeholder="layar">
                </div>
                  <input type="text" name="chipset" class="form-control" placeholder="chipset">
              </div>
            </div>
            <div class="form-group">
              <label>RAM dan Memori</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="ram" class="form-control" placeholder="ram">
                </div>
                  <input type="text" name="internal" class="form-control" placeholder="internal">
                  <input type="text" name="eksternal" class="form-control" placeholder="eksternal">
              </div>
            </div>
            <div class="form-group">
              <label>Kamera, Baterai, Harga dan Jumlah</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="kamera" class="form-control" placeholder="kamera">
                  <input type="text" name="baterai" class="form-control" placeholder="baterai">
                </div>
                  <input type="number" name="harga" class="form-control" placeholder="harga">
                  <input type="number" name="jumlah" class="form-control" placeholder="jumlah">
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
    
    $tambah = mysqli_query($kon, "INSERT INTO datahp (nama, rilis, layar, chipset, ram, internal, eksternal, kamera, baterai, harga, jumlah) VALUES ('$nama','$rilis','$layar','$chipset','$ram','$internal','$eksternal','$kamera','$baterai','$harga','$jumlah')");

    if($tambah){
      ?> <script>window.location = 'iphone.php';alert('berhasil disimpan')</script> <?php
    }else{
      ?> <script>window.location = 'iphone_input.php';alert('gagal disimpan')</script> <?php
    }
  }
 ?>