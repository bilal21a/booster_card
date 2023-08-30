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
                                <a href="https://udt-iota.vercel.app"
                                    class="bg_brown text-white font-bold  px-4 rounded mx-2" style="padding-top: 8px;">
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
                            <select class="form-control height_select" required name="district">
                                <option value="" disabled selected>District</option>
                                <option value="chongwe">Chongwe</option>
                                <option value="kafue">Kafue</option>
                                <option value="chilanga">Chilanga</option>
                                <option value="sioma">Sioma</option>
                                <option value="sikongo">Sikongo</option>
                                <option value="shang'ombo">Shang'ombo</option>
                                <option value="sesheke">Sesheke</option>
                                <option value="senanga">Senanga</option>
                                <option value="nkeyema">Nkeyema</option>
                                <option value="nalolo">Nalolo</option>
                                <option value="mwandi">Mwandi</option>
                                <option value="mulobezi">Mulobezi</option>
                                <option value="mongu">Mongu</option>
                                <option value="mitete">Mitete</option>
                                <option value="lukulu">Lukulu</option>
                                <option value="luampa">Luampa</option>
                                <option value="limulunga">Limulunga</option>
                                <option value="kaoma">Kaoma</option>
                                <option value="kalabo">Kalabo</option>
                                <option value="chikankata">Chikankata</option>
                                <option value="chibombo">Chibombo</option>
                                <option value="chisamba">Chisamba</option>
                                <option value="chitambo">Chitambo</option>
                                <option value="kabwe">Kabwe</option>
                                <option value="kapiri_mposhi">Kapiri_Mposhi</option>
                                <option value="luano">Luano</option>
                                <option value="mkushi">Mkushi</option>
                                <option value="mumbwa">Mumbwa</option>
                                <option value="ngabwe">Ngabwe</option>
                                <option value="serenje">Serenje</option>
                                <option value="shibuyunji">Shibuyunji</option>
                                <option value="chembe">Chembe</option>
                                <option value="chienge">Chienge</option>
                                <option value="chifunabuli">Chifunabuli</option>
                                <option value="chipili">Chipili</option>
                                <option value="kawambwa">Kawambwa</option>
                                <option value="lunga">Lunga</option>
                                <option value="mansa">Mansa</option>
                                <option value="milenge">Milenge</option>
                                <option value="mwansabombwe">Mwansabombwe</option>
                                <option value="mwense">Mwense</option>
                                <option value="nchelenge">Nchelenge</option>
                                <option value="samfya">Samfya</option>
                                <option value="chililabombwe">Chililabombwe</option>
                                <option value="chingola">Chingola</option>
                                <option value="kalulushi">Kalulushi</option>
                                <option value="kitwe">Kitwe</option>
                                <option value="luanshya">Luanshya</option>
                                <option value="lufwanyama">Lufwanyama</option>
                                <option value="masaiti">Masaiti</option>
                                <option value="mpongwe">Mpongwe</option>
                                <option value="mufulira">Mufulira</option>
                                <option value="ndola">Ndola</option>
                                <option value="chinsali">Chinsali</option>
                                <option value="isoka">Isoka</option>
                                <option value="kanchibiya">Kanchibiya</option>
                                <option value="lavushimanda">Lavushimanda</option>
                                <option value="mafinga">Mafinga</option>
                                <option value="mpika">Mpika</option>
                                <option value="nakonde">Nakonde</option>
                                <option value="shiwang'andu">Shiwang'andu</option>
                                <option value="chavuma">Chavuma</option>
                                <option value="ikelenge">Ikelenge</option>
                                <option value="kabompo">Kabompo</option>
                                <option value="kasempa">Kasempa</option>
                                <option value="kalumbila">Kalumbila</option>
                                <option value="manyinga">Manyinga</option>
                                <option value="mufumbwe">Mufumbwe</option>
                                <option value="mushindamo">Mushindamo</option>
                                <option value="mwinilunga">Mwinilunga</option>
                                <option value="solwezi">Solwezi</option>
                                <option value="zambezi">Zambezi</option>
                                <option value="chilubi">Chilubi</option>
                                <option value="kaputa">Kaputa</option>
                                <option value="kasama">Kasama</option>
                                <option value="lunte">Lunte</option>
                                <option value="lupososhi">Lupososhi</option>
                                <option value="luwingu">Luwingu</option>
                                <option value="mbala">Mbala</option>
                                <option value="mporokoso">Mporokoso</option>
                                <option value="mpulungu">Mpulungu</option>
                                <option value="mungwi">Mungwi</option>
                                <option value="nsama">Nsama</option>
                                <option value="senga_hill">Senga_Hill</option>
                                <option value="rufunsa">Rufunsa</option>
                                <option value="luangwa">Luangwa</option>
                                <option value="lusaka">Lusaka</option>
                                <option value="choma">Choma</option>
                                <option value="zimba">Zimba</option>
                                <option value="sinazongwe">Sinazongwe</option>
                                <option value="siavonga">Siavonga</option>
                                <option value="chadiza">Chadiza</option>
                                <option value="pemba">Pemba</option>
                                <option value="namwala">Namwala</option>
                                <option value="monze">Monze</option>
                                <option value="mazabuka">Mazabuka</option>
                                <option value="livingstone">Livingstone</option>
                                <option value="kazungula">Kazungula</option>
                                <option value="kalomo">Kalomo</option>
                                <option value="gwembe">Gwembe</option>
                                <option value="vubwi">Vubwi</option>
                                <option value="sinda">Sinda</option>
                                <option value="petauke">Petauke</option>
                                <option value="nyimba">Nyimba</option>
                                <option value="chama">Chama</option>
                                <option value="chasefu">Chasefu</option>
                                <option value="chipangali">Chipangali</option>
                                <option value="chipata">Chipata</option>
                                <option value="katete">Katete</option>
                                <option value="kasenengwa">Kasenengwa</option>
                                <option value="lundazi">Lundazi</option>
                                <option value="lumezi">Lumezi</option>
                                <option value="lusangazi">Lusangazi</option>
                                <option value="mambwe">Mambwe</option>
                                <option value="itezhi_tezhi">Itezhi-Te</option>                                
                                <option value="chirundu">Chirundu</option>
                            </select>
                        </div>
                        @error('industry')
                            <span style="color:red;font-size:small" role="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="field">
                            <select class="form-control height_select" required name="industry">
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
                                <a href="https://udt-iota.vercel.app"
                                    class="bg_brown text-white font-bold  px-4 rounded mx-2" style="padding-top: 8px;">
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
