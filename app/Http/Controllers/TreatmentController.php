<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CategoryProduct;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:treatment-list|treatment-create|treatment-edit|treatment-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:treatment-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:treatment-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:treatment-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $products = CategoryProduct::all();
        return view('admin.treatment.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryproduct = CategoryProduct::all();
        return view('admin.treatment.create', compact('categoryproduct'));
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
        $data['discount'] = (int)$data['discount'];


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
            return redirect()->route('treatment.index')->with('sukses', 'Treatment Berhasil Ditambah.');
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
        return view('admin.treatment.edit',compact('product','categoryproduct'));
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
            'discount'    => 'nullable|numeric',
            'stock'       => 'required|numeric',
            'picture'     => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'category_product_id' => 'required',

        ]);

        // $product->update($validatedData);
        $data = $validatedData;

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }

        $product->update([
            'category_product_id' => $data['category_product_id'],
            'name'        => $data['name'],
            'description' => $data['description'],
            'price'       => $data['price'],
            'discount'    => $data['discount'],
            'stock'       => $data['stock'],
            'picture'     => !is_null($request->file('picture')) ? $data['picture'] : $product->picture
        ]);


        return redirect()->route('treatment.index')
                         ->with('success', 'Treatment Berhasil Diupdate!');
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
            return redirect()->route('treatment.index')->with('success', 'Hapus Treatment Berhasil.');
        }
    }
    public Function treatmentt()
    {
        $products = CategoryProduct::all();
        return view('pelanggan.treatment', compact('products'));
    }
    public Function treatment ()
    {
        return view('client.treatment');
    }
}
