<?php

require "db_func.php";

$laptop = Select_All("SELECT * FROM laptop WHERE hrg ");

if (!$laptop){
    echo mysqli_error($db);
}

if(isset($_POST["inputData"])){
    Insert_Data($_POST);
    if (mysqli_affected_rows($db) > 0 ){
        echo "<script>
                alert('Data added successfully!');
                document.location.href = 'showData.php';
            </script>";
    }else{
        echo "<script>
                alert('Data failed to add!');
                document.location.href = 'showData.php';
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
    <link rel="icon" href="Assets/Images/m.png" type="image/gif" sizes="16x16">
    <title>MTechStore</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="icon" href="../media/logo/teal.png" type="image/gif" sizes="16x16">
</head>
<body class="cf">
    <div class="header cf">
        <div class="web-logo cf" id="web-logo">
            <img class="logo" src="../media/logo/teal.png" alt="">
            <div class="logo-text">
                <h4>Tech</h4>
                <h4>Store</h4>
            </div>
        </div>

        <div class="search-bar cf">
            <form action="" method="">
                <div class="search-bar-button">
                    <button type="submit">
                        <img src="../media/icons/search.png" alt="">
                    </button>
                </div>
                <div class="search-bar-text">
                    <input type="text" name="search" id="search" placeholder="Search M-TechStore...">
                </div>
            </form>
        </div>

        <div class="profile-picture">
            <img src="" alt="">
        </div>
        <div class="profile-name">
            118140037 - Togi Sinaga
        </div>
    </div>

    <div class="sub-header">
        <div class="product-logo-box cf" id="Asus">
            <img class="product-logo" src="../media/logo/asus_resized.png" alt="">
            <div class="product-preview"></div>
        </div>
        <div class="product-logo-box cf" id="Acer">
            <img  class="product-logo" src="../media/logo/acer.png" alt="">
            <div class="product-preview"></div>
        </div>
        <div class="product-logo-box cf"  id="MSI">
            <img class="product-logo" src="../media/logo/msi_resized.png" alt="">
            <div class="product-preview"></div>
        </div>
        <div class="product-logo-box cf" id="Apple">
            <img class="product-logo" src="../media/logo/apple_resized.png" alt="">
            <div class="product-preview"></div>
        </div>
        <div class="product-logo-box cf" id="Dell">
            <img class="product-logo" src="../media/logo/Dell.png" alt="">
            <div class="product-preview"></div>
        </div>
        <div class="product-logo-box cf" id="HP">
            <img class="product-logo" src="../media/logo/hp_resized.png" alt="">
            <div class="product-preview"></div>
        </div>
    </div>

    <div class="products-list-title">
        <div class="banner-text">
            <h1 class="normal">All <span class="highlight1">laptops</span> data.</h1>
        </div>
        <div class="add-new-button">
            <a onclick="loadInputForm()"><img src="../media/icons/plus.png" alt=""></a>
        </div>
    </div>

    <div class="products-list">
        <?php foreach ( $laptop as $ltp ) : ?>
            <div class="product-list cf">
                <div class="product-list-img">
                    <img src="../media/photo/<?= $ltp->img ?>" alt="">
                </div>
                <div class="product-list-detail">
                    <h2><?= $ltp->mrk ?> <?= $ltp->typ ?></h2>
                    <div class="spec-row cf">
                        <div class="spec-col"><?= $ltp->cpu ?></div>
                        <div class="spec-col"><?= $ltp->gpu ?></div>
                        <div class="action-col"><a href="update_data.php?id=<?=$ltp->id?>"><img src="../media/icons/edit.png" alt=""></a></div>
                        
                    </div>
                    <div class="spec-row cf">
                        <div class="spec-col"><?= $ltp->ram ?></div>
                        <div class="spec-col"><?= $ltp->stg ?></div>
                        <div class="action-col"><a onclick="alert('Confirm deletion?')" href="delete_data.php?id=<?=$ltp->id?>"><img src="../media/icons/delete.png" alt=""></a></div>
                    </div>
                    <h2>Rp. <?= number_format($ltp->hrg,0,",",".") ?></h2>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="product-data-operation" id="operation">

    </div>
    
    <div class="footer">
        
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>