<?php
require 'classes.php';
$mangga = new Fruit('Mangga',15000);
$jambu  = new Fruit('Jambu Biji' ,13000);
$salak  = new Fruit('Salak' ,10000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ITERA FRUIT SHOP</h1>
        </div>
        <div class="content cf">    
            <div class="maincontent">
                <div class="cover"></div>
                <div class="fruitlist cf">
                    <div class="fruit">
                        <img src="media/mangga.jpg">
                        <div class="fruitinfo">
                            <h2><?= $mangga->name ?></h2>
                            <h3>Rp. 15.000 / kilogram</h3>
                            <div class="input-group">
                                <input type="button" id="minus_Mangga" value="-" class="button-minus" onclick="minusValue_Mangga()">
                                <input type="number" id="value_Mangga" value="0" class="quantity-field">
                                <input type="button" id="plus_Mangga"  value="+" class="button-plus"  onclick="plusValue_Mangga()">
                                <h3>Rp. <span id="currentPrice_Mangga">0</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="fruit">
                        <img src="media/jambu.jpg">
                        <div class="fruitinfo">
                            <h2><?= $jambu->name ?></h2>
                            <h3>Rp. 13.000 / kilogram</h3>
                            <div class="input-group">
                                <input type="button" id="minus_Jambu" value="-" class="button-minus"  onclick="minusValue_Jambu()">
                                <input type="number" id="value_Jambu" value="0" class="quantity-field">
                                <input type="button" id="plus_Jambu"  value="+" class="button-plus"  onclick="plusValue_Jambu()">
                                <h3>Rp. <span id="currentPrice_Jambu">0</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="fruit">
                        <img src="media/salak.jpg">
                        <div class="fruitinfo">
                            <h2><?= $salak->name ?></h2>
                            <h3>Rp. 10.000 / kilogram</h3>
                            <div class="input-group">
                                <input type="button" id="minus_Salak" value="-" class="button-minus"  onclick="minusValue_Salak()">
                                <input type="number" id="value_Salak" value="0" class="quantity-field">
                                <input type="button" id="plus_Salak"  value="+" class="button-plus"  onclick="plusValue_Salak()">
                                <h3>Rp. <span id="currentPrice_Salak">0</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="orderbox">
                <h2>Total tagihan</h2>
                <table class="table table-bordered">
                    <tr>
                        <th width="25%">Buah</th>
                        <th width="22%">Harga</th>
                        <th width="23%">Jumlah (kg)</th>
                        <th width="30%">Subtotal</th>
                    </tr>
                    <tr>
                        <td><?= $mangga->name ?></td>
                        <td>Rp. <span><?= $mangga->price ?></span></td>
                        <td id="mangga_count">0</td>
                        <td>Rp. <span id="subTotal_Mangga">0</span></td>
                    </tr>
                    <tr>
                        <td><?= $jambu->name ?></td>
                        <td>Rp. <span><?= $jambu->price ?></span></td>
                        <td id="jambu_count">0</td>
                        <td>Rp. <span id="subTotal_Jambu">0</span></td>
                    </tr>
                    <tr>
                        <td><?= $salak->name ?></td>
                        <td>Rp. <span><?= $salak->price ?></span></td>
                        <td id="salak_count">0</td>
                        <td>Rp. <span id="subTotal_Salak">0</span></td>
                    </tr>
                </table>
                <div class="totalPrice cf">
                    <div class="labelTotal">
                        <h3>Total</h3>
                    </div>
                    <div class="valueTotal" >
                        <h3>Rp. <span id="valueTotal">0</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <h4>Markus Togi Fedrian Rivaldi Sinaga - 118140037</h4>
        </div>
    </div>
    <script src="functions.js"></script>
</body>
</html>