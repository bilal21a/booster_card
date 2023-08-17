@extends('layouts.app')

@section('css')
    <link rel='stylesheet' href='{{ asset('css/post-767.css') }}' />
    <link rel='stylesheet' href='{{ asset('custom/custom_login.css') }}' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="outer_wrapper">
        <div class="wrapper">
            <div class="title-text">
                <div class="title login">
                    Login
                </div>
                <div class="title signup">
                    Signup
                </div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf
                        <div class="field">
                            <input type="text" name="email" type="email" placeholder="Email Address" required>
                        </div>
                        @error('email')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        @error('password')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div> --}}
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login" class="my_login_signup">
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="">Signup now</a>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('register') }}" class="signup">
                        @csrf
                        <div class="field">
                            <input type="text" placeholder="Name" required name="name">
                        </div>
                        @error('name')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="text" placeholder="Email Address" required name="email">
                        </div>
                        @error('email')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="password" placeholder="Password" required name="password">
                        </div>
                        @error('password')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="password" placeholder="Confirm password" required name="password_confirmation">
                        </div>
                        @error('password_confirmation')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup" class="my_login_signup">
                        </div>
                    </form>
                </div>

                <div class="">
                    <p class="text-center text-gray-600">Or log in with:</p>
                    <div class="flex justify-center mt-2">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-2">
                            <i class="fab fa-facebook-f text-white" ></i>
                        </a>
                        <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mx-2">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mx-2">
                            <i class="fab fa-google text-white"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>
@endsection
