<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Exposition;
use App\Models\Subscribers;
use Illuminate\Http\Request;

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
    public function index()
    {
        $Exposition = Exposition::all()->count();
        $Complaint = Complaint::all()->count();
        $Subscribers = Subscribers::all()->count();
//dd([$Exposition, $Complaint]);
        return view('home', compact(['Exposition', '', 'Complaint', 'Subscribers']));
    }
}
