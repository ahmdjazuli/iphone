<?php require('header.php'); ?>
<section id="Banner">
  <div class="logo">
    <img src="images/ds-logo.png" width="300px">
  </div>
  <div class="blacksection">
    <h1>Daftar Akun</h1>
  </div>
</section>
<a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
<footer id="Contact">
  <div class="container">
    <p>Isi username dan password baru.</p>
    <form action="" method="POST">
      <div class="left-section">
        <div class="form">
          <input type="text" name="username" class="form-field animation a3" placeholder="Username" autocomplete="off">
          <input type="password" name="password" class="form-field animation a4" placeholder="Password" autocomplete="off">
          <button class="animation a6" type="submit" id="daftar" name="daftar">DAFTAR</button>
        </div>
      </div>
      <div class="right-section2"></div>      
    </form>
  </div>
</footer>
 <div class="copyright"><p>Risa Asfia 18.71.0030</p>
</div>
</body>
</html>

<?php
  require('koneksi.php');error_reporting(0);
  if(isset($_POST['daftar'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $daftar = mysqli_query($kon, "INSERT INTO user (username, password, level) VALUES ('$username', '$password', 'user')");
    if($daftar){
      ?> <script>window.location='index.php#Contact';alert('berhasil daftar')</script> <?php
    }else{
      ?> <script>window.location='daftar.php';alert('gagal daftar')</script> <?php
    }
  }
?>