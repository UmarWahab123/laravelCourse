<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //method for Get session data
    public function getSessionData(Request $request)
    {
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo 'No data in the session';
        }
    }
    //method for Stored session data
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name', 'UmarWahab');
        echo "data has been added to the session";
    }
    //method for Delete session data
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "Data has been removed from the session";
    }
}
