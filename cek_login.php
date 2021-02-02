<?php 
session_start();
require "koneksi.php";

	$username 	= $_REQUEST['username'];
	$password	= $_REQUEST['password'];

	$query = mysqli_query($kon, "SELECT * FROM user WHERE username='$username' AND password = '$password'");

	$cek  = mysqli_num_rows($query);

		if($cek > 0){
			$data = mysqli_fetch_assoc($query);
			if($data['level'] == 'admin'){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "admin";
				header("location:admin/index.php");
			}else if($data['level'] == 'user'){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "user";
				header("location:user/index.php");
			}	
		}else{
			 ?><script>window.location="masuk.php"; alert('Username/Password Salah'); </script><?php
		}			
?>