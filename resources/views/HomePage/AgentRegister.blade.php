@extends('layout.app')
@section('content')
<style>
        .abc{
            background-image: url('buswhite.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 60px ;
            height: auto;
        }
    </style>

<div class="abc">
    @if($message = Session::get('success'))
        <div class="  row justify-content-center">
            <div  class="col-md-6 alert alert-info ">
                <p class="text-center">{{$message}}</p>
            </div>
        </div>
    @endif
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register Agent</h3>
                        <div class="card-body">
                            <form action="/register" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="First Name" id="name" class="form-control" name="First_Name"
                                        required autofocus>
                                    @if ($errors->has('First_Name'))
                                    <span class="text-danger">{{ $errors->first('First_Name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Last Name" id="name" class="form-control" name="Last_Name"
                                        required autofocus>
                                    @if ($errors->has('Last_Name'))
                                    <span class="text-danger">{{ $errors->first('Last_Name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="NIC" id="name" class="form-control" name="nic"
                                        required autofocus>
                                    @if ($errors->has('nic'))
                                    <span class="text-danger">{{ $errors->first('nic') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        name="Email" required autofocus>
                                    @if ($errors->has('Email'))
                                    <span class="text-danger">{{ $errors->first('Email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Contact Number" id="name" class="form-control" name="Contact_Number"
                                        required autofocus>
                                    @if ($errors->has('Contact_Number'))
                                    <span class="text-danger">{{ $errors->first('Contact_Number') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <select type="dropdown"name="gender" id="gender"  class="form-control" >
                                        <option  value="Gender" selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Conform Password" id="Conform password" class="form-control"
                                        name="Conform_password" required>
                                    @if ($errors->has('Conform_password'))
                                    <span class="text-danger">{{ $errors->first('Conform_password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





