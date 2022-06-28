<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academy;
use App\Models\CategoryAcademy;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:workshop-list|workshop-create|workshop-edit|workshop-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:workshop-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:workshop-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:workshop-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $academies = CategoryAcademy::all();
        $no = 1;
        return view('admin.workshop.index', compact('academies', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryacademy = CategoryAcademy::all();
        return view('admin.workshop.create', compact('catogoryacademy'));
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
            'name'                => $data['name'],
            'description'         => $data['description'],
            'price'               => $data['price'],
            'picture'             => $data['picture']
        ]);

        if ($academy) {
            return redirect()->route('workshop.index')->with('success', 'store workshop successfully.');
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
        return view('admin.workshop.edit',compact('academy','categoryacademy'));
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

        return redirect()->route('workshop.index')
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
            return redirect()->route('workshop.index')->with('success', 'delete workshop successfully.');
        }
    }
    public Function academy()
    {
        return view('client.academy');
    }

    public Function workshopp()
    {
        $academies = CategoryAcademy::all();
        return view('pelanggan.workshop', compact('academies'));
    }
}
