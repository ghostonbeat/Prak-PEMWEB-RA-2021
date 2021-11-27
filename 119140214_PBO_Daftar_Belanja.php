<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

Soal Praktikum : 
Terdapat sebuah toko buah di ITERA dimana toko buah tersebut menjual buah mangga seharga
15.000/kg, buah jambu seharga 13.000/kg dan buah salak seharga 10.000/kg. Buatlah sebuah program
perhitungan anggaran belanja dengan ketentuan :
● Form untuk menulis daftar belanjaan di HTML*.
● Menggunakan konsep PBO yang sudah diajarkan ke dalam PHP**.
● Menggunakan Javascript untuk mengatur hasil perhitungan anggaran belanja agar ketika semua
data diinputkan, maka hasil akan langsung muncul secara real-time atau tanpa reload***.

-->

<?php 

class Buah_ITERA
{
    private $nama_buah,
            $jumlah, 
            $harga;
    
    function __construct($nama=NULL, $harga=NULL, $jumlah=0)
    {
        if( $nama!=NULL && $harga!=NULL ){
            $this->nama = $nama;
            $this->harga = $harga * $jumlah;
            $this->jumlah = $jumlah;
    }
}

    function getNama()
    {
        return $this->nama;
    }
    function getHarga()
    {
        return $this->harga;
    }
    function getJumlah()
    {
        return $this->jumlah;   
    }
}

class Belanja_Buah
{
    private static $Daftar_Belanja_Buah = array(),
                   $totalHarga = 0,
                   $index = 0;

    function __construct( Buah_ITERA $jenisBuah = NULL )
    {
        if ($jenisBuah != NULL) 
        {
            self::$Daftar_Belanja_Buah[ self::$index ] = $jenisBuah;
            self::$index++;
            self::$totalHarga = self::$totalHarga + $jenisBuah->getHarga();
        }
    }

    function getIndex()
    {
        return self::$index;
    }
    function getNama($i=0){
        return self::$Daftar_Belanja_Buah[$i]->getNama();
    }
    function getHarga($i=0){
        return self::$Daftar_Belanja_Buah[$i]->getHarga();
    }
    function getJumlah($i=0){
        return self::$Daftar_Belanja_Buah[$i]->getJumlah();   
    }
    function getTotal(){
        return self::$totalHarga;
    }

}

$belanja = new Belanja_Buah();
$jenisBuah = new Buah_ITERA();

if( isset($_POST['tambah']) )
{
    if( $_POST['jumlahMangga'] != NULL && $_POST['jumlahJambu'] != NULL && $_POST['jumlahSalak'] != NULL )
    {
        
        $jenisBuah = new Buah_ITERA("Buah Mangga", 15000, $_POST['jumlahMangga']); 
        $belanja = new Belanja_Buah($jenisBuah);

        $jenisBuah = new Buah_ITERA("Buah Jambu", 13000, $_POST['jumlahJambu']);   
        $belanja = new Belanja_Buah($jenisBuah);

        $jenisBuah = new Buah_ITERA("Buah Salak", 10000, $_POST['jumlahSalak']);   
        $belanja = new Belanja_Buah($jenisBuah);
    }
}

?>