<?php require('header.php'); ?>
<section id="Banner">
  <div class="logo">
    <img src="images/ds-logo.png" width="300px">
  </div>
  <div class="blacksection">
    <h1>iPhone<br>Universe<br>by Risa Asfia</h1>
  </div>
</section>
<a href="#Services" class="mscroll"><img src="images/mouse-icon.png" alt="mouse icon"></a>
<section id="Services">
  <div class="container">
    <h2>Layanan Kami</h2>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <img src="images/bulat3.png" alt="Services">
          <h3>Pemasaran Digital</h3>
          <p>Pada tingkat tinggi istilah ini mencakup berbagai aktivitas pemasaran, yang semuanya tidak disetujui secara universal, kami akan fokus pada jenis yang paling umum.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <img src="images/bulat2.png" alt="Services">
          <h3>Target</h3>
          <p>Untuk bisnis saat ini, situs web harus menjadi ujung tombak Percepatan Permintaan dengan mengundang, menginformasikan, dan melibatkan target konsumen.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="each-services">
          <img src="images/bulat1.png" alt="Services">
          <h3>Alam Semesta</h3>
          <p>Seperti namanya, iPhone Universe mempunyai berbagai macam jenis iPhone yang paling lengkap, murah dan terjangkau di Alam Semesta;)</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="OurWork">
  <div class="container">
    <h2>Produk Terbaru</h2>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="grey-box">
          <img src="images/sponser.png" alt="Sponser">
          <div class="sponser">
            <h4>*PASANG IKLAN*</h4>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <?php 
          require('koneksi.php');
          $query = mysqli_query($kon, "SELECT * FROM datahp ORDER BY rilis ASC");
            while($data = mysqli_fetch_array($query)){ ?>
              <div class="each-work space">
                <a href="iphoneku.php?idhp=<?= $data['idhp'] ?>" target="_blank"><img src="<?= $data['foto'] ?>" height="140px"></a>
              </div>
            <?php }
        ?>
      </div>
    </div>
  </div>
</section> 
<section id="Testimonials">
   <div class="container">
    <h2>Testimoni</h2>
    <p>Masih belum percaya? Beli berbagai macam produk iphone berkualitas tinggi dengan harga murah di iPhone Universe. <br>Berikut beberapa testimoni dari konsumen,</p>
    <div class="testi-wrapper">
        <div class="latest-testimonials each-testi">
          <div class="division">
            <span>03.</span> 
            <div class="title">
              <h4>Testimoni</h4>
              <h6>Read our clients thoughts..</h6>
            </div>
          </div>
          <p>You have surely made an impression with the awesome above!But, here is your chance to make the most of it. Display testimonials and boost your website conversions!</p>
        </div>
        <div class="old-testimonials each-testi">
          <p>Barangnya sudah saya terima, Jujur aku tuh suka banget ya sama iphone x ini, sebelumnya aku gak pernah pakai sistem operasi yang ini karena terakhir tuh iphone 6. Saya juga lebih suka modelnya karena lebih tipis dan ukuran layarnya lebih luas.</p>
          <div class="profile">
            <img src="images/user-profile-one.png" alt="">
            <div class="designation">
              <h6>Pigellita Atina</h6>
              <p>Puas sama layarnya</p>
            </div>
          </div>
        </div>
        <div class="old-testimonials each-testi no-margin">
          <p>Barang original, harga terbaik, service dan pengiriman super express. Thank you so much!!! <br><br> Auto jadi langganan.</p>
          <div class="profile">
            <img src="images/user-profile-two.png" alt="">
            <div class="designation">
              <h6>Ariesta Gundula Pipit</h6>
              <p>Selalu puas sama produk Apple</p>
            </div>
          </div>
        </div>
      </div>
   </div>
</section>
<footer id="Contact">
  <div class="container">
    <p>Apabila anda belum memiliki akun, silahkan <a href="daftar.php" style="color: pink"><b>Daftar</b></a>.</p>
    
    <a href="masuk.php" class="email-btn"><span><i class="fa fa-envelope-o" aria-hidden="true"></i>Login</span></a>
    <ul class="social-icons">
      <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</footer>
 <div class="copyright"><p>Risa Asfia 18.71.0030</p>
</div>
</body>
</html>