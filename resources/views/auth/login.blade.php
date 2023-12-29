@extends('layouts.HomeNav')

@section('content')
<style>
    .abc{
        background-image: url({{asset('annie-spratt-tG822f1XzT4-unsplash.jpg')}});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding:90px;
        height: 800px;
    }
    .user_card {
        height: 400px;
        width: 400px;
        margin-top: auto;
        margin-bottom: auto;
        background: #bcc0c0e5;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;

      }
      .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #ccd0d100;
        padding: 10px;
        text-align: center;
      }
      .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
      }
      .form_container {
        margin-top: 100px;
      }

</style>

<div class="abc">
@if($message = Session::get('success'))

<div class="alert alert-danger ">
{{ $message }}
</div>

@endif
    <div class="row justify-content-center pt-2">
        <div class="col-md-4 py-5">
            <div class="user_card">
                <div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="loginIcon4.png" class="brand_logo "  alt="Logo">
					</div>
				</div>


                <div class="card-body">
                    <div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail ') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="row mb-0">
                            <div class="d-grid gap-3 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('forget.password.get') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
