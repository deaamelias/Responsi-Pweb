<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rumah Makan Padang</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="bio"><strong><font size="6">Data Pengunjung</font></strong><br><br>
	<form name="form1">
		<table width="48%" border="0" align="center">
			<?php
			echo "<head><title>Rumah Makan Padang</head></title>";
			$fp = fopen("pesanantamu.txt", "a+");
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$telp = $_POST['telp'];
			fwrite($fp, "\n==========================================\n");
			fwrite($fp, "            Rumah Makan Padang\n");
			fwrite($fp, "==========================================\n");
			fwrite($fp,"Nama     : $nama\nAlamat   : $alamat\nNo. Telp : $telp\n");
			fclose($fp);
			echo "<tr><td>Nama </td><td>:</td><td> $nama</td></tr>";
			echo "<tr><td>Alamat </td><td>:</td><td> $alamat</td></tr>";
			echo "<tr><td>No. Telp </td><td>:</td><td> $telp</td></tr>";		
			?>
			
		</table><br>
		<table width="58%" border="0" align="center">
			<h3>Silakan memilih menu</h3>
			<center><img src="makan.jpeg" width="300px" style="border-radius: 30px; border: 3px solid brown; padding: 5px;"></center><br>
			<a href=menu.php> Menu Makanan dan Minuman</a><br><a href=responsipweb.html> Kembali</a></table></form></div>
</body>
</html>