<?php 
include "koneksi.php"; 
$nama=$_POST['nama']; 
$npm=$_POST['npm']; 
$kelas=$_POST['kelas']; 
$hobi=$_POST['hobi']; 
$warna=$_POST['warna']; 
$alamat=$_POST['alamat']; 
$usia=$_POST['usia']; 
$query=mysql_query("insert into biodata (nama,npm,kelas,hobi,warna,alamat, usia) value('$nama','$npm','$kelas','$hobi','$warna','$alamat','$usia')"); 
if($query){ 
 echo "Berhasil input data ke database "; 
 ?><a href="tabel.php">Lihat data di Tabel</a><?php
}else{ 
 echo "Gagal input data"; 	
 echo mysql_error(); 
} 
?>