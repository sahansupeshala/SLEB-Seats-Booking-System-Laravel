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
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center" style="background-color: blue; color:white;">Passenger Details</h3>
                        <div class="card-body" style="background-color: #61876E;">
                            <form action="/bookingInfo" method="POST">
                                @csrf
                                <input type="hidden" name="seatid"  value="{{$seatid}}">
                                <input type="hidden" name="count" value="{{$count}}">
                                <input type="hidden" name="totle"  value="{{$totle}}">
                                <input type="hidden" name="book"  value="{{$book}}">
                                   
                                
                                <div class="form-group mb-3">
                              
                                    <input type="text" placeholder="Enter Passenger Name" id="pname" class="form-control  @error('pname') is-invalid @enderror" name="pname"
                                        required autofocus>
                                        <label for="pname">Passenger Name</label>
                                  
                                    
                                   
                                </div>
                                <div class="form-group mb-3">
                               
                                    <input type="text" placeholder="0719593895" id="phone" class="form-control" name="phone"
                                        required autofocus>
                                        <label for="phone">Mobile Number</label>
                                   
                                   
                                    
                                </div>
                                <div class="form-group mb-3">
                               
                                    <input type="text" placeholder="982450786v" id="nic" class="form-control" name="nic"
                                        required autofocus>
                                        <label for="nic">NIC Number</label>
                                   
                                   
                                    
                                </div>
                                <div class="form-group mb-3">
                               
                                    <input type="text" placeholder="user@gmail.com" id="mail" class="form-control" name="mail"
                                        required autofocus>
                                        <label for="mail">Email</label>
                                
                                   
                                
                                </div>
                               
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

@endsection