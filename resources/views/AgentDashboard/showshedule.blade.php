@extends('layouts.AgentNav')

@section('content')
<style>
        .abc{
          background-color: #EDF1D6;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding:90px;
            height: 800px;
        }


 </style>

<div class="abc">

<div class="alert alert-light  text-center" role="alert">

    <h5>Bus Number({{$bno->bus_no}} )  ---> Route Number({{$shedule1['Route_no']}})  ---> Ticket Price(Rs : {{$shedule1['Tikcet']}}.00 )</h5>

</div>

<a class="btn btn-dark py-1 mb-1" href="/addbusroute/{{$busid}}">Add new schedule</a>
<table class="table table-light col-6">
    <thead>
      <tr>
        <th scope="col">Schedule No</th>
        <th scope="col">Date</th>
        <th scope="col">Departure City</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival City</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @php
        $no=0;
      @endphp
      @foreach($shedule as $shedules)
        <tr>
            <td>schedule {{++$no }}</td>
            <td>{{$shedules->Date}}</td>
            <td>{{$shedules->Departure_City}}</td>
            <td>{{$shedules->Departure_time}}</td>
            <td>{{$shedules->Arrival_city}}</td>
            <td>{{$shedules->Arrival_time}}</td>
            <td>
                  <a class="btn btn-info" href="/seat/{{$shedules->id}}">Seats</a>
                  <a class="btn btn-primary" href="/showupdate/{{$shedules->id}}">Edit</a>
                  <a class="btn btn-danger" href="/delete/{{$shedules->id}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>






@endsection
