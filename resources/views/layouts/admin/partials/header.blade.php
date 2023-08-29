 <!-- app-header -->
 <header class="app-header">

     <!-- Start::main-header-container -->
     <div class="main-header-container container-fluid">

         <!-- Start::header-content-left -->
         <div class="header-content-left">

             <!-- Start::header-element -->
             <div class="header-element">
                 <div class="horizontal-logo">
                     <a href="{{ route('dashboard') }}" class="header-logo">
                         <img src="{{ asset('imgs/booster_card_logo_black.png') }}" alt="logo" class="desktop-logo">
                         <img src="{{ asset('imgs/booster_card_logo_black.png') }}" alt="logo" class="toggle-logo">
                         <img src="{{ asset('imgs/booster_card_logo_black.png') }}" alt="logo" class="desktop-dark">
                         <img src="{{ asset('imgs/booster_card_logo_black.png') }}" alt="logo"
                             class="toggle-dark"></a>
                 </div>
             </div>

             {{-- @dd($user_first) --}}
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element">
                 <!-- Start::header-link -->
                 <a aria-label="Hide Sidebar"
                     class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                     data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                 <!-- End::header-link -->
             </div>
             <!-- End::header-element -->

         </div>
         <!-- End::header-content-left -->

         <!-- Start::header-content-right -->
         <div class="header-content-right">
             @php
                 // $user_name= auth()->user();
                 
                 // $user_first=$user_name->first_name;
                 $user_first = 'umer';
                 // dd($user_name);
             @endphp

             <div class="header-element">
                 <!-- Start::header-link|dropdown-toggle -->
                 <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown"
                     data-bs-auto-close="outside" aria-expanded="false">
                     <div class="d-flex align-items-center">
                         {{-- <div class="me-sm-2 me-0">
                            <img src="../assets/images/faces/9.jpg" alt="img" width="32"
                                height="32" class="rounded-circle">
                        </div> --}}
                         <div class="d-sm-block d-none">
                             <p class="fw-semibold mb-0 lh-1">{{ auth()->user()->name }}</p>
                             {{-- <p class="fw-semibold mb-0 lh-1">{{ $user_first }}</p> --}}
                             <span class="op-7 fw-normal d-block fs-11">{{ auth()->user()->email }}</span>
                             {{-- <span class="op-7 fw-normal d-block fs-11">{{ $user_name->email }}</span> --}}
                         </div>
                     </div>
                 </a>
                 <!-- End::header-link|dropdown-toggle -->
                 <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                     aria-labelledby="mainHeaderProfile">
                     {{-- <li><a class="dropdown-item d-flex border-block-end"><i
                                class="ti ti-wallet fs-18 me-2 op-7"></i>Role : petrol wala</a></li>
                                class="ti ti-wallet fs-18 me-2 op-7"></i>Role : {{ ucfirst($user_name->role) }}</a></li> --}}
                     {{-- <li><a class="dropdown-item d-flex" href="{{ route('logout') }}"><i --}}
                     <li><a class="dropdown-item d-flex" href="{{ route('logout') }}"><i
                                 class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                 </ul>
             </div>
             <!-- End::header-element -->

             <!-- Start::header-element -->
             <div class="header-element">
                 <!-- Start::header-link|switcher-icon -->
                 {{-- <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas">
                    <i class="bx bx-cog header-link-icon"></i>
                </a> --}}
                 <!-- End::header-link|switcher-icon -->
             </div>
             <!-- End::header-element -->

         </div>
         <!-- End::header-content-right -->

     </div>
     <!-- End::main-header-container -->

 </header>
 <!-- /app-header -->
