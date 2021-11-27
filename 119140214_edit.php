<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->


<?php
 include "119140214_koneksi.php";
 session_start();


    $nim = $_GET["nim"];

 $sql=mysqli_query($kon, "SELECT * FROM webinar WHERE nim='$nim'");
 $hasil=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Peserta</title>
</head>
<style>

header 
{
    background-color: grey;
    color: white;
    padding: 25px;
    margin: 0;
}

body
{
	background: linear-gradient(-30deg,blue,skyblue,grey,darkblue,pink);
	background-size: 400% 400%;
	position: relative;
	animation: change 10s ease-in-out infinite;
    margin bottom: 100px;
    
    
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

header h1 
{
    text-align: center;
}

#title 
{
    display: inline;
    font-style: italic;
    font-size: 20pt;
    font-family: monospace;
}

#daftar 
{
    display: inline;
    float: right;
    text-decoration: none;
    background-color:#333;
    width: 80px;
    text-align: center;
    padding: 10px;
    font-size: 13pt;
    font-family: Arial;
    color: white;
    border: 2pt solid white;
    margin-top: -6px;

}

#daftar:hover 
{
    background-color: teal;
}

.welcome 
{
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('bg.jpg');
    background-position:center top ;
    color: white;
    background-size: 100% 400px;
    text-align: center;
    padding: 80px;
}

.welcome hr 
{
    height: 3px;
    background-color: white;
    width: 40%;
    border-radius: 10px;
}

#gogo 
{
    padding: 20px;
    text-decoration: none;
    color: white;
    border : 2pt solid white ;
}

#gogo:hover 
{
    background-color: grey;
}

.webinar 
{
    text-align: center;
    margin-top: 50px;
}

.webinar hr, .daftar hr 
{
    height: 3px;
    background-color: black;
    width: 40%;
    border-radius: 10px;
}

.daftar 
{
    margin: 70px 25% auto;
}

.pdftn 
{
    text-align: center;
}

table 
{
    margin: 30px auto;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
}

th
{
    border: 1px solid black;
    padding: 20px;
    background-color: grey;
    color: white;
}

td
{
    border: 1px solid black;
    padding: 20px;
}

td:nth-child(3)
{
    text-align: center;
}

tr:nth-child(even) 
{
    background-color: blue;
}

tr:hover 
{
    background-color: teal;
    color: white;
}

label 
{
    font-family: sans-serif;
}

input[type=text], input[type=number], input[type=email]
{
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 10px auto;
    padding: 12px 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: medium;
}

input[type=submit] 
{
    width: 107%;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 10px auto;
    padding: 12px 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: medium;
    background-color: red;
    color: white;
}

input[type=submit]:hover 
{
    background-color: blue;
    color: black;
}

#Edit 
{
    padding: 5px;
    text-decoration: none;
    color: white;
    background-color: #333;
    border : 2pt solid white;
}

#Delete {
    padding: 5px;
    text-decoration: none;
    color: white;
    background-color: rgb(136, 4, 4);
    border : 2pt solid white;
}

#Edit:hover, #Delete:hover
 {
    background-color: teal;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin: 20px auto;
}


</style>
<body>
    <header>
        <h1>Edit Data Peserta</h1>
    </header>

    <div class="daftar" id="form">
        <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=='ekstensi'){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ekstensi File Tidak Didukung</h3>			
                    <?php
                }elseif($_GET['alert']=="ukuran"){
                    ?>
                    <h3 style="background-color: #f01414; color: white; text-align :center; padding : 5px; width : 105%;">Ukuran File Terlalu Besar</h3>					
                    <?php
                }
            }
        ?>
        <form action="119140214_ubah.php" method="POST" enctype="multipart/form-data">
            <label for="username"><strong>Nama</strong></label>
            <input type="text" id="username" name="nama" placeholder="Masukkan Nama Anda" required="required" value="<?php echo $hasil['nama']; ?>">
            
            <input type="hidden" name="nim" id="nim" required="" value="<?php echo $hasil['nim']; ?>" />
            <label for="from"><strong>Instansi</strong></label>
            
            <input type="text" id="from" name="instansi" placeholder="Asal Instansi" required="required" value="<?php echo $hasil['instansi']; ?>"> 
            <label for="mail"><strong>Email</strong></label>
            
            <input type="email" id="mail" name="email" placeholder="Email" required="required" value="<?php echo $hasil['email']; ?>">
            <label for="contact"><strong>Nomor Whatsapp</strong></label>
            
            <input type="number" id="contact" name="kontak" placeholder="Masukkan Nomor WA Aktif" required="required" value="<?php echo $hasil['wa']; ?>">
            <label for="foto"><strong>Upload Bukti Share Info Webinar</strong></label>
            <p style="font-size: 11pt; color: teal;">*format .jpg / .png / .jpeg (maks. 1mb)</p>
            <input type="file" name="foto" id="foto" required ="required"> 
            <input type="submit" value="Ubah">
        </form>
    </div>
    
    <footer>
        <p><i>Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>
