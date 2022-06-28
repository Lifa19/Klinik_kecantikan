<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Member;
// use App\Models\CategoryMember;
use App\Models\Discount;
use App\Models\Product;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:member-list|member-create|member-edit|member-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:member-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:member-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:member-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        // $categorymember = CategoryMember::all();
        return view('admin.member.create',compact('customer'));
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
            'presentase'    =>'required',

        ]);

        $product = Product::findOrFail();
        $discount = Discount::findOrFail();
        $data = $request->all();
        // dd($data);
        $data['presentase'] = $product->price % $discount->presentase;
        // if ($product->stock < $data['quota']) {
        //     return redirect()->back()
        //                      ->with('error', 'Stock Tidak Cukup.');
        // }
        $discount = Member::where('discount_id')->get();
        $member = Member::create([
            'user_id'     => auth()->user()->id,
            'discount_id' => $discount->id,
            'presentase'  => $data['presentase'],
        ]);

        if ($member)
        {
            return redirect()->route('member.index')
                             ->with('success', 'Daftar Member Berhasil.');
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
    {   $customer       = Customer::all();
        // $categorymember = CategoryMember::all();
        $member         = Member::findOrFail($id);
        return view('admin.member.edit',compact('member','customer'));
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
        $member = Member::findOrFail($id);

        $validatedData = $request->validate([
            'registration_date' => 'required|unique:members,date'.$member->id,


        ]);

        $member->update($validatedData);

        return redirect()->route('member.index')
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
        $member = Member::findOrFail($id);
        $member->delete();

        if ($member) {
            return redirect()->route('member.index')->with('success', 'delete member successfully.');
        }
    }
}
