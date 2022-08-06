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

    public function edit_account() {
        return view('shop.edit_account');
    }

    public function login() {
        return view('login.index_login');
    }

    public function register() {
        return view('login.index_register');
    }

    public function admin() {
        return view('admin.admin_page');
    }
}
