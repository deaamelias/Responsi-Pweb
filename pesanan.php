<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pesanan</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="bio"><h2>&#127835;Pesanan Anda&#127835;</h2>
	<form name="form1">
		<table width="48%" border="0" align="center">
			<?php
			echo "<head><title>Pesanan Rumah Makan Padang</head></title>";
			$fp = fopen("pesanantamu.txt", "a+");
			fwrite($fp, "==========================================\n");
			fwrite($fp, "                   Menu\n");
			$tots=0;
			$hrg=array("mkn1" => 20000, "mkn2" => 20000, "mkn3" => 20000, "mkn4" => 15000, "mkn5" => 19000, "mkn6" => 25000, "mkn7" => 25000, "mkn8" => 5000, "mkn9" => 5000, "mkn10" => 5000, "mkn11" => 5000, "mkn12" => 5000, "mnm1" => 5000, "mnm2" => 30000, "mnm3" => 5000, "mnm4" => 3000, "mnm5" => 5000);
			if(isset($_POST['Pilih'])){
				echo "<h3>Berikut menu yang sudah dipilih : </h3>";
			if (isset($_POST['mkn1'])) {
				$m1 = $_POST['mkn1'];
				$j1 = $_POST['j1'];
				$tot1=$hrg['mkn1']*$j1;
				echo "<tr><td>$m1</td><td>($j1)</td><td>Rp.$tot1</td>";
				fwrite($fp, "$m1 		x$j1 	Rp.$tot1\n");
				$tots = $tots+$tot1;
			}
			if (isset($_POST['mkn2'])) {
				$m2 = $_POST['mkn2'];
				$j2 = $_POST['j2'];
				$tot2=$hrg['mkn2']*$j2;
				echo "<tr><td>$m2</td><td>($j2)</td><td>Rp.$tot2</td>";
				fwrite($fp, "$m2 		x$j2 	Rp.$tot2\n");
				$tots = $tots+$tot2;
			}
			if (isset($_POST['mkn3'])) {
				$m3 = $_POST['mkn3'];
				$j3 = $_POST['j3'];
				$tot3=$hrg['mkn3']*$j3;
				echo "<tr><td>$m3</td><td>($j3)</td><td>Rp.$tot3</td>";
				fwrite($fp, "$m3 		x$j3 	Rp.$tot3\n");
				$tots = $tots+$tot3;
			}
			if (isset($_POST['mkn4'])) {
				$m4 = $_POST['mkn4'];
				$j4 = $_POST['j4'];
				$tot4=$hrg['mkn4']*$j4;
				echo "<tr><td>$m4</td><td>($j4)</td><td>Rp.$tot4</td>";
				fwrite($fp, "$m4 		x$j4 	Rp.$tot4\n");
				$tots = $tots+$tot4;
			}
			if (isset($_POST['mkn5'])) {
				$m5 = $_POST['mkn5'];
				$j5 = $_POST['j5'];
				$tot5=$hrg['mkn5']*$j5;
				echo "<tr><td>$m5</td><td>($j5)</td><td>Rp.$tot5</td>";
				fwrite($fp, "$m5 		x$j5 	Rp.$tot5\n");
				$tots = $tots+$tot5;
			}
			if (isset($_POST['mkn6'])) {
				$m6 = $_POST['mkn6'];
				$j6 = $_POST['j6'];
				$tot6=$hrg['mkn6']*$j6;
				echo "<tr><td>$m6</td><td>($j6)</td><td>Rp.$tot6</td>";
				fwrite($fp, "$m6 		x$j6 	Rp.$tot6\n");
				$tots = $tots+$tot6;
			}
			if (isset($_POST['mkn7'])) {
				$m7 = $_POST['mkn7'];
				$j7 = $_POST['j7'];
				$tot7=$hrg['mkn7']*$j7;
				echo "<tr><td>$m7</td><td>($j7)</td><td>Rp.$tot7</td>";
				fwrite($fp, "$m7 		x$j7 	Rp.$tot7\n");
				$tots = $tots+$tot7;
			}
			if (isset($_POST['mkn8'])) {
				$m8 = $_POST['mkn8'];
				$j8 = $_POST['j8'];
				$tot8=$hrg['mkn8']*$j8;
				echo "<tr><td>$m8</td><td>($j8)</td><td>Rp.$tot8</td>";
				fwrite($fp, "$m8 		x$j8 	Rp.$tot8\n");
				$tots = $tots+$tot8;
			}
			if (isset($_POST['mkn9'])) {
				$m9 = $_POST['mkn9'];
				$j9 = $_POST['j9'];
				$tot9=$hrg['mkn9']*$j9;
				echo "<tr><td>$m9</td><td>($j9)</td><td>Rp.$tot9</td>";
				fwrite($fp, "$m9 	x$j9 	Rp.$tot9\n");
				$tots = $tots+$tot9;
			}
			if (isset($_POST['mkn10'])) {
				$m10 = $_POST['mkn10'];
				$j10 = $_POST['j10'];
				$tot10=$hrg['mkn2']*$j10;
				echo "<tr><td>$m10</td><td>($j10)</td><td>Rp.$tot10</td>";
				fwrite($fp, "$m10 	x$j10 	Rp.$tot10\n");
				$tots = $tots+$tot10;
			}
			if (isset($_POST['mkn11'])) {
				$m11 = $_POST['mkn11'];
				$j11 = $_POST['j11'];
				$tot11=$hrg['mkn11']*$j11;
				echo "<tr><td>$m11</td><td>($j11)</td><td>Rp.$tot11</td>";
				fwrite($fp, "$m11 			x$j11 	Rp.$tot11\n");
				$tots = $tots+$tot11;
			}
			if (isset($_POST['mkn12'])) {
				$m12 = $_POST['mkn12'];
				$j12 = $_POST['j12'];
				$tot12=$hrg['mkn12']*$j12;
				echo "<tr><td>$m12</td><td>($j12)</td><td>Rp.$tot12</td>";
				fwrite($fp, "$m12 		x$j12 	Rp.$tot12\n");
				$tots = $tots+$tot12;
			}
			if (isset($_POST['mnm1'])) {
				$m13 = $_POST['mnm1'];
				$j13 = $_POST['j13'];
				$tot13=$hrg['mnm1']*$j13;
				echo "<tr><td>$m13</td><td>($j13)</td><td>Rp.$tot13</td>";
				fwrite($fp, "$m13 			x$j13 	Rp.$tot13\n");
				$tots = $tots+$tot13;
			}
			if (isset($_POST['mnm2'])) {
				$m14 = $_POST['mnm2'];
				$j14 = $_POST['j14'];
				$tot14=$hrg['mnm2']*$j14;
				echo "<tr><td>$m14</td><td>($j14)</td><td>Rp.$tot14</td>";
				fwrite($fp, "$m14 		x$j14 	Rp.$tot14\n");
				$tots = $tots+$tot14;
			}
			if (isset($_POST['mnm3'])) {
				$m15 = $_POST['mnm3'];
				$j15 = $_POST['j15'];
				$tot15=$hrg['mnm3']*$j15;
				echo "<tr><td>$m15</td><td>($j15)</td><td>Rp.$tot15</td>";
				fwrite($fp, "$m15 		x$j15 	Rp.$tot15\n");
				$tots = $tots+$tot15;
			}
			if (isset($_POST['mnm4'])) {
				$m16 = $_POST['mnm4'];
				$j16 = $_POST['j16'];
				$tot16=$hrg['mnm4']*$j16;
				echo "<tr><td>$m16</td><td>($j16)</td><td>Rp.$tot16</td>";
				fwrite($fp, "$m16 		x$j16 	Rp.$tot16\n");
				$tots = $tots+$tot16;
			}
			if (isset($_POST['mnm5'])) {
				$m17 = $_POST['mnm5'];
				$j17 = $_POST['j17'];
				$tot17=$hrg['mnm5']*$j17;
				echo "<tr><td>$m17</td><td>($j17)</td><td>Rp.$tot17</td>";
				fwrite($fp, "$m17 		x$j17 	Rp.$tot17\n");
				$tots = $tots+$tot17;
			}
		}
		echo "<tr><td><br>Total</td><td> </td><td><br>Rp.$tots</td>";
		echo "<hr>";
		fputs($fp, "Total				Rp.$tots\n");
		fwrite($fp, "==========================================\n");
		fputs($fp, "Bayar				Rp.$tots\n\n");
		fwrite($fp, "====== Terima Kasih Sudah Berkunjung =====\n");
		fclose($fp);
		?>
    		
    	</table></form><hr>
    	<table width="58%" border="0" align="center">
    		<h3>Silakan Pilih Metode Pembayaran</h3>
    		<form name="form1" method="post" action="struk.php">
    			<tr><td><br><div class="chip"><input type="radio" name="pay" value="Shopeepay" /> Shopeepay <img src="spay.png" alt="Shopeepay" width="96" height="96"></div></td></tr>
    			<tr><td></td></tr>
				<tr><td><br><div class="chip"><input type="radio" name="pay" value="Gopay" /> Gopay <img src="gopay.png" alt="Gopay" width="96" height="96"></div></td></tr>
				<tr><td></td></tr>
				<tr><td><br><div class="chip"><input type="radio" name="pay" value="Ovo" /> Ovo <img src="o.jpg" alt="Ovo" width="96" height="96"></div></td></tr>
				<tr><td></td></tr>
				<tr><td><br><div class="chip"><input type="radio" name="pay" value="Link Aja" /> Link Aja <img src="l.png" alt="Link Aja" width="96" height="96"></div></td></tr>
				<tr><td></td></tr>
				<tr><td><br><div class="chip"><input type="radio" name="pay" value="Dana" /> Dana <img src="dana.png" alt="Dana" width="96" height="96"></div></td></tr>
				<tr><td></td></tr>
				<tr><td><br><center><input type="submit" name="Submit" value="Kirim" /><input type="reset" name="Submit2" value="Batal" /></center></td></tr>	
			</form></table>
			<br><br><a href=menu.php> Kembali</a></div>
</body>
</html>