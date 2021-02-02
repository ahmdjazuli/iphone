<?php require('header.php'); ?>
<section style="background-color: pink; padding-top: 100px; padding-bottom: 200px; padding-left: 50px; padding-right: 50px">
  <div class="container-fluix">
    <h2 style="display: inline">Data Pembelian iPhone</h2>
    <a style="margin-left: 5px; margin-bottom: 10px;" href="cetak.php"class="btn btn-warning">cetak</a><br>
      <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>No.Beli</th>
                <th>Pembeli</th>
                <th>Nama HP</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Bukti Pembayaran</th>
                <th>Status</th>
                <th>Tools</th>
              </tr>
              <?php 
                $mysql = "SELECT * FROM beli INNER JOIN datahp ON beli.idhp = datahp.idhp INNER JOIN user ON beli.id = user.id";
                $myQry = mysqli_query($kon, $mysql) or die ("Query Salah : ".mysqli_error($kon));
                $no = 1;
                while($kolomData = mysqli_fetch_array($myQry)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $kolomData['tgl'] ?></td>
                <td><?php echo $kolomData['nobeli'] ?></td>
                <td><?php echo $kolomData['username'] ?></td>
                <td><?php echo $kolomData['nama'] ?></td>
                <td><?php echo $kolomData['berapa'] ?></td>
                <td>Rp. <?= number_format($kolomData['total'],0,'.','.') ?></td>
                <td><img src="../<?php echo $kolomData['bukti'] ?>" width="150px"></td>
                <td><?php echo $kolomData['status'] ?></td>
                <td>
                  <a href="beli_edit.php?idbeli=<?php echo $kolomData['idbeli']; ?>" title="Edit Data" class="btn btn-primary btn-sm">E</a>
                  <a href="beli_delete.php?idbeli=<?php echo $kolomData['idbeli'] ?>" title="Hapus Data" onclick="confirm('Yakin menghapus Data ini?')" class="btn btn-danger btn-sm">H</a>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
  </div>
</section> 

 <div class="copyright"><p>Risa Asfia 18.71.0030</p>
</div>
</body>
</html>