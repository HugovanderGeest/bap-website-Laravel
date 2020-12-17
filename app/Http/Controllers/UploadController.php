<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadPage()
    {
        return view('upload');
    }

    public function handelPage(Request $request)
    {
        $data = $request->validate(
            [
                'naam' => 'required|min:2|max:20',
                'datum' => 'required|date',
                'locatie' => 'required',
                'image' => 'required|image'

            ]
        );
    }
}
