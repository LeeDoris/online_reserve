<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue = (int) Setting::where('key', 'admin.queue')->first()->value;
        return view('pages.home',compact('queue'));
    }
}
