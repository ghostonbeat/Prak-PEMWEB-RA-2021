<?php
session_start();
if(!isset($_SESSION["userID"])){
    header("Location: login_required.php");
    die();
}
require "app/db/Koneksi.php";
$db = new Koneksi();
$conn = $db->connect();

$id = $_GET["id"];

$data_now = $conn->query("SELECT * FROM post WHERE id = '$id'")->fetch_all(MYSQLI_ASSOC);

if(isset($_POST["submit"])){
    $title      = $_POST["title"];
    $content    = $_POST["content"];
    $conn->query("UPDATE post SET
    judul='$title',
    isi='$content'
    WHERE id='$id'");
    if (mysqli_affected_rows($conn) > 0 ){
        echo "<script>
                alert('Data updated successfully!');
                document.location.href = 'home.php';
            </script>";
    }else{
        echo "<script>
                alert('Data failed to update!');
                document.location.href = 'home.php';
            </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="back">
            <svg width="30" height="30" >
                <a href="home.php">
                    <circle cx="15" cy="15" r="12.5"  fill="#F6F1EE" />
                    <line x1="5" y1="15" x2="25" y2="15" style="stroke:#F1CA7F; stroke-width:4" />
                    <line x1="15" y1="5" x2="6" y2="15" style="stroke:#F1CA7F; stroke-width:4" />
                    <line x1="6" y1="15" x2="15" y2="25" style="stroke:#F1CA7F; stroke-width:4" />
                </a>
            </svg>
        </div>
        <h1>Edit Notes</h1>  
    </header>
    <div class="post-form">
        <form action="" method="post">
            <input type="text" name="title" id="title" value="<?= $data_now[0]['judul'] ?>" required><br>
            <textarea class="textarea" name="content" id="content" required><?= $data_now[0]['isi'] ?></textarea><br>
            <button type="submit" name="submit">SAVE</button>
        </form>
    </div>
</body>
</html>