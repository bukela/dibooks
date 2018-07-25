<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\NewInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function mail()
    {
        return view('sendEmail');
    }

    public function email() {
        Mail::to(Auth::user()->email)->send(new NewInvoice());
        return redirect('/delovodnici');
    }
}
