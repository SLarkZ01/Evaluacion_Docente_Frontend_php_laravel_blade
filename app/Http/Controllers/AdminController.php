<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function AdminPanel()
    {
        return view('administrador.panel-admin');
    }
}