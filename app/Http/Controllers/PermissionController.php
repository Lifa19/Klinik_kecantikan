<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:permission-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:permission-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete',
        ['only' => ['delete','destory']]);

    }

    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
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
            'nama' => 'required|string|unique:permissions,name',
        ]);

        $data = $request->all();

        $permission = Permission::create(['name' => $data['nama']]);

        if ($permission) {
            return redirect()->route('permissions.index')->with('success', 'store permission successfully.');
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
        $permission = Permission::findOrFail($id);
        return view('admin.permission.edit', compact('permission'));
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
        $permission = Permission::findOrFail($id);

        $validatedData = $request->validate([
            'nama' => 'required|string|unique:permissions,name,'.$permission->id,
        ]);
        
        $permission->update(['name' => $validatedData['nama']]);

        return redirect()->route('permissions.index')
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
        $permission = Permission::findOrFail($id);
        $permission->delete();

        if ($permission) {
            return redirect()->route('permissions.index')->with('success', 'delete permission successfully.');
        }
    }
}
