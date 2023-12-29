@extends('layouts.AdminNav')
  
@section('content')
<div class="container">

@if($message = Session::get('success'))

<div class="alert alert-info ">
{{ $message }}
</div>

@endif
    <h1 class="text-center">Welcome To Admin Section</h1>
        <table class="table light col-6">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Bus No</th>
                    <th scope="col">Bus Manager Name</th>
                    <th scope="col">Owner Name</th>
                    <th scope="col">Contact Number</th>
                   
                    
                </tr>
            </thead>
            <tbody>
            @php
        $no=0;
      @endphp
      @foreach($route as $routes)
        <tr>
            <td> {{++$no }}</td>
            <td>{{$routes->bus_no}}</td>
            <td>{{$routes->name}}</td>
            <td>{{$routes->Owner_name}}</td>
            <td>{{$routes->Contact}}</td>
          
            
            
        </tr>
      @endforeach
        
            
            </tbody>
        </table>

</div>
@endsection