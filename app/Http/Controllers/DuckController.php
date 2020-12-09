<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DuckController extends Controller
{
    public function showDuck($category, $id)
    {
        return  'en id = ' . $id . $category;
    }
}
