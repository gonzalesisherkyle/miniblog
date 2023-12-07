@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
        <h2 style="text-align: center;">Registration</h2>
        <div class="card" style="border-radius: 0;">
            <div class="card-header" style="font-size: 28px">See the Registeration Rules</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="mt-4">
                            <input id="name" type="text" class="form-control underlined @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Enter Username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="mt-4">
                            <input id="email" type="email" class="form-control underlined @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="mt-4">
                            <input id="password" type="password" class="form-control underlined @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="mt-4">
                            <input id="password-confirm" type="password" class="form-control underlined" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="mt-4 d-grid gap-2 d-md-block">
                            <button type="submit" class="btn btn-success" style="padding-left: 30px; padding-right: 30px">
                                REGISTER
                            </button>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <p>Return to <a href="{{ route('login') }}" style="text-decoration: none; color: #FFA500">LOGIN PAGE</a></p>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
