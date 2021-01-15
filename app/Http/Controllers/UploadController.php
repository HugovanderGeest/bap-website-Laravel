<?php

namespace App\Http\Controllers;

use App\Upload;
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
                'name' => 'required|min:2|max:20',
                'datum' => 'required|date',
                'locatie' => 'required',
                'image' => 'required|image'

            ]
        );
        $newFilename = $data['image']->store('upload_img', 'public');
        $data['image'] = $newFilename;
        Upload::create($data);

        return redirect()->route('home');
    }
}
