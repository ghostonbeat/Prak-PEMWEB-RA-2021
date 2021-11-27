<?php

require "db_func.php";

if(isset($_POST["submit"])){
    // var_dump($_FILES);
    // die;
    Insert_Data($_POST);
    if (mysqli_affected_rows($db) > 0 ){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
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
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Input New Data</h1>
    <a href="index.php">Back to Home Page</a><br>
    <div class="form cf">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row cf">
                <div class="col-left" > <label for="mrk">Brand</label> </div>
                <div class="col-right"> <input type="text" name="mrk" id="mrk" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="typ">Type</label> </div>
                <div class="col-right"> <input type="text" name="typ" id="typ" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="cpu">Processor</label> </div>
                <div class="col-right"> <input type="text" name="cpu" id="cpu" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="ram">Memory</label> </div>
                <div class="col-right"> <input type="text" name="ram" id="ram" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="stg">Storage</label> </div>
                <div class="col-right"> <input type="text" name="stg" id="stg" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="gpu">Graphic</label> </div>
                <div class="col-right"> <input type="text" name="gpu" id="gpu" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="hrg">Price</label> </div>
                <div class="col-right"> <input type="text" name="hrg" id="hrg" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="img">Picture</label> </div>
                <div class="col-right"> <input type="file" name="img" id="img"> </div>
            </div>
            <div class="row cf">
                <div class="col-right"> <button type="submit" name="submit">Add New Data</button> </div>
            </div>
        </form>
    </div>
</body>
</html>