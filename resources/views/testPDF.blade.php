<!DOCTYPE html>
<html>
<head>
    <title>SLEB Online Ticket</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <div class="container row">
    <div class="card col-6"  style=" height:265px;">
                <div class="card-body ">
                    <div class="border border-secondary container">
                    <h5 class="card-title">{{$busname->Owner_name}} HIGHWAY EXPRESS {{$route['Bus_no']}}</h5>
                    <hr class="mb10 mt10">
                    {{$route['Departure_City']}}({{$route['Departure_time']}}) - {{$route['Arrival_city']}}({{$route['Arrival_time']}})</br>
                    <div class="row">
                        <div class="col-3">
                            Seat No </br>
                        <span class="border border-primary ">
                            @foreach($emptyArray as $seat)
                                {{$seat}},
                            @endforeach

                        </span>
                        </div>
                        <div class="col-3">
                        Traval Date</br>
                        
                        <span class="border border-primary ">{{$route['Date']}}</span>
                        </div>
                       
                    </div>
                 
                       <h4>   Price  Rs. {{$price}}.00</h4>
                 
                    
                    <hr class="mb10 mt10">
                    <h5 class="card-title">SLEB Thank You Come Again Safe Journey..!</h5>
                    </div>
                </div> 
            </div>

            </div>
</body>
</html>