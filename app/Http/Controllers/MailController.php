<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from umarwahab',
            'body' => 'This is for testing mail using gmail',
        ];
        Mail::to("umarwahab672@gmail.com")->send(new TestMail($details));
        return 'Email has been send successfully.';
    }
}
