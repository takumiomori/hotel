<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request){
        $items = Room::all();
        return view('room.index',['items' => $items]);
    }

    public function find(Request $request){
        $msg = session('msg');
        return view('room.find',['input'=>'','msg'=>$msg]);
    }

    //空室検索
    public function search(Request $request){
        $category = $request->room_category_id;
        $checkin = $request->checkin;
        $checkout = $request->checkout;
        $threshold = $request->number_of_room; 
        $items = Room::matchCategory($category)->availableDate($checkin,$checkout)->get();

        if($items->count()>=$threshold){
            return redirect('/reservation/add')->with('items',$items);
        }else{
            return view('room.find',['msg'=>'検索条件に該当するお部屋はございません']);
        }
        
    }

}
