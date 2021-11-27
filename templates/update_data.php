<?php

require "db_func.php";

$id = $_GET["id"];

$data_now = mysqli_fetch_object(
    mysqli_query(
        $db, "SELECT * FROM laptop WHERE id = '$id'"
    )
);

if(isset($_POST["submit"])){
    Update_Data($_POST, $id);
    if (mysqli_affected_rows($db) > 0 ){
        echo "<script>
                alert('Data updated successfully!');
                document.location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data failed to update!');
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
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Update Data</h1>
    <a href="index.php">Back to Home Page</a> | 
    <a href="showData.php">Back to Show Data Page</a><br><br>
    <div class="form cf">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="oldImg" value="<?= $data_now->img ?>">
            <div class="row cf">
                <div class="col-left" > <label for="mrk">Brand</label> </div>
                <div class="col-right"> <input type="text" name="mrk" id="mrk" value="<?= $data_now->mrk ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="typ">Type</label> </div>
                <div class="col-right"> <input type="text" name="typ" id="typ" value="<?= $data_now->typ ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="cpu">Processor</label> </div>
                <div class="col-right"> <input type="text" name="cpu" id="cpu" value="<?= $data_now->cpu ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="ram">Memory</label> </div>
                <div class="col-right"> <input type="text" name="ram" id="ram" value="<?= $data_now->ram ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="stg">Storage</label> </div>
                <div class="col-right"> <input type="text" name="stg" id="stg" value="<?= $data_now->stg ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="gpu">Graphic</label> </div>
                <div class="col-right"> <input type="text" name="gpu" id="gpu" value="<?= $data_now->gpu ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="hrg">Price</label> </div>
                <div class="col-right"> <input type="text" name="hrg" id="hrg" value="<?= $data_now->hrg ?>" required> </div>
            </div>
            <div class="row cf">
                <div class="col-left" > <label for="img">Picture</label> </div>
                <div class="col-right"> 
                    <img src="../media/photo/<?= $data_now->img ?>" alt="">
                    <input type="file" name="img" id="img"> 
                </div>
            </div>
            <div class="row cf">
                <div class="col-right"> <button type="submit" name="submit">Update Data</button> </div>
            </div>
        </form>
    </div>
</body>
</html>