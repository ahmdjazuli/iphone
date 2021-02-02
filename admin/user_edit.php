<?php require('header.php'); ?>
<?php 
  $id = $_GET['id'];
  $query = mysqli_query($kon, "SELECT * FROM user WHERE id = '$id'");
  $data = mysqli_fetch_array($query);
?>
<section style="background-color: pink; padding: 200px">
  <div class="container">
    <h2>Ubah Data Pengguna</h2><br>
    <div class="card">
        <!-- /.card-header -->
        <form method="POST">
        <div class="card-body">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" value="<?= $data['password'] ?>">
            </div>
            <div class="form-group">
              <label>Level</label>
              <select class="form-control" name="level">
                <option  value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
                <?php 
                  if($data['level']=='admin'){
                    ?>
                      <option value="user">user</option>
                    <?php
                  }else if($data['kategori']=='user'){
                    ?>
                      <option value="admin">admin</option>
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
    $username   = $_REQUEST['username'];
    $password   = $_REQUEST['password'];
    $level      = $_REQUEST['level'];
    
    $ubah = mysqli_query($kon,"UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id = '$id'");

    if($ubah){
      ?> <script>window.location = 'user.php';alert('berhasil diubah')</script> <?php
    }else{
      ?> <script>window.location = 'user.php';alert('gagal diubah')</script> <?php
    }
  }
 ?>