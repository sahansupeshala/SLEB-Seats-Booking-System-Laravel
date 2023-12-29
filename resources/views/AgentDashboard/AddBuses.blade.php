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
@include('message')
   <div class=" py-5 ">
      <div class="row d-flex justify-content-center align-items-center ">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <div class="card-body text-black   card rounded-3" style="background-color: #61876E;">
                <h3 class="mb-4 pb-1 pb-md-0 mb-md-5 px-md-2">ADD YOUR BUS INFO</h3>
                  <form class="px-md-2" method="post" action="/agentaddbus">
                    @csrf
                    <div class="form-outline mb-3">
                        <input type="hidden" id="form3Example1q" name="agentId" value="{{$agentid}}" class="form-control" />

                    </div>
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example1q" name="owner" class="form-control @error('owner') is-invalid @enderror" />
                        <label class="form-label" for="form3Example1q">Bus Owner Name or Company Name</label>
                        @error('owner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example1q" name="busno" class="form-control @error('busno') is-invalid @enderror" />
                        <label class="form-label" for="form3Example1q">Bus Number</label>
                        @error('busno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-outline mb-3">
                        <input type="text" id="form3Example1q"  name="routeno" class="form-control @error('routeno') is-invalid @enderror" />
                        <label class="form-label" for="form3Example1q">Route Permite Number</label>
                        @error('routeno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary  mb-1">Next</button>
                    </div>

                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection
