<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadPage()
    {
        return view('upload');
    }

    public function handelPage()
    {
        return "ja het werkt";
    }
}
