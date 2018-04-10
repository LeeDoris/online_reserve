<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ReservationResource;
use App\Mail\ReservationEmail;
use App\Mail\ReservationFullEmail;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
//use TCG\Voyager\Contracts\User;
use App\User;
use Snowfire\Beautymail\Beautymail;
use TCG\Voyager\Models\Setting;

class ReservationController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $tableId = Input::get('table_id');
        $day = Input::get('day');
        $month = Input::get('month');
        $year = Input::get('year');
        $time = explode(':', Input::get('time'));
        $hour = $time[0];
        $minute = $time[1];
        $date = Carbon::create($year, $month, $day, $hour, $minute, 0);
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();
        $seats = Table::find($tableId)->seats;

        $checkout = Reservation::where('user_id', $userId)->where('active', "1")->whereBetween('reservation_start', [$today, $tomorrow])->count();
        if ($checkout > 2) {
            return Response::json(['error' => 'Sorry about that one customer just could order two tables in one day!']);
        }else{
            $reservation = new Reservation();
            $reservation->user_id = $userId;
            $reservation->table_id = $tableId;
            $reservation->reservation_start = $date;
            $reservation->reservation_end = $date->addHours(3);
            $reservation->seats = $seats;
            $reservation->active = 1;
            $reservation->save();
            $setting = Setting::where('key', 'admin.reservation.email')->first();
            $email = User::find($userId)->email;
            Mail::to($email)->send(new ReservationEmail($reservation, $setting));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ReservationResource(find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::find($id)->delete();
        return Response::json(['data' => 'Reservation deleted'], 200);
    }

    /**
     * @return mixed
     */
    public function check()
    {
        $day = Input::get('day');
        $month = Input::get('month');
        $year = Input::get('year');
        $time = explode(':', Input::get('time'));
        $hour = $time[0];
        $minute = $time[1];
        $date = Carbon::create($year, $month, $day, $hour, $minute, 0);

        $reservations = Reservation::all()->where('active',1);
        $reservedTables = [];
        foreach ($reservations as $reservation) {
            if ($date->between($reservation->reservation_start, $reservation->reservation_start->addHours(3))) {
                $reservedTables[] = $reservation->table_id;
            }
        }
        return Response::json(['data' => $reservedTables]);
    }
}
