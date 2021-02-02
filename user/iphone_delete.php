<?php
	error_reporting(0);
	require_once("../koneksi.php");
	$idhp = $_REQUEST['idhp'];
	mysqli_query($kon, "DELETE FROM datahp WHERE idhp='$idhp'");
	?> <script>window.location='iphone.php';alert('data berhasil dihapus')</script> <?php
?>