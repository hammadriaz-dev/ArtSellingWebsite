<?php

namespace App\Services;

class CartService
{

    public function content(){
        return session()->get('cart', []);
    }

    public function add($product, $qty=1){
        $cart = $this->content();

        if(isset($cart[$product->id])){
            $cart[$product->id]['qty'] += $qty;
        }
        else{
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->product_name,
                'qty' => $qty,
                'price' => $product->price,
                'options' => ['image' => $product->image],
            ];
        }
        session()->put('cart', $cart);
    }

    public function remove($productId){
        $cart = $this->content();
        unset($cart[$productId]);
        session()->put('cart', $cart);
    }

    public function update($productId, $qty){
        $cart = $this->content();
        if(isset($cart[$productId])){
            $cart[$productId]['qty'] = $qty;
            session()->put('cart', $cart);
        }

    }

    public function total(){
        return array_reduce($this->content(), function($carry, $item){
            return $carry + ($item['price'] * $item['qty']);
        }, 0);
    }

}
