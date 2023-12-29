@extends('layouts.HomeNav')
@section('content')

<style>
        .abc{
            
            background-color: #EDF1D6;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 50px ;
            height: 800px;
        }

        
    </style>
    <div class="abc">
    <div class="alert alert-success" role="alert">
You are succesfully booked your seats and we sent  ticket  your E-mail  
</div>  
    <div class="container row">
            <div class="card col-7"  style=" height:360px;">
                <div class="card-body ">
                    <div class="border border-danger  container" >
                        <div class="row">
                        <div class="col-4">
                            <img src="—Pngtree—blue bus side material_5455151.png" 
                            class="card-img" 
                            alt="..." height="150px" width="100px" >
                            </div>
                            <div class="col-8 pt-5">
                            <h5 class="card-title">{{$busname->Owner_name}} HIGHWAY EXPRESS </h5>
                            <h5>{{$route['Bus_no']}}</h5>
                            </div>
                           
                        </div>
                    
                    
                    <hr class="mb5 mt5">
                    <div class="row">
                        <div class="col-6">
                        <b>From--></b> {{$route['Departure_City']}} 
                        </div>
                        <div class="col-6">
                        <b>To--></b> {{$route['Arrival_city']}}</b>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-6">
                            <b>Seat No </b>
                        <span class="border border-primary ">
                            @foreach($emptyArray as $seat)
                                {{$seat}},
                            @endforeach

                        </span>
                        </div>
                        <div class="col-6">
                        <b>Traval Date</b>
                        
                        <span class="border border-primary ">{{$route['Date']}}</span>
                        </div>
                       
                    </div>
                 
                       <h5>   Price  Rs. {{$price}}.00</h5>
                 
                    
                    <hr class="mb5 mt5">
                    <h5 class="card-title text-center">SLEB Thank You Come Again Safe Journey..!</h5>
                    </div>

                   
                </div> 


                
            </div>
            
            <div class="col-5">
                    <form action="create" method ="post">
                @csrf
                    
                  
                    <input type="hidden" name="seat" value="{{$seat1}}">
                    <input type="hidden" name="price" value="{{$price}}">    
                    
                    <input type="hidden" name="sid" value="{{$seatid}}">
                    <h6>Now you can downlode pdf version of your ticket  </h6>
                    <button class="btn btn-primary" type="submit"> Downlode Ticket </button>
            </form>
                    </div>
    </div>

@endsection