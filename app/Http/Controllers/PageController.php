<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class PageController extends Controller
{
    public function indexUtama(){
        return view('index');
    }
}
