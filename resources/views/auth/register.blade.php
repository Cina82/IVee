@extends('layouts.without')

@section('content')

<div class="header header-filter" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                                <div class="header header-primary text-center">
                                    <h4>ثبت نام</h4>
                                    <div class="social-line">
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-simple btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="content">
                                
                                    <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name..." value="{{ old('name') }}" required autofocus>
                                    </div>
                                  
                                  <div class="input-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name..." value="{{ old('first_name') }}" required autofocus>
                                    </div>

                                    <div class="input-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name..." value="{{ old('last_name') }}" required autofocus>
                                    </div>

                                    <div class="input-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email..." value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                  
                                    <div class="input-group" {{ $errors->has('password') ? ' has-error' : '' }}>
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password" id="password" placeholder="Password..." class="form-control" required />
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                  

                                  <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" id="password-confirm" name="password_confirmation" placeholder="Conform Password..." class="form-control" required />
                                       
                                    </div>
                                  
                                
                                </div>
                                <center>
                                 <button class="btn btn-primary" type="submit">ثبت نام</button>
                                </center>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        

@endsection