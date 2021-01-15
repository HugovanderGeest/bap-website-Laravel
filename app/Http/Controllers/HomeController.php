<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    // eerst inloggen functie 

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $naam = 'pietje';
        $uploads = Upload::all();

        return view('home', ['mijntekst' => $naam, "uploads" => $uploads]);
    }
}
