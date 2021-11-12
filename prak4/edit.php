<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $prodi=$_POST['prodi'];
    $angkatan=$_POST['angkatan'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET nim='$nim',nama='$nama',prodi='$prodi',angkatan='$angkatan' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $prodi = $user_data['prodi'];
    $angkatan = $user_data['angkatan'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>prodi</td>
                <td><input type="text" name="prodi" value=<?php echo $prodi;?>></td>
            </tr>
            <tr> 
                <td>angkatan</td>
                <td><input type="text" name="angkatan" value=<?php echo $angkatan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>