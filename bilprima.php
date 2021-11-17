<?php

echo "<h4>PROGRAM BILANGAN PRIMA 1 - 50</h4>";


$angka_awal=1;
$angka_akhir=50;


for ($i = $angka_awal ; $i <= $angka_akhir; $i++){

    $faktor=0;
    for($n=1;$n<=$i;$n++){
        if($i%$n==0){
            $faktor++;
        }
    }
    
    if($faktor==2){
        echo "Bilangan Prima : ".$i."<br/>";
    }
}

?>