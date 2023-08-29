@include('layouts.partials.extra_svgs')
{{-- @dd(request()->routeIs('services')) --}}
<div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
    <div data-elementor-type="wp-post" data-elementor-id="7" class="elementor elementor-7">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-9550df5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="9550df5" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a672680"
                    data-id="a672680" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f32b9f8 elementor-invisible elementor-widget elementor-widget-image"
                            data-id="f32b9f8" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <a href="{{ route('home') }}">
                                    <img width="300" height="108"
                                        src="{{ asset('imgs/booster_card_logo_black.png') }}"
                                        class="attachment-full size-full wp-image-96" alt="" loading="lazy" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e3bf1d6"
                    data-id="e3bf1d6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ef277ff elementor-invisible elementor-widget elementor-widget-ekit-nav-menu"
                            data-id="ef277ff" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                            data-widget_type="ekit-nav-menu.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con ekit_menu_responsive_mobile"
                                    data-hamburger-icon="icon icon-menu-11" data-hamburger-icon-type="icon"
                                    data-responsive-breakpoint="767"> <button
                                        class="elementskit-menu-hamburger elementskit-menu-toggler" type="button"
                                        aria-label="hamburger-icon">
                                        <i aria-hidden="true" class="ekit-menu-icon fas fa-bars"></i>
                                        {{-- <i class=""></i> --}}
                                    </button>
                                    <div id="ekit-megamenu-menu"
                                        class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_fill_arrow ekit-nav-menu-one-page- ekit-nav-dropdown-hover">
                                        <ul id="menu-menu"
                                            class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon">
                                            <li id="menu-item-45"
                                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-45 nav-item elementskit-mobile-builder-content active"
                                                data-vertical-menu=750px><a href="{{ route('home') }}"
                                                    class="ekit-menu-nav-link "
                                                    style="color: {{ request()->routeIs('home') ? '#707070' : '#121212' }};">Home</a>
                                            </li>
                                            <li id="menu-item-47"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu=750px><a href="{{ route('services') }}"
                                                    class="ekit-menu-nav-link"
                                                    style="color: {{ request()->routeIs('services') ? '#707070' : '#121212' }};">Services</a>
                                            </li>
                                            <li id="menu-item-52"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu=750px><a href="{{ route('feature') }}"
                                                    class="ekit-menu-nav-link"
                                                    style="color: {{ request()->routeIs('feature') ? '#707070' : '#121212' }};">Features</a>
                                            </li>
                                            <li id="menu-item-49"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49 nav-item elementskit-mobile-builder-content"
                                                data-vertical-menu=750px><a href="{{ route('pricing') }}"
                                                    class="ekit-menu-nav-link"
                                                    style="color: {{ request()->routeIs('pricing') ? '#707070' : '#121212' }};">Pricing</a>
                                            </li>
                                            <li id="menu-item-48"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                data-vertical-menu=750px><a href="#"
                                                    class="ekit-menu-nav-link ekit-menu-dropdown-toggle"
                                                    style="color: {{ request()->routeIs('about') || request()->routeIs('contact') || request()->routeIs('faqs') ? '#707070' : '#121212' }};">Pages
                                                    <i class="fas fa-angle-down"></i></a>
                                                <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                    <li id="menu-item-46"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46 nav-item elementskit-mobile-builder-content"
                                                        data-vertical-menu=750px><a href="{{ route('about') }}"
                                                            class=" dropdown-item"
                                                            style="color: {{ request()->routeIs('about') ? '#707070' : '#121212' }};">About</a>
                                                    <li id="menu-item-51"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51 nav-item elementskit-mobile-builder-content"
                                                        data-vertical-menu=750px><a href="{{ route('contact') }}"
                                                            class=" dropdown-item"
                                                            style="color: {{ request()->routeIs('contact') ? '#707070' : '#121212' }};">Contact</a>
                                                    <li id="menu-item-50"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50 nav-item elementskit-mobile-builder-content"
                                                        data-vertical-menu=750px><a href="{{ route('faqs') }}"
                                                            class=" dropdown-item"
                                                            style="color: {{ request()->routeIs('faqs') ? '#707070' : '#121212' }};">FAQs</a>
                                                </ul>
                                            </li>

                                        </ul>

                                        <div class="elementskit-nav-identity-panel">
                                            <div class="elementskit-site-title">
                                                <a class="elementskit-nav-logo" href="" target="_self"
                                                    rel="">
                                                    <img width="300" height="108"
                                                        src="{{ asset('imgs/booster_card_logo_black.png') }}"
                                                        class="attachment-full size-full" alt=""
                                                        decoding="async" loading="lazy" />
                                                </a>
                                            </div><button class="elementskit-menu-close elementskit-menu-toggler"
                                                type="button">X</button>
                                        </div>
                                    </div>
                                    <div
                                        class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element-a498075 elementor-hidden-mobile"
                    data-id="a498075" data-element_type="column">

                    @guest
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c5195d1 elementor-align-right elementor-invisible elementor-widget elementor-widget-button"
                                data-id="c5195d1" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                                data-widget_type="button.default">

                                <div class="elementor-widget-container">
                                    <ul style="display: flex">
                                        <li class="login_signup_text">Login/Signup </li>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li style="display: flex">
                                            <a href="{{ route('login') }}" class="font-bold py-2 rounded mx-2 border_black"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Booster Card"
                                                style="padding-top: 13px !important;width: 4rem;text-align: -webkit-center;">
                                                <img width="30px" src="{{ asset('custom/booster_black.png') }}"></a>
                                            <a href="https://udt-iota.vercel.app" class="font-bold py-2 rounded mx-2 border_brown"
                                                style="padding-top: 12px;width: 4rem;text-align: -webkit-center;"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="United Drivers Trust">
                                                <img width="30px" src="{{ asset('custom/udt_brown.png') }}"></a>
                                            <a href="#" class="font-bold py-2 px-3 rounded mx-2 border_green"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Green Gen">
                                                <img width="30px"
                                                    src="{{ asset('custom/green_gen_small_green.png') }}"></a>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ef277ff elementor-invisible elementor-widget elementor-widget-ekit-nav-menu"
                                data-id="ef277ff" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                                data-widget_type="ekit-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con ekit_menu_responsive_mobile"
                                        data-hamburger-icon="icon icon-menu-11" data-hamburger-icon-type="icon"
                                        data-responsive-breakpoint="767"> <button
                                            class="elementskit-menu-hamburger elementskit-menu-toggler" type="button"
                                            aria-label="hamburger-icon">
                                            <i aria-hidden="true" class="ekit-menu-icon fas fa-bars"></i>
                                        </button>
                                        <div id="ekit-megamenu-menu"
                                            class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_fill_arrow ekit-nav-menu-one-page- ekit-nav-dropdown-hover">
                                            <ul id="menu-menu"
                                                class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon">
                                                <li id="menu-item-48"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="#"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">{{ auth()->user()->name }}
                                                        <i class="fas fa-angle-down"></i></a>
                                                    <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                        <li id="menu-item-46"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a href="{{ route('logout') }}"
                                                                class=" dropdown-item">Logout</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest



                </div>
            </div>
        </section>
    </div>
</div>
