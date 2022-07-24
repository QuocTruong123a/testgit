<?php

namespace App\Http\Controllers;

use App\Mail\testemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    public function show(){
        return view('showemail');
      

    }
    public function send(Request $request){





    }
}
