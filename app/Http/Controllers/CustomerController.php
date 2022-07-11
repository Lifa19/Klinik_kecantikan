<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Member;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:customer-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:customer-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:customer-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $customers = Member::all();
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Customer::all();
        return view('admin.customer.create',compact('member'));
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
            'name'         => 'required|string|max:255',
            'address'      => 'required|string|max:255',
            'phone'        => 'required|numeric|digits_between:10,13',
            'dateOfBirth'  => 'required|date',
            'gender'       => 'required|string',
            'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
            // 'user_id'      => 'required',
            // 'member_id'    => 'required',

        ]);

        $data = $request->all();
        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }
        $member = Member::where('user_id',auth()->user()->id)->get();
        $customer = Customer::create([
            'user_id'      => auth()->user()->id,
            'member_id'    => $member->id,
            'name'         => $data['name'],
            'address'      => $data['address'],
            'phone'        => $data['phone'],
            'dateOfBirth'  => $data['dateOfBirth'],
            'gender'       => $data['gender'],
            'picture'      => $data['picture'],

        ]);

        if ($customer) {
            return redirect()->route('customer.index')
                             ->with('success', 'Data Pelanggan Berhasil ditambahkan.');
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
        $user = User::all();
        $member = Member::all();
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit',compact('customer','user','member'));
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
        $customer = Customer::findOrFail($id);

        $validatedData = $request->validate([
            'name'         => 'required|string|max:100|unique:customers,name,'.$customer->id,
            'address'      => 'required|string|max:255',
            'phone'        => 'required|numeric|digits_between:10,13',
            'dateOfBirth'  => 'required|date',
            'gender'       => 'required|string',
            'picture'      => 'image|mimes:jpeg,jpg,png,svg|max:2048|',
        ]);

        // $customer->update($validatedData);
        $data = $validatedData;

        if ($request->file('picture')) {
            $picture                     = $request->file('picture');
            $picture_name                = date('d-m-Y-H-i-s').'_'.$picture->hashName();
            $data['picture']             = $picture_name;

            $picture->storeAs('public/images', $picture_name);
        }


        $customer->update([
            'name'        => $data['name'],
            'adress' => $data['adress'],
            'phone'       => $data['phone'],
            'datOfBirth'    => $data['datOfBirth'],
            'gender'       => $data['gender'],
            'picture'     => !is_null($request->file('picture')) ? $data['picture'] : $customer->picture

        ]);

        return redirect()->route('customer.index')
                         ->with('success', 'Data Pelanggan Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        if ($customer) {
            return redirect()->route('customer.index')->with('success', 'dihapus Data Pelanggan.');
        }
    }
    // public function profile()
    // {
    //     $profiles = Customer::all();
    //     return view('admin.profile.index', compact('profiles'));
    // }
}
