<?php 
include('koneksi.php');
	$nama = $_POST['nama'];
	$keahlian = $_POST['keahlian'];
	$alamat = $_POST['alamat'];
$query = "INSERT INTO post(nama,keahlian,alamat)values('$nama','$keahlian','$alamat')";
$hasil = mysql_query($query);
if ($hasil) {
	header("location:/bikin/");
}else{echo "maaf, gagal pastikan dengan benar!";}


 ?>
 <table>
 		<table>
 				<tr bgcolor="blue">
 					<td>NAMA</td>
 					<td>KEAHLIAN</td>
 					<td>ALAMAT</td>

 					</tr>

 				<tr><td></td></tr>
 		</table>
 </table>