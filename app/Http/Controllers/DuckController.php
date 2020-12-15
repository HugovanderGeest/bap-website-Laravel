<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DuckController extends Controller
{
    public function showDuck($id, Request $request)
    {
        // return  'en id = ' . $id . $category;
        // return $request->get('show_form');
        return view('duck', ['id' => $id]);
    }
}
