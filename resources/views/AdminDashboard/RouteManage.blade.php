@extends('layouts.AdminNav')
@section('content')
<div class="container">
    <h1 class="text-center">Manage Routes</h1>
        <table class="table table-default ">
           
            <tr>
                <th>ID</th>
				<th>Departure City</th>
				<th>Arrival City</th>
				<th>Ticket Price</th>
				<th>Action</th>
                    
            </tr>
            @php
                
            $no=0;
                
            @endphp
            @foreach ($RouteManages as $route)
                <tr>
                    <td>{{++$no }}</td>
                  	<td>{{$route->arrival}}</td>
					<td>{{$route->departure}}</td>
					<td>{{$route->ticket_price}}</td>
					<td>
						<a href = "AdminDashboard.RouteManage/{{ $route->id }}" class="btn btn-dark">Delete</a>
                        <a href="AdminDashboard.RouteUpdate/{{ $route->id }}" class="btn btn-warning">Update</a>
                    </td>
                </tr>
							
                        
             @endforeach
        
        </table>

        <form action="" method="get">
			<input type="submit" class="btn btn-primary" class="btn-outline-info" value="Add New Route" >
		</form>
				
</div>
@endsection 
		
		
