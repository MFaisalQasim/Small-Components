<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class PagesController extends Controller
{
    public function welcome(Request $request)
    {
        $data = Event::get();
    return view('welcome', compact('data'));
    }
}
