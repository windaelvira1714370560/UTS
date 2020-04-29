<?php 
include "koneksi.php"; 
$query=mysql_query("select * from biodata"); 
$jumlah=mysql_num_rows($query); 
echo "Jumlah data ada : ".$jumlah; 
?> 
<table border="1"> 
<tr> 
 <th>Nomor</th>
 <th>Nama</th>
<th>NPM</th>  
 <th>Kelas</th>
 <th>HOBI</th> 
 <th>Warna Kesukaan</th> 
 <th>Alamat</th> 
 <th>Usia</th> 
</tr> 
<?php 
while($row=mysql_fetch_array($query)){ 
?> 
<tr> 
 <td><?php echo $c=$c+1;?></td> 
 <td><?php echo $row['nama'];?></td> 
 <td><?php echo $row['npm'];?></td> 
 <td><?php echo $row['kelas'];?></td> 
<td><?php echo $row['hobi'];?></td> 
<td><?php echo $row['warna'];?></td> 
 <td><?php echo $row['alamat'];?></td> 
 <td><?php echo $row['usia'];?></td> 
 <td>
 <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda 
yakin?')">Hapus</a> 
 <a href="tambah.php?id=<?php echo $row['id']; ?>">Tambah</a> 
 </td> 
<?php 
} 
?> 
</table><br /> 
<a href="form.php">Input data form</a>