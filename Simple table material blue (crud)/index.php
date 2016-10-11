<!DOCTYPE html>
<html>
<head>
	<title>LIST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<style type="text/css">
	body{background: #333;
}
.tambah a {
    padding: 12px 12px 9px 12px;
    background: #009dea;
    border-bottom: 4px solid #009dea;
    transition: 200ms;
    float: right;
    text-decoration: none;
    position: fixed;
    border-radius: 4px;
    font-family: calibri;
    right: 20px;
    color: #fff;
    bottom: 20px;
}
 

table {
    margin: 4px auto;
    padding: 20px;
    border-radius: 1px;
    font-size: 12pt;
    background: #fff;
    font-family: monospace;
z-index: 9}
td {
    background: #fff;
    border-bottom: 1px solid #eaeaea;}
tr {height: 55px;}
tr:hover {color: #949494;}
.tambah a:active {margin: -1px;background:#008ace}  
</style>
<div class="tambah"><a href="/bikin/form-input.php" title="tambahkan data baru">TAMBAHKAN DATA</a></div>
<table border="0">
 				<tr >
 					<td style="background: #009dea;padding: 20px;color: #fff;">NAMA</td>
 					<td style="background: #009dea;padding: 20px;color: #fff;">KEAHLIAN</td>
 					<td style="background: #009dea;padding: 20px;color: #fff;">ALAMAT</td>

 					</tr>
<?php include('koneksi.php');
$query = "SELECT * FROM post";
$hasil = mysql_query($query);
		$hasil = mysql_query($query);
		while($data = mysql_fetch_array($hasil)) {
			echo '
 				<tr style="text-align:justify">
 				
 				<td>'.$data['nama'].'</td>
 				<td>'.$data['keahlian'].'</td>
 				<td>'.$data['alamat'].'</td>

 				</tr>
 		';

			}


 ?>	
 </table>
</body>
</html>
