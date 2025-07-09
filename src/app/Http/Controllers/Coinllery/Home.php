<?php

namespace App\Http\Controllers\Coinllery;

use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class Home extends Controller {

    public function index(Request $request): View {

        return view('coinllery.home');
        
    }
    
}
