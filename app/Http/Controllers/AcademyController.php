<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryProduct;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:academy-list|academy-create|academy-edit|academy-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:academy-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:academy-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:academy-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $products = CategoryProduct::all();
        return view('admin.academy.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryproduct = CategoryProduct::all();
        return view('admin.academy.create', compact('categoryproduct'));
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
            'name'               => 'required|string|unique:products,name|max:100',
            'description'        => 'required|string|max:255',
            'price'              => 'required|numeric',
            'stock'              => 'required|numeric',
            'picture'            => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'category_product_id' => 'required',
        ]);

        $data = $request->all();

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }


        $product = Product::create([
            'category_product_id' => $data['category_product_id'],
            'name'      => $data['name'],
            'description' => $data['description'],
            'price'     => $data['price'],
            'stock'     => $data['stock'],
            'picture'   => $data['picture']
        ]);

        if ($product) {
            return redirect()->route('academy.index')->with('success', 'store product successfully.');
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
        $categoryproduct= CategoryProduct::all();
        $product = Product::findOrFail($id);
        return view('admin.academy.edit',compact('product','categoryproduct'));
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
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name'        => 'required|string|max:100|unique:products,name,'.$product->id,
            'description' => 'required|string|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'required|numeric',
            'picture'     => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        ]);

        $product->update($validatedData);

        return redirect()->route('academy.index')
                         ->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        if ($product) {
            return redirect()->route('academy.index')->with('success', 'delete product successfully.');
        }
    }
    public function academyy()
    {
        $products = CategoryProduct::all();
        return view('pelanggan.academy', compact('products'));
    }
}
