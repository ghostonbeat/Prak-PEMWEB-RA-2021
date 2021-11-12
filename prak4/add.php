<!-- <html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>prodi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td>angkatan</td>
                <td><input type="text" name="angkatan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    // if(isset($_POST['Submit'])) {
    //     $nim = $_POST['nim'];
    //     $nama = $_POST['nama'];
    //     $prodi = $_POST['prodi'];
    //     $angkatan = $_POST['angkatan'];
        
    //     // include database connection file
    //     include_once("config.php");
                
    //     // Insert user data into table
    //     $result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,prodi,angkatan) VALUES('$nim','$nama','$prodi','$angkatan)");
        
    //     // Show message when user added
    //     echo "User added successfully. <a href='index.php'>View Users</a>";
    // }
    // ?>
</body>
</html> -->

<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Prodi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr> 
                <td>Angkatan</td>
                <td><input type="text" name="angkatan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,prodi,angkatan) VALUES('$nim','$nama','$prodi','$angkatan')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>