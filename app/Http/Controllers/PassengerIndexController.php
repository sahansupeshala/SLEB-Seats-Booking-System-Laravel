<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\adminroute;

class PassengerIndexController extends Controller
{

    public function index()
    {
    	return view('HomePage.index');
    }

    public function selectSearch(Request $request)
    {
    	$routesone = [];
        if($request->has('q'))
        {
            $search = $request->q;
            $routesone  =adminroute::select("id", "depature_city")
                                    ->where('depature_city', 'LIKE', "%$search%")
                                    ->distinct('depature_city')
                                    ->get();
        }
        return response()->json($routesone );

    }







    public function selectSearchtwo(Request $request)
    {
    	$routestwo = [];
        if($request->has('q'))
        {
            $search = $request->q;
            $routestwo  =adminroute::select("id", "arrival_city")
            ->where('arrival_city', 'LIKE', "%$search%")
            ->distinct('arrival_city')
            ->get();
        }


        return response()->json($routestwo );
    }


}
