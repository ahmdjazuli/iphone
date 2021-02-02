<?php 
require "../koneksi.php";
	
	$result = mysqli_query($kon, "SELECT * FROM beli INNER JOIN datahp ON beli.idhp = datahp.idhp INNER JOIN user ON beli.id = user.id ORDER BY tgl ASC");
?>

<!DOCTYPE html>
<html lang="id, in">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css.map">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css.map">

	<title>Cetak Data Beli iPhone</title>

	<style>
		hr{ border: 4px; border-style: double; width: 82%; }
		.wew{ margin-right: 15%; }
		.wow{ margin-left: 9%; float: left }		
		#kiri{
			width: 50%; height: 100px; float:left; font-weight: normal;
		}
		#kanan{
			width: 50%; height: 100px; float:right; font-weight: normal;
		}
		th{text-align:center;}
	</style>

</head>
<body>

	<!-- kop kelurahan -->
	<div class="container-fluix"><br>
		<img src="images/apple-icon.png" style="width: 100px" class="float-left wow">
		<p class="text-center wew"><b>
			<font size="6"><span  style="color: #e6255d">iPhone Universe</span></font>
			<br>
			<span style="font-weight: 400;">Jalan Gunung Manggis Kelapa Sawit no.46 Rt. 3 Rw. 7 Banjarbaru</span>
			<br>
		    <span style="font-weight: 400;">Telp. (0511) 1784124 Fax. (0511) 8912384</span>
		</p>
		<hr>
	</div>
	<!-- akhir kop -->
<br>
	<!-- container form inputan -->
<div class="container">
  <!-- tabel buat nampilin data -->
  <table class="table table-bordered table-sm" border="1px" style="font-weight: 400;">
    <thead class="text-center">
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
      </tr>
    </thead>
<?php 
$i = 1;

while( $data = mysqli_fetch_array($result) ) :
 ?> 
<tr class="text-center">
  	  <td><?= $i++ ?></td>
	  <td><?= $data['tgl'] ?></td>
	  <td><?= $data['nobeli'] ?></td>
	  <td><?= $data['username'] ?></td>
	  <td><?= $data['nama'] ?></td>
	  <td><?= $data['berapa'] ?></td>
	  <td>Rp. <?= number_format($data['total'],0,'.','.') ?></td>
	  <td><?= $data['status'] ?></td>
	  <td>
	    <img src="<?= '../'.$data['bukti'] ?>" width="80px">
	  </td>
</tr>
<?php endwhile; ?>
  </table>
<!-- akhir table -->
</div>
<br><br><br>
<script type="text/javascript">
	ratatengah = document.querySelectorAll('td');
	ratatengah.forEach(function(e){ e.style.verticalAlign = 'middle'; });
	window.print();
</script> 	
</body>
</html>