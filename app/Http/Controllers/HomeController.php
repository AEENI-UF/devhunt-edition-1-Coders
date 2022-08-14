<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact_us(Request $request)
    {
        Mail::to('clairmont.rajaonarison@gmail.com')->send(new ContactUs($request->all()));
        return response()->json(['status' => 'ok']);
    }
}
