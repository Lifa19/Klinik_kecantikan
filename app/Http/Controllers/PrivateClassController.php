<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;
use App\Models\CategoryAcademy;

class PrivateClassController extends Controller
{
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academies = CategoryAcademy::all();
        return view('admin.privateclass.index', compact('academies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryacademy = CategoryAcademy::all();
        return view('admin.privateclass.create', compact('categoryacademy'));
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
            'name'                => 'required|string|unique:academies,name|max:100',
            'description'         => 'required|string|max:255',
            'price'               => 'required|numeric',
            'picture'             => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'category_academy_id' => 'required',
        ]);
        $data = $request->all();

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }

        $academy = Academy::create([
            'category_academy_id' => $data['category_academy_id'],
            'name'      => $data['name'],
            'description' => $data['description'],
            'price'     => $data['price'],
            'picture'   => $data['picture']
        ]);

        if ($academy) {
            return redirect()->route('privateclass.index')->with('success', 'store private successfully.');
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
        $categoryacademy = CategoryAcademy::all();
        $academy         = Academy::findOrFail($id);
        return view('admin.privateclass.edit',compact('academy','categoryacademy'));
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
        $academy = Academy::findOrFail($id);

        $validatedData = $request->validate([
            'name'        => 'required|string|max:100|unique:academies,name,'.$academy->id,
            'description' => 'required|string|max:255',
            'price'       => 'required|numeric',
            'picture'     => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        ]);

        $academy->update($validatedData);

        return redirect()->route('privateclass.index')
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
        $academy = Academy::findOrFail($id);
        $academy->delete();

        if ($academy) {
            return redirect()->route('privateclass.index')->with('success', 'delete private class successfully.');
        }
    }

    public Function privateclass()
    {
        return view('client.privateclass');
    }
    public Function privateclasss()
    {
        $academies = CategoryAcademy::all();
        return view('pelanggan.privateclass', compact('academies'));
    }
}
