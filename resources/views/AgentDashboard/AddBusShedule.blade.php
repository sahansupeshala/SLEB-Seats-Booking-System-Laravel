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
            z-index:auto;
        }


 </style>
<div class="abc">
<div class=" py-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <div class="card-body text-black p-md-5  card rounded-3" style="background-color: #61876E;">
                <h3 class="mb-4  pb-md-0 mb-md-5 px-md-2">SCHEDULE YOUR BUS</h3>
                  <form class="px-md-2" method="post" action="/AgentaddRoute">
                    @csrf
                    <div class="form-outline mb-3">
                        <input type="hidden" id="form3Example1q" name="agentId" value="{{$agentid}}" class="form-control"  />

                    </div>
                    <div class="form-outline mb-3">

                    @foreach($busno as $busesno)
                        <input type="text" id="form3Example1q" value="{{$busesno->bus_no}}" name="busno" class="form-control" disabled/>
                    @endforeach
                    <label class="form-label" for="form3Example1q">Bus No</label>
                    </div>
                    <div class="form-outline mb-3">

                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input type="date"  id="date" required="Required" class="form-control" name="date" placeholder="Select suitable date" />
            <label class="form-label" for="form3Example1q">Date</label>
                    </div>
                    <div class="form-outline mb-3">


                    <div class="row">
                      <div class="col-6">
                      <select  name="dep" style="font-size:13px" id="form3Example1q" class="form-control " >

                          @foreach($deparure as $deparures)
                        <option value="{{$deparures['depature_city']}}">{{$deparures['depature_city']}}</option>
                        @endforeach
                     </select>
                     <label class="form-label" for="form3Example1q">Departure </label>
                      </div>
                      <div class="col-6">
                          <input type="time" id="form3Example1q" name="dtime"  value="00:00" class="form-control" />
                      </div>

                    </div>



                    </div>
                    <div class="form-outline mb-3">

                    <div class="row">
                      <div class="col-6">

                      <select name="arr" style="font-size:13px" id="form3Example1q" class="form-control " >

                          @foreach($arrival as $arrivals)
                        <option value="{{$arrivals['arrival_city']}}">{{$arrivals['arrival_city']}}</option>
                        @endforeach
                     </select>
                     <label class="form-label" for="form3Example1q">Arrival</label>
                      </div>
                      <div class="col-6">
                          <input type="time" id="form3Example1q" name="atime"  value="00:00" class="form-control" />
                      </div>

                    </div>

                    </div>
                      <div class="text-center">
                      <button type="submit" class="btn btn-primary  mb-1">Save</button>
                      </div>


                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>







@endsection
