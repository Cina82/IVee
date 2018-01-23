@extends('layouts.app')

@section('content')

  <div class="col-md-5 col-md-offset-4 center-block" style="margin: 0 auto; float: none;">
            <h2 class="text-center">عضو شوید</h1>
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('register')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <div class="form-group">
                        <div class="col-md-6">
                        <label for="name" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">نام</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" required>
                                 <input type="hidden" name="id" value="3">   
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label for="familyName" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">نام خانوادگی</label>
                        <div class="form-group{{ $errors->has('familyName') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="familyName" type="text" class="form-control" name="familyName" required>

                                @if ($errors->has('familyName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('familyName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <label for="driverLicense" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">کد ملی</label>

                        <div class="form-group{{ $errors->has('driverLicense') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="driverLicense" type="text" class="form-control" name="driverLicense" required>
                                @if ($errors->has('driverLicense'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('driverLicense') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                             
                        <div class="col-md-6">
                        <label for="mobile" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">شماره موبایل</label>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="mobile" type="text" class="form-control" name="mobile" required>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <label for="zipCode" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">شهر</label>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="zipCode" type="text" class="form-control" name="zipCode" required>
                                @if ($errors->has('zipCode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zipCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        

                        <div class="col-md-12">
                        <label for="email" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">ایمیل</label>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <label for="image" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">عکس پروفایل</label>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="image" type="file" class="form-control" name="image" required>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                         <div class="col-md-12">
                        <label for="userName" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">نام کاربری</label>

                        <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="userName" type="text" class="form-control" name="userName" required>
                                @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                         <div class="col-md-12">
                        <label for="password" class="my-control-label" style="text-align: left !important;font-family: 'PT Sans', sans-serif !important;">پسورد</label>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                        
                            <div class="col-md-12">
                                <button type="submit" class="mybtn btn-block btn-lg" style="background-color: #3f93f3 !important; color: #fff">
                                    عضو شوید
                                </button>

                            </div>
                        
                       @include('partials.socials-icons')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
