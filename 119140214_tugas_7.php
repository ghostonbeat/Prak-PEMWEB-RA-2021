<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Webinar HMIF ITERA </title>
</head>
<style>


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
    margin-top: 100px;

}


.daftar {
    margin: 70px 25% auto;
}

.pdftn {
    text-align: center;
}

table {
    margin: 30px auto;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
   
}

th{
    border: 1px solid black;
    padding: 20px;
    background-color: #04AA6D;
    color: white;
}

td{
    border: 1px solid black;
    padding: 20px;
}

td:nth-child(3){
    text-align: center;
}

tr:nth-child(even) {
    background-color: white;
}


input[type=text], input[type=number], input[type=email]
{
    width: 100%;
    border: 1px solid black;
    border-radius: 4px;
    margin: 10px auto;
    padding: 12px 20px;
    font-family:sans-serif;
    font-size: medium;
    margin-bottom: 50px;
}

input[type=submit] 
{
    width: 107%;
    border: 1px solid black;
    border-radius: 4px;
    margin: 10px auto;
    padding: 12px 20px;
    font-family: sans-serif;
    font-size: medium;
    background-color: red;
    color: white;
}

input[type=submit]:hover 
{
    color: blue;
}

footer 
{
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin: 20px auto;
}

</style>

<body>

    <br>
    <div class="daftar" id="form">
        <div class="pdftn">
            <h1>Form Pendaftaran Webinar HMIF ITERA </h1> 
            <hr>
        </div>
        <br>
        <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=="sukses"){
                    ?>
                    <h4 style="background-color: blue; color: white; text-align :center; padding : 5px; width : 105%;">Pendaftaran Anda Telah Berhasil <br> </h4>						
                    <?php
                }
                else if($_GET['alert']=='ekstensi'){
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

<br>

        <form action="119140214_proses.php" method="POST" enctype="multipart/form-data">
            <label for="username"><strong>Nama</strong></label>
            <input type="text" id="username" name="nama" placeholder="Masukkan Nama Anda" required="required">
           
            <label for="nim"><strong>Nomor Induk Mahasiswa</strong></label>
            <input type="number" id="nim" name="nim" placeholder="Masukkan NIM Anda" required="required">
            
            <label for="from"><strong>Instansi</strong></label>
            <input type="text" id="from" name="instansi" placeholder="Asal Instansi" required="required"> 
               
            <label for="mail"><strong>Email</strong></label>
            <input type="email" id="mail" name="email" placeholder="Email" required="required">
            
            <label for="contact"><strong>Nomor Whatsapp</strong></label>
             <input type="number" id="contact" name="kontak" placeholder="Masukkan Nomor WA Aktif" required="required">
            
             <label for="foto"><strong>Upload Bukti Share Info Webinar</strong></label>
            <p style="font-size: 11pt; color: teal;">*format .jpg / .png / .jpeg (maks. 1mb)</p>
            <input type="file" name="foto" id="foto" required="required"> 
            <input type="submit" value="Daftar">
        </form>
    </div>
    
    <footer>
        <p><i> Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>



