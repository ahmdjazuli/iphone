<?php require('header.php'); ?>
<section style="background-color: pink; padding-top: 100px; padding-bottom: 200px; padding-left: 50px; padding-right: 50px">
  <div class="container-fluix">
    <h2 style="display: inline">Data iPhone</h2>
      <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Rilis</th>
                <th>Layar</th>
                <th>Chipset</th>
                <th>RAM</th>
                <th>Memori Internal</th>
                <th>Memori Eksternal</th>
                <th>Kamera</th>
                <th>Baterai</th>
                <th>Harga</th>
                <th>Jumlah</th>
              </tr>
              <?php 
                $mysql = "SELECT * FROM datahp";
                $myQry = mysqli_query($kon, $mysql) or die ("Query Salah : ".mysqli_error($kon));
                $no = 1;
                while($kolomData = mysqli_fetch_array($myQry)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $kolomData['nama'] ?></td>
                <td><img src="../<?php echo $kolomData['foto'] ?>" width="100px"></td>
                <td><?php echo $kolomData['rilis'] ?></td>
                <td><?php echo $kolomData['layar'] ?></td>
                <td><?php echo $kolomData['chipset'] ?></td>
                <td><?php echo $kolomData['ram'] ?></td>
                <td><?php echo $kolomData['internal'] ?></td>
                <td><?php echo $kolomData['eksternal'] ?></td>
                <td><?php echo $kolomData['kamera'] ?></td>
                <td><?php echo $kolomData['baterai'] ?></td>
                <td>Rp. <?= number_format($kolomData['harga'],0,'.','.') ?></td>
                <td><?php echo $kolomData['jumlah'] ?></td>
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