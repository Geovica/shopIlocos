@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('users.store')}}" aria-label="{{ __('Register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" placeholder="Please Enter Your Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email"   placeholder="Please Enter Your Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password"  placeholder="Please Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm"  placeholder="Please Re-Enter Your Password " type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
    
                                    <select class="custom-select col-md-2" id="birth_month" name="birth_month">
                                    <option selected="true" disabled="disabled"value="0">Month</option>
                                        <option value="1">January</option>
                                      <option value="2">Febuary</option>
                                      <option value="3">March</option>
                                      <option value="4">April</option>
                                      <option value="5">May</option>
                                      <option value="6">June</option>
                                      <option value="7">July</option>
                                      <option value="8">August</option>
                                      <option value="9">September</option>
                                      <option value="10">October</option>
                                      <option value="11">November</option>
                                      <option value="12">December</option>
                                    </select>

                                    <select class="custom-select col-md-2" id="birth_day"> 
                                            <option selected="true" disabled="disabled">Day</option>  
                                               
                                    @for ($i = 1; $i < 32; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                     @endfor     
                                    </select>
                                    <select class="custom-select col-md-2" id="birth_year">  
                                        <option selected="true" disabled="disabled">Year</option>  
                                            @for ($i = 1900; $i < 2018; $i++)
                                       <option value="{{$i}}">{{$i}}</option>
                                        @endfor     
                                       </select>

                                  </div>

                                  <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                    
                                        <select class="custom-select col-md-2" id="gender" name="gender">
                                                <option selected="true" disabled="disabled">Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                        </select>
                                  </div>

                                 

                                  <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="phone_number" placeholder="Please Enter Your Phone Number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
            
                                            @if ($errors->has('phone_number'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>      
@endsection
