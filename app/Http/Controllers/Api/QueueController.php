<?php

namespace App\Http\Controllers\Api;

use App\Mail\ReservationFullEmail;
use App\Models\Reservation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use TCG\Voyager\Models\Setting;

class QueueController extends Controller
{
    public function index()
    {
        $queue = (int) Setting::where('key', 'admin.queue')->first()->value;
        return Response::json(['data'=>$queue]);
    }

    public function queue()
    {
        $userId = Auth::id();
        $unactive = Reservation::where('active', 0)->whereBetween('reservation_start',[Carbon::now(), Carbon::now()->addHour(3)])->count();
        $interval = (int) Setting::where('key', 'admin.interval.time')->first()->value;
        $advance = (int) Setting::where('key', 'admin.advance.time')->first()->value;
        $wait_time = ($unactive + 1) * $interval;
        $new_date = Carbon::now()->addMinutes($wait_time);
        $reservation = new Reservation();
        $reservation->user_id = $userId;
        $reservation->reservation_start = $new_date;
        $reservation->reservation_end = $new_date->addHours(3);
        $reservation->active = 0;
        $reservation->save();

        $email = User::find($userId)->email;
        $setting = Setting::where('key', 'admin.reservationfull.email')->first()->value;
        Mail::to($email)->send(new ReservationFullEmail($reservation, $setting, $wait_time));
        return Response::json(['wait_time' => $wait_time, 'advance' => $advance]);
    }

    public function check()
    {
        $userId = Auth::id();
        $queued = Reservation::where('user_id', $userId)->where('active', 0)->first();
        if ( $queued ) {
            return Response::json(['data' => $queued]);
        }
    }

    public function delete($id)
    {
        Reservation::find($id)->delete();
        return Response::json(['data' => 'Delete Success!']);
    }
}