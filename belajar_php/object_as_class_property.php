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
    public $array;
    public function __construct(){
        $this->list = array(
            'manggaS'=> new Fruit('mangga',15000),
            'jambuS' => new Fruit('jambu', 13000),
            'salakS' => NEW Fruit('salak', 10000)
        ); 
    }
    function test_array_as_param($A){
        $this->array = $A;
    }

}

$orderList = new Order_List;
$total = array(1,3,4);
$orderList->test_array_as_param($total);
echo $orderList->list['manggaS']->name;
echo $orderList->list['jambuS']->name;
echo $orderList->list['salakS']->name;
echo $orderList->array[0];
echo $orderList->array[1];
echo $orderList->array[2];

































$mangga = new Fruit('mangga',15000);
$jambu  = new Fruit('jambu' ,13000);
$salak  = new Fruit('salak' ,10000);

echo $mangga->name."<br>";
echo $mangga->price."<br>";
echo $jambu->name."<br>";
echo $jambu->price."<br>";
echo $salak->name."<br>";
echo $salak->price."<br>";
?>