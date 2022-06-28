<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:profile-list|profile-create|profile-edit|profile-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:profile-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:profile-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:profile-delete',
        ['only' => ['delete','destory']]);

    }

    public function index()
    {
        $customers = Customer::all();
        return view('admin.profile.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $customer = Customer::all();
        return view('admin.profile.edit',compact('customer'));
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

    public function profilePelanggan(){
       return view('pelanggan.profile');
    }
    public function editprofile(){
        return view('pelanggan.editprofile');
     }
     public function createprofile(){
        return view('pelanggan.editprofile');

     }
}
