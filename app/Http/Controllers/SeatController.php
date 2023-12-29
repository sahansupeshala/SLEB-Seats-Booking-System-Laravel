<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Routeshedule;
use App\Models\Bus;
use App\Models\Seat;

class SeatController extends Controller
{
    public function seatview($id)
    {
      $Route = Routeshedule::find($id);
      $seat1  = DB::table('seats')->where('shedul_id', '=', $id)->first();
     
      if(is_null($seat1))
      { 
        $seat2=['1_2'];
      }
      else{
         $seat2=json_decode($seat1->seat);
      }

      $count=count($seat2);
      $available=55-$count;
       
      return view('HomePage.Seatbooking',compact('seat2','Route','available'));
    }


    public function SeatStore(Request $request)
    { 
      $seat1  = DB::table('seats')->where('shedul_id', '=', $request->id)->first();
      $seatid =$request->id;
      $book=$request->seat;
      $count=count(json_decode($request->seat));
      $totle=($request->price)*$count;
     
      
      if(is_null($seat1))
      { 
            $seat = new Seat;
            $seat->shedul_id =$request->id;
            $seat->busno =$request->busno;
            $seat->seat =$request->seat;
            $seat->save();
            
      }
      else{ 
           
            $seat3 = Seat::find($seat1 ->id);
            $json_array_first = json_decode($request->seat, true);
            $json_array_second = json_decode($seat1->seat, true);
            $merged_json_object = array_merge($json_array_first, $json_array_second);
            $encoded_merged_json = json_encode($merged_json_object);
            $seat3->seat = $encoded_merged_json;
            $seat3->save();
       }

        return view('HomePage.passengerInfo',compact('count','totle','book','seatid'));
  }
}
