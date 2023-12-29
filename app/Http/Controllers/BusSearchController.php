<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminroute;
use App\Models\Routeshedule;
use App\Models\Bus;
use Carbon\Carbon;


class BusSearchController extends Controller
{
    public function find(Request $request){
        
        $Route1 =adminroute::find($request->from);
        $Route2 =adminroute::find($request->to);
        $search1 = $Route1->depature_city;
        $search2 = $Route2->arrival_city;
        $search3 = $request->input('date');
       // $todayDate = Carbon::now()->format('H:i:m');
       
        
        
        

      
        $route = Bus::join('routeshedules', 'routeshedules.bus_no', '=', 'buses.Bus_no')
                ->where([['Departure_City',$search1] ,['Date','=',$search3] , ['Arrival_city',$search2],['Status','=',1]])
                ->get();

        if($route->isEmpty() )
        {
            return redirect()->action([PassengerIndexController::class, 'index'])
            ->with('warning','You have no available buses for this shedule ');
        }
        else
        {
            return view('HomePage.BusSearchResualt',compact('route'));
        }
    
    }
}
