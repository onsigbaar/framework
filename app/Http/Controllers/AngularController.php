<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AngularController extends Controller
{
    public function serveApp()
    {
        return view('welcome');
    }

    public function unsupported()
    {
        return view('unsupported_browser');
    }
}
