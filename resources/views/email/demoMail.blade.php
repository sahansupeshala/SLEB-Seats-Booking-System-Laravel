<!DOCTYPE html>
<html>
<head>
    <title>sleb.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
  
    <div class="container row">
            <div class="card col-6"  style=" height:265px;">
                <div class="card-body ">
                    <div class="border border-secondary container">
                    <h5 class="card-title">{{$busname->Owner_name}} HIGHWAY EXPRESS {{$route['Bus_no']}}</h5>
                    <hr class="mb10 mt10">
                    {{$route['Departure_City']}}({{$route['Departure_time']}}) - {{$route['Arrival_city']}}({{$route['Arrival_time']}})</br>
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <div class="coi-6"><b> Seat No </b> </div>
                                <div class="coi-6"><b></b></div>
                            </div>
                           
                       
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
               
     
    <p>Thank you</p>
</body>
</html>