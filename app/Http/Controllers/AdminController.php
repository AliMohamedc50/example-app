<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmon() {
        return view('test');
    }
    public function createAdmin() {
        return view('create_admin');
    }
    public function updateAdmin() {
        return view('update_admin');
    }
}
