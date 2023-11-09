<?php

namespace App\Http\Controllers;

use App\RoomCategory;
use Illuminate\Http\Request;

class RoomCategoryController extends Controller
{
    public function index(Request $request){
        $items = RoomCategory::all();
        return view('room_category.index',['items' => $items]);
    }
}
