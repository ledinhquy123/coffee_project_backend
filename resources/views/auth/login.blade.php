@extends('layouts.admin.auth')

@section('auth-title', 'Coffee Login')

@section('auth-content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                <h3 class="card-title text-left mb-3">Login</h3>
                                    <div class="form-group">
                                        <label for="email" :value="__('Email *')">Email *</label>
                                        <input id="email" type="text" class="form-control p_input" type="email"
                                            name="email" :value="old('email')" required autofocus autocomplete="username">
                                        @error('email')
                                            <p class="text-danger p-2">Email không hợp lệ</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" :value="__('Password')">Password *</label>
                                        <input id="password" type="password" class="form-control p_input" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                            <p class="text-danger p-2">Mật khẩu không hợp lệ</p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                    </div>
                                    @if (Route::has('register'))
                                    <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}">
                                            {{ __('Register') }}</a></p>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- row ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </form>
@endsection
