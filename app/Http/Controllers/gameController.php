<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameController extends Controller
{
    public function index() {

        return view('shop.index');
    }

    public function shop() {
        return view('shop.shop');
    }
}
