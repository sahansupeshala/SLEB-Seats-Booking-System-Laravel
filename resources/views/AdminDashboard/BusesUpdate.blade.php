@extends('layout.AdminMaster')
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body text-black p-4 p-md-5  card rounded-3" style="background-color: #E6E6FA;">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Update Bus Info</h3>
              <form class="px-md-2" method="post" action="/busupdate">
                @csrf
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example1q" name="id" class="form-control" value="{{$BusManages['id']}}"/>
                  <label class="form-label" for="form3Example1q">ID</label>
                </div>
                  <div class="form-outline mb-3">
                    <input type="text" id="form3Example1q" name="agent" class="form-control" value="{{$BusManages['agent_name']}}" />
                    <label class="form-label" for="form3Example1q">Agent Name</label>
                  </div>
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example1q" name="busno" class="form-control" value="{{$BusManages['bus_no']}}"/>
                  <label class="form-label" for="form3Example1q">Bus No</label>
                </div>
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example1q"  name="routeno" class="form-control" value="{{$BusManages['route_no']}}"/>
                  <label class="form-label" for="form3Example1q">Route No</label>
                </div>
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example1q"  name="seats" class="form-control" value="{{$BusManages['no_of_seats']}}" />
                  <label class="form-label" for="form3Example1q">No of Seats</label>
                </div>
                <input type="submit" name="update" value="Update Save" class="btn btn-primary">
				      </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection 
	