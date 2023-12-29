<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Routeshedule;
use App\Models\adminroute;
use DB;

class AgentAddRouteController extends Controller
{
    public function index($id)
    {
        $agentid=$id;
        $busno = DB::table('buses')
                ->where('user_id', '=', $id)
                ->get('bus_no');
        
        $deparure = adminroute::select('depature_city')->distinct()->get();
        $arrival = adminroute::select('arrival_city')->distinct()->get();       
    
        return view('AgentDashboard.AddBusShedule',compact('agentid','busno','deparure','arrival'));
      }


      public function agentRoutestore(Request $req)
      {
        $busno = DB::table('buses')->where('user_id', '=', $req->agentId)->first();
        $routeno = DB::table('adminroutes')
        ->where([['depature_city',$req->dep] , ['arrival_city',$req->arr]])
        ->first();
        $route = new Routeshedule;
        $route->bus_id  =$busno->id;
        $route->Bus_no =$busno->bus_no;
        $route->Date = $req->date;
        $route->Route_no = $routeno->Route_no;
        $route->Tikcet = $routeno->ticket_price;
        $route->Departure_City = $req->dep;
        $route->Departure_time = $req->dtime;
        $route->Arrival_city = $req->arr;
        $route->Arrival_time = $req->atime;
        $route->save();
        
       
        return redirect()->action([AgentViewSheduleController::class, 'index'],['id' => $req->agentId]);
      }
}
