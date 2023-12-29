@extends('layouts.AdminNav')
   
@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Route</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('adminroute.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('adminroute.update',$adminroute->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Route No:</strong>
                <input type="text" name="routeno" value="{{ $adminroute->Route_no }}" class="form-control" placeholder="Route no">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departure City:</strong>
                    <input type="text" name="dpt" value="{{ $adminroute->depature_city }}" class="form-control" placeholder="Departure City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Arrival City:</strong>
                    <input type="text" name="arr" value="{{ $adminroute->arrival_city }}" class="form-control" placeholder="Arrival City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ticket Price:</strong>
                    <input type="text" name="ticket" value="{{ $adminroute->ticket_price }}" class="form-control" placeholder="Ticket Price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
   
@endsection