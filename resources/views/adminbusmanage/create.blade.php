@extends('layouts.AdminNav')
  
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left pt-5">
            <h2>Add Route Info</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('adminbusmanage.index') }}"> Back</a>
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
   
<form action="{{ route('adminbusmanage.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>R:</strong>
                <input type="text" name="routeno" class="form-control" placeholder="Route no">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Departure City:</strong>
                <input type="text" name="dpt" class="form-control" placeholder="Departure City">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Arrival City:</strong>
                <input type="text" name="arr" class="form-control" placeholder="Arrival City">
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ticket Price:</strong>
                <input type="text" name="ticket" class="form-control" placeholder="Ticket Price">
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</div>

@endsection