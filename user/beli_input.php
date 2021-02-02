<?php require('header.php'); ?>
<section style="background-color: pink; padding: 50px; padding-bottom: 200px">
  <div class="container">
    <h2>Tambah Data Beli</h2><br>
    <div class="card">
        <!-- /.card-header -->
        <form method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
              <label>Nama Hp dan Jumlah</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="hidden" name="id" value="<?= $skuy['id']?>">
                    <select name="idhp" class="form-control" onchange='ubahwoy(this.value)'>
                      <option disabled selected>Pilih</option>
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
                  <input type="number" name="berapa" class="form-control" placeholder="berapa">
              </div>
            </div>
            <div class="form-group">
              <label>Harga dan Bukti Pembayaran</label>
              <div class="input-group input-group-mb">
                <div class="input-group-prepend" style="width: 50%">
                  <input type="text" id="harga" name="harga" class="form-control" placeholder="harga" readonly>
                </div>
                  <input type="file" name="foto" class="form-control">
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
    $id         = $_REQUEST['id'];
    $idhp       = $_REQUEST['idhp'];
    $nobeli     = date('Ymd').$idhp.$berapa;
    $berapa     = $_REQUEST['berapa'];
    $harga      = $_REQUEST['harga'];
    $total      = $berapa * $harga;
    $tgl        = date('Y-m-d');

    $namafile       = $_FILES['foto']['tmp_name'];
    $namafoto       = $_FILES['foto']['name'];
    $lokasi         = "images/".$_FILES['foto']['name'];
    
    move_uploaded_file($namafile, '../'.$lokasi);

    $tambah = mysqli_query($kon,"INSERT INTO beli (id, idhp, nobeli, berapa, total, bukti, tgl, status) VALUES ('$id','$idhp','$nobeli','$berapa','$total','$lokasi','$tgl', 'Belum Dikonfirmasi')");
    if($tambah){
      $query = mysqli_query($kon, "SELECT * FROM iphone WHERE idhp = '$idhp'");
      $data = mysqli_fetch_array($query);
      $total = $data['jumlah']-$berapa;
      mysqli_query($kon, "UPDATE iphone SET jumlah = '$total' WHERE idhp = '$idhp'");

      ?> <script>window.location='beli.php';alert('berhasil disimpan');</script> <?php
    }else{
      ?> <script>window.location='beli_input.php';alert('gagal disimpan');</script> <?php
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
