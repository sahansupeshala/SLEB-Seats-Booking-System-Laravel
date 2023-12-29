@extends('layouts.AdminNav')
@section('content')
<div class="container">
    <h1 class="text-center">Passenger Feedback</h1>
        <table class="table light col-6 ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Passenger Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    
                                
                </tr>
            </thead>
            <tbody>
                @php
                    
                $no=0;
                    
                @endphp
                
                @foreach ($msgs as $msg)
                    <tr>
                        <td>{{++$no }}</td>
                        <td>{{$msg->name}}</td>
                        <td>{{$msg->email}}</td>
                        <td >{{$msg->feedback}}</td>
                      
                        
                    </tr>
                                
                            
                @endforeach
            </tbody>
        </table>
            
           
				
</div>
@endsection 
		
		