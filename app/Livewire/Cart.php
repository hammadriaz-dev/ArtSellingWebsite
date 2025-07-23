<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CartService;

class Cart extends Component
{
    public $cartContent = [];
    public $total = 0;

    public $listeners = ['cartUpdated' => 'refreshCart'];

    public function mount(){
        $this->refreshCart();
    }

    // Add this to verify event is received
public function refreshCart()
{
    // \Log::debug('RefreshCart triggered');
    $cart = new CartService();
    $this->cartContent = $cart->content();
    $this->total = $cart->total();

    // Also try forcing a re-render
    $this->render();

}

    public function removeItem($productId){
        $cart = new CartService();
        $cart->remove($productId);
        $this->refreshCart();
    }

    public function updateQuantity($productId, $qty){
        $cart = new CartService();
        $cart->update($productId, $qty);
        $this->refreshCart();
    }


    public function render()
    {
        return view('livewire.cart');
    }
}
