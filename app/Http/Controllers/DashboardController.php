<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
         $user = Auth::user();
         if($user)
         {
            return view('dashboard.index');
         }
         else {
            return redirect('/');
         }
    }
}