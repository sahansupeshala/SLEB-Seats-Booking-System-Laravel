@extends('layout.AdminMaster')
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body text-black p-4 p-md-5  card rounded-3" style="background-color: #E6E6FA;">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Update Route Info</h3>
              <form class="px-md-2" method="post" action="/routeupdate">
                  @csrf
                  
                <div class="form-outline mb-3">
                      <input type="text" name="busno" id="form3Example1q" value="{{$RouteManages['bus_no']}}" class="form-control" />
                      <label class="form-label" for="form3Example1q">Bus No</label>
                    </div>
                    <div class="row">
                          <div class="form-outline col-6">
                      <input type="text" id="form3Example1q" name="arrival" value="{{$RouteManages['arrival']}}"  class="form-control" />
                      <label class="form-label"  for="form3Example1q">Arrival</label>
                    </div>

                    <div class="form-outline col-6">
                      <input type="time" id="form3Example1q" name="arrt"  value="{{$RouteManages['arival_time']}}"  class="form-control" />
                      <label class="form-label" for="form3Example1q">Arrival Time</label>
                    </div>
                    </div>
                     <div class="row">
                          <div class="form-outline col-6">
                      <input type="text" id="form3Example1q"  name="dep" value="{{$RouteManages['departure']}}"  class="form-control" />
                      <label class="form-label"   for="form3Example1q">Departure</label>
                    </div>
                    
                    <div class="form-outline col-6">
                      <input type="time" id="form3Example1q"  name="dept"  value="{{$RouteManages['departure_time']}}" class="form-control" />
                      <label class="form-label" for="form3Example1q">Departure Time</label>
                    </div>
                    </div>
                    
                    
                    <div class="form-outline mb-3">
                      <input type="text" id="form3Example1q" name="ticket"  value="{{$RouteManages['ticket_price']}}" class="form-control" />
                      <label class="form-label" for="form3Example1q">Ticket Price</label>
                    </div>
                <input type="submit" name="update" value="Update Save" class="btn btn-primary">
				      </form>
          </div>
        </div>
      </div>
    </div>
  </div>	
  @endsection 
