<?php
session_start();

include "connect.php";
if ((isset($_POST['u'])) AND (isset($_POST['p']))) {
	$u=$_POST['u'];
	$p=$_POST['p'];

	$qr="select * from admin where username='".$u."' AND password='".$p."'";
	$result=mysqli_query($koneksi_server,$qr);
	$n=mysqli_num_rows($result);
	if ($n<>0) {
		while ($hasil=mysqli_fetch_array($result)) {
			//buat session
			$_SESSION['ID']=$hasil['id'];
			$_SESSION['USER']=$hasil['username'];
			$_SESSION['HAK']=$hasil['hak_akses'];

			if ($hasil['hak_akses']==1) {
				header('location:http://localhost/Finalpro/admin/dashboard.php');
			}
			else {
				header('location:http://localhost/Finalpro/user/dashboard.php');
			}
		}
	}
	else{
		echo "Login Gagal. Periksa Username dan Password<br>";
		echo "<a href='index.php>Kembali</a>";
	}
}
else{
	echo "Acces Denied";
}
?>