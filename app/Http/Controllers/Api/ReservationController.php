<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return ReservationResource::collection(Reservation::all());
//        return UserResource::collection(User::all());
//        return new UserResource(User::find(1));
//        return TableResource::collection(Table::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return new ReservationCollection(Reservation::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $tableId = Input::get('table_id');
        $day = Input::get('day');
        $month = Input::get('month');
        $year = Input::get('year');
        $time = explode(':', Input::get('time'));
        $hour = $time[0];
        $minute = $time[1];
        $date = Carbon::create($year, $month, $day, $hour, $minute, 0);

        $reservation = new Reservation();
        $reservation->user_id = $userId;
        $reservation->table_id = $tableId;
        $reservation->reservation_start = $date;
        $reservation->reservation_end = $date->addHours(3);
        $reservation->active = 1;
        $reservation->save();
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

    public function check()
    {

        $day = Input::get('day');
        $month = Input::get('month');
        $year = Input::get('year');
        $time = explode(':', Input::get('time'));
        $hour = $time[0];
        $minute = $time[1];
        $date = Carbon::create($year, $month, $day, $hour, $minute, 0);


        $reservations = Reservation::all();
        $reservedTables = [];
        foreach ($reservations as $reservation) {
            if( $date->between($reservation->reservation_start,$reservation->reservation_start->addHours(3)) ) {
                $reservedTables[] = $reservation->table_id;
            }
        }
        return Response::json(['data' => $reservedTables]);
    }
}
