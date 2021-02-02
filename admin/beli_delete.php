<?php
	error_reporting(0);
	require_once("../koneksi.php");
	$idBeli = $_REQUEST['idBeli'];
	$query = mysqli_query($kon, "SELECT * FROM beli WHERE idBeli='$idBeli'");
	$data = mysqli_fetch_array($query);
	unlink('../'.$data['bukti']);
	mysqli_query($kon, "DELETE FROM beli WHERE idBeli='$idBeli'");
	?> <script>window.location='beli.php';alert('berhasil dihapus')</script> <?php
?>