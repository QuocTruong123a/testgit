<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Milon\Barcode\Facades\DNS2DFacade;
class test extends Controller
{
    public function index(){
      
        return view('test');
    }
}
