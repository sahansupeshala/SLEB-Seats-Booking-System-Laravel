<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Routeshedule;
use App\Models\Bus;
use App\Models\Seat;

class AgentViewSheduleController extends Controller
{
    public function index($id){
        
      $bno = DB::table('buses')->where('user_id', '=', $id)->first('bus_no');
      $shedule= Routeshedule::where([['Bus_no',$bno->bus_no]])->get();
      $shedule1= Routeshedule::where([['Bus_no',$bno->bus_no]])->first();
      $busid=$id;
      return view('AgentDashboard.showshedule',compact('shedule','bno','busid','shedule1'));
    }

    public function showdata($id){
      
        $Route =Routeshedule::find($id);
      
        return view('AgentDashboard.sheduleUpdate',compact('Route'));
    }

     
   public function updatestore(Request $req) {
  
    $Route = Routeshedule::find($req->id);
    $userid = DB::table('buses')->where('bus_no', '=', $Route->Bus_no)->get('user_id');
    $Route->Date = $req->date;
    $Route->Departure_time = $req->dtime;
    $Route->Arrival_time = $req->atime;
    $Route->Bus_no = $req->busno;
    $Route->save();
    
    $user = DB::table('buses')->where('user_id', '=', $userid[0]->user_id)->get();
    $s=$user[0]->id;
    $Rou = Bus::find($s);
    $Rou->bus_no = $req->busno;
    $Rou->save();
    return redirect()->action([AgentViewSheduleController::class, 'index'],['id' =>  $userid[0]->user_id]);
  
    }

    public function destroy($id){
        
      $Route = Routeshedule::find($id);
      $userid = DB::table('buses')->where('bus_no', '=', $Route->Bus_no)->get('user_id');
      $sheduleid  = DB::table('seats')->where('shedul_id', '=', $id)->first();
    
      if(!$sheduleid)
      {
        $Route->delete();
      }

      else{
        $shedule= Seat::find($sheduleid->id);
        $shedule->delete();
        $Route->delete();
      }
      return redirect()->action([AgentViewSheduleController::class, 'index'],['id' => $userid[0]->user_id ]);
    }


    public function seatview($id){

      $Route = Routeshedule::find($id);
      $seat1  = DB::table('seats')->where('shedul_id', '=', $id)->first();
     
      if(is_null($seat1))
      {
         $seat2=['1_2'];
        
      }
      else
      { 
        $seat2=json_decode($seat1->seat);
      }

      $count=count($seat2);
      $available=55-$count;
       
      return view('AgentDashboard.SeatManage',compact('seat2','Route','available'));
    }


    public function SeatStore(Request $request)
    {  
      $seat1  = DB::table('seats')->where('shedul_id', '=', $request->id)->first();
    
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

        return redirect()->action([AgentViewSheduleController::class, 'seatview'],['id' => $request->id ]);
    }

    public function reset($id) {
            
      $sheduleid  = DB::table('seats')->where('shedul_id', '=', $id)->first();
      $shedule= Seat::find($sheduleid->id);
      $shedule->delete();
      return redirect()->action([AgentViewSheduleController::class, 'seatview'],['id' => $id ]);
    }

    
}
