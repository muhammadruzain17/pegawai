<?php
	
	include "koneksi.php";
	$id =$_POST['id'];
	
	$connect->query("DELETE FROM tb_pegawai WHERE id=".$id);
?>