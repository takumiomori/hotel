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

    public function add(Request $request){
        return view('guest.add');
    }

    public function create(Request $request){
        $this->validate($request,Guest::$rules);
        $guest = new Guest;
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/guest');
    }
}
