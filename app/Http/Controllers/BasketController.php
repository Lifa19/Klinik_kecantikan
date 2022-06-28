<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\Customer;
use App\Models\Treatment;
use App\Models\Product;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:basket-list|basket-create|basket-edit|basket-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:basket-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:basket-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:basket-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {

        $baskets = Basket::where('customer_id', auth()->user()->Customer->id)->get();
        // $baskets = $request->customer();
        // $baskets = Basket::where('Customer_id', $baskte);

        return view('pelanggan.basket.basket', compact('baskets'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $basket     = Basket::all();
        // return view('pelanggan.basket.create',compact('basket'));

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
        $basket = Basket::create([
            'product_id'   => $data['product_id'],
            'customer_id'  => auth()->user()->Customer->id,
        ]);

        if ($basket) {
            return redirect()->route('basket.index')
                             ->with('success', 'Basket successfully.');
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
        // {
        //     $basket = Basket::findOrFail($id);

        //     $validatedData = $request->validate([
        //         'customer_id'  => 'required|string|max:100|unique:baskets,name,'.$basket->id,
        //         'address'      => 'required|string|max:255',
        //         'phone'        => 'required|numeric|digits_between:10,13',
        //         'dateOfBirth'  => 'required|date',
        //         'gender'       => 'required|string',
        //         'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        //     ]);

        //     $basket->update($validatedData);

        //     return redirect()->route('customer.index')
        //                      ->with('success', 'Data Berhasil Diupdate!');
        // }
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
