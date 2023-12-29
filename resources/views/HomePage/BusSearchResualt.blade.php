@extends('layouts.HomeNav')
@section('content')
<style>
        .abc{
            background-color: #EDF1D6;

            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 90px ;
            height: 800px;
        }
    </style>


<div class="abc">

    <div class="alert alert-info  text-center" role="alert">

    <h4>{{$route[0]['Departure_City']}}   --->  {{$route[0]['Arrival_city']}} / {{$route[0]['Route_no']}} - ({{$route[0]['Date']}})</h4>

</div>
        <h3 style="text-align: center;">Available Buses</h3>
            <table class="table table-light">
				<tr>
						<th>No</th>
                        <th>Bus No</th>
                        <th>Departure Time</th>
						<th>Arrival Time</th>
                        <th>Ticket Price</th>
                        <th>Action</th>
                </tr>
					@php
                        $no=0;
                    @endphp
                    @foreach($route as $routes)


                            <tr>
                                <td>{{++$no }}</td>
                                <td>{{$routes->Bus_no}}</td>
                                <td>{{\Carbon\Carbon::createFromFormat('H:i:s', $routes->Departure_time)->format('g:i A')}}</td>
                                <td>{{\Carbon\Carbon::createFromFormat('H:i:s', $routes->Arrival_time)->format('g:i A')}}</td>
                                <td>{{$routes->Tikcet}}</td>

                                <td>
                                    <form action="/seatbooking/{{ $routes->id }}">
                                    @csrf

                                        <button type="sumbit" class="btn btn-primary">Book Seats</button>
                                    </form>
                                </td>
                            </tr>

                    @endforeach

            </table>
    </div>
</div>
@endsection





