<?php require('header.php'); ?>
<section style="background-color: pink; padding: 200px">
  <div class="container">
    <h2>Data Pengguna</h2><br>
      <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered text-center">
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Tools</th>
              </tr>
              <?php 
                $mysql = "SELECT * FROM user";
                $myQry = mysqli_query($kon, $mysql) or die ("Query Salah : ".mysqli_error($kon));
                $no = 1;
                while($kolomData = mysqli_fetch_array($myQry)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $kolomData['username'] ?></td>
                <td><?php echo $kolomData['password'] ?></td>
                <td><?php echo $kolomData['level'] ?></td>
                <td><?php
                  if($kolomData['level']!='admin'){ ?>
                    <a href="user_delete.php?id=<?php echo $kolomData['id'] ?>" title="Hapus Data" onclick="confirm('Yakin menghapus Data ini?')" class="btn btn-danger btn-sm">hapus</a>
                <?php } ?>
                  <a href="user_edit.php?id=<?php echo $kolomData['id']; ?>" title="Edit Data" class="btn btn-primary btn-sm">edit</a>
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