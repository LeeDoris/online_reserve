<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservations()
    {
        $id = Auth::id();
//        dd(ReservationResource::collection(Reservation::all()->where('user_id', '=', $id)));
        return ReservationResource::collection(Reservation::all()->where('user_id', $id)->where('active', 1));
    }
}
