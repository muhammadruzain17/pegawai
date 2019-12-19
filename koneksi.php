<?php
	
	$connect = new mysqli("localhost", "root", "", "db_perusahaan");
	if(!$connect)
	{
		echo "Koneksi Gagal";
		exit();
	}
?>