<?php

namespace App\Http\Controllers;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
        
      if (!$coupon) {
          return redirect()->route('cart.index')->withErrors('Invalid Coupon Code. Please Try again.');
      }
    
      session()->put('coupon', [
          'name' => $coupon->code,
          'discount' => $coupon->discount(Cart::Subtotal())
      ]);
      return redirect()->route('cart.index')->with('success_message', 'Coupon has been apllied!');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

        return back()->with('success_message', 'Coupon has been removed.');
    }
}
