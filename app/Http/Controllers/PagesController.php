<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use TCG\Voyager\Facades\Voyager;

class PagesController extends Controller
{

    public function reservation()
    {
        return view('pages.reservation');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
