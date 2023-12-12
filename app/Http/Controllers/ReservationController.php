<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request){
        $items = Reservation::all();
        return view('reservation.index',['items' => $items]);
    }

    public function add(Request $request){
        $items = session('items');
        $msg = session('msg');
        $checkin = session('checkin');
        $checkout = session('checkout');
        $category_name = session('category_name');
        return view('reservation.add',['items' => $items,'msg'=>$msg,'checkin'=>$checkin,'checkout'=>$checkout,'category_name'=>$category_name,]);
    }

    public function create(Request $request){
        $this->validate($request,Reservation::$rules);
        $number_guests =$request->number_guests;
                
        $reservation = new Reservation;
        $form = $request->all();
        unset($form['_token']);
        $reservation->fill($form)->save();

        $room_id = $request->room_id;
        $checkIN = $request->checkin;
        $checkOut = $request->checkout;
        $day= Reservation::getUseDays($checkIN,$checkOut);
        $room_price= Reservation::getRoomPrice($room_id);
        $total_price = $number_guests * $day * $room_price;
        $reservation->room()->attach($room_id,['day' => $day, 'price'=> $total_price]);
        return view('reservation.add',['msg'=>'予約が完了しました']);

    }

}
