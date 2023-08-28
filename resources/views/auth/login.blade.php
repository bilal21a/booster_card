@extends('layouts.app')

@section('css')
    <link rel='stylesheet' href='{{ asset('css/post-767.css') }}' />
    <link rel='stylesheet' href='{{ asset('custom/custom_login.css') }}' />
@endsection
@section('content')
    <div class="outer_wrapper">
        <div class="wrapper mywrap" style="height:36rem">
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
                            Not a member? <a href="" class="orange_theme_color">Signup now</a>
                        </div>
                        <div class="">
                            <p class="text-center text-gray-600">or Login with:</p>
                            <div class="flex justify-center mt-2">
                                <a href="#" class="bg_brown text-white font-bold  px-4 rounded mx-2"
                                    style="padding-top: 8px;">
                                    <img width="40px" src="{{ asset('imgs/udt_logo_small.png') }}" alt=""></a>
                                <a href="#" class="bg_green  text-white font-bold py-2 px-4 rounded mx-2">
                                    <img width="30px" src="{{ asset('imgs/green_gen_small.png') }}" alt=""
                                        srcset=""></a>
                                </a>
                            </div>
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
                            <input type="text" placeholder="Phone" required name="phone">
                        </div>
                        @error('phone')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="email" placeholder="Email Address" required name="email">
                        </div>
                        @error('email')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="text" placeholder="Address" required name="address">
                        </div>
                        @error('address')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <select class="form-control height_select" required name="industry" id="">
                                <option value="" disabled selected>Select Industry</option>
                                <option value="technology">Technology</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="finance">Finance</option>
                                <option value="education">Education</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="retail">Retail</option>
                                <option value="entertainment">Entertainment</option>
                                <option value="food">Food & Beverage</option>
                                <option value="automotive">Automotive</option>
                                <option value="energy">Energy</option>
                                <option value="telecommunications">Telecommunications</option>
                                <option value="media">Media</option>
                                <option value="real-estate">Real Estate</option>
                                <option value="travel">Travel & Hospitality</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="environment">Environmental Services</option>
                                <option value="fashion">Fashion & Apparel</option>
                                <option value="gaming">Gaming</option>
                                <option value="construction">Construction</option>
                                <option value="pharmaceuticals">Pharmaceuticals</option>
                            </select>
                        </div>
                        @error('industry')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <input type="text" placeholder="Website" required name="website">
                        </div>
                        @error('website')
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
                        <div class="">
                            <p class="text-center text-gray-600">or Signup with:</p>
                            <div class="flex justify-center mt-2">
                                <a href="#" class="bg_brown text-white font-bold  px-4 rounded mx-2"
                                    style="padding-top: 8px;">
                                    <img width="40px" src="{{ asset('imgs/udt_logo_small.png') }}" alt=""></a>
                                <a href="#" class="bg_green  text-white font-bold py-2 px-4 rounded mx-2">
                                    <img width="30px" src="{{ asset('imgs/green_gen_small.png') }}" alt=""
                                        srcset=""></a>
                                </a>
                            </div>
                        </div>
                    </form>
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
        const wrap = document.querySelector(".mywrap");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
            wrap.style.height = "auto";
            wrap.classList.add("expanded"); // Add the "expanded" class for animation

        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
            wrap.style.height = "36rem";
            wrap.classList.remove("expanded"); // Remove the "expanded" class for animation

        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>
@endsection
