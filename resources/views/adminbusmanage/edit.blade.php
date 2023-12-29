@extends('layouts.AdminNav')
   
@section('content')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Bus Info</h2>
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
  
    <form action="{{ route('adminbusmanage.update',$adminbusmanage->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner Name:</strong>
                <input type="text" name="owner" value="{{ $adminbusmanage->Owner_name }}" class="form-control" placeholder="Route No">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bus No:</strong>
                    <input type="text" name="busno" value="{{ $adminbusmanage->bus_no }}" class="form-control" placeholder="Bus No">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Route Permite No:</strong>
                    <input type="text" name="rpno" value="{{ $adminbusmanage->Route_permite_no }}" class="form-control" placeholder="Route Permite No">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>
   
@endsection