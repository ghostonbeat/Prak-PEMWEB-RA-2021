<?php

class Fruit{
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }
}

class Order_List{
    public $list;
    public function __construct($nama){
        $this->list = array("nama"=>$nama); 
    }

}

$mangga = new Fruit('mangga',15000);
$jambu  = new Fruit('jambu' ,13000);
$salak  = new Fruit('salak' ,10000);

echo $mangga->name  ."<br>";
echo $mangga->price ."<br>";
echo $jambu ->name  ."<br>";
echo $jambu ->price ."<br>";
echo $salak ->name  ."<br>";
echo $salak ->price ."<br>";

$OL = new Order_List('togi');
echo $OL->list['nama'];

?>