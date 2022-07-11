<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use App\Models\CategoryProduct;
use App\Models\PaymentChannel;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bookings = Booking::where('customer_id', auth()->user()->Customer->id)->get();
        // $payment_channels = PaymentChannel::all();
        // return view('pelanggan.order.index', compact('bookings', 'payment_channels'));

        $data = Booking::all();
        $category = CategoryProduct::all();

        return view('admin.report.index', compact('data', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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

    public function pdfReport(Request $request)
    {
        $booking = Booking::all();

        if ($request->start_date && $request->end_date) {
            $report = $booking->whereBetween('date', [$request->start_date, $request->end_date]);
        }elseif ($request->category) {
            foreach ($booking as $item) {
                $report = $item->Products->where('category_product_id', $request->category)->get();
            }
        }else{
            $report = $booking;
        }

        $pdf = Pdf::loadView('admin.report.pdf', compact('report'));
        return $pdf->stream('Laporan.pdf');
    }
}
