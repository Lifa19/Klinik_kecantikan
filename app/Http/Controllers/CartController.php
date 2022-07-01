<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Treatment;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:cart-list|cart-create|cart-edit|cart-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:cart-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:cart-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:cart-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {

        $carts = Cart::where('customer_id', auth()->user()->Customer->id)->get();
        return view('pelanggan.cart.cart', compact('carts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $cart = Cart::create([
            'product_id'   => $data['product_id'],
            'customer_id'  => auth()->user()->Customer->id,
        ]);

        if ($cart) {
            return redirect()->route('cart.index')
                             ->with('success', 'Cart.');
            } else {
                Echo "Failed";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $cart = Cart::findOrFail($id);
            $validatedData = $request->validate([
                'customer_id'  => 'required|string|max:100|unique:carts,name,'.$cart->id,
                'product_id'   => 'required',
            ]);

            $cart->update($validatedData);

            return redirect()->route('cart.cart')
                             ->with('success', 'Data Berhasil Diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
