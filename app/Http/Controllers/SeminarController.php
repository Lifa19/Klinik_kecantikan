<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academy;
use App\Models\CategoryAcademy;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:seminar-list|seminar-create|seminar-edit|seminar-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:seminar-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:seminar-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:seminar-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $academies = CategoryAcademy::all();
        return view('admin.seminar.index', compact('academies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryacademy= CategoryAcademy::all();
        return view('admin.seminar.create', compact('categoryacademy'));
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
            'category_academy_id'   => $data['category_academy_id'],
            'name'                  => $data['name'],
            'description'           => $data['description'],
            'price'                 => $data['price'],
            'picture'               => $data['picture']
        ]);

        if ($academy) {
            return redirect()->route('seminar.index')->with('success', 'store seminar successfully.');
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
        return view('admin.plasma.edit',compact('academy','categoryacademy'));
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

        return redirect()->route('seminar.index')
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
            return redirect()->route('seminar.index')->with('success', 'delete seminar successfully.');
        }
    }

    public Function seminar()
    {
        return view('client.seminar');
    }
    public Function seminarr()
    {
        $academies = CategoryAcademy::all();
        return view('pelanggan.seminar', compact('academies'));
    }
}
