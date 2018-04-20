<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Booking;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Room $room)
    {
		$customer = Customer::where('email',$request->input('email'))->first();

		if (is_null($customer)) {
			$customer = new Customer();
			$customer->name   = $request->input('name');
			$customer->email  = $request->input('email');
			$customer->save();
		}

		$booking = new Booking();
		$booking->customer_id = $customer->id;
		$booking->credit_card = $request->input('card');
		$booking->amount      = $request->input('amount');
		$booking->fees        = $request->input('fees');
		$booking->taxes       = $request->input('taxes');
		$booking->total       = $request->input('total');
		$booking->room_id     = $room->id;
		$booking->save();

		
		$room->availability = "SOLD OUT"; 
		$room->save();
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
