<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bus;

class AddBusController extends Controller
{
    public function index($id){
        
        $agentid=$id;
        return view('AgentDashboard.AddBuses',compact('agentid',));
    }

    public function agentbusstore(Request $req) {

         $req->validate([
            'owner' => 'required',
            'busno' => 'required',
            'routeno' => 'required'
            
        ], [
            'owner.required' => 'Name field is required.',
            'busno.required' => 'Bus Number field is required.',
            'routeno.required' => 'Route Permite Number field is required.',
           
        ]);
        $status1 = Bus::where([['user_id',$req->agentId] ])
                ->get('Status');
                $status2 = Bus::where([['user_id',$req->agentId] ])
                ->get();
       
       
        if($status1 = 0  OR $status2->isEmpty() )
        { 
            
            $bus = new Bus;
            $bus->user_id = $req->agentId;
        $bus->Owner_name = $req->owner;
        $bus->bus_no = $req->busno;
        $bus->Route_permite_no = $req->routeno;
        $bus->save();
      
        return redirect()->action([AgentAddRouteController::class, 'index'],['id' => $req->agentId]);
        }
        else
        {

            
            return redirect()->action([AgentAddRouteController::class, 'index'],['id' => $req->agentId]);
        }
       
    }
}
