<?php

namespace App;

class tabel
    
{
    public $items; // [ ['id' => ['quantity' => , 'price' => , 'data' =>],....]
    public $totalQuantity;
    public $totalPrice;
    
    
    public function __construct($prevCart)
    {
        if($prevCart != null){
            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;


        }else{
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;

        }

    }
    
    public function addItem($id,$product){

        //the item already exists
        if(array_key_exists($id,$this->items)){

            $productToAdd = $this->items[$id];
            $productToAdd['quantity']++;
          


            //first time to add this product to cart
        }else{

            $productToAdd = ['quantity'=> 1, 'data'=>$product];


        }

        $this->items[$id] = $productToAdd;
        $this->totalQuantity++;
        

    }
    
}

    
    
    
?>