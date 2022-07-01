<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Booking,
    Product,
    Cart,
    PaymentChannel,
    BookingDetail
};
use Carbon\Carbon;
use DateTime;
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
        $bookings = Booking::where('customer_id', auth()->user()->Customer->id)->get();
        $payment_channels = PaymentChannel::all();
        return view('pelanggan.order.index', compact('bookings', 'payment_channels'));

    }

    public function indexAdmin()
    {
        $bookings = Booking::all();
        return view('admin.booking.index', compact('bookings'));
    }

    public function verifyPembayaran(Booking $booking)
    {
        $bookingDetail = BookingDetail::where('booking_id', $booking->id)->first();

        $bookingDetail->update([
            'payment_status'    => 'LUNAS',
            'payment_time'      => is_null($bookingDetail->payment_time) ? date('Y-m-d H:i:s') : $bookingDetail->payment_time
        ]);

        $booking->Products->update([
            'stock'  => $booking->Products->stock - $booking->qty
        ]);

        return redirect()->route('indexAdmin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = Booking::all();
        return view('order.index', compact('booking'));
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
            'customer_id' => 'required',
            'quota'       => 'required',
            'subtotal'    => 'required',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();
        // dd($data);
        $data['no_invoice'] = $this->generateInvoice();
        $data['subtotal'] = $data['subtotal'] * $data['quota'];
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
            $cart = Cart::where('product_id', $product->id)
                            ->where('customer_id', $booking->customer_id)->first();
            $cart->delete();
            return redirect()->route('booking.index')
                             ->with('success', 'Pemesanan successfully.');
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

    public Function formPayment($id)
    {
        $booking = Booking::findOrFail($id);
        $channel = PaymentChannel::all();

        return view('pelanggan.order.payment', compact('booking', 'channel'));
    }

    public function payment(Request $request, Booking $booking)
    {
        $request->validate([
            'bukti' => 'nullable|image|mimes:jpeg,png,svg,jpg'
        ]);

        $data = $request->all();

        if ($request->file('bukti')) {
            $image_file     = $data['bukti'];
            $image_name     = str_replace([" ", ":"], ["-", "-"], Carbon::now()).'_'.$image_file->hashName();
            $data['bukti']  = $image_name;
        }

        $bookingDetail = BookingDetail::create([
            'booking_id'    => $booking->id,
            'evidence'      => !is_null($request->bukti) ? $data['bukti'] : null,
            'order_time'    => $booking->created_at->format('Y-m-d H:i:s'),
            'payment_time'  => is_null($request->bukti) ? null : date('Y-m-d H:i:s'),
            'payment_status' => !is_null($request->bukti) ? 'PROSES' : 'BELUM LUNAS'
        ]);

        if ($bookingDetail) {
            if ($request->file('bukti')) {
                $image_file->storeAs('public/images/bukti_pembayaran', $image_name);
            }

            return redirect()->route('userHome');
        }
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
