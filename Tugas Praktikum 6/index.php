<html>

<head>
    <title>ITERA FRUIT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <center>
        <h1 align="center">ITERA FRUIT</h1>
        <hr>
        <form method="POST" onsubmit="total()">
            <table>
                <thead>
                    <tr>
                        <td colspan="3" align="center" width="400px" class="namajudul">MENU INPUT</td>
                    </tr>
                    <tr align="center" class="judul">
                        <td>Nama Buah</td>
                        <td>Harga per Kilo</td>
                        <td>Jumlah(kg) </td>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td><label>Mangga</label></td>
                        <td><label>Rp. 15.000</label></td>
                        <td><input type="number" min="0" id="mangga" name="mangga" style="width: 50px" placeholder="0" value="0"></td>
                    </tr>
                    <tr align="center">
                        <td><label>Jambu</label></td>
                        <td><label>Rp. 13.000</label></td>
                        <td><input type="number" min="0" id="jambu" name="jambu" style="width: 50px" placeholder="0" value="0"></td>
                    </tr>
                    <tr align="center">
                        <td><label>Salak</label></td>
                        <td><label>Rp. 10.000</label></td>
                        <td><input type="number" min="0" id="salak" name="salak" style="width: 50px" placeholder="0" value="0"></td>
                    </tr>
                </tbody>
            </table>
            <button name="Hitung Harga" id="btn">Bayar</button>
        </form>


        <div id="hasil"></div>
        <script type="text/javascript">
            <?php

            class mangga
            {
                public $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 15000;
                }

                public function jumlahMangga()
                {
                    return $this->jumlah;
                }

                public function hargaMangga()
                {
                    return $this->harga;
                }
            }

            class jambu
            {
                public $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 13000;
                }

                public function jumlahJambu()
                {
                    return $this->jumlah;
                }

                public function hargaJambu()
                {
                    return $this->harga;
                }
            }

            class salak
            {
                public $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 10000;
                }

                public function jumlahSalak()
                {
                    return $this->jumlah;
                }

                public function hargaSalak()
                {
                    return $this->harga;
                }
            }

            ?>

            function total() {
                event.preventDefault()

                var banyakMangga = document.getElementById('mangga').value;
                var banyakJambu = document.getElementById('jambu').value;
                var banyakSalak = document.getElementById('salak').value;

                var hargaMangga = 15000;
                var hargaJambu = 13000;
                var hargaSalak = 10000;

                var total = banyakMangga * hargaMangga + banyakJambu * hargaJambu + banyakSalak * hargaSalak;

                output = document.getElementById('hasil');
                output.innerHTML = "UANG YANG HARUS ANDA BAYARKAN : " + total;
            }
        </script>
</body>
</center>

</html>