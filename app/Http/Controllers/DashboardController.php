<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
      //  $this->middleware("auth");
    }
    public function dashboard()
    {
        return view('Admin/index');
    }
    public function liste()
    {
        return view('Admin/etudiant/index');
    }
}
