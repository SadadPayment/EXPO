<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Exposition;
use App\Models\Subscribers;
//use Illuminate\Contracts\Support\Renderable;
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
     * @return Renderable
     */
    public function index()
    {
        $Exposition = Exposition::all()->count();
        $Complaint = Complaint::all()->count();
        $Subscribers = Subscribers::all()->count();
        return view('home', compact(['Exposition', 'Complaint', 'Subscribers']));
    }
}
