@extends('layouts.admin.auth')

@section('login-title', 'Coffee Login')

@section('auth-content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
              <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                  <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                      <h3 class="card-title text-left mb-3">Register</h3>

                        {{-- Name --}}
                        <div class="form-group">
                            <label for="name" :value="__('Name')">Username</label>
                            <input type="text" id="name" class="form-control p_input" name="name" :value="old('name')" required autofocus autocomplete="name">
                            @error('name')
                                <p class="text-danger p-2">Tên không hợp lệ</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" :value="__('Email')">Email</label>
                            <input id="email" type="email" class="form-control p_input" name="email" :value="old('email')" required autocomplete="username">
                            @error('email')
                                <p class="text-danger p-2">Email không hợp lệ</p>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-group">
                            <label for="password" :value="__('Password')">Password</label>
                            <input id="password" name="password" type="password" class="form-control p_input" required autocomplete="new-password">
                            @error('password')
                                <p class="text-danger p-2">Mật khẩu không hợp lệ</p>
                            @enderror
                        </div>

                        {{-- Password Confirmation --}}
                        <div class="form-group">
                            <label for="password_confirmation" :value="__('Password')">Password Confirmation</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control p_input" required autocomplete="new-password">
                            @error('password_confirmation')
                                <p class="text-danger p-2">Mật khẩu không trùng khớp</p>
                            @enderror
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                        </div>
                        <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Sign In</a></p>
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
