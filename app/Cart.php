<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    function __construct()
    {
        $this->items = array();
    }

    function getTotalMoney(){
        $total_money = 0;
        foreach ($this->items as $item){
            $total_money += $item->product->price * $item->quantity;
        }
        return $total_money;
    }

    function getTotalMoneyWithFormat(){
        return sprintf('%s', number_format($this->getTotalMoney(), 0));
    }

    public static function getCart()
    {
        if (Session::has('cart')) {
            return Session::get('cart');
        }
        return new Cart();
    }

    public static function getTotalItem()
    {
        $count = 0;
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $count = self::calculateTotalItem($cart);
        }
        return $count;
    }
    public static function calculateTotalItem($cart)
    {
        $count = 0;
        foreach ($cart->items as $item) {
            $count += $item->quantity;
        }
        return $count;
    }

    function getTotalMoneyString()
    {
        return sprintf('%s (VNĐ)', number_format($this->getTotalMoney(), 0));
    }
}