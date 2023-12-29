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
<div class="abc ">

            <div class="container d-flex justify-content-center mt-5 mb-5">

        <form action="/ticket" method="post">
            @csrf
        <div class="row g-3">

        <div class="col-md-6">

            <span><h4>Payment Method</h4></span>
            <div class="card " >

            <div class="accordion" id="accordionExample">



            <div class="card  border-dark" >
            <div class="card-header p-0">
                <h2 class="mb-0">
                <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="d-flex align-items-center justify-content-between">

                    <span>Credit Card</span>
                    <div class="icons">
                        <img src="2ISgYja.png" width="30">
                        <img src="W1vtnOV.png" width="30">

                    </div>

                    </div>
                </button>
                </h2>
            </div>
        <form action="" class="needs-validation" novalidate>

                <div class="card-body payment-card-body bg-light " style="background-color: #61876E;">

                <span class="font-weight-normal card-text requared">Card Number</span>
                <div class="input">

                    <i class="fa fa-credit-card"></i>
                    <input type="text" name="cnumber" class="form-control" placeholder="0000 0000 0000 0000" required>

                </div>

                <div class="row mt-3 mb-3">

                    <div class="col-md-6">

                    <span class="font-weight-normal card-text">Expiry Date</span>
                    <div class="input">

                        <i class="fa fa-calendar"></i>
                        <input type="text" name="edate" class="form-control" placeholder="MM/YY" required>

                    </div>

                    </div>


                    <div class="col-md-6">

                    <span class="font-weight-normal card-text">CVC/CVV</span>
                    <div class="input">

                        <i class="fa fa-lock"></i>
                        <input type="text" name="" class="form-control" placeholder="000" required>

                    </div>

                    </div>


                </div>

                <button type="submit"class="btn btn-primary">Pay</button>

                </div>
            </div>
        </div>
        </form>
    </div>

  </div>

    <div class="col-md-6">
      <span><h4>Booking Details</h4></span>
        <div class="card  border-dark">

            <div class="card-body bg-light">
                            <input type="hidden" value="{{$seatId}} " name="seatid">
                            <input type="hidden" value="{{$pdetails->Seats}} " name="seats">
                            <input type="hidden" value="{{$pdetails->Totle_price}} " name="price">
                            <input type="hidden" value="{{$pdetails->Email }} " name="mail">


                            {{$route['Departure_City']}} - {{$route['Arrival_city']}} on {{$route['Date']}}<br/>
                            {{$route['Bus_no']}}
                            <hr class="mb10 mt10">
                            Passenger Name : {{$pdetails->Passenger_Name}}<br/>
                            Seats No -  @foreach($emptyArray as $seat)
                                {{$seat}},
                            @endforeach<br/>
                            Totle Booked Seats : {{$pdetails->Num_Seat}}<br/>
                            Ticket Price : Rs. {{$pdetails->Totle_price}}.00
                            <hr class="mb10 mt10">
                            <h5>Totle Rs. {{$pdetails->Totle_price}}.00 </h5>


            </div>
        </div>
    </div>

</div>


</div>
</form>
@endsection
