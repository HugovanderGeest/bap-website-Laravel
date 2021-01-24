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

    public function deletePost($postID)
    {
        $dpost = Upload::find($postID);
        if (!$dpost) {
            abort(404);
        } else {
            Upload::destroy($postID);
        }

        return redirect('/home');
    }


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
        // $uploads = Upload::all();
        $uploads = Upload::paginate(20);


        return view('home', ['mijntekst' => $naam, "uploads" => $uploads]);
    }
    public function admin()
    {
        $naam = 'pietje';
        // $uploads = Upload::all();
        $uploads = Upload::paginate(20);


        return view('admin', ['mijntekst' => $naam, "uploads" => $uploads]);
    }
}
