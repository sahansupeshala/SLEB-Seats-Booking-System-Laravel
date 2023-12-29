@extends('layouts.AdminNav')
  
@section('content')
<div class="container">
<div class="row ">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Route</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adminroute.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Route no:</strong>
                {{ $adminroute->Route_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departure City:</strong>
                {{ $adminroute->depature_city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Arrival City:</strong>
                {{ $adminroute->arrival_city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ticket Price:</strong>
                {{ $adminroute->ticket_price }}
            </div>
        </div>
    </div>
</div>
    
@endsection