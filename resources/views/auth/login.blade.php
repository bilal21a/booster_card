<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />

    <link rel='stylesheet' href='{{ asset('css/custom-frontend-lite.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-7.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/all.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/v4-shims.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-12.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/style.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/classic-themes.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/template-kit-export-public.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/style.min2.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/theme.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-5.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/ekiticons.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/elementor-icons.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/swiper.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/post-767.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/widget-styles.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/responsive.css') }}' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Gantari%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2' />
    <link rel='stylesheet' href='{{ asset('css/fontawesome.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/brands.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('css/solid.min.css') }}' />
    <link rel='stylesheet' href='{{ asset('custom/custom_comon.css') }}' />
    <link rel='stylesheet' href='{{ asset('custom/custom_login.css') }}' />
    <script src='{{ asset('js_service/shims.min.js') }}'></script>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
    <script src='{{ asset('js/jquery-migrate.min.js') }}'></script>
    <script src='{{ asset('js/template-kit-export-public.min.js') }}'></script>
    <script src='{{ asset('custom/custom_comon.js') }}'></script>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-647 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-647">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
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
                                    <a href="#">
                                        <img width="300" height="108"
                                            src="https://web.sociolib.com/finext/wp-content/uploads/sites/12/2023/04/logo-finext.png"
                                            class="attachment-full size-full wp-image-96" alt=""
                                            loading="lazy" /> </a>
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
                                            <i aria-hidden="true" class="ekit-menu-icon icon icon-menu-11"></i>
                                        </button>
                                        <div id="ekit-megamenu-menu"
                                            class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_fill_arrow ekit-nav-menu-one-page- ekit-nav-dropdown-hover">
                                            <ul id="menu-menu"
                                                class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon">
                                                <li id="menu-item-45"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a
                                                        href="https://web.sociolib.com/finext/template-kit/home/"
                                                        class="ekit-menu-nav-link">Home</a></li>
                                                <li id="menu-item-47"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-47 nav-item elementskit-mobile-builder-content active"
                                                    data-vertical-menu=750px><a
                                                        href="https://web.sociolib.com/finext/template-kit/services/"
                                                        class="ekit-menu-nav-link active">Services</a></li>
                                                <li id="menu-item-52"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a
                                                        href="https://web.sociolib.com/finext/template-kit/features/"
                                                        class="ekit-menu-nav-link">Features</a></li>
                                                <li id="menu-item-49"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a
                                                        href="https://web.sociolib.com/finext/template-kit/pricing/"
                                                        class="ekit-menu-nav-link">Pricing</a></li>
                                                <li id="menu-item-48"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="#"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Pages<i
                                                            class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
                                                    <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                        <li id="menu-item-46"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a
                                                                href="https://web.sociolib.com/finext/template-kit/about/"
                                                                class=" dropdown-item">About</a>
                                                        <li id="menu-item-51"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a
                                                                href="https://web.sociolib.com/finext/template-kit/contact/"
                                                                class=" dropdown-item">Contact</a>
                                                        <li id="menu-item-50"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a
                                                                href="https://web.sociolib.com/finext/template-kit/faqs/"
                                                                class=" dropdown-item">FAQs</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="elementskit-nav-identity-panel">
                                                <div class="elementskit-site-title">
                                                    <a class="elementskit-nav-logo"
                                                        href="https://web.sociolib.com/finext" target="_self"
                                                        rel="">
                                                        <img width="300" height="108"
                                                            src="https://web.sociolib.com/finext/wp-content/uploads/sites/12/2023/04/logo-finext.png"
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
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a498075 elementor-hidden-mobile"
                        data-id="a498075" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c5195d1 elementor-align-right elementor-invisible elementor-widget elementor-widget-button"
                                data-id="c5195d1" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
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
                    <form action="#" class="login">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login" class="my_login_signup">
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="">Signup now</a>
                        </div>
                    </form>
                    <form action="#" class="signup">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm password" required>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup" class="my_login_signup">
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
    <div class="ekit-template-content-markup ekit-template-content-footer ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="12" class="elementor elementor-12">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-59f6335 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="59f6335" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9aef3c7"
                        data-id="9aef3c7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-449d870 elementor-invisible elementor-widget elementor-widget-image"
                                data-id="449d870" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="#">
                                        <img width="300" height="96"
                                            src="https://web.sociolib.com/finext/wp-content/uploads/sites/12/2023/04/logo-2.png"
                                            class="attachment-full size-full wp-image-345" alt=""
                                            loading="lazy" /> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a0f90eb"
                        data-id="a0f90eb" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f4b7b49 elementor-widget__width-initial elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="f4b7b49" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:250}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Ready to Get Started?
                                    </h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-cf5b1e2 elementor-align-right elementor-widget__width-initial elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-invisible elementor-widget elementor-widget-button"
                                data-id="cf5b1e2" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-fe110a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="fe110a5" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-032ebdb"
                        data-id="032ebdb" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-0dab5fe elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider"
                                data-id="0dab5fe" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-86f2fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="86f2fe5" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9486b96"
                        data-id="9486b96" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ae2fb17 elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="ae2fb17" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Payment Gateway &amp; Fintech Elementor Template Kit. Powered by <a
                                            href="https://sociolib.com/">SocioLib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c674b5f"
                        data-id="c674b5f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-2fe9c66 e-grid-align-right e-grid-align-mobile-left elementor-shape-rounded elementor-grid-0 elementor-invisible elementor-widget elementor-widget-social-icons"
                                data-id="2fe9c66" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:250}"
                                data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-dd13b7a"
                                                target="_blank">
                                                <span class="elementor-screen-only">Facebook</span>
                                                <i class="fab fa-facebook"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-fdae43c"
                                                target="_blank">
                                                <span class="elementor-screen-only">Twitter</span>
                                                <i class="fab fa-twitter"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-23e3580"
                                                target="_blank">
                                                <span class="elementor-screen-only">Youtube</span>
                                                <i class="fab fa-youtube"></i> </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <link rel='stylesheet' href='{{ asset('css/animations.min.css') }}' />
    <script src='{{ asset('js/hello-frontend.min.js') }}'></script>
    <script src='{{ asset('js/frontend-script.js') }}'></script>
    <script src='{{ asset('js/widget-scripts.js') }}'></script>
    <script src='{{ asset('js/webpack.runtime.min.js') }}'></script>
    <script src='{{ asset('js/frontend-modules.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/core.min.js') }}'></script>
    <script src='{{ asset('js/frontend.min.js') }}'></script>
    <script src='{{ asset('js/animate-circle.js') }}'></script>
    <script src='{{ asset('js/elementor.js') }}'></script>
</body>

</html>
