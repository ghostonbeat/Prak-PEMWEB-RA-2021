<?php
session_start();
if(!isset($_SESSION["userID"])){
    header("Location: login_required.php");
    die();
}

require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$id = $_GET["id"];
$conn->query("DELETE FROM post WHERE id = '$id'");


if (mysqli_affected_rows($conn) > 0 ){
    echo "
        <script>
            alert('Data deleted successfully!');
            document.location.href = 'home.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data failed to delete!');
            document.location.href = 'home.php';
        </script>
    ";
}

?>