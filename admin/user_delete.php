<?php
	error_reporting(0);
	require_once("../koneksi.php");
	$id = $_REQUEST['id'];
	mysqli_query($kon, "DELETE FROM user WHERE id='$id'");
	?> <script>window.location='user.php';alert('data berhasil dihapus')</script> <?php
?>