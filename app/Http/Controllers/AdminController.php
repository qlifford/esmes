<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if(!auth()->user()->role == 1)
        {
            return redirect()->back()->with('message', 'Unauthorized access');
        }
        else
        {
            return view('admin.index');
        }
    }
}
