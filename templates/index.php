<?php

require "db_func.php";

$laptop = Select_All("SELECT * FROM laptop");

if (!$laptop){
    echo mysqli_error($db);
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
<body>

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
    <div class="content">
        <div class="banner">
            <div class="banner-text">
                <h1 class="normal">
                    <span class="highlight1">
                        BOOST  
                    </span>
                        your productivity with our <br>
                    <span class="highlight1">
                        MONSTROUS
                    </span>
                    collections.
                </h1>
            </div>
        </div>
        <div class="best-products">
            <div class="tiles">
                <div class="banner-text">
                    <h1 class="normal">
                        Our 
                        <span class="highlight1">BEST</span>
                        recommendation.
                    </h1>    
                </div>
                
                <!-- THIS IS DUMMY :v -->
                <div class="row">
                    <div class="col">
                        <img src="../media/images/asus.png" alt="">
                        <div class="best-product-detail">
                            <h2 class="product-name">Asus Zenbook Pro Duo 15</h2>
                            <h3>Intel® Core™ i9-10980HK</h3>
                            <h3>32 GB DDR4 Memory</h3>
                            <h3>1 TB M.2 NVMe™ PCIe® 3.0 SSD</h3>
                            <h3>NVIDIA® GeForce® RTX3070</h3>
                            <h2>Rp. 41.999.000</h2>
                        </div>
                    </div>
                    <div class="col">
                        <img src="../media/images/acerp.png" alt="">
                        <div class="best-product-detail">
                            <h2 class="product-name">Acer Porsche Design</h2>
                            <h3>Intel® Core™ i7-1165G7</h3>
                            <h3>16 GB LPDDR4X Memory</h3>
                            <h3>1 TB NVMe™ PCIe® 3.0 SSD</h3>
                            <h3>Nvidia GeForce® MX350</h3>
                            <h2>Rp. 42.999.000</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="../media/images/acer.png" alt="">
                        <div class="best-product-detail">
                            <h2 class="product-name">Acer Predator Triton 900</h2>
                            <h3>Intel® Core™ i7-9750H</h3>
                            <h3>2*16 GB DDR4 Memory</h3>
                            <h3>2*256GB NVMe™ PCIe® 3.0 SSD</h3>
                            <h3>NVIDIA® GeForce® RTX 2080</h3>
                            <h2>Rp. 69.999.000</h2>
                        </div>
                    </div>
                    <div class="col">
                        <img src="../media/images/hp.png" alt="">
                        <div class="best-product-detail">
                            <h2 class="product-name">HP Spectre x360</h2>
                            <h3>Intel® Evo™ 11th Gen Core™ i7</h3>
                            <h3>16 GB LPDDR4X Memory</h3>
                            <h3>1 TB PCIe® NVMe™ TLC M.2 SSD</h3>
                            <h3>Intel® Iris® Xᵉ Graphics</h3>
                            <h2>Rp. 25.999.000</h2>
                        </div>
                    </div>
                </div>
                <div class="show-data-link cf">
                    <a href="showData.php">View other products
                    <span>
                        <img src="../media/icons/right-arrow.png" alt="">
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>