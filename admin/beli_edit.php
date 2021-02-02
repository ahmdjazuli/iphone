<?php require('header.php'); error_reporting(0); require('../koneksi.php'); 
  $idbeli = $_GET['idbeli'];
  $query = mysqli_query($kon, "SELECT * FROM beli INNER JOIN datahp ON beli.idhp = datahp.idhp INNER JOIN user ON beli.id = user.id WHERE idbeli = '$idbeli'");
  $data = mysqli_fetch_array($query);
?>
<section style="background-color: pink; padding: 50px; padding-bottom: 200px">
  <div class="container">
    <h2>Ubah Data Beli</h2><br>
    <div class="card">
        <!-- /.card-header -->
        <form method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
              <label>Nama Pembeli dan HP nya</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" name="nama" class="form-control" value="<?= $data['nama']?>" readonly>
                </div>
                  <input type="text" name="username" class="form-control" value="<?= $data['username']?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Jumlah dan Harga</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="number" name="berapa" class="form-control" value="<?= $data['berapa'] ?>" readonly>
                </div>
                  <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option  value="<?= $data['status'] ?>"><?= $data['status'] ?></option>
                <?php 
                  if($data['status']=='Belum Dikonfirmasi'){
                    ?>
                      <option value="Dikonfirmasi">Dikonfirmasi</option>
                    <?php
                  }else if($data['status']=='Dikonfirmasi'){
                    ?>
                      <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
                    <?php
                  }
                ?>
              </select>
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
    $status  = $_REQUEST['status'];

      $ubah = mysqli_query($kon,"UPDATE beli SET status = '$status' WHERE idbeli = '$idbeli'");
      if($ubah){
        ?> <script>window.location = 'beli.php'; alert('Berhasil diubah')</script> <?php
      }else{
        ?> <script>window.location = 'beli_edit.php'; alert('Gagal diubah')</script> <?php
    }
  }
 ?>
