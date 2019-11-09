<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        Route::get('/{any}', function () {
            return view('pages.dashboard');
        })->where('any','.*');
    }
}
