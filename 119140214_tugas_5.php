<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

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
		background: grey;
	}
	div
	{
		background: whitesmoke;
		border-radius: 20px;
		border: 2px solid black;
		margin: 50px;
		padding: 20px;
		padding-top: 0;
		
	}
	
	hr
	{
		border: 1px solid black;
	}
	input
	{
		margin-bottom: 5px;
		border-radius: 5px;
	}
	
	.btn:hover
	{
		background: blue;
	}
</style>

<body>
	<div>
		<form method="POST">
			<h1>Soal 1</h1>
			<hr><br>
			<input type="number" name="bilangan1" placeholder="Bilangan 1"><br>
			<input type="number" name="bilangan2" placeholder="Bilangan 2"><br>
			<select name="operator">
				<option>Operator</option>
				<option>*</option>
				<option>+</option>
				<option>-</option>
				<option>/</option>
				<option>%</option>
			</select><br><br>
			<input type="submit" name="submit" class="btn">
		</form>
		<?php include('119140214_No_01.php'); ?>
	</div>

	<div>
		<form method="POST">
			<h1>Soal 2</h1>
			<hr><br>
		</form>
		<?php include('119140214_No_02.php'); ?>
	</div>

	<div>
		<form method="POST">
			<h1>Soal 3</h1>
			<hr><br>
		</form>
		<?php include('119140214_No_03.php'); ?>
	</div>

</body>
</html>

