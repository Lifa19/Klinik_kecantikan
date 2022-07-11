<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Booking;
use DB;
use \APP;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $data = Booking::all();
        // $pdf = PDF::loadView('report.index',$data);
        // return $pdf->stream('Laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $booking = $this->get_booking();
        // return view('dynamic_pdf')->with('booking',$booking);
    }
    // public function generatePDF($id)
    // {
    //     $data = Booking::all();
    //     $pdf = PDF::loadView('report.index',$data);
    //     return $pdf->stream('Laporan');

    //     $data = [
    //         'booking' => '$product_id'
    //     ];
    //     $pdf =\Booking::make('dompdf.wrapper');
    //     $pdf->loadHTML ($this->convert_booking_to_html());
    //     return $pdf->stream();
    // }

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
}
