<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:discount-list|discount-create|discount-edit|discount-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:discount-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:discount-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:discount-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.discount.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discount = Discount::all();
        return view('admin.discount.create', compact('discount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'   => 'required',
            'deskripsi'    => 'required',
            'presentase'   => 'required',
            'stock'        => 'required',
            'Image'        => 'required',

        ]);

        $product = Product::findOrFail();
        $data = $request->all();
        // $data['presentase'] = $data['presentase'] * $product->price / 100;

        $discount = Discount::create([
            'product_id'  => $product->id,
            'deskripsi'   => $data['deskripsi'],
            'presentase'  => $data['presentase'],
            'stock'       => $data['stock'],
            'image'       => $data['image'],
        ]);

        if ($discount) {
            $product->update([
                'stock'  => $product->stock - $data['quota']
            ]);

            return redirect()->route('booking.index')
                             ->with('success', 'Pemesanan successfully.');
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
        //
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
