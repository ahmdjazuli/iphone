<?php require('header.php'); ?>
<section id="Banner">
  <div class="logo">
    <img src="images/ds-logo.png" width="300px">
  </div>
  <div class="blacksection">
    <h1>Yuk bisa <br> Yuk masuk</h1>
  </div>
</section>
<a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
<footer id="Contact">
  <div class="container">
    <p>Gunakan akun yang sudah terdaftarkan.</p>
    <form action="cek_login.php" method="POST">
      <div class="left-section">
        <div class="form">
          <input type="text" name="username" class="form-field animation a3" placeholder="Username" autocomplete="off">
          <input type="password" name="password" class="form-field animation a4" placeholder="Password" autocomplete="off">
          <button class="animation a6" type="submit" id="daftar" name="login">LOGIN</button>
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