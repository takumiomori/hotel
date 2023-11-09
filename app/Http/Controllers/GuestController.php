<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request){
        $items = Guest::all();
        return view('guest.index',['items' => $items]);
    }
}
