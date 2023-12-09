<?php

class Basket
{
   public $itemsTotal;
   public $shippingCost; 
   public $discount;

   public function calculatesubtotal() {

    $sub = $this->itemsTotal + $this->shippingCost - $this->discount;

    return $sub;

   }
}

$MyBasket = new Basket();

$MyBasket-> itemsTotal = 44;
$MyBasket-> shippingCost = 56;
$MyBasket-> discount = 50;

var_dump($MyBasket->calculatesubtotal());


?>