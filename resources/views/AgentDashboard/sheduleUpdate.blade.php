@extends('layouts.AgentNav')

@section('content')
<style>
        .abc{
          background-color: #EDF1D6;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding:10px;
            height: 800px;
        }


 </style>

<div class="abc">
   <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <div class="card-body text-black p-4 p-md-5  card rounded-3" style="background-color: #61876E;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Shedule Your Bus</h3>
                  <form class="px-md-2" method="post" action="/updateshedule">
                    @csrf
                    <input type="hidden" id="form3Example1q" value="{{$Route['id']}}" name="id" class="form-control" />
                    <div class="form-outline mb-3">
                   

                        <input type="text" id="form3Example1q" value="{{$Route['Bus_no']}}" name="busno" class="form-control" />
                        <label class="form-label" for="form3Example1q">Bus No</label>
                    </div>
                    <div class="form-outline mb-3">
                   
                        <input type="date" id="form3Example1q" name="date" value="{{$Route['Date']}}" class="form-control" />
                        <label class="form-label" for="form3Example1q">Date</label>
                    </div>
                    <div class="form-outline mb-3">

                  
                    <div class="row">
                      <div class="col-6">
                      <input type="text" id="form3Example1q" name="dep" value="{{$Route['Departure_City']}}" class="form-control" disabled/>
                      <label class="form-label" for="form3Example1q">Departure </label>
                      </div>
                      <div class="col-6">
                          <input type="time" id="form3Example1q" value="{{$Route['Departure_time']}}" name="dtime"  value="00:00" class="form-control" />
                      </div>

                    </div>



                    </div>
                    <div class="form-outline mb-3">
                    
                    <div class="row">
                      <div class="col-6">
                      <input type="text" id="form3Example1q" name="arr" value="{{$Route['Arrival_city']}}" class="form-control" disabled />
                      <label class="form-label" for="form3Example1q">Arrival</label>

                      </div>
                      <div class="col-6">
                          <input type="time" id="form3Example1q" value="{{$Route['Arrival_time']}}" name="atime"  value="00:00" class="form-control" />
                      </div>

                    </div>

                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary  mb-1">Update</button>
                    </div>
                   
                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection
