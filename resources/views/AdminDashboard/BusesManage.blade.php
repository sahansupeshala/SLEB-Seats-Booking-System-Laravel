@extends('layouts.AdminMaster')
@section('content')
<div class="container">
    <h1 class="text-center">Manage Buses</h1>
        <table class="table table-default col-6">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bus No</th>
                    <th>Agent Name</th>
                    <th>Route No</th>
                    <th>No of Seats</th>
                    <th>Action</th>
                                
                </tr>
            </thead>
            <tbody>
                @php
                    
                $no=0;
                    
                @endphp
                
                @foreach ($BusManages as $bus)
                    <tr>
                        <td>{{++$no }}</td>
                        <td>{{$bus->bus_no}}</td>
                        <td>{{$bus->agent_name}}</td>
                        <td>{{$bus->route_no}}</td>
                        <td>{{$bus->no_of_seats}}</td>
                        <td>
                            <a href = "AdminDashboard.BusesManage/{{ $bus->id }}" class="btn btn-dark">Delete</a>
                            <a href="AdminDashboard.BusesUpdate/{{ $bus->id }}" class="btn btn-warning">Update</a>
                        </td>
                    </tr>
                                
                            
                @endforeach
            </tbody>
        </table>
            <div>
            <form action="" method="">
                <input type="submit" class="btn btn-primary" class="btn-outline-info" value="Add New Bus" >
            </form>
            </div>
           
				
</div>
@endsection 
		
		
		