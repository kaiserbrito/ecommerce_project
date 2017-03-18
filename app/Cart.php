<?php

namespace App;


class Cart
{
    public $items = null;
    public $totalQt = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
    	if ($oldCart) {
    		$this->items = $oldCart->items;
    		$this->totalQt = $oldCart->totalQt;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    
    # Function that adds the products to cart, and increment the quantity of the item
    

    public function add($item, $id)
    {
    	$storedItem = ['qt' => 0, 'price' => $item->price, 'item' => $item];
    	if ($this->items) {
    		if (array_key_exists($id, $this->items)) {
    			$storedItem = $this->items[$id];
    		}
    	}
    	$storedItem['qt']++;
    	$storedItem['price'] = $item->price * $storedItem['qt'];
    	$this->items[$id] = $storedItem;
    	$this->totalQt++;
    	$this->totalPrice += $item->price;
    }
}