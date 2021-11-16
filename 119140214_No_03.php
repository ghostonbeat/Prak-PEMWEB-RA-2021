<!--
    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

Soal Praktikum :
Buatlah program untuk mencari bilangan prima dari 1 - 50 tanpa menggunakan fungsi bawaan!
-->
<?php 
    function bilangan_prima($inputan)
    {
        for($x=1; $x<=$inputan; $x++)
        {
            $cek = true;

            if($x == 2)
            {
                echo "$x ";
            }else if($x != 1)
            {
                $batas = ($x-1);
            for($y=2; $y<$batas; $y++)
            {
                if($x%$y == 0)
                {
                    $cek = false;
                    break;
                }
            }
                if($cek == true)
                {
                    echo "$x ";
                }
            }
        }
           
    }

       echo "<p> Hasil dari Bilangan prima dari 1 - 50 adalah ";
       echo "<br>";
       bilangan_prima(50);
    
    
?>