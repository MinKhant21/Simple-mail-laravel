<?php

namespace App\Http\Controllers;

use App\Mail\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function signup(){
        $data = [
            'name' => 'kkmk',
            'age' => 20
        ];
        Mail::to("kmk@gmail.com")->send(new Signup($data));
        dd("Email Success Send");
    }
}
