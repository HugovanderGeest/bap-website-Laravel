<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DuckController extends Controller
{
    public function showDuck($id)
    {
        // return  'en id = ' . $id . $category;
        return view('duck', ['id' => $id]);
    }
}
