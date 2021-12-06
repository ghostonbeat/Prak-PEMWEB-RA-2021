<?php 
session_start();
if(!isset($_SESSION["userID"])){
    header("Location: login_required.php");
    die();
}

require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

if(isset($_POST["submit"])){
    $title      = $_POST["title"];
    $content    = $_POST["content"];
    $conn->query("INSERT INTO post VALUES ('', '$title', '$content')");
    if (mysqli_affected_rows($conn) > 0 ){
        echo "<script>
                alert('Note saved successfully!');
                document.location.href = 'home.php';
            </script>";
    }else{
        echo "<script>
                alert('Note failed to save!');
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
    <title>New Note</title>
    <link rel="stylesheet" href="./assets/style.css">
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
        <h1>New Notes</h1>  
    </header>
    <div class="post-form">
        <form action="" method="post">
            <input type="text" name="title" id="title" required placeholder="Title"><br>
            <textarea type="text" class="textarea" name="content" id="content" required placeholder="Content"></textarea><br>
            <button type="submit" name="submit">SAVE</button>
        </form>
    </div>
</body>
</html>