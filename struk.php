<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Struk Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="bio"><h2>&#127835;Pesanan Anda&#127835;</h2>
	<form name="form1">
		<table width="48%" border="0" align="center">
			<?php
			$fp = fopen("pesanantamu.txt", "a+");
			$b=$_POST['bayar'];
			$t=$_POST['total'];
			$kali=-1;
			fwrite($fp, "==========================================\n");
			fwrite($fp, "Bayar				Rp.$b\n");
			echo "Bayar   = Rp.$b<br>";
			$kembali=$t-$b;
			$k=$kembali*$kali;
			echo "Kembali = Rp.$k<br>";
			fputs($fp, "Kembali				Rp.$k\n");
			fwrite($fp, "====== Terima Kasih Sudah Berkunjung =====\n");
			echo "====== Terima Kasih Sudah Berkunjung ======";
			fclose($fp);
			?>
				
			</table><br>
			<table width="58%" border="0" align="center">
				<center><img src="makan.jpeg" width="300px" style="border-radius: 30px; border: 3px solid brown; padding: 5px;"></center><br>
				<a href=responsipweb.html> Pesan Makanan</a></table></form></div>
</body>
</html>