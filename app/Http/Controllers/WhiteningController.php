<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\CategoryTreatment;
class WhiteningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:whitening-list|whitening-create|whitening-edit|whitening-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:whitening-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:whitening-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:whitening-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $treatments = CategoryTreatment::all();
        return view('admin.whitening.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorytreatment = CategoryTreatment::all();
        return view('admin.whitening.create', compact('categorytreatment'));
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
            'name'                => 'required|string|unique:treatments,name|max:100',
            'description'         => 'required|string|max:255',
            'price'               => 'required|numeric',
            'picture'             => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'quota'               => 'required|integer',
            'category_treatment_id' => 'required',
        ]);
        $data = $request->all();

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }

        $treatment = Treatment::create([
            'category_treatment_id'  => $data['category_treatment_id'],
            'name'                  => $data['name'],
            'description'           => $data['description'],
            'price'                 => $data['price'],
            'picture'               => $data['picture'],
            'quota'                 => $data['quota']
        ]);

        if ($treatment) {
            return redirect()->route('whitening.index')->with('success', 'store whitening successfully.');
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
        $categorytreatment = CategoryTreatment::all();
        $treatment         = Treatment::findOrFail($id);
        return view('admin.whitening.edit',compact('treatment','categorytreatment'));
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
        $treatment = Treatment::findOrFail($id);

        $validatedData = $request->validate([
            'name'        => 'required|string|max:100|unique:treatments,name,'.$treatment->id,
            'description' => 'required|string|max:255',
            'price'       => 'required|numeric',
            'picture'     => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'quota'        => 'required|integer'
        ]);
        $treatment->update($validatedData);

        return redirect()->route('whitening.index')
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
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        if ($treatment) {
            return redirect()->route('whitening.index')->with('success', 'delete whitening successfully.');
        }
    }

    public Function whitening()
    {
        return view('client.whitening');
    }

    public Function whiteningg()
    {
        $treatments = CategoryTreatment::all();
        return view('pelanggan.whitening', compact('treatments'));
    }
}
