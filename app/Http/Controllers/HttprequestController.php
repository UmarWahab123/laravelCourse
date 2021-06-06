<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttprequestController extends Controller
{
    public function create(request $request)
    {
        //a) return $request->method(); //return the method

        //b) return $request->path(); //return the path

        //c) return $request->url(); //return the url

        return $request->fullUrl(); //return the full url

    }
}
