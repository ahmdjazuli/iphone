<?php require('header.php'); require('../koneksi.php'); 
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
              <label>Nama Hp dan Jumlah</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                    <select name="idhp" class="form-control" onchange='ubahwoy(this.value)'>
                      <option value="<?= $data['idhp'] ?>"><?= $data['nama'] ?></option>
                      <?php
                        $ahay = mysqli_query($kon, "SELECT * FROM datahp ORDER BY nama ASC");
                        $a          = "var harga = new Array();\n;";
                          while($baris = mysqli_fetch_array($ahay)) {
                             echo "<option value='$baris[idhp]'>$baris[nama]</option>";
                            $a .= "harga['" . $baris['idhp'] . "'] = {harga:'" . addslashes($baris['harga'])."'};\n";
                          } 
                        ?>
                    </select>
                </div>
                  <input type="number" name="berapa" class="form-control" value="<?= $data['berapa'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Harga dan Bukti Pembayaran</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" id="harga" name="harga" class="form-control" placeholder="harga" readonly>
                </div>
                  <input type="file" name="bukti" class="form-control"><br>
                  <div class="text-center">
                  <img src="../<?= $data['bukti'] ?>" width="200px">
                  </div>
                  <input type="hidden" name="buktiLama" value="<?= $data['bukti'] ?>">
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
  date_default_timezone_set('Asia/Kuala_Lumpur');
  if (isset($_POST['simpan'])) {
    $idhp       = $_REQUEST['idhp'];
    $berapa     = $_REQUEST['berapa'];
    $harga      = $_REQUEST['harga'];
    $total      = $berapa * $harga;

    $bukti      = $_FILES['bukti']['error'];
    $buktiLama  = $_REQUEST['buktiLama'];
    $namafile   = $_FILES['bukti']['tmp_name'];
    $lokasi     = "images/".$_FILES['bukti']['name'];

    if($bukti){
      $ubah = mysqli_query($kon,"UPDATE beli SET bukti = '$buktiLama', total = '$total', berapa = '$berapa', idhp = '$idhp' WHERE idbeli = '$idbeli'");
    }else if(!$bukti){
      unlink("../".$buktiLama);
      move_uploaded_file($namafile, '../'.$lokasi);
      $ubah = mysqli_query($kon,"UPDATE beli SET bukti = '$lokasi', total = '$total', berapa = '$berapa', idhp = '$idhp' WHERE idbeli = '$idbeli'");
    }

      if($ubah){
        ?> <script>window.location = 'beli.php';alert('berhasil ubah');</script> <?php
      }else{
        ?> <script>window.location = 'beli.php'; alert('gagal ubah');</script> <?php
      }
  }
 ?>

<script type="text/javascript">   
  <?php   
    echo $a;
  ?>   
        function ubahwoy(id){  
            document.getElementById('harga').value = harga[id].harga; 
        };   
</script> 
