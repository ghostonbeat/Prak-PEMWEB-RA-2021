<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

Soal Praktikum : 
Terdapat sebuah toko buah di ITERA dimana toko buah tersebut menjual buah mangga seharga
15.000/kg, buah jambu seharga 13.000/kg dan buah salak seharga 10.000/kg. Buatlah sebuah program
perhitungan anggaran belanja dengan ketentuan :
● Form untuk menulis daftar belanjaan di HTML*.
● Menggunakan konsep PBO yang sudah diajarkan ke dalam PHP**.
● Menggunakan Javascript untuk mengatur hasil perhitungan anggaran belanja agar ketika semua
data diinputkan, maka hasil akan langsung muncul secara real-time atau tanpa reload***.

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Praktikum 5</title>
</head>


<style>

body
{
	background: linear-gradient(-30deg,blue,skyblue,grey,gold,pink);
	background-size: 400% 400%;
	position: relative;
	animation: change 10s ease-in-out infinite;
}

@keyframes change 
{
	0%
	{
		background-position: 0 50% ;
	}
	50%
	{
		background-position: 100% 50% ;
	}
	100%
	{
		background-position: 0 50% ;
	}
}	


h1
{
		text-align: center;
		margin-top: 25px;
		color: whitesmoke;
}
table
{
	
		margin-bottom: 20px ;
}

table td
{
		padding: 10px;
		background: whitesmoke;
}


button
{
		background: white;
		font-size: 13pt;
		width: 100px;
		height: 40px;
		margin-bottom: 20px;
}
button:hover
{
		background: blue;
		color: white;
}

</style>
<body>
<h1 >Website Toko Buah ITERA</h1>
<hr>
<center>
	<form method="POST" onsubmit="tampil()">
	<table>
		<thead>
			<tr>
				<td colspan="3" align="center" width="400px">MENU INPUT BELANJA</td>
			</tr>
			<tr align="center">
				<td >Nama Buah</td>
				<td >Harga Buah per Kilo</td>
				<td >Jumlah Buah (Kg) </td>
			</tr>
			</thead>
			<tbody>
			<tr align="center">
				<td><label >Buah Mangga</label></td>
				<td><label >Rp. 15.000</label></td>
				<td><input type="number" min="0" name="jumlahMangga" style="width: 40px" placeholder="0" value="0" ></td>
			</tr>
			<tr align="center">
				<td><label >Buah Jambu</label></td>
				<td><label >Rp. 13.000</label></td>
				<td><input type="number" min="0" name="jumlahJambu" style="width: 40px" placeholder="0" value="0" ></td>
			</tr>
			<tr align="center">
				<td><label >Buah Salak</label></td>
				<td><label >Rp. 10.000</label></td>
				<td><input type="number" min="0" name="jumlahSalak" style="width: 40px" placeholder="0" value="0" ></td>
			</tr>
			</tbody>
			</table>
			<button name="tambah" id="btn" >Pesan</button>
		</form>
		
		<table>
			<thead>
			<tr>
				<td colspan="3" align="center" width="400px">Daftar Harga Belanja toko buah ITERA</td>
			</tr>
			<tr align="center">
				<td>Nama Buah</td>
				<td>Jumlah Buah (Kg) </td>
				<td>Harga Buah </td>
			</tr>
			</thead>
			<tbody id="cetak" align="center">	
			</tbody>
		</table>
	</center>
	<hr>
</body>

<?php include('119140214_PBO_Daftar_Belanja.php') ?>

<script type="text/javascript">
	function output() {
		var kanvas = document.getElementById('cetak');
		var teks ="";

		<?php for ($x=0; $x < $belanja->getIndex(); $x++) 
		{  ?>

			var nama = '<?php echo $belanja->getNama($x); ?>';
			var jumlah = '<?php echo $belanja->getJumlah($x); ?>';
			var harga = '<?php echo $belanja->getHarga($x); ?>';
			teks += " <tr> <td> "+nama+"</td> "+" <td> "+jumlah+"</td> "+" <td> "+harga+"</td> </tr>";
			
		<?php 
		} ?>

		var total = <?php echo $belanja->getTotal(); ?>	
		teks += "<tr> <td></td> <td>Total Harga Belanja Buah ITERA</td> <td>"+total+"</td> </tr>"

		kanvas.innerHTML = teks;

	}
	output();
</script>
