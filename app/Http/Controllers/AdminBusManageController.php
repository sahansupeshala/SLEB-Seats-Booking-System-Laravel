<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;

class AdminBusManageController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Bus::latest()->paginate(30);
        return view('adminbusmanage.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminbusmanage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $bus = Bus::find($id);
        $bus->Status=1;
        $bus->save();
        return redirect()->route('adminbusmanage.index')
        ->with('success','Status update successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $adminbusmanage)
    {
        return view('adminbusmanage.edit',compact('adminbusmanage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminroute  $adminroute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $adminbusmanage)
    {
        $request->validate([
            'owner' => 'required',
            'busno' => 'required',
            'rpno' => 'required',
        ]);

        $adminbusmanage->update($request->all());

            $route = Bus::find($adminbusmanage->id);
            $route->Owner_name = $request->owner;
            $route->bus_no = $request->busno;
            $route->Route_permite_no = $request->rpno;
            $route->save();
            return redirect()->route('adminbusmanage.index')->with('success','Bus update successfully');
    }


    public function destroy(Bus $adminbusmanage)
    {$adminbusmanage->schedule()->delete();
        $adminbusmanage->delete();
        return redirect()->route('adminbusmanage.index')->with('success','Bus deleted successfully');
    }
}
