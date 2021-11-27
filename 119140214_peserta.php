<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Peserta Webinar</title>

</head>
<style>
header 
{
    background-color: grey;
    color: white;
    padding: 25px;
    margin: 0;
}

header h1 
{
    text-align: center;
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
    font-family:sans-serif;
    border-collapse: collapse;
   
}

th{
    border: 1px solid black;
    padding: 20px;
    background-color: greysmoke;
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
    background-color: rgb(245, 245, 245);
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
    margin-bottom: 40px;
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
    <header>
        <h1>Daftar Peserta Webinar</h1>
    </header>

    <div>
        <table> 
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Email</th>
                <th>Whatsapp</th>
                <th>Screenshots</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "119140214_koneksi.php";
                $query = mysqli_query($kon, "SELECT * FROM webinar");

                
                $no = 1;

                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['instansi']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['wa']; ?></td>
                        <td><img src="foto/<?php echo $data['foto'] ?>" width="200px" height="300px"></td>
                        <td>
                            <a id="Edit"  href="119140214_edit.php?nim=<?php echo $data['nim']; ?>">Edit</a>
                            <br>
                            <br>
                            <a id="Delete" href="119140214_hapus.php?nim=<?php echo $data['nim']; ?>" onclick="return confirm('Yakin ingin Hapus?')">Delete
                        </td>
                    </tr>
                    
                    <?php
                    $no++;
                }
            ?>
        </table>
    </div>

    <footer>
        <p><i>Institut Teknologi Sumatera &copy;2021</i></p>
    </footer>
</body>
</html>

