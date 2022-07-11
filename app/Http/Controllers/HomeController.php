<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\bookingDetail;
use App\Models\Booking;
use App\Models\Member;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pelanggan()
    {
        return view('pelanggan.home');
    }

    public function admin()
    {
        $customer = Customer::count();
        $booking  = Booking::count();
        $accepted_booking = bookingDetail::where('payment_status', 'LUNAS')->count();
        $members  = Member::count();

        return view('admin.dashboard', compact('customer', 'booking', 'accepted_booking', 'members'));
    }
    public function karyawan()
    {
        return view('karyawan.index');
    }
}
