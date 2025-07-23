<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\product;
use App\Services\CartService;

class CartComponent extends Component
{
    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function addToCart($productId)
{
    $product = Product::findOrFail($productId);
    $cart = new CartService();
    $cart->add($product);

    // Add debugging:
    // \Log::debug('Cart content after add:', $cart->content());

    // Dispatch the event to the browser
    $this->dispatch('cartUpdated')->to(Cart::class);

        return redirect()->route('cart.view');
}

    public function render()
    {
        return view('livewire.cart-component');
    }
}
