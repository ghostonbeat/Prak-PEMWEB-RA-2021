<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

Soal Praktikum :
Buatlah proses seperti kalkulator yang bisa melakukan perhitungan :
Penjumlahan (+)
Pengurangan (-)
Pembagian (/)
Perkalian (*)
Modulus (%)
Terdapat tiga buah variabel utama, yaitu dua variabel untuk input bilangan dan satu
variabel untuk operator

-->

<?php
	function tampil($perhitungan, $OP, $hasil_perhitungan)
	{
		echo "Berikut merupakan hasil dari setiap operasi";
		echo "<p> $perhitungan";
		echo "<br>";
		echo "Operator : $OP ";
		echo "<br>";
		echo "Hasil : $hasil_perhitungan </p>"; 
	}
	
	if( isset($_POST['submit']) )
	{
		function hitung($OP, $bilangan1, $bilangan2)
		{
		$hasil_perhitungan = 0;
			$perhitungan = '';
			if($OP == '+')
			{
				$perhitungan = "PENJUMLAHAN";
				$hasil_perhitungan = $bilangan1+ $bilangan2;
			}else if($OP == '-')
			{
				$perhitungan = "PENGURANGAN";
				$hasil_perhitungan = $bilangan1 - $bilangan2;
			}else if($OP == '*')
			{
				$perhitungan = "PERKALIAN";
				$hasil_perhitungan = $bilangan1 * $bilangan2;
			}else if($OP == '/')
			{
				$perhitungan = "PEMBAGIAN";
				$hasil_perhitungan = $bilangan1 / $bilangan2;
			}else
			{
				$perhitungan = "MODULUS";
				$hasil_perhitungan = $bilangan1 % $bilangan2;
			}

				tampil($perhitungan, $OP, $hasil_perhitungan);
			}

			$bilangan1 = $_POST['bilangan1'];
			$bilangan2 = $_POST['bilangan2'];
			$OP = $_POST['operator'];

			if($bilangan1 != '' && $bilangan2 != '' && $OP != 'Operator')
			{

				echo "<p>Bilangan 1 = $bilangan1 ";
				echo "<br>";
				echo "Bilangan 2 = $bilangan2 </p>";
				
				hitung($OP, $bilangan1, $bilangan2);
			}
	}
	
?>
