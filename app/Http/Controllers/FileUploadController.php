<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }
    public function uploadFile(Request $request)
    {

        $request->file('file')->store('public');

        return ('Success, You have successfully upload file.');

    }
}
