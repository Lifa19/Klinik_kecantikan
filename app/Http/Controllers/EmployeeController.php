<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;


class EmployeeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:employee-list|employee-create|employee-edit|employee-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:employee-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:employee-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:employee-delete',
        ['only' => ['delete','destory']]);

    }

    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();
        return view('admin.employee.create', compact('position'));
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
            'name'         => 'required|string|unique:employees,name|max:100',
            'address'      => 'required|string|max:255',
            'phone'        => 'required|numeric|digits_between:10,13',
            'dateOfBirth'  => 'required|date',
            'gender'       => 'required|string',
            'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            'position_id'  => 'required',
        ]);

        $data = $request->all();

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }


        $employee = Employee::create([
            'user_id'      => auth()->user()->id,
            'position_id'  => $data['position_id'],
            'name'         => $data['name'],
            'address'      => $data['address'],
            'phone'        => $data['phone'],
            'dateOfBirth'  => $data['dateOfBirth'],
            'gender'       => $data['gender'],
            'picture'      => $data['picture'],
        ]);

        if ($employee) {
            return redirect()->route('employee.index')->with('success', 'Data Karyawan Behasil ditambahkan.');
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
    public function edit(Request $request, $id)
    {
        $position = Position::all();
        $employee = Employee::findOrFail($id);
        return view('admin.employee.edit',compact('employee','position'));
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
        $employee = Employee::findOrFail($id);

        $validatedData = $request->validate([
            'name'         => 'required|string|max:100|unique:employees,name,'.$employee->id,
            'address'      => 'required|string|max:255',
            'phone'        => 'required|numeric|digits_between:10,13',
            'dateOfBirth'  => 'required|date',
            'gender'       => 'required|string',
            'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        ]);

        $employee->update($validatedData);

        return redirect()->route('employee.index')
                         ->with('success', 'Data Karyawan Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        if ($employee) {
            return redirect()->route('employee.index')->with('success', 'Data Karyawan Berhasil dihapus.');
        }
    }
}
