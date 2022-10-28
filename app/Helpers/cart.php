<?php

use Gloudemans\Shoppingcart\Facades\Cart;

if (!function_exists('cart_count')) {
    function cart_count()
    {
        $customer  = auth()->user();

        $cart_items = Cart::content();

        if ($customer) {
            if ($customer->user_type = "customer") {
                $cart_items = Cart::content($customer->id);
            }
        }

        if ($cart_items) {
            return $cart_items->count();
        } else {
            return 0;
        }
    }
}
