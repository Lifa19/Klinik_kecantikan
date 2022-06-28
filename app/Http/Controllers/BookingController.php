<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:booking-list|booking-create|booking-edit|booking-delete',
        ['only' => ['index','store']]);
        $this->middleware('permission:booking-create',
        ['only' => ['create','store']]);
        $this->middleware('permission:booking-edit',
        ['only' => ['edit','update']]);
        $this->middleware('permission:booking-delete',
        ['only' => ['delete','destory']]);

    }
    public function index()
    {
        $bookings = Booking::all();
        return view('pelanggan.booking.index', compact('bookings'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = Booking::all();
        return view('pelanggan.index', compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'customer_id'   => 'required',
            'quota'       => 'required',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();
        // dd($data);
        $data['no_invoice'] = $this->generateInvoice();
        $data['subtotal'] = $product->price * $data['quota'];
        $data['date']   = date('y-m-d');

        if ($product->stock < $data['quota']) {
            return redirect()->back()
                             ->with('error', 'Stock Tidak Cukup.');
        }

        $booking = Booking::create([
            'customer_id' => $data['customer_id'],
            'product_id'  => $product->id,
            'qty'         => $data['quota'],
            'subtotal'    => $data['subtotal'],
            'date'        => $data['date'],
            'no_invoice'  => $data['no_invoice']
        ]);

        if ($booking) {
            $product->update([
                'stock'  => $product->stock - $data['quota']
            ]);

            return redirect()->route('booking.index')
                             ->with('success', 'Pemesanan successfully.');
            } else {
                Echo "Failed";
            }
        // dd($data);
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
        //
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

    // public Function pemesanan()
    // {
    //     return view('pelanggan.pemesanan');
    // }

    public Function detail()
    {
        // return view('pelanggan.detail');
        $bookings = Booking::all();
        return view('pelanggan.detail', compact('bookings'));
    }

    private function generateInvoice(){
        $tgl = str_replace('-','',date('d-m-y'));
        $sql = Booking::where(DB::raw('substr(no_invoice, 4, 6)'),$tgl)
                                ->max(DB::raw('substr(no_invoice, 10, 4)'));
        if(!empty($sql)){
           $n   = (int)$sql + 1;
           $no  = sprintf("%04s",$n);
        }
        else{
            $no = "0001";
        }

        $invoice = "INV/$tgl/SA/".$no;

        return $invoice;
    }
}
