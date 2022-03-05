




@extends('layouts.eShop')

@section('title')
Login | E-Shopper
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="">
                <div class="pb-4"><h5><strong>LOGIN</strong></h5></div>

                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="email" type="email" class=" pb-3 form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <div class="form-check ">
                                    <input class="form-check-input ml-auto" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label ml-4" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 guestside justify-content-center  " >
           <div class="pl-5">
            <h4><strong>New Customer</strong></h4>
            <p><strong>Save time now</strong></p>
            <p>You don't need an account to checkout</p>
            <a class="btn btn-outline-primary" href="{{route('guestcheckout.index')}}">Checkout as Guest</a>
           </div>


           <div class="pt-5 pl-5">

            <p><strong>Save time leter</strong></p>
            <p>Create an account for fast checkout and easy access to order history</p>
            <a class="btn btn-outline-primary" href="{{route('register') }}">Create Account</a>
           </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
