<?php

namespace App\Http\Controllers;

use App\Models\adminroute;
use Illuminate\Http\Request;

class AdminRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = adminroute::latest()->paginate(50);
        return view('adminroute.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminroute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dpt' => 'required',
            'arr' => 'required',
            'ticket' => 'required',
            'routeno' => 'required',

        ]);
        $route = new adminroute;
        $route->Route_no = $request->routeno;
        $route->depature_city = $request->dpt;
        $route->arrival_city = $request->arr;
        $route->ticket_price = $request->ticket;
        $route->save();

        return redirect()->route('adminroute.index')
                        ->with('success','Route created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function show(adminroute $adminroute)
    {
        return view('adminroute.show',compact('adminroute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function edit(adminroute $adminroute)
    {
        return view('adminroute.edit',compact('adminroute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminroute $adminroute)
    {
        $request->validate([
            'routeno' => 'required',
            'dpt' => 'required',
            'arr' => 'required',
            'ticket' => 'required',
        ]);

        $adminroute->update($request->all());

            $route = adminroute::find($adminroute->id);
            $route->Route_no = $request->routeno;
            $route->depature_city = $request->dpt;
            $route->arrival_city = $request->arr;
            $route->ticket_price = $request->ticket;
            $route->save();
            return redirect()->route('adminroute.index')
                        ->with('success','Route updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminroute $adminroute)
    {
        $adminroute->delete();
        return redirect()->route('adminroute.index')
                        ->with('success','Route deleted successfully');
    }
}
